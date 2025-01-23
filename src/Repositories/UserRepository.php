<?php

class UserRepository extends AbstractRepository
{

public function createUser(string $password, string $prenom, string $tel, string $mail, int $id_role, string $nom, string $description){

$sql = "INSERT INTO user (password, prenom, tel, mail, id_role, nom, description) VALUES (:password, :prenom, :tel, :mail, :id_role, :nom, :description)";
$stmt = $this->pdo->prepare($sql);
$stmt->bindValue(":password", $password);
$stmt->bindValue(":prenom", $prenom);
$stmt->bindValue(":tel", $tel);
$stmt->bindValue(":mail", $mail);
$stmt->bindValue(":id_role", $id_role);
$stmt->bindValue(":nom", $nom);
$stmt->bindValue(":description", $description);
$stmt->execute();
}

public function verifyUser(string $prenom, string $mail)
{
    $sql = "SELECT * FROM user WHERE prenom = :prenom OR mail = :mail";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(":prenom", $prenom);
    $stmt->bindValue(":mail", $mail);
    $stmt->execute();
   $data = $stmt->fetch(PDO::FETCH_ASSOC);

   if($data){
    return $data;
   }

}  


}


?>