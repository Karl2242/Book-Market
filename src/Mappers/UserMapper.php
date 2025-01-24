<?php

class UserMapper implements MapperContract
{

public static function convertirEnInstance(array $donnee): user {

return new user(
$donnee["id"],
$donnee["password"],
$donnee["prenom"],
$donnee["nom"],
$donnee["description"],
$donnee["tel"],
$donnee["mail"],
$donnee["id_role"]
);

}

}


?>