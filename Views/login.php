<!DOCTYPE html>
<html lang="fr">

<?php include("header_login.php"); ?>

<body>

    <div class="login">
        <form action="/public/login" method="POST">
            <h1>Connexion</h1>

            <label><b>Nom d'utilisateur</b></label>
            <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

            <label><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrer le mot de passe" name="password" required>

            <?php
            if ($error == false) { ?>
                <a class="error"> Mauvais identifiant ou mot de pass ! </a>
            <?php } ?>
            <input type="submit" id='submit' value='Login'>
            <a href="/public/forgot">Mots de passe oublié ?</a>
            <a href="/public/register">S'inscrire</a>
        </form>
    </div>
    <footer>
        <a>VERNIERE Loic - All right reserved 2021</a>
    </footer>
</body>