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
    <link rel="stylesheet" type="text/css" href="../public/ressources/css/admintab.css" media="screen" />
    <script src="https://cdn.socket.io/4.4.0/socket.io.min.js" integrity="sha384-1fOn6VtTq3PWwfsOrk45LnYcGosJwzMHv+Xh/Jx5303FVOXzEnw0EpLv30mtjmlj" crossorigin="anonymous"></script>

    <?php

    use App\Repo\UserRepo;

    $userrepo = new UserRepo();

    $isadmin = $userrepo->isAdmin($_SESSION['username']);
    $isconnected = $_SESSION['username'];

    if (isset($isconnected) && $isadmin == 0) { ?>
        <script>
            const socket = io('127.0.0.1:3000');
            socket.emit('login', "<?php print($_SESSION['username']); ?>");
            console.log('connected', socket);
        </script>

        <head>
            <nav>
                <ul class="navbar">
                    <li><a href="/public">Accueil</a></li>
                    <li><a href="/public/order">Commander</a></li>
                    <div class="nav-log">
                        <li class="nav-icon"><img src="/public/ressources/images/home/user.png"></li>
                        <li class="nav-login"><a class="log""><?php echo $_SESSION['username'] ?></a>
                        <ul class=" dropdown">
                        <li><a href="/public/myorders">Commandes</a></li>
                        <li><a href="/public/modify">Modifier profile</a></li>
                </ul>
                </li>
                </div>
                </li>
                </div>
                <li class="nav-suscribe"><a class="log" href="/public/logout">Deconnexion</a></li>
                </div>
                </ul>
            </nav>
        </head>
    <?php $userrepo = new UserRepo();
        $isadmin = $userrepo->isAdmin($_SESSION['username']);
    } elseif ($isconnected && $isadmin == 1) { ?>

        <script>
            const socket = io('127.0.0.1:3000');
            socket.emit('login', "<?php print($_SESSION['username']); ?>");
            console.log('connected', socket);
        </script>

        <head>
            <nav>
                <ul class="navbar">
                    <li><a href="/public">Accueil</a></li>
                    <li><a href="/public/order">Commander</a></li>
                    <li><a href="/public/orderlist ">Interface admin</a></li>
                    <div class="nav-log">
                        <li class="nav-icon"><img src="/public/ressources/images/home/user.png"></li>
                        <li class="nav-login"><a class="log""><?php echo $_SESSION['username'] ?></a>
                    <ul class=" dropdown">
                        <li><a href="/public/myorders">Commandes</a></li>
                        <li><a href="/public/modify">Modifier profile</a></li>
                </ul>
                </li>
                </div>
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