




<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
    <img src="http://127.0.0.1/prj/imprimplus/page/img/viewers/logo.png" width="70">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item spacer">
                <a class="nav-link" href="?route=dashboard">Dashboard</a>
            </li>
            <li class="nav-item spacer">
                <a class="nav-link" href="?route=bookingprint">Commander</a>
            </li>
            <li class="nav-item spacer">
                <a class="nav-link" href="?route=order">Reservations</a>
            </li>
            <li class="nav-item spacer">
                <a class="nav-link" href="?route=turnover">Espace Administration</a>
            </li>
            <li class="nav-item spacer">
                <a class="nav-link" href="?route=responsible">Responsable</a>
            </li>

        </ul>
        <form class="form-inline my-2 my-lg-0">
            <span class="nav-item"><?php echo $_SESSION['prenom']." ".strtoupper($_SESSION['nom']) ?></span> &nbsp;<a href="?route=authenticate&logout" class="badge badge-dark">Déconnexion</a>

        </form>
    </div>
    </div>
</nav>

<br>


<div class="container">


