<?php include('template/header.php'); ?>
<?php include('template/menu.php'); ?>


<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="?route=dashboard">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="?route=employees">Entreprise</a></li>
        <li class="breadcrumb-item active" aria-current="page">Commandes des salariés</li>
    </ol>
</nav>


<h4 class="text-secondary">Liste des commandes des salariés de votre entreprise<span class="float-right"><i class="fas fa-sitemap"></i></span></h4>
<hr>
<table class="table table-striped">
    <thead class="thead-light">
    <tr>
        <th scope="col">Type</th>
        <th scope="col">Quantité</th>
        <th scope="col">Modèle</th>
        <th scope="col">Montant total au mois</th>
        <th scope="col">Date</th>
    </tr>
    </thead>
    <tbody>
    <?php


    $html = '';
    $prix = 0;
    foreach ($commandesSalaries as $commandesSalarie) {
        $html .= '<tr>';
        $html .= '<td>Salarié</td>';
        $html .= '</tr>';
        foreach ($commandesSalarie as $commandes) {
            $html .= '<tr>';
            $html .= '<td>Commandes</td>';
            $html .= '<td>' . $commandes['quantiteCommandees'] . '</td>';
            $html .= '<td>' . $commandes['modele'] . '</td>';
            $html .= '<td>' . $commandes['montant'] . '</td>';

            $html .= '<td>' . $commandes['date'] . '</td>';

            $html .= '</tr>';
        }


        /* $html.='<td>'.$commandesSalarie['date'].'</td>';
         $html.='<td>'.$commandesSalarie['quantiteCommandees'].'</td>';
         $html.='<td>'.$commandesSalarie['libelle'].'</td>';


         $prix+=$commandesSalarie['quantiteCommandees'] * $commandesSalarie['montant'];

         $html.='<td>'.$commandesSalarie['montant'].'</td>';*/


    }


    $html .= '  </tbody>
      </table>';

    $html .= '<p> <h4>Prix total de mes commandes : ' . $prix . '</h4> </p>';

    echo $html;
    ?>


<?php include('template/footer.php'); ?>