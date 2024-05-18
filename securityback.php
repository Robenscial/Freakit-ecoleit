<?php

if(!isset($_SESSION["auth"])){
    header('location: connection.php');
}

