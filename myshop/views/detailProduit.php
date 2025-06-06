<!-- Product section-->
<section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <?php require_once("views/includes/getmessage.php"); ?>
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" height="400" src="images/<?= $produit->image ?>" alt="..." /></div>
                    <div class="col-md-6">
                        <div class="small mb-1">Categorie: BST-498</div>
                        <h1 class="display-5 fw-bolder"><?= $produit->nom ?></h1>
                        <div class="fs-5 mb-5">
                            <span class=""><?= $produit->prix ?> FCFA</span>
                        </div>
                        <p class="lead"><?= $produit->description ?></p>
                        <div class="d-flex">
                            <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                            <a href="?page=detailproduit&id=<?= $produit->id ?>&type=addpanier" class="btn btn-outline-dark flex-shrink-0" type="button">
                                <i class="bi-cart-fill me-1"></i>
                                Ajouter au panier
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Related items section-->
        <section class="py-5 bg-light">
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="fw-bolder mb-4">Produits similaires</h2>
                <?php if(count($prodSimilaires) > 1): ?>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <?php foreach($prodSimilaires as $p): ?> 
                        <?php if($produit->id != $p->id): ?>   
                            <div class="col mb-5">
                                    <div class="card h-100">
                                        <!-- Product image-->
                                        <img class="card-img-top" height="180" src="images/<?= $p->image ?>" alt="..." />
                                        <!-- Product details-->
                                        <div class="card-body p-4">
                                            <div class="text-center">
                                                <!-- Product name-->
                                                <h5 class="fw-bolder"><?= $p->nom ?></h5>
                                                <!-- Product price-->
                                                <?= $p->prix ?> FCFA
                                            </div>
                                        </div>
                                        <!-- Product actions-->
                                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="?page=detailproduit&id=<?= $p->id ?>"><i class="fa fa-eye"></i></a></div>
                                        </div>
                                    </div>
                            </div>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                    <?php else: ?>
                        <div class="container h6 text-danger">
                            Aucun produit similaire pour l'instant
                        </div>
                    <?php endif; ?>                
            </div>
        </section>