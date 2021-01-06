<?php include('template/header.php'); ?>
<?php include('template/menu.php'); ?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="?route=dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Accueil</li>
    </ol>
</nav>

<!--  [TODO]
        - Informations de l'utilisateur
        - Permissions : Société
        - Statistiques
-->

<div class="jumbotron">
    <h1 class="display-4">Bienvenue, <?php echo $_SESSION['prenom'] ?> !</h1>
    <p class="lead">Vous êtes actuellement sur votre tableau de bord...</p>

</div>


<div class="row">

    <div class="col-md-3">
        <h3 class="text-secondary">Accès rapide<span class="float-right"><i class="fas fa-shipping-fast"></i></span></h3>
        <hr>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Commander</h5>
                <h6 class="card-subtitle mb-2 text-muted">Accès rapide</h6>
                <a href="?route=bookingprint" type="button" class="btn btn-dark btn-sm btn-block">Accéder</a>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Réservations</h5>
                <h6 class="card-subtitle mb-2 text-muted">Accès rapide</h6>
                <a href="?route=order" class="btn btn-dark btn-sm btn-block">Accéder</a>
            </div>
        </div>

    </div>
    <div class="col-md-9">
        <div class="row">

            <div class="col-md-6">
                <h3 class="text-secondary">Vos informations <span class="float-right"><i class="fas fa-id-card-alt"></i></span></h3>
                <hr>


            </div>
            <div class="col-md-6">
                <h3 class="text-secondary">Vos accès <span class="float-right"><i class="fas fa-clipboard-check"></i></span></h3>
                <hr>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Commander
                            <small class="float-right text-success">
                                <i class="fas fa-pen text-success"></i>&nbsp;
                                <i class="fas fa-plus text-success"></i>&nbsp;
                                <i class="fas fa-eye text-success"></i>&nbsp;
                                <i class="fas fa-trash-alt text-success"></i>
                            </small>
                        </h5>
                        <h6 class="card-subtitle mb-2 text-muted">
                            <h6 class="card-subtitle mb-2 text-muted">Aperçu de vos permissions</h6>
                        </h6>

                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Espace entreprise
                            <small class="float-right text-danger">
                                <i class="fas fa-pen text-danger"></i>&nbsp;
                                <i class="fas fa-plus text-danger"></i>&nbsp;
                                <i class="fas fa-eye text-success"></i>&nbsp;
                                <i class="fas fa-trash-alt text-danger"></i>
                            </small>
                        </h5>
                        <h6 class="card-subtitle mb-2 text-muted">
                            <h6 class="card-subtitle mb-2 text-muted">Modification des comptes salariés</h6>
                        </h6>

                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Chiffre d'affaire
                            <small class="float-right text-danger">
                                <i class="fas fa-pen text-danger"></i>&nbsp;
                                <i class="fas fa-plus text-danger"></i>&nbsp;
                                <i class="fas fa-eye text-danger"></i>&nbsp;
                                <i class="fas fa-trash-alt text-danger"></i>
                            </small>
                        </h5>
                        <h6 class="card-subtitle mb-2 text-muted">
                            <h6 class="card-subtitle mb-2 text-muted">Gestion des chiffres et commandes</h6>
                        </h6>

                    </div>
                </div>
            </div>
        </div>


    </div>


    <?php include('template/footer.php'); ?>

