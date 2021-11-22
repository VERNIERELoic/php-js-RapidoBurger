<!DOCTYPE html>
<html lang="fr">

<?php include("header_login.php"); ?>

<body>

    <div class="login">
        <form action="/public/resetpsswd" method="POST">
            <h1>Nouveau mot de passe</h1>

            <label><b>Nouveau mot de passe</b></label>
            <input type="text" placeholder="Nouveau mot de passe" name="newpassword" required>

            <label><b>Confirmer le mot de passe</b></label>
            <input type="text" placeholder="Nouveau mot de passe" name="confirmpassword" required>

            <input type="submit" id='submit' value='Envoyer'>
        </form>
    </div>
    <footer>
        <a>VERNIERE Loic - All right reserved 2021</a>
    </footer>
</body>