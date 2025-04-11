<?php 

try {
    $db = new PDO("mysql:host=localhost;dbname=myshop", "root", "");
} catch (PDOException $e) {
    echo "Erreur: ".$e->getMessage()." a la ligne ".__LINE__;
}

function seconnecter($email){
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM users WHERE email=:email");
        $q->execute(["email" => $email]);

        return $q->fetch(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
        setmessage("Erreur: ".$e->getMessage()." a la ligne ".__LINE__, "danger");
    }
}

function inscrire($prenom, $nom, $tel, $adresse, $email, $mdp, $role){
    global $db;
    try {
        $q = $db->prepare("INSERT INTO users VALUES(null, :prenom, :nom, :tel, :adresse, :email, :mdp, :role)");
        return $q->execute([
            "prenom" => $prenom,
            "tel" => $tel,
            "nom" => $nom,
            "adresse" => $adresse,
            "email" => $email,
            "mdp" => $mdp,
            "role" => $role,
        ]);
    }catch (PDOException $e) {
        setmessage("Erreur: ".$e->getMessage()." a la ligne ".__LINE__, "danger");
    }
}

function recupererTousLesProduitsSimilaires($categorie_id){
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM produits WHERE categorie_id =:categorie_id");
        $q->execute(["categorie_id" => $categorie_id]);

        return $q->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
        setmessage("Erreur: ".$e->getMessage()." a la ligne ".__LINE__, "danger");
    }
}

function ajouterUnProduit($nom, $prix, $qtestock, $image, $description, $categorie_id){
    global $db;
    try {
        $q = $db->prepare("INSERT INTO produits VALUES(null, :nom, :prix, :qtestock, :image, :description, :categorie_id)");
        return $q->execute([
            "nom" => $nom,
            "prix" => $prix,
            "qtestock" => $qtestock,
            "image" => $image,
            "description" => $description,
            "categorie_id" => $categorie_id
        ]);
    } catch (PDOException $e) {
        echo "Erreur: ".$e->getMessage()." a la ligne ".__LINE__;
    }
}

function ajouterAuPanier($produit_id, $client_id, $nombre, $montant){
    global $db;
    try{
        $q = $db->prepare("INSERT INTO panier VALUES (NULL, :produit_id, :client_id, :nombre, :montant)");
        return $q->execute([
            "client_id" => $client_id,
            "produit_id" => $produit_id,
            "nombre" => $nombre,
            "montant" => $montant
        ]);
    }catch (PDOException $e) {
        setmessage("Erreur: ".$e->getMessage()." a la ligne ".__LINE__, "danger");
    }
}

function recupererLesProduitsDuPanier($client_id)
{
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM panier WHERE client_id =:client_id");
        $q->execute(["client_id" => $client_id]);


        return $q->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
        setmessage("Erreur: ".$e->getMessage()." a la ligne ".__LINE__, "danger");
    }
}

function supprimerUnProduitDansLePanier($id){
    global $db;
    try{
        $q = $db->prepare("DELETE FROM panier WHERE id=:id");
        return $q->execute(["id" => $id]);
    }catch (PDOException $e) {
        setmessage("Erreur: ".$e->getMessage()." a la ligne ".__LINE__, "danger");
    }
}

function recupererLesInfosDuPanier($client_id)
{
    global $db;
    try {
        $q = $db->prepare("SELECT pa.id as id, p.nom as nomproduit, image, nombre, prix, montant, client_id, produit_id, qtestock
                            FROM panier pa, users c, produits p
                            WHERE pa.client_id =c.id AND pa.produit_id = p.id AND c.id = :client_id");
        $q->execute(["client_id" => $client_id]);


        return $q->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
        setmessage("Erreur: ".$e->getMessage()." a la ligne ".__LINE__, "danger");
    }
}

function recupererTousLesProduits(){
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM produits ORDER BY id DESC");
        $q->execute();

        return $q->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
        echo "Erreur: ".$e->getMessage()." a la ligne ".__LINE__;
    }
}

function recupererUnProduit($id)
{
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM produits WHERE id=:id");
        $q->execute(["id" => $id]);

        return $q->fetch(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
        echo "Erreur: ".$e->getMessage()." a la ligne ".__LINE__;
    }
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