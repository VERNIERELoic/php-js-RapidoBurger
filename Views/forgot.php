<!DOCTYPE html>
<html lang="fr">

<?php include("header_login.php"); ?>

<body>

    <div class="login">
        <form action="/public/forgot" method="POST">
            <h1>Mots de passe oublié</h1>

            <label><b>Email</b></label>
            <input type="text" placeholder="email" name="email" required>

            <input type="submit" id='submit' value='Envoyer'>
        </form>
    </div>
    <footer>
        <a>VERNIERE Loic - All right reserved 2021</a>
    </footer>
</body>