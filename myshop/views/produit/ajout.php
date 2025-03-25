<div class="card container col-md-8 mt-3">
    <div class="card-header row bg-primary text-white">
        <h3 class="col-md-10">Formulaire d'ajout produit</h3>
        <div class="col-md-2 text-end">
            <a href="?page=produit" class="btn btn-warning">Retour</a>
        </div>
    </div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="">Nom</label>
                    <input type="text" name="nom" required class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Prix</label>
                    <input type="number" min="0" name="prix" required class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Categorie</label>
                    <select  name="categorie_id" required class="form-control">
                        <option value="">Veuillez selectionner une categorie</option>
                        <?php foreach($categories as $c): ?>
                            <option value="<?= $c['id'] ?>"><?= $c["nom"] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="">Quantite en stock</label>
                    <input type="number" min="0" name="qtestock" required class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Description</label>
                    <textarea  name="description" required class="form-control"></textarea>
                </div>
                <div class="form-group col-md-6">
                    <label for="">Image</label>
                    <input type="file" name="image" required class="form-control">
                </div>
            </div>
            <button type="submit" name="ajouter" class="btn btn-success btn-sm mt-3">Ajouter</button>
        </form>
    </div>
</div>