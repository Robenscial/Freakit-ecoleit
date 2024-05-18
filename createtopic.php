<?php require('createtopicback.php');?>
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
                <div class="user">
                    <a href="homeback.php"><i class="fa-regular fa-user"></i></a>
                </div>
                <a href="disconnectback.php">Deconnexion</a>
            </div>
                
        </header>

        <div class="elements">
            <div class="right-element">
                <form action="" method="POST">

                    <?php if(isset($errorMSG)) echo $errorMSG;?>

                    <label>Titre du sujet</label>
                    <input type="text" name="title">
        
                    <label>Description du sujet</label>
                    <textarea type="text" name="description" id="description" rows="3"></textarea>

                    <label>Choisir une categorie</label>
                    <select name="category" id="category">

                    <?php 
                        while($category_info = $get_category->fetch()){
                         ?>
                            <option value="<?php echo $category_info['id_category_topic']?>"><?php echo $category_info['value']?> </option>
                         <?php
                        }
                        ?>
                        
                    </select>
                    
                    <input type="submit" name="send" value="Publier">
                   
                </form>
            
            </div>

        </div>


    </div>
   
</body>
</html>