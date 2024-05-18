<?php
require('database.php');

if(isset($_POST['send'])){
    if(
    !empty($_POST['name'])){
    
        $category_name = htmlspecialchars($_POST['name']);
        
        $store_category = $bdd->prepare('INSERT INTO category_topic (value) VALUES ( ?)');
        $store_category->execute(array($category_name));
        
        $errorMSG = "votre category a ete cree avec succes";
        header('location: admin.php');
        
    }else{
        $errorMSG = "veillez remplir tous les champs";
    }

}