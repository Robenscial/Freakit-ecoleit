<?php

    require ('database.php');

    $get_alltopic = $bdd->query('SELECT topic.id_topic, topic.title, topic.description, topic.date, category_topic.value, user.id_user, user.pseudo
                                 FROM topic 
                                 JOIN user ON user.id_user = topic.id_user
                                 JOIN category_topic ON category_topic.id_category_topic = topic.id_category_topic
                                 ORDER BY topic.id_topic DESC');



    if(isset($_GET['search']) && !empty($_GET['search'])){

        $data = $_GET['search'];
        $get_alltopic = $bdd->query("SELECT topic.id_topic, topic.title, topic.description, topic.date, category_topic.value, user.id_user, user.pseudo 
        FROM topic 
        JOIN user ON user.id_user = topic.id_user
        JOIN category_topic ON category_topic.id_category_topic = topic.id_category_topic
        WHERE title LIKE '%" .$data. "%' ORDER BY topic.id_topic DESC");
        
    }