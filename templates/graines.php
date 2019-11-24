<?php 
include(dirname(__DIR__).'/utils.php');

use Graines\Graine;

$conn = new Graine();

$conn->connexion();

    if(isset($_GET['delete'])){
        $conn->onDelete($_GET['delete']);
        echo "done";
    }
?>

    <?= $conn->displayGraines() ?>

