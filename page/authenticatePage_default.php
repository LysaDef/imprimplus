<?php include('template/header.php');
?>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background: #202A38;">
        <div class="container-fluid">
            <img src="http://127.0.0.1/prj/imprimplus/page/img/viewers/logo.png" width="70">
        </div>
    </nav>
    <br>

    <div class="container">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="?route=authenticate">Imprim+</a></li>
                <li class="breadcrumb-item active" aria-current="page">Connexion</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-lg-6">
                <div class="jumbotron">
                    <h3 class="text-secondary">Connexion au site <span class="float-right"><i
                                    class="fas fa-sign-in-alt"></i></span></h3>
                    <hr>
                    <?php if (!empty($message)) { ?>

                        <div class="alert alert-danger" role="alert">
                            <?php echo $message ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                    <?php } ?>
                    <form method="POST" action="?route=authenticate&action=login">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Login</label>
                            <input type="text" class="form-control" name="login" id="exampleInputEmail1"
                                   aria-describedby="emailHelp" placeholder="Entrez votre login">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mot de passe </label>
                            <input type="password" class="form-control" name="pwd" id="exampleInputPassword1"
                                   placeholder="Password">
                        </div>

                        <button style="float: right;" type="submit" class="btn btn-primary">Connexion</button>
                    </form>

                </div>
            </div>
            <div class="col-lg-6">

                <div class="alert alert-warning" role="alert">
                    <h4 class="alert-heading"><i class="fas fa-exclamation-triangle"></i></h4>
                    <p>Toutes les fonctionnalitées du site n'ont pas encore été réalisées, veuillez nous contacter si un
                        problème persiste.</p>
                    <hr>
                    <p class="mb-0"><small>Version: v3.0</small></p>
                </div>


            </div>
        </div>
    </div>

<?php include('template/footer.php'); ?>