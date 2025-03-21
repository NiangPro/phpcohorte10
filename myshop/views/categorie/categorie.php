<div class="container">
    <div class="card mt-3 container col-md-7">
        <div class="card-header row bg-primary text-white">
            <h3 class="col-md-10">Liste de categories</h3>
            <div class="col-md-2 text-end">
                <a href="?page=categorie&type=add" class="btn btn-success">Ajouter</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($categories as $c){ ?>
                    <tr>
                        <td><?=  $c["nom"] ?></td>
                        <td>
                            <a href="?page=categorie&type=edit&id=<?= $c['id'] ?>" class="btn btn-warning btn-sm rounded-pill" ><i class="fa fa-edit"></i></a>
                            <a data-bs-toggle="modal" data-bs-target="#exampleModal<?= $c['id'] ?>" href="" class="btn btn-danger btn-sm rounded-pill"><i class="fa fa-trash"></i></a>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal<?= $c['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Catégorie</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Êtes-vous sûr de vouloir supprimer?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Non</button>
                                    <a href="?page=categorie&idcategorie=<?= $c['id'] ?>" class="btn btn-success">Oui</a>
                                </div>
                                </div>
                            </div>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>