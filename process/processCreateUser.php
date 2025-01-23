<?php
include_once "../utils/autoloader.php";

$UserRepo = new UserRepository;


if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('location: ../public/home.php');
    return;
}


if (
    !isset(
        $_POST['prenom'],
        $_POST['nom'],
        $_POST['mail'],
        $_POST['desc'],
        $_POST['tel'],
        $_POST['mdp'],
        $_POST['client'],

    )
) {
    header('location: ../public/home.php');
    return;
}


if (
    empty($_POST['prenom']) ||
    empty($_POST['nom']) ||
    empty($_POST['mail']) ||
    empty($_POST['desc']) ||
    empty($_POST['tel']) ||
    empty($_POST['mdp']) || 
    empty($_POST['client'])  

) {
    header('location: ../public/home.php?error=1');
    return;
}


if (
    strlen($_POST['prenom']) > 100 ||
    strlen($_POST['nom']) > 50 ||
    strlen($_POST['mail']) > 50 ||
    strlen($_POST['desc']) > 50 ||
    strlen($_POST['tel']) > 50 ||
    strlen($_POST['mdp']) > 50 ||
    strlen($_POST['client']) > 50 

) {
    header('location: ../public/home.php');
    return;
}

$prenom = htmlspecialchars(trim($_POST['prenom']));
$nom = htmlspecialchars(trim($_POST['nom']));
$mail = htmlspecialchars(trim($_POST['mail']));
$description = htmlspecialchars(trim($_POST['desc']));
$tel = htmlspecialchars(trim($_POST['tel']));
$mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
$client = htmlspecialchars(trim($_POST['client']));


if($UserRepo->verifyUser($prenom, $mail)){
    header("Location: ../public/home.php?=error1");
    exit;
}


if($client == "client"){
    $UserRepo->createUser($mdp, $prenom, $tel, $mail, 2, $nom, $description);
    header("Location: ../public/mainpage.php");
}else if($client == "pro")
{
    $UserRepo->createUser($mdp, $prenom, $tel, $mail, 1, $nom, $description);
    header("Location: ../public/mainpage.php");

}





?>