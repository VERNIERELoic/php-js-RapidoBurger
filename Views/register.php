<!DOCTYPE html>
<html lang="fr">

<?php include ("header.php") ?>

<div class="register">
    <form action="/public/register" method="POST">
        <h1>Formulaire d'inscription</h1>

        <label><b>Nom d'utilisateur</b></label>
        <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

        <label><b>Email</b></label>
        <input type="email" placeholder="Entrer votre email" name="email" required>

        <label><b>Mot de passe</b></label>
        <input type="password" placeholder="Entrer le mot de passe" name="password" required>

        <input type="submit" id='submit' value='Register'>
    </form>
</div>
<body>
    <footer>
        <a>VERNIERE Loic - All right reserved 2021</a>
    </footer>
</body>