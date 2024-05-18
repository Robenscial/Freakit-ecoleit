<?php
require('database.php');
if(isset($_POST['send'])){
    if(
    !empty($_POST['pseudo'])&&
    !empty($_POST['password']))
    {
        $user_pseudo = htmlspecialchars($_POST['pseudo']);
        $user_password = htmlspecialchars($_POST['password']);
        
        $check_userexist = $bdd->prepare('SELECT * FROM user WHERE pseudo=?');
        $check_userexist->execute(array($user_pseudo));
        
        if($check_userexist->rowCount() > 0){

            $user_data = $check_userexist->fetch();
            if(password_verify($user_password, $user_data['password'])){
                
                session_start();

                $_SESSION['auth'] = true;
                $_SESSION['id'] = $user_data['id_user'];
                $_SESSION['pseudo'] = $user_data['pseudo'];
                $_SESSION['email'] = $user_data['email'];
                $_SESSION['role'] = $user_data['role'];
                $_SESSION['activate'] = $user_data['activate'];

                if($_SESSION['role'] == "user"){
                    if($user_data['activate']){
                        header('location: user.php');
                    }else{
                        $errorMSG = "Votre compte est desactié veillez contacter l'administrateur!!!";
                        header('location: activate.php');
                    }           
                }else{
                    header('location: admin.php');
                }     
                
            }else{
                $errorMSG = "nom d'utilisateur ou mot de passe incorrect";
            }

        }else{

            $errorMSG = "nom d'utilisateur ou mot de passe incorrect";
        }
        
    }else{
        $errorMSG = "veillez remplir tous les champs";
    }

}
