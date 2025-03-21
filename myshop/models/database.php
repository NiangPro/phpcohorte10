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

function ajouterUneCategorie($nom){
    global $db;
    try{
        $q = $db->prepare("INSERT INTO categories VALUES(null, :nom)");
        return $q->execute([
            "nom" => $nom
        ]);

    }catch(PDOException $e){
        echo "Erreur: ".$e->getMessage()." a la ligne ".__LINE__;
    }
}

function supprimerUneCategorie($id){

    global $db;
    try {
        $q = $db->prepare("DELETE FROM categories WHERE id=:id");

        return $q->execute(["id" =>$id]);
    }catch(PDOException $e){
        echo "Erreur: ".$e->getMessage()." a la ligne ".__LINE__;
    }
}

function recupererUneCategorie($id){
    global $db;
    try{
        $q = $db->prepare("SELECT * FROM categories WHERE id=:id");
        $q->execute(["id" => $id]);

        return $q->fetch(PDO::FETCH_OBJ);
    }catch(PDOException $e){
        echo "Erreur: ".$e->getMessage()." a la ligne ".__LINE__;
    }
}

function modifierUneCategorie($id, $nom){
    global $db;
    try{
        $q  = $db->prepare("UPDATE categories SET nom=:nom WHERE id=:id");
        return $q->execute(["nom" => $nom, "id" => $id]);
    }catch(PDOException $e){
        echo "Erreur: ".$e->getMessage()." a la ligne ".__LINE__;
    }
}