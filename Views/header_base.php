<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Rapid'O</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../public/ressources/css/home.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="../public/ressources/css/main.css" media="screen" />
</head>
<?php if (isset($_SESSION['username'])) { ?>

    <head>
        <nav>
            <ul class="navbar">
                <li><a href="/public">Accueil</a></li>
                <li><a href="/public/order">Commander</a></li>
                <div class="nav-log">
                    <li class="nav-icon"><img src="/public/ressources/images/home/user.png"></li>
                    <li class="nav-login"><a class="log" href="/public/myaccount"><?php echo $_SESSION['username'] ?></a>
                        <div class="sub-nav">
                            <ul>
                                <li><a>Paramètres</a></li>
                                <li><a>Mes commandes</a></li>
                            </ul>
                    </li>
                </div>
                <li class="nav-suscribe"><a class="log" href="/public/logout">Deconnexion</a></li>
                </div>
            </ul>
        </nav>
    </head>
<?php } else { ?>

    <head>
        <nav>
            <ul class="navbar">
                <li><a href="/public/">Accueil</a></li>
                <div class="nav-log">
                    <li class="nav-login"><a class="log" href="/public/login">Se connecter</a></li>
                    <li class="nav-suscribe"><a class="log" href="/public/register">S'inscrire</a></li>
                </div>
            </ul>
        </nav>
    </head>
<?php } ?>

</html>