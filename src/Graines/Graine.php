<?php

namespace Graines;

use BDD\GraineManager;

class Graine extends GraineManager {
    

    //Les semences (graines) ont un nom, une famille (Solanacées, Cucurbitacées, Légumineuses ...), une période de plantation, une période de récolte, des conseils de jardinage, un visuel et une quantité (stock)
    private $nom;
    private $famille;
    private $periode_plantation;
    private $periode_recolte;
    private $conseil;
    private $quantite;
    private $visuel;

    public function __construct(String $nom = null, String $famille = null, $periode_plantation=null , $periode_recolte = null , $conseil= null , $quantite= null , $visuel= null){
        $this->nom = $nom;
        $this->famille = $famille;
        $this->$periode_plantation = $periode_plantation;
        $this->$periode_recolte = $periode_recolte;
        $this->conseil = $conseil;
        $this->quantite = $quantite;
        $this->visuel = $visuel;
        parent::__construct();
    }


    // DISPLAY ALL GRAINES STOCKED IN THE DATABASE
    public function displayGraines(){
      $graines =  $this->getAllGraines();
        foreach($graines as $graine){
            echo "
            <div class=\"row\">
                <div class=\"card bg-info col-5 col-centered mt-4\" style=\"width: 18rem;\">
                     <div class=\"card-body\">
                         <h5 class=\"card-title text-center\">".$graine->nom."</h5>
                         <p class=\"card-text \">Famille : ".$graine->famille."</p>
                         <p class=\"card-text \">Periode plantation : ".$graine->periode_plantation."</p>
                         <p class=\"card-text \">Periode recolte : ".$graine->periode_recolte."</p>
                         <p class=\"card-text \">conseil : ".$graine->conseil."</p>
                         <p class=\"card-text \">quantite : ".$graine->quantite."</p>
                         <a href=\"index.php?delete=$graine->id\"> <button class=\"btn btn-danger\" type=\"button\">Supprimer </button> </a>
                    </div>
                 </div>
            </div>
           " ;
        }
    }

    public function onDelete($id){
        $this->deleteGraineToDatabase($id);
    }

    public function addGraine($nom,$famille,$période_plantation,$periode_recolte,$conseil,$quantite,$visuel){
        $this->addGraineToDatabase($nom,$famille,$période_plantation,$periode_recolte,$conseil,$quantite,$visuel);
    }
    

    
    
    // GETTER & SETTER

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of famille
     */ 
    public function getFamille()
    {
        return $this->famille;
    }

    /**
     * Set the value of famille
     *
     * @return  self
     */ 
    public function setFamille($famille)
    {
        $this->famille = $famille;

        return $this;
    }

    /**
     * Get the value of periode_plantation
     */ 
    public function getPeriode_plantation()
    {
        return $this->periode_plantation;
    }

    /**
     * Set the value of periode_plantation
     *
     * @return  self
     */ 
    public function setPeriode_plantation($periode_plantation)
    {
        $this->periode_plantation = $periode_plantation;

        return $this;
    }

    /**
     * Get the value of periode_recolte
     */ 
    public function getPeriode_recolte()
    {
        return $this->periode_recolte;
    }

    /**
     * Set the value of periode_recolte
     *
     * @return  self
     */ 
    public function setPeriode_recolte($periode_recolte)
    {
        $this->periode_recolte = $periode_recolte;

        return $this;
    }

    /**
     * Get the value of conseil
     */ 
    public function getConseil()
    {
        return $this->conseil;
    }

    /**
     * Set the value of conseil
     *
     * @return  self
     */ 
    public function setConseil($conseil)
    {
        $this->conseil = $conseil;

        return $this;
    }

    /**
     * Get the value of quantite
     */ 
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set the value of quantite
     *
     * @return  self
     */ 
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get the value of visuel
     */ 
    public function getVisuel()
    {
        return $this->visuel;
    }

    /**
     * Set the value of visuel
     *
     * @return  self
     */ 
    public function setVisuel($visuel)
    {
        $this->visuel = $visuel;

        return $this;
    }
}

    