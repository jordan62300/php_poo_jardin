<?php

namespace Form;

use Form\Form;
use Graines\Graine;

use PDO;

class FormGraine extends Form {

    // send the graine to the Database 
    public function onSubmit($nom,$famille,$periode_plantation,$periode_recolte,$conseil,$quantite,$visuel) {

    

            if(isset($nom) && isset($famille) && isset($periode_plantation) && isset($periode_recolte)  && isset($quantite) ) {
                      $graine = new Graine($nom,$famille,$periode_plantation,$periode_recolte,$conseil,$quantite,$visuel);
                      $graine->addGraine($nom,$famille,$periode_plantation,$periode_recolte,$conseil,$quantite,$visuel);
            
        }
    }    
}