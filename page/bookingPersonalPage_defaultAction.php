<?php include('template/header.php'); ?>
<?php include('template/menu.php'); ?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="?route=dashboard">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="?route=employees">Entreprise</a></li>
        <li class="breadcrumb-item active" aria-current="page">Commandes de l'utilisateur #<?php echo $confirmId ?>
        </li>
    </ol>
</nav>


<div class="row">

    <div class="col-md-10">

        <table class="table table-striped">
            <thead class="thead-light">
            <tr>
                <th scope="col">Image</th>
                <th scope="col">Quantité</th>
                <th scope="col">Format</th>
                <th scope="col">Date</th>
                <th scope="col">Prix</th>
                <th scope="col">Modifié</th>


            </tr>
            </thead>
            <tbody>


            <?php

            $html = '';
            $total = 0;
            $commandes = 0;
            foreach ($commandesUsers as $commandesUser) {

                $total = $total + $commandesUser['montant'];
                $commandes = $commandes + 1;

                $html .= '<tr>';
                $html .= '<td><a href="?route=bookingprint&action=show&id=' . $commandesUser['id'] . '" target="_blank">Prévisualisation</a></td>';
                $html .= '<td>' . $commandesUser['quantite'] . '</td>';
                $html .= '<td>' . $commandesUser['libelle'] . '</td>';
                $html .= '<td>' . date('d/m/y à H:i', strtotime($commandesUser['date'])) . '</td>';
                $html .= '<td>' . $commandesUser['montant'] . '€</td>';
                $html .= '<td>Non</td>';
                $html .= '</tr>';


            }
            echo $html;


            ?>


            </tbody>
        </table>

    </div>
    <div class="col-md-2">
        <div class="jumbotron">
            <h3 class="display-6 text-center"><i class="fas fa-circle-notch font-weight-bold"></i><br>
                <small><?php echo $commandes; ?><BR><SMALL>Commandes</SMALL></small>

            </h3>
        </div>
        <div class="jumbotron">
            <h3 class="display-6 text-center"><i class="fas fa-euro-sign font-weight-bold"></i><BR>
                <small><?php echo $total; ?>€<BR><SMALL>Au total</SMALL></small>

            </h3>
        </div>

    </div>
</div>

<?php include('template/footer.php'); ?>
