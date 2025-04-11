<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Panier</h1>
        </div>
    </div>
</header>
<section class="container py-5">
    <?php require_once("views/includes/getmessage.php"); ?>
    <?php if(count($pans) > 0): ?>
        <div class="row">
            <div class="col-md-8">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Nom</th>
                            <th>Prix</th>
                            <th>Nombre</th>
                            <th>Montant</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pans as $p): ?>
                            <tr>
                                <td>
                                    <img src="images/<?= $p->image ?>" width="100" height="50" alt="">
                                </td>
                                <td><?= $p->nomproduit ?></td>
                                <td><?= $p->prix ?> FCFA</td>
                                <td class="text-center"><a href=""><i class="fa fa-minus text-dark"></i></a><span class="border py-1 rounded px-2"><?= $p->nombre ?></span><a href=""><i class="fa fa-plus text-dark"></i></a></td>
                                <td><?= $p->montant ?> FCFA</td>
                                <td class="text-center"><a href="?page=panier&delete=<?= $p->id ?>"><i class="fa fa-close fa-2x  text-danger"></i></a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <table class="table">

                            <tr>
                                <th>Sous Total:</th>
                                <td>50000F</td>
                            </tr>
                            <tr>
                                <th>Total:</th>
                                <td>50000F</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    <?php else: ?>
        <p>Votre panier est vide 😢!</p>
    <?php endif; ?>
</section>