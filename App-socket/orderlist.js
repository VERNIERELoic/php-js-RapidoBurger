function sendResponse(username) {
    socket.emit('response.push', "Signal : Order finish", username);
}

function deleteLine(event){
    let lineid = event.getAttribute('dataid');
    let line = document.getElementById(lineid);
    line.remove();
}

var btn = document.getElementsByClassName("orderbtn");
btn.onclick = showAlert;
btn.onclick = deleteLine;

function showAlert(event) {
    sendResponse(event.getAttribute('userid'));
    deleteLine(event);
}

socket.on('order.push', (data) => {
    console.log("ORDER ON => ", data);

    let object = JSON.parse(data.order)
    let date = object[0].date;
    let orderid = object[0].orderid;
    let username = object[2].username;
    let pain = object[1].pain;
    let legumes = object[1].legumes;
    let steakveg = object[1].steakveg;
    let saucemaison = object[1].saucemaison;

    let newtab = document.createElement("tr");

    let tddate = document.createElement("td");
    let tdorderid = document.createElement("td");
    let tdusername = document.createElement("td");
    let tdproduct = document.createElement("td");
    let div = document.createElement('div');
    div.classList.add("wrapper");
    let btnfinish = document.createElement("button");
    let span = document.createElement("span");
    btnfinish.setAttribute('id', 'finish');
    btnfinish.setAttribute('type', 'submit');
    btnfinish.setAttribute('onclick', 'showAlert(this)');
    btnfinish.setAttribute('class', 'orderbtn');
    btnfinish.setAttribute('dataid', '<?= $combinedResults[$i]["orderid"] ?>');
    btnfinish.setAttribute('userid', '<?= $combinedResults[$i]["username"] ?>');

    tddate.innerHTML = date;
    tdorderid.innerHTML = orderid;
    tdusername.innerHTML = username;
    tdproduct.innerHTML = "Pain = " + pain + " leg = " + legumes + " steak = " + steakveg + " sauce = " + saucemaison;
    span.innerHTML = "Terminer";

    let currenttab = document.getElementById('orderlist');

    newtab.appendChild(tddate);
    newtab.appendChild(tdorderid);
    newtab.appendChild(tdusername);
    newtab.appendChild(tdproduct);
    newtab.appendChild(div);
    newtab.appendChild(btnfinish);
    newtab.appendChild(span);

    div.appendChild(btnfinish);
    btnfinish.appendChild(span);
    currenttab.appendChild(newtab);
});