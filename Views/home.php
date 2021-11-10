<!DOCTYPE html>
<html lang="fr">
<?php require_once ('header.php')?>
<body>

    <head>
        <nav>
            <ul class="navbar">
                <li><a href="#nav">Accueil</a></li>
                <li><a href="#visiter">Visiter</a></li>
                <li><a href="#commander">Commander</a></li>
                <div class="nav-log">
                    <li class="nav-login"><a class="log" href="connexion.html">Se connecter</a></li>
                    <li class="nav-suscribe"><a class="log" href="register.html">S'inscrire</a></li>
                </div>

            </ul>
        </nav>
        <div class="banner-container">

        </div>
        <h1 class="title">BURGER HOUSE</h1>
    </head>
    <h1 class="office-banner">
        LIMITED QUANTITY.
    </h1>

    <article class="decouvrir">
        <h2>Nous decrouvrir</h2>
        <p>Bienvenue sur Burger House, la reference du burger a Lyon, venez nous decourvrir au 112 cours gambetta nous
            vous accueillerons avec plaisir</br>
        </p>
    </article>

    <div class="commande">
        <h2 id="visiter">Visite</h2>
        <p>Choisir une date de visite</p>
        <form class="form" action="" method="post" enctype="multipart/form-data"></form>
        <input type="date" name="retrait">
        <h2 id="commander">Commander</h2>
        <fieldset>
            <legend>Ma commande : </legend>
            <p>Votre Nom : </p>
            <input type="text" name="nom" value="" />
            <p>Votre prénom :</p>
            <input type="text" name="prenom" Value="" />
            <p>Votre adresse :</p>
            <input type="text" name="adresse" Value="" />
            <p>Choix du plat :</p>
            <select name="nom" size="1">
                <option>Burger</option>
                <option>Salade</option>
                <option>sandwitch</option>
                <option>glace</option>
                <option>cookie</option>
            </select>
            <p>Quantité:</p>
            <input type="number" id="quantity" name="quantity" min="1" max="10">
            <input type="submit" name="bouton" value="Envoyer">
        </fieldset>
        </form>
    </div>
    <footer>
        <a>VERNIERE Loic - All right reserved 2021</a>
    </footer>
</body>

</html>