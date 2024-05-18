<?php require('editeprofileback.php');?>
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
                <form action="" method="POST" enctype="multipart/form-data">
                    
                    <h4>MODIFICATION</h4>
                    <?php if(isset($errorMSG)) echo $errorMSG;?>
                    <hr>

                    <label>Pseudo</label>
                    <input type="text" name="pseudo" value="<?php echo $pseudo;?>">

                    <label>Adresse mail</label>
                    <input type="email" name="email" value="<?php echo $email;?>">

                    <label>Date de naissance</label>
                    <input type="date" name="birthdate" value="<?php echo $birthdate;?>">

                    <input type="hidden" name="id_user" value="<?php echo $id;?>">

                    <label>Mot de passe</label>
                    <input type="password" name="password">

                    <label>Confirmer mot de passe</label>
                    <input type="password" name="cpassword">

                    <label>Une photo</label>
                    <input type="file" name="profile" id="profile" accept="image/*">

                    <label>Banniere</label>
                    <textarea type="text" name="baner" id="baner" rows="3" placeholder="entrer votre banier"><?php echo $baner;?></textarea>

                    <input type="submit" name="update" value="Envoyer">

                </form>
            
            </div>

        </div>

        
       


    </div>
  
    <?php require('footer.php');?> 
</body>
</html>