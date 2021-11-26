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
    <tbody>
        <tr>
            <td data-label="date">..</td>
            <td data-label="orderid">..</td>
            <td data-label="user">..</td>
            <td data-label="orderproduct">..</td>
            <td data-label="validate">
                <div class="wrapper">
                    <button type="submit" value="1" href="#"><span>Terminer</span></button>
                </div>
            </td>
        </tr>
    </tbody>
</table>

<script>
    socket.on('order.push', (data) => {
        console.log("ORDER ON => ", data);
    })
</script>