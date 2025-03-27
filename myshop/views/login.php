<div class="container col-md-4 mt-5 mb-5 pt-5 pb-4">
<?php require_once("views/includes/getmessage.php"); ?>

    <div class="card">
        <div class="card-header bg-dark">
            <h4 class="text-center text-white">Connexion</h4>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Mot de passe</label>
                    <input type="password" name="mdp" required class="form-control">
                </div>
                <button type="submit" name="connecter" class="btn btn-success mt-3">Se connecter</button>
                <a href="?page=inscription" class="mt-3 btn text-decoration-underline text-primary">Creer un compte</a>
            </form>
        </div>
    </div>
</div>