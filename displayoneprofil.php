<?php require('displayoneprofilback.php');?>
<?php session_start();?>
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

            <div class="user">
                <a href="homeback.php"><h5><i class="fa-regular fa-user"></i></h5></a>
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

            while($profil_info = $get_oneprofil->fetch()){
                
                ?>
                <div class="container">
                    <div class="card my-3 col-6">

                        <div class="card-header bg-info"> 
                            <div class="profile">
                                <img src="<?php echo $profil_info['profile'];?>" alt="profil"/>
                            </div>      
                            
                        </div>

                        <div class="card-body">
                            <h5><?php echo $profil_info['pseudo'];?></h5> 
                            <h5><?php echo $profil_info['pseudo'];?></h5>
                        </div>

                        <div class="card-footer text-primary">          
                            <?php echo $profil_info['baner'];?>
                        </div>
 
                    </div>
                    <?php
            }
            ?>
                    <?php
                    while($topic_info = $get_alltopic->fetch()){
                        ?>
                        <div class="card col-6">

                             <div class="card-header">       
                                <a href="displayonetopic.php?id=<?php echo $topic_info['id_topic'];?>"><h5><?php echo $topic_info['title'];?></h5></a><?php echo $topic_info['date'];?>
                            </div>

                            <div class="card-body">
                                <h6><?php echo linkreplace($topic_info['description']);?></h6> 
                            </div>
                            
                        </div><br>
                    <?php
                    }
                    ?>
                </div>
    </div>
</body>
</html>