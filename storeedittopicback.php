<?php
require('database.php');
if(isset($_POST['edit'])){
    if(
    !empty($_POST['title'])&&
    !empty($_POST['description'])&&
    !empty($_POST['category']))
    {
        $topic_title = htmlspecialchars($_POST['title']);
        $topic_description = htmlspecialchars($_POST['description']);
        $id_category = htmlspecialchars($_POST['category']);
        $id_topic = htmlspecialchars($_POST['id']);

        $storein_database = $bdd->prepare("UPDATE topic
                                             SET title = '$topic_title', description = '$topic_description', id_category_topic = '$id_category'
                                             WHERE id_topic = ?");
        $storein_database->execute(array($id_topic));
        header('location: homeback.php');
        
    }
}