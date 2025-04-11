<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Myshop</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="assets/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Myshop</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <?php if(!isset($_SESSION["user"]) || $_SESSION["user"]->role != "admin"): ?>
                    <li class="nav-item">
                        <a class="nav-link <?= (!isset($_GET['page']) || ($_GET['page']!= 'categorie' && $_GET['page']!= 'produit')) ? 'active':'' ?>" href="?page=home" aria-current="page"
                            >Accueil</a
                        >
                    </li>
                    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Boutique</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">Toutes les categories</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <?php foreach($cats as $c): ?>
                                <li><a class="dropdown-item" href="?page=detailcategorie&idcat=<?= $c['id'] ?>"><?= $c["nom"] ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                    </li>
                    <?php endif; ?> 

                    <?php if(isset($_SESSION["user"]) && $_SESSION["user"]->role == "admin"): ?>
                    <li class="nav-item">
                        <a class="nav-link <?= (isset($_GET['page']) && $_GET['page']== 'categorie') ? 'active':'' ?>" href="?page=categorie">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=produit">Produits</a>
                    </li>
                    <?php endif; ?> 

                    <?php if(isset($_SESSION["user"])): ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?= $_SESSION["user"]->prenom ?></a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">Profil</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="?page=deconnexion">Deconnexion</a></li>
                            </ul>
                    </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=connexion"><i class="fa fa-lock"></i> Connexion</a>
                        </li>
                    <?php endif; ?>
                    
                    </ul>
                    <?php if(isset($_SESSION["user"]) && $_SESSION["user"]->role == "client"): ?>
                    <form class="d-flex">
                        <a href="?page=panier" class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            <span class="badge bg-dark text-white ms-1 rounded-pill"><?= count($panier) ?></span>
                        </a>
                    </form>
                    <?php endif; ?>

                </div>
            </div>
        </nav>
    