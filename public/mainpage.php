<?php
include_once "../utils/autoloader.php";
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book-Market</title>
    <link rel="stylesheet" href="./assets/css/output.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    
<header class="bg-[#011936] px-6 w-[100%] p-3 items-center flex gap-3">
    <div class="w-[50%]">
<img src="./assets/imgs/logo 1.png" alt="">
<p class="font-inder text-white font-extralight">BOOK-MARKET</p>
</div>

<div class="flex gap-5 justify-end w-[50%]">
<input class="border-solid text-black shadow-inner pl-4 rounded-lg border-2 border-[#77AD78] w-[37%]" type="text" placeholder="Rechercher">
<a href=""><img src="./assets/imgs/card 1.png" alt=""></a>
<a href=""><img src="./assets/imgs/user 1.png" alt=""></a>
</div>
</header>
<div class="flex justify-center">
<div class="bg-header border-bottum text-center justify-center items-center w-[70%] h-[80px]">
    <ul class="flex text-white items-center h-[80px] text-center gap-[8.25rem] justify-center font-extralight">
        <a href=""><li>Auteur</li></a>
        <a href=""><li>Loisirs</li></a>
        <a href=""><li>Scolaire</li></a>
        <a href=""><li>Jeunesse</li></a>
        <a href=""><li>Prix</li></a>
        <a href=""><li>Romans</li></a>
        <a href=""><li>Bd&Livres</li></a>
    </ul>
</div>

</div>


</body>
</html>

