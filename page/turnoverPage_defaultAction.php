<?php include('template/header.php'); ?>
<?php include('template/menu.php'); ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?route=dashboard">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="?route=employees">Administration</a></li>
            <li class="breadcrumb-item active" aria-current="page">Chiffre d'affaires</li>
        </ol>
    </nav>

    <h4 class="text-secondary">Chiffre d'affaire total : <span class="float-right"><i class="fas fa-list-ol"></i></span></h4>
    <hr>

<table class="table table-striped">
  <thead class="thead-light">
    <tr>
      <th scope="col">id des clients </th>
      <th scope="col">Chiffre d'affaire par client</th>
    </tr>
  </thead>
  <tbody>


<?php 

$totalCa= "";
$TotalCaClient= "";


foreach ($caClient as $ca){
    $totalCaClient.='<tr>';
    $totalCaClient.='<td>'.'<p>'.$ca['id'].'</p>'.'</td>';
    $totalCaClient.='<td>'.'<p>'.$ca['caMoisDernier']." €".'</p>'.'</td>';
    $totalCaClient.='</tr>';
  
    

}
echo $totalCaClient;

foreach ($montantTotalCa as $montant) {
    $totalCa.='<tr>';
    $totalCa.='<p>'.'<h4>Total généré mois par mois par toutes les commandes : '.$montant["SUM(caMoisDernier)"]." €".'</h4>'.'</p>';
    $totalCa.='</tr>';

}
echo $totalCa;



?>



</tbody>
</table>



<?php include('template/footer.php'); ?>