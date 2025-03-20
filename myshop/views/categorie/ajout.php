<div class="card container col-md-6 mt-4">
    <div class="card-header row bg-primary text-white">
        <h5 class="col-md-10">Formulaire d'ajout categorie</h5>
        <div class="col-md-2 text-end">
            <a href="?page=categorie" class="btn btn-warning">Retour</a>
        </div>
    </div>
    <div class="card-body">
        <form action="" method="post">
            <p>Tous les champs avec (<span class="text-danger">*</span>) sont obligatoires</p>
            <div class="form-group">
                <label for="">Nom<span class="text-danger">*</span></label>
                <input type="text" required class="form-control" name="nom">
            </div>
            <button type="submit" class="btn btn-success mt-3" name="ajouter">Ajouter</button>
        </form>
    </div>
</div>