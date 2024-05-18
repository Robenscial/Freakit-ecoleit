<?php require('displayalltopicback.php');?>
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
                <a href="registration.php">Inscription</a>
                <a href="connection.php">connexion</a>
                
            </div>
                  
        </header>

        <div class="text2">
            <h6><p>
            Bienvenue sur FreakIT Forum. Tu n'as pas encore de compte? alors <a href="registration.php"> inscris toi</a> et decouvre les merveilles!!!
            </p></h6>
        </div>
        
    </div>


    <?php

    while($topic_info = $get_alltopic->fetch()){
      ?>
        <div class="container">
            <div class="card my-3 col-6">

                <div class="card-header bg-info">       
                    <a href="displayonetopic.php?id=<?php echo $topic_info['id_topic'];?>"><?php echo $topic_info['title'];?></a>
                </div>

                <div class="card-body">
                    <?php echo $topic_info['description'];?> 
                </div>

                <div class="card-footer">
                    Categorie:  <?php echo $topic_info['value'];?>
                </div>

                <div class="card-footer text-primary">
                    publié par <?php echo $topic_info['pseudo'];?> le <?php echo $topic_info['date'];?> 
                </div>

            
            </div>
            
     
        </div>


      <?php


}





?>

</body>
</html>