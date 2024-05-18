<?php

$id_category = $_GET['id'];
require('database.php');

$deltopic = $bdd->prepare('DELETE FROM category_topic WHERE id_category_topic = ?');
$deltopic->execute(array($id_category));
header('location: managecategory.php');