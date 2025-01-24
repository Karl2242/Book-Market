<?php

class user 
{
    private int $id ; 
    private string $password ; 
    private string $prenom ; 
    private string $nom ; 
    private string $description ; 
    private string $tel ; 
    private string $mail ; 
    private int $id_role ;

        public function __construct(int $id, string $password, string $prenom, string $nom, string $description, string $tel, string $mail, int $id_role) {
            $this->id = $id;
            $this->password = $password;
            $this->prenom = $prenom;
            $this->nom = $nom;
            $this->description = $description;
            $this->tel = $tel;
            $this->mail = $mail;
            $this->id_role = $id_role;
        }

}


?>