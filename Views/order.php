<!DOCTYPE html>
<html lang="fr">

<?php
include("header_order.php");
include('header_base.php');
?>

<body>

    <h3 class="hello"><img src="../public/ressources/images/order/burger.png"></br>IL EST TEMPS DE CREER TON BURGER <?php echo $_SESSION["username"] ?> ! </h3>
    <section>
        <form action="/public/order" method="POST">
            <h1>Personnalise ton Burger </h1>

            <input id='pain' type='checkbox' value="1" name="pain" />
            <label for='pain'>
                <span></span>
                Pain graine
                <ins><i>Pain graine </i></ins>
            </label>

            <input id='legumes' type='checkbox' value="1" name="legumes" />
            <label for='legumes'>
                <span></span>
                Legumes
                <ins><i>Legumes</i></ins>
            </label>

            <input id='steakveg' type='checkbox' value="1" name="steakveg" />
            <label for='steakveg'>
                <span></span>
                Steak vegane
                <ins><i>Steak vegane</i></ins>
            </label>

            <input id='saucemaison' type='checkbox' value="1" name="saucemaison" />
            <label for='saucemaison'>
                <span></span>
                Sauce maison
                <ins><i>Sauce maison</i></ins>
            </label>
            <button type="submit" id='order' value='order'>Commander</button>
    </section></br>
    </form>
    <footer>
        <a>VERNIERE Loic - All right reserved 2021</a>
    </footer>
</body>




</html>