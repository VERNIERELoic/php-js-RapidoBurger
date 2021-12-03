let btn_logout = document.getElementById("logout");
btn_logout.onclick = showAlert;

function sendLogout() {
    socket.emit('logout', "<?php print($_SESSION['username']); ?>");
}

function showAlert(event) {
    console.log(event.getAttribute('dataid'));
    sendLogout();
}