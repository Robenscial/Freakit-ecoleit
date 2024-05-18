<?php require('database.php');

$get_category = $bdd->query('SELECT * FROM category_topic ORDER BY id_category_topic DESC');

if(isset($_GET['search']) && !empty($_GET['search'])){
    $data = $_GET['search'];
    $get_category = $bdd->query('SELECT * FROM category_topic WHERE value LIKE "%' .$data. '%" ORDER BY id_category_topic');
}