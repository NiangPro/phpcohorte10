<?php 

try {
    $db = new PDO("mysql:host=localhost;dbname=myshop", "root", "");
} catch (PDOException $e) {
    echo "Erreur: ".$e->getMessage()." a la ligne ".__LINE__;
}


function recupererToutesLesCategories(){
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM categories");
        $q->execute();

       return $q->fetchAll();
    }catch (PDOException $e) {
        echo "Erreur: ".$e->getMessage()." a la ligne ".__LINE__;
    }
}