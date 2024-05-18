<?php require('displayonetopicback.php');?>
<?php session_start();?>
<?php require('securityback.php');?>
<?php require('answer.php');?>
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
        <div class="container"><br>
        <?php

            while($topic_info = $get_onetopic->fetch()){
        ?>
                
                    <div class="card my-3 col-6">

                        <div class="card-header bg-info">       
                            <h5><?php echo $topic_info['title'];?></h5>
                        </div>

                        <div class="card-body">
                            <?php echo linkreplace($topic_info['description']);?> 
                        </div>

                        <div class="card-footer text-primary">
                            publié par <?php echo $topic_info['pseudo'];?> le <?php echo $topic_info['date'];?> 
                        </div>

                    </div>
                    <?php 
                        if($topic_info['status']){

                    ?>
                    <form  class="form-group" method="POST">
                        <label>Reponse</label>
                        <textarea name="content" class="form-contol col-6"></textarea>
                        <button class="btn" type="submit" name="send">Repondre</button>
                    </form><br><br>
                    <?php
                        }else{
                           echo "<b>Vous ne pouvez pas repondre à ce sujet car il est fermé !!!</b>";
                        }
                        ?>

                <?php
                    while($message_info = $get_message->fetch()){
                        ?>
                        <div class="card col-6">
                             <div class="card-header">       
                                <h5><?php echo $message_info['pseudo'];?></h5><?php echo $message_info['date'];?>
                            </div>

                            <div class="card-body">
                                <h6><?php echo linkreplace($message_info['data']);?></h6> 
                            </div>

                            <div class="card-footer">
                                <h6><?php echo $message_info['baner'];?></h6> 
                            </div>
                            
                        </div><br>
                    <?php

                    }
                    ?>
                    
                </div>
        
            <?php
            }
            ?>
    </div>
    <?php require('footer.php');?>   
</body>
</html>