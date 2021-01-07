<?php include('template/header.php'); ?>
<?php include('template/menu.php'); ?>
    <div class="container">

    <p class="text-light bg-dark text-center font-weight-bold">Espace Administration<h2>Chiffre d'affaire total : </h2></p>

<table class="table">
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

    </div>

<?php include('template/footer.php'); ?>