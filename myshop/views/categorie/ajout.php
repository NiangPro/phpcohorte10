<div class=" container col-md-6 mt-5 mb-5 pt-5 pb-5">
<div class="card">
    <div class="card-header row bg-dark text-white">
        <h5 class="col-md-10">Formulaire d'<?= isset($c) ? 'édition': 'ajout' ?> categorie</h5>
        <div class="col-md-2 text-end">
            <a href="?page=categorie" class="btn btn-warning">Retour</a>
        </div>
    </div>
    <div class="card-body">
        <form action="" method="post">
            <p>Tous les champs avec (<span class="text-danger">*</span>) sont obligatoires</p>
            <div class="form-group">
                <label for="">Nom<span class="text-danger">*</span></label>
                <input type="text" value="<?= isset($c) ? $c->nom : '' ?>" required class="form-control" name="nom">
            </div>
            <?php if($_GET["type"] == "add"): ?>
            <button type="submit" class="btn btn-success mt-3" name="ajouter">Ajouter</button>
            <?php else: ?>
                <button type="submit" class="btn btn-warning mt-3" name="modifier">Modifier</button>
            <?php endif; ?>

        </form>
    </div>
</div>
</div>
