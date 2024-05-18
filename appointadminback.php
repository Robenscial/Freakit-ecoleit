<?php
        $role = $_GET['role'];
        $id_user = $_GET['id'];

        require('database.php');
      
        $user_role = $bdd->prepare("UPDATE user SET role = '$role' WHERE id_user =? ");
        $user_role->execute(array($id_user));
        header('location: displayprofil.php');

    
    

