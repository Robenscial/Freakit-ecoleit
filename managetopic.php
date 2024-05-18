<?php session_start();?>
<?php require('displayalltopicback.php');?>
<?php require('securityback.php');?>
<?php require('linkfunctionback.php');?>
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
                <form method="GET">
                    <input type="search" name="search" placeholder="recherchez un sujet">
                    <button type="submit">Recherche</button>
                </form>
            </div>

            <div class="user">
                <a href="homeback.php"><h5><i class="fa-regular fa-user"></i></h5></a>
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

    while($topic_info = $get_alltopic->fetch()){
      ?>
        <div class="container">
            <div class="card my-3 col-6">

                <div class="card-header bg-info">       
                    <a href="displayonetopic.php?id=<?php echo $topic_info['id_topic'];?>"><?php echo $topic_info['title'];?></a>
                    par <?php echo $topic_info['pseudo'];?> 
                </div>

                <div class="card-body">
                    <?php echo linkreplace($topic_info['description']);?> 
                </div>

                <div class="card-footer text-primary">
                    Categorie:  <?php echo $topic_info['value'];?>
                </div>

                <div class="card-footer text-primary">
                    <a href="displayonetopic.php?id=<?php echo $topic_info['id_topic'];?>" class="btn btn"><i class="fa-regular fa-comment"></i></a>  
                    <a href="closetopicback.php?id=<?php echo $topic_info['id_topic'];?>" class="btn btn"><i class="fa-solid fa-xmark"></i></a>  
                    <a href="edittopic.php?id=<?php echo $topic_info['id_topic'];?>" class="btn btn"><i class="fa-regular fa-pen-to-square"></i></a>
                    <a href="deleteprofilback.php?id=<?php echo $topic_info['id_user'];?>" class="btn btn"><i class="fa-regular fa-trash-can"></i></a>
                </div>

            
            </div>
            
     
        </div>


        <?php
    }

        ?>
</body>
</html>