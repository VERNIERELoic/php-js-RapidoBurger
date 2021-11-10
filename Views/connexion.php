<!DOCTYPE html>
<html lang="fr">

<?php include ("header.php") ?>

<body>

    <div class="login">
        <form action="api/session/login.php" method="POST">
            <h1>Connexion</h1>

            <label><b>Nom d'utilisateur</b></label>
            <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

            <label><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrer le mot de passe" name="password" required>

            <input type="submit" id='submit' value='Login'>
            <a href="forgot.html">Forgot password</a> 
            <a href="register.html">Register now</a>
        </form>
    </div>
    <footer>
        <a>VERNIERE Loic - All right reserved 2021</a>
    </footer>
</body>