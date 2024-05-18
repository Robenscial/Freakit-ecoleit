<?php require('editecategoryback.php');?>
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

            <div class="nav-search">
                <input type="search" name="pseudo" placeholder="recherchez un sujet">
                <button type="button" onclick="#">Recherche</button>
            </div>

            <div class="nav-btn">
                <a href="registration.php">Inscription</a>
                <a href="connection.php">connexion</a>
            </div>
                
        </header>

        <div class="elements">
            <div class="right-element">
                <form action="storecategoryback.php" method="POST">

                    <?php $category_info = $get_category->fetch()?>
                                
                                <label>Category</label>
                                <input type="text" name="category" value="<?php echo $category_info['value']?>">
                                <input type="hidden" name="id" value="<?php echo $category_info['id_category_topic']?>">
        
                    
                    <input type="submit" name="edit" value="Modifier">
  
                </form>
            
            </div>

        </div>


    </div>
  
    <?php require('footer.php');?>  
</body>
</html>