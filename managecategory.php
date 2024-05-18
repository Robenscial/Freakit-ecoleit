<?php session_start();?>
<?php require('managecategoryback.php');?>
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
                <img src="photo/logo1.png" alt="logo" title="logo"/>
            </div>

            <div class="nav-search">
                <form method="GET">
                    <input type="search" name="search" placeholder="recherchez une categorie">
                    <button type="submit">Recherche</button>
                </form>
            </div>

            <div class="user">
                <a href="homeback.php"><h5><i class="fa-regular fa-user"></h5></i></a>
            </div>
            
            <div class="nav-btn">
                <a href="connection.php">Deconnexion</a>  
            </div>
                  
        </header>

        <div class="nav-content">
            <a href="createtopic.php"><i class="fa-solid fa-plus"></i>Creer un sujet</a>
            <a href="createcategory.php"><i class="fa-solid fa-plus"></i>Creer une categorie</a>
            <a href="managetopic.php">gerer les sujets</a>
            <a href="managecategory.php">gerer les categories</a>
            <a href="displayprofil.php">gerer les Profiles</a>
        </div></br>
        
    </div>

    <?php

    while($category_info = $get_category->fetch()){
      ?>
        <div class="container">
            <div class="card my-3 col-6">

                <div class="card-header bg-info">       
                    <h5><?php echo $category_info['value'];?></h5>
                </div>

                <div class="card-body">       
                    <?php echo $category_info['date'];?>
                </div>

                <div class="card-footer text-primary">
                    <a href="editecategory.php?id=<?php echo $category_info['id_category_topic'];?>" class="btn btn"><i class="fa-regular fa-pen-to-square"></i></a>    
                    <a href="deletecategoryback.php?id=<?php echo $category_info['id_category_topic'];?>" class="btn btn"><i class="fa-regular fa-trash-can"></i></a>
                </div>
            
            </div>
            
     
        </div>


        <?php
    }

        ?>

</body>
</html>