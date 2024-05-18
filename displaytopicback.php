<?php
        require('database.php');
        
        $profil_user = $bdd->prepare('SELECT * FROM user WHERE id_user = ?');
        $profil_user->execute(array($_SESSION['id']));


        $get_topic = $bdd->prepare('SELECT topic.id_topic, topic.title, topic.description, topic.date, category_topic.value, user.id_user, user.role, user.pseudo, user.baner, user.profile, user.activate, user.birthdate, user.email
                                    FROM topic 
                                    JOIN user ON user.id_user = topic.id_user
                                    JOIN category_topic ON category_topic.id_category_topic = topic.id_category_topic
                                    WHERE topic.id_user = ? 
                                    ORDER BY topic.id_topic DESC');

        $get_topic->execute(array($_SESSION['id']));
        
       
if(isset($_GET['search']) && !empty($_GET['search'])){
        $data = $_GET['search'];

        $get_topic = $bdd->query('SELECT topic.id_topic, topic.title, topic.description, topic.date, category_topic.value, user.id_user, user.role, user.pseudo, user.baner, user.profile, user.activate, user.birthdate, user.email
                                    FROM topic 
                                    JOIN user ON user.id_user = topic.id_user
                                    JOIN category_topic ON category_topic.id_category_topic = topic.id_category_topic
                                    WHERE title LIKE "%' .$data. '%" ORDER BY topic.id_topic DESC');
                                    
}



