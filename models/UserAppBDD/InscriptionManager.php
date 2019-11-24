<?php
namespace UserAppBDD;

use BDD\Connexion_BDD;
use PDO;

class InscriptionManager extends Connexion_BDD{

    public function __construct(){
        $this->connexion();
      }
    

      // Add a user to the database
    public function addUserToDatabase($prenom,$nom,$email,$telephone,$user,$password_user){
      $pdo = $this->getPDO();
      $req = $pdo->prepare("INSERT INTO users (prenom,nom,email,telephone,utilisateur,password) VALUES (?,?,?,?,?,?)");
      $req->execute([
        $prenom,
        $nom,
        $email,
        $telephone,
        $user,
        $password_user,
      ]);
    }

}