<?php include('template/header.php'); ?>
<?php include('template/menu.php'); ?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="?route=dashboard">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="?route=employees">Entreprise</a></li>
        <li class="breadcrumb-item active" aria-current="page">Commandes de l'utilisateur <<?php echo $confirmId ?>>
        </li>
    </ol>
</nav>


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

    foreach ($commandesUsers as $commandesUser) {

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


<?php include('template/footer.php'); ?>

