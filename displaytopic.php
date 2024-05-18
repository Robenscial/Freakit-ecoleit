<?php require('displaytopicback.php');?>
<?php require('securityback.php');?>


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
                <input type="search" name="pseudo" placeholder="recherchez un sujet">
                <button type="button" onclick="#">Recherche</button>
            </div>

            <div class="nav-btn">
                <a href="disconnectback.php">Deconnexion</a>
            </div>
                
        </header>
        

        <?php

            while($topic_info = $get_topic->fetch()){
                  ?>
                <div class="container">
                        <div class="card my-2 col-6">

                            <div class="card-header">
                                <a href="displayonetopic.php?id=<?php echo $topic_info['id_topic'];?>"><h5><?php echo $topic_info['title'];?></a></h5>
                                <span>publié le <?php echo $topic_info['date'];?> </span>
                            </div>

                            <div class="card-body">
                                <p class="card-text"><?php echo $topic_info['description'];?></p>
                            </div>

                            <div class="card-footer">
                                <a href="edittopic.php?id=<?php echo $topic_info['id_topic'];?>" class="btn btn-warning"><i class="fa-regular fa-pen-to-square"></i></a>
                                <a href="deletetopicback.php?id=<?php echo $topic_info['id_topic'];?>" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></a>
                            </div>
                              
                            
                        
                        </div>
                 
            </div>


                  <?php


            }

        ?>
        
        



      

    </div>
    <?php require('footer.php');?>
</body>

</html>