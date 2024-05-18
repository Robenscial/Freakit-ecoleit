<?php

require('database.php');
if(isset($_POST['send'])){
    if(
    !empty($_POST['pseudo'])&&
    !empty($_POST['email'])&&
    !empty($_POST['birthdate'])&&
    !empty($_POST['password'])&&
    !empty($_POST['cpassword'])&&
    !empty($_POST['baner']))
    {
        if($_POST['password'] == $_POST['cpassword']){

            $user_pseudo = htmlspecialchars($_POST['pseudo']);
            $user_email = htmlspecialchars($_POST['email']);
            $user_birtdate = htmlspecialchars($_POST['birthdate']);
            $user_password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $user_baner = htmlspecialchars($_POST['baner']);
            $gender = $_POST['rad'];

                $image = $_FILES['profile'];
                $filename = $image["name"];
                $type = $image['type'];
                $size = $image['size']; 
                $tmp_name = $image['tmp_name'];
            if(!empty($filename)){
                $path = "pictures/" .uniqid() . $filename;
                move_uploaded_file($tmp_name, $path);
            }else{

                if($gender == "Feminin"){
                    $path = "pictures/pp2.png";
                }else{
                    $path = "pictures/pp1.png";
                }
                
            }
                
            

            $check_user = $bdd->prepare('SELECT pseudo, email FROM user WHERE pseudo=? OR email=?');
            $check_user->execute(array($user_pseudo, $user_email));
            $role = "user";
            $activate = true;

            if($check_user->rowCount() == 0){

                $insert_user = $bdd->prepare('INSERT INTO user(pseudo, email, birthdate, password, baner, role, activate, profile) VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
                $insert_user->execute(array($user_pseudo, $user_email, $user_birtdate, $user_password, $user_baner, $role, $activate, $path));

                $get_user = $bdd->prepare('SELECT id_user, pseudo, email FROM user WHERE  pseudo=? AND email=?');
                $get_user->execute(array($user_pseudo, $user_email));

                $info_user = $get_user->fetch();

                $_SESSION['auth'] = true;
                $_SESSION['id'] = $info_user['id_user'];
                $_SESSION['pseudo'] = $info_user['pseudo'];
                $_SESSION['email'] = $info_user['email'];

                header('location: connection.php');

            }else{
                $errorMSG = "l'utilisateur existe deja";
            }
        }else{
            $errorMSG = "les mots de passe ne correspondent pas!!!";
        }

        
    }else{
        $errorMSG = "veillez remplir tous les champs";
    }

}
