<?php
    
    session_start(); // Démarrage de la session
?>
    
<?php include ("User.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <link rel="icon" type="image/jpg" sizes="16x16" href="image/image.jpg">
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Exercice</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <script src='main.js'></script>
</head>
<body class="background">
    <?php include("formulaire.php");?>

        
    <?php
        include("config.php");
       


        $mdp = "";




        if(!empty($_POST['nom']) && !empty($_POST['mdp']) )
        {
            $trouve = false;
            foreach ($Tableau_User as  $TheUser) {
                //si le user du formulaire = le nom d'un user dans la liste alors on vérifie mdp
                if($TheUser->getNom()==$_POST['nom']){
                    $trouve = true;
                    //on va vérifier le mdp du formulaire avec celui de user trouvé
                    if($TheUser->SeConnecter($_POST['mdp'])){
                        ?>
                        <h2>Bienvenue !</h2>
                        <?php
                    }else{
                        ?>
                        <h2>Mauvais Mot de passe</h2>
                        <?php
                    }
                }
            }
            if(!$trouve){
                echo "User Inconnu vérifier othographe";
            }
        }
    ?>
    <hr>
    </body>
</html>