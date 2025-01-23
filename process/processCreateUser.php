<?php
include_once "./utils/autoloader.php";

$UserRepo = new UserRepository;

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('location: ../public/home.php');
    return;
}


if (
    !isset(
        $_POST['email'],
        $_POST['username'],
        $_POST['prenom'],
        $_POST['name'],
        $_POST['password'],

    )
) {
    header('location: ../front/formulaire/inscription.php');
    return;
}


if (
    empty($_POST['email']) ||
    empty($_POST['username']) ||
    empty($_POST['prenom']) ||
    empty($_POST['name']) ||
    empty($_POST['password'])

) {
    header('location: ../front/formulaire/inscription.php?error=1');
    return;
}


if (
    strlen($_POST['email']) > 100 ||
    strlen($_POST['username']) > 50 ||
    strlen($_POST['prenom']) > 50 ||
    strlen($_POST['name']) > 50 ||
    strlen($_POST['password']) > 50

) {
    header('location: ../front/formulaire/inscription.php');
    return;
}


$email = htmlspecialchars(trim($_POST['email']));
$pseudo = htmlspecialchars(trim($_POST['username']));
$prenom = htmlspecialchars(trim($_POST['prenom']));
$name = htmlspecialchars(trim($_POST['name']));
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);



$UserRepo->createUser();




?>