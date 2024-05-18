<?php require('createcategoryback.php');?>
<?php session_start();?>
<?php require('securityback.php');?>
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
            
            <div class="user">
                <a href="homeback.php"><h5><i class="fa-regular fa-user"></i></h5></a>
            </div>

            <div class="nav-btn">
                <a href="disconnectback.php">Deconnexion</a>
            </div>
                
        </header>

        <div class="elements">
            <div class="right-element">
                <form action="" method="POST">

                    <?php if(isset($errorMSG)) echo $errorMSG;?>

                    <label>Nom de la categorie</label>
                    <input type="text" name="name">
                    
                    <input type="submit" name="send" value="Creer">
                   
                </form>
            
            </div>

        </div>


    </div>
</body>
</html>