<?php
    $Tableau_User = array();
    try {
        $bdd = new PDO("mysql:host=mysql-desenclos.alwaysdata.net;dbname=desenclos_exercice;charset=utf8", "desenclos", "sqK8ZUWxuvEpp!y");
        $req = "SELECT * FROM utilisateurs";
        $reponses = $bdd->query($req);
        while ($donnees = $reponses->fetch())
    {
        
        array_push($Tableau_User,new User($donnees['id'],$donnees['nom'],$donnees['mdp']));
        
    } 
    }
    catch(PDOException $e)
    {
        die('Erreur : '.$e->getMessage());
    }
    ?>