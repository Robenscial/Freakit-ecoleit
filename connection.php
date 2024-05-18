<?php require('connectionback.php');?>
<!DOCTYPE html>
<html lang="fr">

<head>
<?php require('hearder.php');?>
    
</head>

<body>

    <div class="container1">
        <header class="nav-bar">

            <div class="logo">
                <a href="index.php"><img src="photo/logo1.png" alt="logo" title="logo"/></a>
            </div>

            <div class="nav-btn">
                <a href="registration.php">Inscription</a>
            </div>
            
    </header><br><br>
      
        <div class="elements">

            <div class="right-element">
                <form action="" method="POST">

                    <h4>Connexion</h4>
                    <?php if(isset($errorMSG)) echo $errorMSG;?>
                    <hr>
                   
                    <label>Pseudo</label>
                    <input type="text" name="pseudo" placeholder="entrez votre pseudo">

                    <label>Mot de passe</label>
                    <input type="password" name="password" placeholder="entrer le mot de pass">
                    
                    <input type="submit" name="send" value="Se connecter">
                    <p>Vous n'avez pas encore un compte ? <a href="registration.php">Inscription</a></p>

                </form><br><br><br><br>
            
            </div>

        </div>


    </div>
  
    <?php require('footer.php');?>  
</body>
</html>