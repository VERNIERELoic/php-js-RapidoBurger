const app = require('express')();
var cors = require('cors');
const { captureRejectionSymbol } = require('events');
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

console.log("Start server");


io.on("connection", socket => {

    socket.on("login", (username) => {
        if (username) {
            console.log('CONNECTION USER : ', username);
            socketEvent(socket);
        } else {
            console.log("No username...");
        }
    });
});


const socketEvent = (socket) => {

    socket.on("order.push", (order) => {
        console.log('pushing order');
        socket.broadcast.emit('order.push', { order });
    });

    socket.on('connect_failed', () => {
        throw 'Connection Failed';
    });
}

/* app.get("/active_order", cors(corsOptions), (req, res) => {
    res.send(getActiveUsers());
}) */

http.listen(process.env.PORT || 3000, "127.0.0.1");