<?php 

require('database.php');

 $profil_user = $bdd->query('SELECT user.id_user, user.pseudo, user.activate, user.role, user.birthdate, user.baner, user.profile, 
                            COUNT(topic.id_user) AS num_topic
                            FROM user 
                            LEFT JOIN topic ON topic.id_user = user.id_user 
                            GROUP BY user.id_user, user.pseudo
                            ORDER BY id_user');
                        

 if(isset($_GET['search']) && !empty($_GET['search'])){
    $data = $_GET['search'];

    $profil_user = $bdd->query('SELECT user.id_user, user.pseudo, user.activate, user.role, user.birthdate, user.baner, user.profile, 
                            COUNT(topic.id_user) AS num_topic 
                            FROM user LEFT JOIN topic ON topic.id_user = user.id_user
                            WHERE pseudo LIKE "%' .$data. '%"
                            GROUP BY user.id_user, user.pseudo
                            ORDER BY id_user');
}