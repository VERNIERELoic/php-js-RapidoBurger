<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Rapid'O</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../public/ressources/css/register.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="../public/ressources/css/main.css" media="screen" />
</head>
<div class="register">
    <form action="api/session/register.php" method="POST">
        <h1>Formulaire d'inscription</h1>

        <label><b>Nom d'utilisateur</b></label>
        <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

        <label><b>Email</b></label>
        <input type="email" placeholder="Entrer votre email" name="email" required>

        <label><b>Mot de passe</b></label>
        <input type="password" placeholder="Entrer le mot de passe" name="password" required>

        <label><b>Saisir de nouveau le mot de passe</b></label>
        <input type="password" placeholder="Entrer le mot de passe" name="passwordverify" required>

        <input type="submit" id='submit' value='Register'>
    </form>
</div>
<body>
    <footer>
        <a>VERNIERE Loic - All right reserved 2021</a>
    </footer>
</body>