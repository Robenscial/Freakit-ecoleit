
<?php
require('database.php');


$id_profile = $_GET['id'];
    
require('database.php');

$get_profile = $bdd->prepare('SELECT * FROM user WHERE id_user =  ?');
$get_profile->execute(array($id_profile));
$info_user = $get_profile->fetch();
if($info_user){
$pseudo = $info_user['pseudo'];
$email = $info_user['email'];
$birthdate = $info_user['birthdate'];
$baner = $info_user['baner'];
$id = $info_user['id_user'];
}


if(isset($_POST['update'])){
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
            $user_birthdate = htmlspecialchars($_POST['birthdate']);
            $user_password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $user_baner = htmlspecialchars($_POST['baner']);
            $id_user = ($_POST['id_user']);

            $image = $_FILES['profile'];
            $filename = $image["name"];
            $type = $image['type'];
            $size = $image['size']; 
            $tmp_name = $image['tmp_name'];
            if(!empty($filename)){
                $path = "pictures/" .uniqid() . $filename;
                move_uploaded_file($tmp_name, $path);
            }else{
                $path = "pictures/pp2.png";
            }

            $storeprofile = $bdd->prepare("UPDATE user SET pseudo = '$user_pseudo', email = '$user_email', birthdate = '$user_birthdate', password = '$user_password', baner = '$user_baner' WHERE id_user = ?");
            $storeprofile->execute(array($id_user));
            header('location: homeback.php');


        }
    }

}


