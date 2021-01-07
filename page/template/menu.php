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
                        <a class="nav-link nav__link__bg" href="?route=dashboard">Dashboard <span class="badge badge-success"><i class="fas fa-check"></i></span></a>
                    </li>
                    <br>
                    <li class="nav-item spacer">
                        <a class="nav-link nav__link__bg" href="?route=bookingprint">Commander <span class="badge badge-success"><i class="fas fa-check"></i></span></a>
                    </li>
                    <br>

                    <?php switch ($_SESSION['su']) {
                        case 1: ?>
                            <li class="nav-item spacer">
                                <a class="nav-link nav__link__bg" href="?route=employees">Employés <span class="badge badge-success"><i class="fas fa-check"></i></span></a>
                            </li><br>
                            <li class="nav-item spacer">
                                <a class="nav-link nav__link__bg" href="?route=order">Services Comptable/Achat</a>
                            </li><br>
                            <li class="nav-item spacer">
                                <a class="nav-link nav__link__bg " href="?route=turnover">Espace Administration</a>
                            </li><br>
                            <li class="nav-item spacer">
                                <a class="nav-link nav__link__bg" href="?route=responsible">Espace Superutilisateur</a>
                            </li>
                            <?php break;
                        default:
                            break;
                    } ?>
                </ul>
            </div>


            <!--        <div class="collapse navbar-collapse" id="navbarSupportedContent">-->
            <!--            <div class="container">-->
            <!--                <ul class="navbar-nav nav__bar__font mr-auto">-->
            <!---->
            <!--                    <li class="nav-item spacer">-->
            <!--                        <a class="nav-link nav__link__bg" href="?route=dashboard">Dashboard</a>-->
            <!--                    </li><br>-->
            <!--                    <li class="nav-item spacer">-->
            <!--                        <a class="nav-link nav__link__bg" href="?route=bookingprint">Commander</a>-->
            <!--                    </li><br>-->
            <!---->
            <!---->
            <!--                    <li class="nav-item spacer">-->
            <!--                        <a class="nav-link nav__link__bg" href="?route=order">Reservations</a>-->
            <!--                    </li><br>-->
            <!--                    <li class="nav-item spacer">-->
            <!--                        <a class="nav-link nav__link__bg " href="?route=turnover">Espace Administration</a>-->
            <!--                    </li><br>-->
            <!--                    <li class="nav-item spacer">-->
            <!--                        <a class="nav-link nav__link__bg" href="?route=responsible">Espace Superutilisateur</a>-->
            <!--                    </li>-->
            <!---->
            <!--                </ul>-->
            <!--            </div>-->


            <form class="form-inline my-2 my-lg-0">
                <span class="nav-item nav__link__user"><?php echo $_SESSION['prenom'] . " " . strtoupper($_SESSION['nom']) ?></span>
                <a class="nav-link nav__link__logout" href="?route=authenticate&logout">Déconnexion</a>


            </form>
        </div>
    </div>
</nav>

<br>


<div class="container">


