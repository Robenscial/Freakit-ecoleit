<?php
require('database.php');
if(isset($_POST['edit'])){
    if(!empty($_POST['category']))
    {
       
        $id_category = htmlspecialchars($_POST['id']);
        $value = htmlspecialchars($_POST['category']);


        $storein_database = $bdd->prepare("UPDATE category_topic SET value = '$value' WHERE id_category_topic = ?");
        $storein_database->execute(array($id_category));
        header('location: managecategory.php');
        
    }
}