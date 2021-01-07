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

    <div class="col-md-8">
        <h3 class="text-secondary">Accès rapide<span class="float-right"><i class="fas fa-shipping-fast"></i></span>
        </h3>
        <hr>

        <div class="row">
            <div class="col-md-4">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Commander</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Accès rapide</h6>
                        <a href="?route=bookingprint" type="button" class="btn btn-dark btn-sm btn-block">Accéder</a>
                    </div>
                </div>
            </div>
            <br>

            <?php switch ($_SESSION['su']) {
                case 1: ?>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Services Comptable/Achat</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Accès rapide</h6>
                                <a href="?route=order" class="btn btn-dark btn-sm btn-block">Accéder</a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Service achat</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Accès rapide</h6>
                                <a href="#" class="btn btn-dark btn-sm btn-block">Accéder</a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-md-4">
                        <br>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Service Administration</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Accès rapide</h6>
                                <a href="#" class="btn btn-dark btn-sm btn-block">Accéder</a>
                            </div>
                        </div>
                    </div>
                    <?php break;
                default:
                    break;
            } ?>

        </div>
    </div>
    <div class="col-md-4">


        <h3 class="text-secondary">Vos accès <span class="float-right"><i class="fas fa-clipboard-check"></i></span>
        </h3>
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
                        <?php switch ($_SESSION['su']) {
                            case 1: ?>

                                <i class="fas fa-pen text-success"></i>&nbsp;
                                <i class="fas fa-plus text-success"></i>&nbsp;
                                <i class="fas fa-eye text-success"></i>&nbsp;
                                <i class="fas fa-trash-alt text-success"></i>
                                <?php break;
                            case 0: ?>  <i class="fas fa-pen text-danger"></i>&nbsp;
                                <i class="fas fa-plus text-danger"></i>&nbsp;
                                <i class="fas fa-eye text-danger"></i>&nbsp;
                                <i class="fas fa-trash-alt text-danger"></i>
                                <?php break;
                            default:
                                break;
                        } ?>
                    </small>
                </h5>
                <h6 class="card-subtitle mb-2 text-muted">
                    <h6 class="card-subtitle mb-2 text-muted">Gestion des comptes salariés</h6>
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


<?php include('template/footer.php'); ?>

