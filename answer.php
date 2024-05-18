<?php
        require('securityback.php');
        require('database.php');

        if(!empty($_POST['content'])){

            $answer = $_POST['content'];
            

            $store_answer = $bdd->prepare('INSERT INTO message(data, id_user, id_topic) VALUE(?, ?, ?)');
            $store_answer->execute(array($answer, $_SESSION['id'], $id_topic));
        }

        $get_message = $bdd->prepare('SELECT message.id_message, message.data, message.date, message.id_user, message.id_topic, user.pseudo, user.baner
                                      FROM message
                                      JOIN user ON user.id_user = message.id_user
                                      WHERE message.id_topic = ?');
        $get_message->execute(array($id_topic));
        

    

