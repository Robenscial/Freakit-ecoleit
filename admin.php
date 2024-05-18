<?php session_start();?>
<?php require('displaytopicback.php');?>
<?php require('securityback.php');?>
<?php require('linkfunctionback.php');?>

<!DOCTYPE html>
<html lang="en">
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

            <div class="nav-btn">
                <a href="disconnectback.php">Deconnexion</a>
            </div>
                
        </header>
        
        <div class="nav-content">
            <a href="createtopic.php"><i class="fa-solid fa-plus"></i>Creer un sujet</a>
            <a href="createcategory.php"><i class="fa-solid fa-plus"></i>Creer une categorie</a>
            <a href="managetopic.php">gerer les sujets</a>
            <a href="managecategory.php">gerer les categories</a>
            <a href="displayprofil.php">gerer les Profiles</a>
        </div></br>

        
        <?php
            while($profil_info = $profil_user->fetch()){
                $role = $profil_info['role'];
                $activate = $profil_info['activate'];
                if( $role == "admin"){
                    $role = "user";
                }else{
                    $role = "admin";
                }

                if($activate){
                    $message = "Desactiver";
                }else{
                    $message = "Activer";
                }

        ?>
                <div class="container">
                    <div class="card col-8">

                        <div class="card-header">

                            <div class="profile">
                                <img src="<?php echo $profil_info['profile'];?>" alt="profil"/>
                            </div>
                            <h5><?php echo $profil_info['pseudo'];?></h5>
                        
                            <a href="editeprofile.php?id=<?php echo $profil_info['id_user'];?>"><h5><i class="fa-solid fa-user-pen"></i></h5></a>
                        </div>

                        <div class="card-body">

                            <div class="info-user">
                                <h6>Status: <?php if($activate){echo "actif";}else{echo "inactif";}?></h6>
                                <h6>Role: <?php echo $profil_info['role'];?><br>
                                <h6>Né(e) le: <?php echo $profil_info['birthdate'];?>
                            </div>

                            <div class="topic-count">
                                <span>Sujets</span>
                                <span>400</span>
                                <h5><i class="fa-regular fa-message"></i></h5>
                            </div>

                            <div class="comment-count">
                                <span>Commnentaires</span>
                                <span>400</span>
                                <h5><i class="fa-regular fa-comments"></i></h5>
                                
                            </div>

                        </div>

                       

                        <div class="card-footer">
                            <h6><?php echo $profil_info['baner'];?>
                        </div>
                    </div><br><br>
                </div>

        <?php
            }
            ?>

        <?php

            while($topic_info = $get_topic->fetch()){
                  ?>
                <div class="container">
                        <div class="card my-2 col-6">

                            <div class="card-header bg-info">
                                <h5><?php echo $topic_info['title'];?></h5>
                            </div>
                            
                            <div class="card-body">
                                <p class="card-text"><?php echo linkreplace($topic_info['description']);?></p>
                            </div>

                            <div class="card-footer text-primary">
                                publier le <?php echo $topic_info['date'];?>
                                
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
        

    </div>
    
</body>

</html>