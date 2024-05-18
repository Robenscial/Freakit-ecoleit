<?php require('edittopicback.php');?>
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
                <form action="storeedittopicback.php" method="POST">

                    <?php if(isset($errorMSG)) echo $errorMSG;?>

                    <?php $topic_info = $get_topic->fetch()?>
                                
                                <label>Titre du sujet</label>
                                <input type="text" name="title" value="<?php echo $topic_info['title']?>">

                                <input type="hidden" name="id" value="<?php echo $topic_info['id_topic']?>">
        
                                <label>Description du sujet</label>
                                <textarea name="description" id="description" rows="3"><?php echo $topic_info['description']?>"</textarea>
        
                            <?php
                    ?>
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
                    
                    <input type="submit" name="edit" value="Modifier">

                   
                </form>
            
            </div>

        </div>


    </div>
  
    <?php require('footer.php');?>  
</body>
</html>