<?php
include("../connection/db_connect.php");
include("../class/user.php");

if (isset($_POST['full_name'])) {

    $user = new User;
    $user->setUser(
        $_POST['full_name'],
        $_POST['username'],
        $_POST['brirthday'],
        password_hash($_POST['password'], PASSWORD_DEFAULT),
        $_POST['city'],
        $_POST['country'],
        $_POST['zip_code'],
        $_POST['email']
    );
    $user->insertUser($user);
}

var_dump("insert ok ");
