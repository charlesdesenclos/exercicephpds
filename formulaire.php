<?php
    
    session_start(); // Démarrage de la session
?>
<?php
    include("config.php");
?>

<?php
        if($_POST['nom'])
        {?>
            <h2>Vous etes connecté <?php echo $_POST['nom'];?></h2>
        <?php
        }
        else
        {
        ?>
            <?php echo "<h1>Connecte toi !</h1>"; ?>
            <!--Initialisation formulaire-->
            <div id="container">
                <form action="" method="POST"> 
                    <h1>Connexion</h1>
                    <label><b>Nom :</b></label> 
                    <input type="text" placeholder="Nom" name="nom" required>

                    <label><b>Id Client :</b></label>
                    <input type="password" placeholder="Id Client" name="mdp" required>
                    <center><a href="mdpoublier.php">Mot de passe oublié ?</a></center>

                    <input type="submit" id="submit" value="Connexion">
                </form>
            </div>
            
        <?php
        }
        
        ?>