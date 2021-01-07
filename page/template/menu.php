<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background: #202A38;">
    <div class="container-fluid">
        <img src="http://127.0.0.1/prj/imprimplus/page/img/viewers/logo.png" width="70">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="container">
                <ul class="navbar-nav nav__bar__font mr-auto">

                    <li class="nav-item spacer">
                        <a class="nav-link nav__link__bg" href="?route=dashboard">Dashboard </a>
                    </li>
                    <br>
                    <li class="nav-item spacer">
                        <a class="nav-link nav__link__bg" href="?route=bookingprint">Commander </a>
                    </li>
                    <br>

                    <?php
                    $checkpermse=UserPermissionData_getService($_SESSION['id']);
                    if ($_SESSION['su'] == 1 || $checkpermse[0]['id'] == 2 || $checkpermse[0]['id'] == 3 || $checkpermse[0]['id'] == 4) {
                        ?>
                        <li class="nav-item spacer">
                            <a class="nav-link nav__link__bg" href="?route=employees">Employés </a>
                        </li><br>

                        <li class="nav-item spacer">
                            <a class="nav-link nav__link__bg" href="?route=responsible">Superutilisateur
                            </a>
                        </li><br>


                        <?php
                    }
                    if ($checkpermse[0]['id'] == 3 || $checkpermse[0]['id'] == 4) { ?>

                        <li class="nav-item spacer">
                            <a class="nav-link nav__link__bg" href="?route=order">Services Comptable/Achat </a>


                        </li><br>

                        <?php
                    }

                    if ($checkpermse[0]['id'] == 4) {
                        ?>
                        <li class="nav-item spacer">
                            <a class="nav-link nav__link__bg " href="?route=turnover">Administration <span
                                        class="badge badge-danger">&nbsp;<i
                                            class="fas fa-tools"></i>&nbsp;</span></a>
                        </li><br>

                        <?php

                    } ?>
                </ul>
            </div>


            <form class="form-inline my-2 my-lg-0">
                <span class="nav-item nav__link__user"><?php echo $_SESSION['prenom'] . " " . strtoupper($_SESSION['nom']) ?></span>
                <a class="nav-link nav__link__logout" href="?route=authenticate&logout">Déconnexion</a>


            </form>

        </div>

    </div>
</nav>

<br>


<div class="container">


