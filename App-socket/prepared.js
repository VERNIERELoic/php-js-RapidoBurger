
console.log(jsvar);
socket.emit('order.push', jsvar);

socket.on('response.push', (data) => {
    console.log("RESPONSE ON => ", data);
    let text = document.getElementById('status');
    text.innerHTML = "Votre commande est prete";
});