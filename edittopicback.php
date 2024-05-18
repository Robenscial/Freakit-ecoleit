
<?php
    $id_topic = $_GET['id'];
    
    require('database.php');
    $get_category = $bdd->query('SELECT * FROM category_topic');

    $get_topic = $bdd->prepare('SELECT topic.id_topic, topic.title, topic.description, category_topic.value
    FROM topic 
    JOIN category_topic ON category_topic.id_category_topic = topic.id_category_topic
    WHERE topic.id_topic = ?');

    $get_topic->execute(array($id_topic));
?>