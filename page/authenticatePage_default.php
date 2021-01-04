<?php include('template/header.php'); ?>

    <div class="container">
    <h1>Connexion</h1>
   <!-- <form method="POST" action="?route=authenticate&action=login">
        <label for="mail">Adresse mail </label>
        <input type="email" name="mail" placeholder="Saisissez votre adresse mail">
        <label for="pwd">Mot de passe </label>
        <input type="password" name="pwd" placeholder="Saisisser votre mot de passe">
        <input type="submit" value="Se connecter">
    </form>-->


    <div class="row">
        <div class="col-lg-6">
        <form method="POST" action="?route=authenticate&action=login">
            <div class="form-group">
                <label for="exampleInputEmail1">Adresse mail</label>
                <input type="email" class="form-control" name="mail" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Votre adresse email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Mot de passe </label>
                <input type="password" class="form-control" name="pwd"  id="exampleInputPassword1" placeholder="Password">
            </div>

            <button style="float: right;" type="submit" class="btn btn-primary">Connexion</button>
        </form>
    <small><?php echo $message ?></small>
        </div>
    </div>
    </div>

<?php include('template/footer.php'); ?>