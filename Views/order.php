<!DOCTYPE html>
<html lang="fr">

<?php include("header_order.php") ?>

<body>
    <h3 class="hello">IL EST TEMPS DE CREER TON BURGER <?php echo $_SESSION["username"] ?> ! </h3>
    <section>
        <form action="/public/order" method="POST">
            <h1>Personnalise ton Burger </h1>

            <input id='pain' type='checkbox' name="pain" value="1"/>
            <label for='pain'>
                <span></span>
                Pain graine
                <ins><i>Pain graine </i></ins>
            </label>

            <input id='legumes' type='checkbox' name="legumes" value="1"/>
            <label for='legumes'>
                <span></span>
                Legumes
                <ins><i>Legumes</i></ins>
            </label>

            <input id='steakveg' type='checkbox' name="steakveg" value="1"/>
            <label for='steakveg'>
                <span></span>
                Steak vegane
                <ins><i>Steak vegane</i></ins>
            </label>

            <input id='saucemaison' type='checkbox' name="saucemaison" value="1"/>
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