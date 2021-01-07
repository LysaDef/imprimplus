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


            <?php if($_SESSION['su'] == 1 || $checkpermse[0]['id'] == 2 || $checkpermse[0]['id'] == 3 || $checkpermse[0]['id'] == 4) { ?>


                    <div class="col-md-4">

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Liste des employés</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Accès rapide</h6>
                                <a href="?route=employees" class="btn btn-dark btn-sm btn-block">Accéder</a>
                            </div>
                        </div>
                    </div>
            <?php } if($checkpermse[0]['id'] == 2 || $checkpermse[0]['id'] == 3 || $checkpermse[0]['id'] == 4){ ?>


                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Comptable/Achat</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Accès rapide</h6>
                                <a href="?route=order" class="btn btn-dark btn-sm btn-block">Accéder</a>
                            </div>
                        </div>
                    </div>
            <?php } if($checkpermse[0]['id'] == 4){ ?>


                <div class="col-md-4">
                    <br>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Administration</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Accès rapide</h6>
                            <a href="?route=turnover" class="btn btn-dark btn-sm btn-block">Accéder</a>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
    <div class="col-md-4">


        <h3 class="text-secondary">Vos accès <span class="float-right"><i class="fas fa-clipboard-check"></i></span>
        </h3>
        <hr>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Commander

                </h5>
                <h6 class="card-subtitle mb-2 text-muted">
                    <h6 class="card-subtitle mb-2 text-muted">Aperçu de vos permissions</h6>
                </h6>

            </div>
        </div>


        <?php if($_SESSION['su'] == 1 || $checkpermse[0]['id'] == 4){?><br>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Espace entreprise </h5>
                <h6 class="card-subtitle mb-2 text-muted">
                    <h6 class="card-subtitle mb-2 text-muted">Gestion des comptes salariés</h6>
                </h6>
            </div>
        </div>
        <?php }



        if($checkpermse[0]['id'] == 4 || $checkpermse[0]['id'] == 3|| $checkpermse[0]['id'] == 2){?>




        <br>


        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Chiffre d'affaire</h5>
                <h6 class="card-subtitle mb-2 text-muted">
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $checkpermse[0]['libelle'] ?></h6>
                </h6>

            </div>
        </div>
            <?php
        }


        if($checkpermse[0]['id'] == 4){?>
        <br>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Administration</h5>
                    <h6 class="card-subtitle mb-2 text-muted">
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $checkpermse[0]['libelle'] ?></h6>
                    </h6>

                </div>
            </div>

        <?php } ?>
        <br>
    </div>


</div>


<?php include('template/footer.php'); ?>