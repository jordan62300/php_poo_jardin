
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 

    if( isset($_GET['form'])  && isset($_GET['login']) && $_GET['login'] == 'true' ) {
        require './templates/header/headerconnecter.php';
        require './templates/formGraine.php';
    }
    
    else if(isset($_GET['login']) && $_GET['login'] == "inscription"){
        require './templates/header/header.php';
        require './templates/inscription.php';
    }
    
    else if(isset($_GET['login']) && $_GET['login'] == "connexion"){
        require './templates/header/header.php';
        require './templates/login.php';
    } 
    else if (isset($_GET['login']) && $_GET['login'] == 'true')  {
        require './templates/header/headerconnecter.php';
        require './templates/graines.php';
    } 
    else {
        require './templates/header/header.php';
        require './templates/login.php';
    }

    ?>
</body>
</html>