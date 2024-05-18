<?php require('displayprofilback.php');?>
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
                <form method="GET">
                    <input type="search" name="search" placeholder="recherchez un pseudo">
                    <button type="submit">Recherche</button>
                </form>
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
                    <div class="card col-6">

                        <div class="card-header bg-info">

                            <div class="profile">
                                <img src="<?php echo $profil_info['profile'];?>" alt="profil"/>
                            </div>
                            <a href="displayoneprofil.php?id=<?php echo $profil_info['id_user'];?>"><h5><?php echo $profil_info['pseudo'];?></h5></a>
                            
                            <div class="dropdown">
                                <button class="dropbtn" onclick="window.location.href ='#'"><h5><i class="fa-solid fa-bars"></i></h5></button>
                                    <div class="dropdown-content">
                                        <a href="activateback.php?activate=<?php echo $activate;?>&id=<?php echo $profil_info['id_user'];?>"><?php echo $message;?></a>
                                        <a href="deleteprofilback.php?id=<?php echo $profil_info['id_user'];?>">Supprimer</a>
                                        <a href="appointadminback.php?role=<?php echo $role;?>&id=<?php echo $profil_info['id_user'];?>">Nommer <?php echo $role;?></a>
                                        <a href="displayoneprofil.php?id=<?php echo $profil_info['id_user'];?>">Voire les sujets</a> 
                                    </div>  
                            </div>

                            

                        </div>

                        <div class="card-body">

                            <div class="info-user">
                                <h6>Status: <?php if($activate){echo "actif";}else{echo "inactif";}?></h6>
                                <h6>Role: <?php echo $profil_info['role'];?><br>
                                <h6>Né(e) le: <?php echo $profil_info['birthdate'];?>
                            </div>

                            <div class="topic-count">
                                <span>Sujets</span>
                                <span><?php $_SESSION['count_topic']= $profil_info['num_topic']; echo $profil_info['num_topic'];?></span>
                                <h5><i class="fa-regular fa-message"></i></h5>
                            </div>

                            <div class="comment-count">
                                <span>Commnentaires</span>
                                <span>100</span>
                                <h5><i class="fa-regular fa-comments"></i></h5>
                                
                            </div>

                        </div>

                       

                        <div class="card-footer">
                            <h6><?php echo $profil_info['baner'];?>
                        </div>
                    </div><br>
                </div>

        <?php
            }
            ?>
    </div>
    <?php require('footer.php');?>
</body>
</html>