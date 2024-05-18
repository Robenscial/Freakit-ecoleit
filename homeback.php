<?php
session_start();
if(!isset($_SESSION["auth"])){
    header('location: connection.php');
}else{

    if($_SESSION['activate'] == true){

        if($_SESSION['role'] == "admin"){
            header('location: admin.php');
        }else{
            header('location: user.php');
        }
    }else{
        header('location: activate.php');
    }
}