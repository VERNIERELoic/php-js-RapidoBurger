const app = require('express')();
var cors = require('cors');
const { captureRejectionSymbol } = require('events');
//Permet un minimum de securité grace aux cors 
var corsOptions = {
    origin: ["*", "http://127.0.0.1:8080"],
    optionsSuccessStatus: 200
}
app.use(cors(corsOptions));
const http = require('http').Server(app);

const io = require("socket.io")(http, {
    cors: {
        origin: ["http://127.0.0.1:8080"],
        methods: ["GET", "POST"],
        credentials: true
    },
    transports: ['polling']
});

console.log("STARTING SERVER ... OK");

io.on("connection", socket => {

    socket.on("login", (username) => {
        if (username) {
            socket.join(username); //Creation et rejoin la room à la connection 
            console.log('CONNECTION USER : ', username);
            socketEvent(socket);
        } else {
            console.log("No username...");

        }
    });
});

// Ne se produit que si l'utilisateur est connecté
const socketEvent = (socket) => {

    socket.on("order.push", (order) => {
        console.log('PUSHING ORDER FROM PREPARED PAGE');
        socket.broadcast.emit('order.push', { order });
        //Envoie de lobjet order
    });

    socket.on("response.push", (response, username) => {
        console.log('PUSHING RESPONSE TO CLIENT :', { username });
        //socket.broadcast.emit('response.push', { response });

        socket.to(username).emit('response.push', { response });
        //Envoie  au bon user grace à ca room qui comporte le meme nom que son username
    });

    socket.on('connect_failed', () => {
        throw 'Connection Failed';
    });
}

http.listen(process.env.PORT || 3000, "127.0.0.1");