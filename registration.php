<?php require('registrationback.php');?>
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
                <a href="connection.php">connexion</a>
            </div>
                
        </header>

        <div class="elements">
            <div class="right-element">
                <form action="" method="POST" enctype="multipart/form-data">
                    
                    <h4>INSCRIPTION</h4>
                    <?php if(isset($errorMSG)) echo $errorMSG;?>
                    <hr>

                    <label><b>Pseudo</b></label>
                    <input type="text" name="pseudo" placeholder="entrez votre pseudo">

                    <label><b>Adresse mail</b></label>
                    <input type="email" name="email" placeholder="Ex:exemple@gmail.com">

                    <label><b>Date de naissance</b></label>
                    <input type="date" name="birthdate">

                    <label><b>Mot de passe</b></label>
                    <input type="password" name="password" placeholder="entrer le mot de pass">

                    <label><b>Confirmer mot de passe</b></label>
                    <input type="password" name="cpassword" placeholder="entrer le meme mot de passe">

                    <div class="genre">

                        <div class="lab">
                            <label><b>Genre</b></label>
                        </div>
                            
                        <div class="form-check px-8">
                            <input class='form-check-input' type='radio' required name='rad' value='Masculin'>
                            <label for="check" class="form-check-label">Masculin</label>   
                        </div>

                        <div class="form-check px-3">
                            <input class='form-check-input' type='radio' required name='rad' value='Feminin'>
                            <label for="check" class="form-check-label">Feminin</label>   
                        </div>
                    </div>
                   

                    <label>Une photo</label>
                    <input type="file" name="profile" id="profile">

                    <label>Banniere</label>
                    <textarea type="text" name="baner" id="baner" rows="3" placeholder="entrer votre banier"></textarea>
                    
                    <input type="submit" name="send" value="S'inscrire">
                    <p>Vous avez deja un compte? <a href="connection.php">Se connecter</a></p>

                </form>
            
            </div>

        </div>

        
       


    </div>
  
</body>
</html>