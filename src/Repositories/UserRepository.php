<?php

class UserRepository extends AbstractRepository
{

public function createUser(string $password, string $prenom, string $nom, string $decription, string $tel, string $mail, int $id_role){

$sql = "INSERT INTO user (password, prenom, tel, mail, id_role) VALUES (:password, :prenom, :tel, :mail, id_role)";
$stmt = $this->pdo->prepare($sql);
$stmt->bindValue(":password", $password);
$stmt->bindValue(":prenom", $prenom);
$stmt->bindValue(":tel", $tel);
$stmt->bindValue(":mail", $mail);
$stmt->bindValue(":id_role", $id_role);
$stmt->execute();
}



}


?>