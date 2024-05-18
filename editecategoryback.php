<?php
    $id_category = $_GET['id'];
    
    require('database.php');

    $get_category = $bdd->prepare('SELECT id_category_topic, value FROM category_topic WHERE id_category_topic = ?');
    
    $get_category->execute(array($id_category));