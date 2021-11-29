<?php require_once("header_base.php"); ?>

<table>
    <caption>Liste des commandes :</caption>
    <thead>
        <tr>
            <th scope="col">Date</th>
            <th scope="col">Commande ID </th>
            <th scope="col">Utilisateur</th>
            <th scope="col">Produit</th>
            <th scope="col">Etat</th>
        </tr>
    </thead>
    <tbody id="orderlist">
        <?php $i = 0; ?>
        <?php foreach ($combinedResults as $row) { ?>
            <tr>
                <td data-label="date"><?php echo $combinedResults[$i]["date"]; ?></td>
                <td data-label="orderid"><?php echo $combinedResults[$i]["orderid"]; ?></td>
                <td data-label="user"><?php echo $combinedResults[$i]["username"];  ?></td>
                <td data-label="orderproduct"><?php echo "Pain = ", $combinedResults[$i]["pain"],
                                                " leg = ", $combinedResults[$i]["legumes"],
                                                " steak = ", $combinedResults[$i]["steakveg"],
                                                " sauce = ", $combinedResults[$i]["saucemaison"]    ?></td>
                <td data-label="validate">
                    <div class="wrapper">
                        <button onclick="showAlert(this)" class="orderbtn" dataid="<?= $combinedResults[$i]['orderid'] ?>" id="finish" type="submit" value="1" href="#"><span>Terminer</span></button>
                    </div>
                </td>
            </tr>
        <?php $i++;
        } ?>
    </tbody>
</table>

<footer>
    <a>VERNIERE Loic - All right reserved 2021</a>
</footer>

<script>
    //newDiv.appendChild(newContent)

    function sendResponse() {
        socket.emit('response.push', "Signal : Order finish");
    }

    console.log("test");
    var btn = document.getElementsByClassName("orderbtn");
    console.log(btn);
    btn.onclick = showAlert;

    function showAlert(event) {
        console.log(event);
        console.log(event.getAttribute('dataid'));
        console.log(event);
        sendResponse();
    }




    socket.on('order.push', (data) => {
        console.log("ORDER ON => ", data);
        console.log(data);

        let object = JSON.parse(data.order)
        console.log(object);
        let date = object[0].date;
        let orderid = object[0].orderid;
        let userid = object[0].userid;
        let pain = object[1].pain;
        console.log(pain);
        let legumes = object[1].legumes;
        console.log(legumes);
        let steakveg = object[1].steakveg;
        console.log(steakveg);
        let saucemaison = object[1].saucemaison;
        console.log(saucemaison);

        let newtab = document.createElement("tr");
        console.log('newtab ok');

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

        tddate.innerHTML = date;
        tdorderid.innerHTML = orderid;
        tdusername.innerHTML = userid;
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
</script>