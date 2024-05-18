<?php
        require('database.php');
        
            $id_profil = $_GET['id'];

            $get_oneprofil = $bdd->prepare('SELECT user.id_user, user.pseudo, user.email, user.baner, user.birthdate, user.role, user.profile
                                            FROM user WHERE user.id_user = ?');
                                          
            $get_oneprofil->execute(array($id_profil));

            $get_alltopic = $bdd->prepare('SELECT * FROM topic WHERE id_user=?');
            $get_alltopic->execute(array($id_profil));


       

        
       

       
