<?php

$id_topic = $_GET['id'];
require('database.php');

$deltopic = $bdd->prepare('DELETE FROM topic WHERE id_topic = ?');
$deltopic->execute(array($id_topic));
header('location: displaytopic.php');
