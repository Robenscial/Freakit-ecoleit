<?php
require('database.php');
session_start();
$get_category = $bdd->prepare('SELECT * FROM category_topic');
$get_category->execute(array());

if(isset($_POST['send'])){
    if(
    !empty($_POST['title'])&&
    !empty($_POST['description'])&&
    !empty($_POST['category']))
    {
        $topic_title = htmlspecialchars($_POST['title']);
        $topic_description = htmlspecialchars($_POST['description']);
        $id_category = htmlspecialchars($_POST['category']);
        $status = true;
        
        $store_topic = $bdd->prepare('INSERT INTO topic(title, description, id_user, id_category_topic, status) VALUES(?, ?, ?, ?, ?)');
        $store_topic->execute(array($topic_title, $topic_description, $_SESSION['id'], $id_category, $status));
        
        $errorMSG = "votre sujet a ete cree avec succes";
        header('location: homeback.php');
        
    }else{
        $errorMSG = "veillez remplir tous les champs";
    }

}