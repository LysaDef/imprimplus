<?php include('template/header.php'); ?>
<?php include('template/menu.php'); ?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="?route=dashboard">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="?route=employees">Entreprise</a></li>
        <li class="breadcrumb-item active" aria-current="page">Gestion</li>
    </ol>
</nav>


<div class="row">

    <div class="col-md-8">
        <h4 class="text-secondary">Mes employés<span class="float-right"><i class="fas fa-list-ol"></i></span></h4>
        <hr>

        <div class="row">








            <?php
            $html = '';

            foreach ($employees as $employee) {

                $html .="<div class=\"col-lg-6\"><br><div class=\"card\"><div class=\"card-body\">";




                $html .="<h5 class=\"card-title\">" . strtoupper($employee['nom']) . " " .$employee['prenom'] . "</h5>";
                $html .="<h6 class=\"card-subtitle mb-2 text-muted\"><span class=\"text-primary font-weight-bold\">Entreprise: </span><span class=\"text-primary\">".$employee['raisonSociale'] ."<span></h6>";
                $html .="<p class=\"card-text text-primary\"><i class=\"fas fa-phone text-white bg-primary\" style=\"padding: 4.5px; border-radius: 50%;\"></i> ".$employee['tel'] ."</p>";
                $html .="<br><div class=\"float-right\"><a href=\"#\" class=\"badge badge-dark \">Modifier</a>";
                $html .="&nbsp;<a href=\"#\" class=\"badge badge-primary \">Commandes</a></div>";

                $html .="</div></div></div>";


            }

            echo $html;

            ?>

        </div>

    </div>
    <div class="col-md-4">
        <h4 class="text-secondary">Mon profil<span class="float-right"><i class="fas fa-id-card"></i></span></h4>
        <hr>
    </div>

</div>

<?php include('template/footer.php'); ?>


