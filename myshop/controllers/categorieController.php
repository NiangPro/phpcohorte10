<?php 


$categories = recupererToutesLesCategories();

print_r($categories);

if (isset($_GET["type"])) {
    require_once("views/categorie/ajout.php");
}else{
    require_once("views/categorie/categorie.php");
}