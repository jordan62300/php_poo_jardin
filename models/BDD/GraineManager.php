<?php
namespace BDD;

use BDD\Connexion_BDD;
use PDO;

class GraineManager extends Connexion_BDD{
    public function __construct(){
      $this->connexion();
    }
    
    public function getAllGraines() {
      $pdo =  $this->getPDO();
      $req =  $pdo->query("SELECT * FROM graines");
      $res = $req->fetchAll(PDO::FETCH_OBJ);
      return $res;
    }



    public function addGraineToDatabase($nom,$famille,$période_plantation,$periode_recolte,$conseil,$quantité,$visuel) {
      $pdo = $this->getPDO();
      $req = $pdo->prepare("INSERT INTO graines (nom,famille,periode_plantation,periode_recolte,conseil,quantite,visuel) VALUES (?,?,?,?,?,?,?)");
      $req->execute([
        $nom,
        $famille,
        $période_plantation,
        $periode_recolte,
        $conseil,
        $quantité,
        $visuel
      ]);
    }

    public function deleteGraineToDatabase($id){
      $pdo = $this->getPDO();
      $req = $pdo->prepare("DELETE FROM graines WHERE id >= :id");
                $req->bindParam(':id', $id, PDO::PARAM_INT);
                $req->execute();
               
    }
}
