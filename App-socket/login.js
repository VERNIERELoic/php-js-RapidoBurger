const socket = io('127.0.0.1:3000');
socket.emit('login', "<?php print($_SESSION['username']); ?>");
console.log('connected', socket);