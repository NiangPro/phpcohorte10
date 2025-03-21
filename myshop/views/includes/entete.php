<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav
        class="navbar navbar-expand-sm navbar-dark bg-primary"
    >
        <div class="container">
            <a class="navbar-brand" href="#">My<span class="text-warning">Shop</span></a>
            <button
                class="navbar-toggler d-lg-none"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId"
                aria-controls="collapsibleNavId"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?= (!isset($_GET['page']) || ($_GET['page']!= 'categorie' && $_GET['page']!= 'produit')) ? 'active':'' ?>" href="?page=home" aria-current="page"
                            >Accueil</a
                        >
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= (isset($_GET['page']) && $_GET['page']== 'categorie') ? 'active':'' ?>" href="?page=categorie">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=produit">Produits</a>
                    </li>
                </ul>
                
            </div>
        </div>
    </nav>