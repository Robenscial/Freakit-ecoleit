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
                <a href="disconnectback.php">Deconnexion</a>
            </div>
                
        </header>
        <br><p><b>Votre compte à été desactivé veillez contacter l'administrateur</b></p>
        <div class="elements">
            <div class="right-element">
                
                <form action="" method="POST">
                    <h4>Contactez-nous!!!</h4>
                    <hr>

                    <label>Pseudo</label>
                    <input type="text" name="title">

                    <label>Email</label>
                    <input type="text" name="title">
        
                    <label>Message</label>
                    <textarea type="text" name="description" id="description" rows="3"></textarea> 
                    <input type="submit" name="send" value="Envoyer">
                   
                </form>
            
            </div>

        </div>


    </div>

    <?php require('footer.php');?>
</body>
</html>