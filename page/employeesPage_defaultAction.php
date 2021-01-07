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


            if($list[0]['client'] == 1){

                echo "<div class=\"container text-secondary\">Aucune entreprise vous est assignée!</div>";

            } else {
            foreach ($employees as $employee) {






                $html .= "<div class=\"col-lg-6\"><br><div class=\"card\"><div class=\"card-body\">";

                if ($employee['su']) {

                    $html .= "<h5 class=\"card-title\">" . strtoupper($employee['nom']) . " " . $employee['prenom'] . "&nbsp;<sup><span class=\"badge badge-pill badge-primary\"><i class=\"fas fa-star\"></i></span></sup>" . "</h5>";

                } else {

                    $html .= "<h5 class=\"card-title\">" . strtoupper($employee['nom']) . " " . $employee['prenom'] . "</h5>";

                }


                $html .= "<br><div class=\"float-right\"><a href=\"#\" class=\"badge badge-info \">Modifier</a>";
                $html .= "&nbsp;<a href=\"?route=employees&action=check&id=" . $employee['sid'] . "\" class=\"badge badge-primary \">Commandes</a></div>";

                $html .= "</div></div></div>";

                }

            }

            echo $html;



            ?>

        </div>

    </div>
    <div class="col-md-4">
        <h4 class="text-secondary">Mon Entreprise<span class="float-right"><i class="fas fa-book"></i></span></h4>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <br>
                <div class="jumbotron">
                    <h6 class="text-secondary">Informations<span class="float-right"><i
                                    class="fas fa-sitemap"></i></span></h6>
                    <hr>
                    <?php


                    if($list[0]['client'] == 1){

                        echo "<div class=\"text-secondary\">Aucune entreprise vous est assignée!</div>";

                    } else {


                    $company = "";

                    foreach ($salarieid as $salarid) {

                        $company .= "<div class=\"card-body\">";
                        $company .= "<p class=\"card-text text-primary\"><i class=\"fas fa-landmark text-white bg-primary\" style=\"padding: 4.5px; border-radius: 3px;\"></i> <b> " . $salarid['raisonSociale'] . "</b></p>";
                        $company .= "<p class=\"card-text text-primary\"><i class=\"fas fa-envelope text-white bg-primary\" style=\"padding: 4.5px; border-radius: 3px;\"></i> " . $salarid['email'] . "</p>";
                        $company .= "<p class=\"card-text text-primary\"><i class=\"fas fa-landmark text-white bg-primary\" style=\"padding: 4.5px; border-radius: 3px;\"></i> " . $salarid['tel'] . "</p>";
                        $company .= "<p class=\"card-text text-primary\"><i class=\"fas fa-search-location text-white bg-primary\" style=\"padding: 4.5px; border-radius: 3px;\"></i> " . $salarid['adresse'] . "</p>";
                        $company .= "<p class=\"card-text text-primary\"><i class=\"fas fa-search-location text-white bg-primary\" style=\"padding: 4.5px; border-radius: 3px;\"></i> " . $salarid['cp'] . ", " . $salarid['ville'] . "</p>";

                        $company .= "</div>";

                    }
                    }
                    echo $company;

                    ?>

                    <br>
                    <h6 class="text-secondary">Légende<span class="float-right"><i class="fas fa-stream"></i></span>
                    </h6>
                    <hr>

                    <sup><span class="badge badge-pill badge-primary"><i class="fas fa-star"></i></span></sup> <span
                            class="text-primary">Responsable</span></div>

            </div>
        </div>

    </div>

</div>

<?php include('template/footer.php'); ?>


