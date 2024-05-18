<?php
        require('database.php');
        
        $activate = $_GET['activate'];
        $id_profil = $_GET['id'];

        if($activate == true){
                $activate = false;        
        }else{
                $activate = true;
        }
        $edit_profil = $bdd->prepare("UPDATE user SET activate = '$activate' WHERE id_user = ?");
        $edit_profil->execute(array($id_profil));
        header('location: displayprofil.php');
        