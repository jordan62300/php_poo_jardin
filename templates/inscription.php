
<?php
include(dirname(__DIR__).'/utils.php');

use Form\FormInscription;

$form = new FormInscription();

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $form->onSubmit($_POST['prenom'],$_POST['nom'],$_POST['email'],$_POST['telephone'],$_POST['utilisateur'],$_POST['password'],$_POST['password2']);
}

?>


<body>
    <h1 class="text-center">Inscription </h1>
    <div class="container">
    <form id="graineForm" action="" method="post">
   <?= $form->newField('prenom' , 'text') ?>
   <?= $form->newField('nom' , 'text') ?>
   <?= $form->newField('email' , 'email') ?>
   <?= $form->newField('telephone' , 'number') ?>
   <?= $form->newField('utilisateur' , 'text') ?>
   <?= $form->newField('password' , 'password') ?>
   <?= $form->newField('password2' , 'password') ?>
   <?= $form->submitBtn() ?>
    </form>
   </div>
</body>
</html>
