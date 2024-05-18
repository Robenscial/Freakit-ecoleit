<?php
        require('database.php');
        
            $id_topic = $_GET['id'];

            $get_onetopic = $bdd->prepare('SELECT topic.id_topic, topic.title, topic.description, topic.date, topic.status, category_topic.value, user.id_user, user.pseudo
                                            FROM topic 
                                            JOIN user ON user.id_user = topic.id_user
                                            JOIN category_topic ON category_topic.id_category_topic = topic.id_category_topic
                                            WHERE topic.id_topic = ?');

            $get_onetopic->execute(array($id_topic));


        
       

       
