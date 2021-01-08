<?php include('template/header.php'); ?>
<?php include('template/menu.php'); ?>


    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?route=dashboard">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="?route=bookingprint">Commander</a></li>
            <li class="breadcrumb-item active" aria-current="page">Commandes en cours</li>
        </ol>
    </nav>

    <h4 class="text-secondary">Les commandes en cours mois par mois et client par client <span class="float-right"><i
                    class="fas fa-sitemap"></i></span></h4>
    <hr>


    <table class="table table-striped">
        <thead class="thead-light">
        <tr>
            <th scope="col">#</th>

            <th scope="col">Utilisateur</th>
            <th scope="col">Date</th>
            <th scope="col">Quantité</th>
            <th scope="col">Modèle</th>
            <th scope="col">Prix</th>
            <th scope="col">Image</th>
            <th scope="col">Modifié</th>
            <th scope="col">Société</th>
        </tr>
        </thead>
        <tbody>


        <?php

        $html = '';
        foreach ($commandes as $commande) {
            $html .= '<tr>';
            $html .= '<th scope="row">' . $commande['id'] . '</th>';

            $html .= '<td>' . $commande['nom'] . " " . $commande['prenom'] . '</td>';

            $html .= '<td>' . date('d/m/y à H:i', strtotime($commande['date'])) . '</td>';
            $html .= '<td>' . $commande['quantite'] . '</td>';
            $html .= '<td>' . $commande['libelle'] . '</td>';
            $html .= '<td>' . $commande['prix'] . '€</td>';
            $html .= '<td><a href="?route=bookingprint&action=show&id=' . $commande['id'] . '" target="_blank">Prévisualisation</a></td>';
            $html .= '<td>Non</td>';
            $html .= '<td>' . $commande['raisonSociale'] . '</td>';
            $html .= '</tr>';


        }
        echo $html;

        ?>

        </tbody>
    </table>


<?php include('template/footer.php'); ?>