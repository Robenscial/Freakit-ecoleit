<?php
$id_user = $_GET['id'];
require('database.php');


$deltopic = $bdd->prepare('DELETE FROM user WHERE id_user = ?');
$deltopic->execute(array($id_user));
header('location: displayprofil.php');