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
                        <button type="submit" value="1" href="#"><span>Terminer</span></button>
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
    function RefreshTable() {
        $("#orderlist").load("orderlist.php #orderlist");
    }

    socket.on('order.push', (data) => {
        console.log("ORDER ON => ", data);
        RefreshTable();
    });
</script>