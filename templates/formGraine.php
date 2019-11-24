
<?php
include(dirname(__DIR__).'/utils.php');

use Form\FormGraine;

$formgraine = new FormGraine();
if($_SERVER['REQUEST_METHOD'] === 'POST') { 
    
$formgraine->onSubmit($_POST['nom'] ,$_POST['famille'] ,$_POST['date_plantation'] ,$_POST['date_recolte'] ,$_POST['conseil'] ,$_POST['quantite'] ,$_POST['image'] );
}
?>

    <h1 class="text-center">Ajouter une nouvelle <span class="text-success">Graine</span> </h1>
    <div class="container">
    <form id="graineForm" action="" method="post" enctype="multipart/form-data">
   <?= $formgraine->newField('nom' , 'text') ?>
   <?= $formgraine->newField('famille' , 'text') ?>
   <?= $formgraine->newField('date_plantation' , 'date') ?>
   <?= $formgraine->newField('date_recolte' , 'date') ?>
   <?= $formgraine->newField('conseil' , 'text') ?>
   <?= $formgraine->newField('quantite' , 'number') ?>
   <?= $formgraine->newField('image' , 'file') ?>
   <?= $formgraine->newField('justine','number') ?>
   <?= $formgraine->submitBtn() ?>

        </form>
   </div>

