<?php
include_once "../utils/autoloader.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fil-Rouge</title>
    <link rel="stylesheet" href="./assets/css/output.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    
<header class="bg-[#011936] p-3 items-center flex gap-3 justify-center">
<img src="./assets/imgs/logo 1.png" alt="">
<p class="font-inder text-white font-extralight">BOOK-MARKET</p>
</header>

<main>

<form class="flex flex-col gap-4 mt-7 items-center justify-center w-[100%]" action="../process/processCreateUser.php" method="post">
            <input class="bg-[#011936] w-[15%] h-11 shadow-xl pl-4 text-white rounded-md" type="text" placeholder="Prenom" name="prenom" id="prenom">
            <input class="bg-[#011936] w-[15%] h-11 shadow-xl pl-4 text-white rounded-md" type="text" placeholder="Nom" name="nom" id="nom">
            <input class="bg-[#011936] w-[15%] h-11 shadow-xl pl-4 text-white rounded-md" type="email" placeholder="Mail" name="mail" id="mail">
            <input class="bg-[#011936] w-[15%] h-11 shadow-xl pl-4 text-white rounded-md" type="text" placeholder="Description" name="desc" id="desc">
            <input class="bg-[#011936] w-[15%] h-11 shadow-xl pl-4 text-white rounded-md" type="text" placeholder="Tel" name="tel" id="tel">
            <input class="bg-[#011936] w-[15%] h-11 shadow-xl pl-4 text-white rounded-md" type="password" placeholder="Mot de passe" name="mdp" id="mdp">
           
            <fieldset class="flex gap-4">
            <label for="client">Client</label>
            <input type="radio" id="client" name="pro" value="client">
            <label for="pro">Professionel</label>
            <input type="radio" id="pro" name="pro" value="pro" >

            </fieldset>
<button class="bg-[#011936] p-3 rounded-xl text-white ">S'inscrire</button>
        </form>
</main>

</main>

</body>
</html>
