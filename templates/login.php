<?php

include(dirname(__DIR__).'/utils.php');

use Form\FormLogin;

$form = new FormLogin();

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $form->onSubmit($_POST['utilisateur'],$_POST['password']);
}

?>


<body>
    <h1 class="text-center">Connexion </h1>
    <div class="container">
    <form id="graineForm" action="" method="post">
   <?= $form->newField('utilisateur' , 'text') ?>
   <?= $form->newField('password' , 'password') ?>
   <?= $form->submitBtn() ?>
    </form>
   </div>
</body>
</html>