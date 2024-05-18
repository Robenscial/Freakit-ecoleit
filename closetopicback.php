<?php
        require('database.php');
        
        $id_topic = $_GET['id'];

        $close_topic = $bdd->prepare("UPDATE topic SET status = false WHERE id_topic = ?");
        $close_topic->execute(array($id_topic));
        header('location: homeback.php');