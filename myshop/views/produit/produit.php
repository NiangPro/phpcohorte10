<div class="card container col-md-10 mt-3">
    <div class="card-header row bg-primary text-white">
        <h3 class="col-md-10">Liste des produits</h3>
        <div class="col-md-2 text-end">
            <a href="?page=produit&type=add" class="btn btn-success">Ajouter</a>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Nom</th>
                    <th>Prix</th>
                    <th>Stock</th>
                    <th>Description</th>
                    <th>Categorie</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($produits as $p): ?>
                <tr>
                    <td>
                        <img src="images/<?= $p->image ?>" width="200" height="70" class="rounded" alt="">
                    </td>
                    <td><?= $p->nom ?></td>
                    <td><?= $p->prix ?> FCFA</td>
                    <td><?= $p->qtestock ?></td>
                    <td><?= $p->description ?></td>
                    <td><?= $p->categorie_id ?></td>
                    <td>
                        <a href="" class="btn btn-outline-warning btn-sm"><i class="fa fa-edit"></i></a>
                        <a href="" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>