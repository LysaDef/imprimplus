<?php include('template/header.php'); ?>
<?php include('template/menu.php'); ?>
    <div class="container">

<h3>Chiffre d'affaire total généré mois par mois par toutes les commandes</h3>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Chiffre d'affaire par client</th>
    </tr>
  </thead>
  <tbody>


<?php 

$totalCa= "";
$TotalCaClient= "";
//$totalCa.='<tr>';
//$totalCa.='<td>'.$caClient[0]['caMoisDernier'].'</th>';
//$totalCa.='<td>'.$caClient[1]['caMoisDernier'].'</th>';
//$totalCa.='<td>'.$caClient[2]['caMoisDernier'].'</th>';
//$totalCa.='<td>'.$caClient[3]['caMoisDernier'].'</th>';
//$totalCa.='</tr>';

foreach ($caClient as $ca){
    $totalCaClient.='<tr>';
    $totalCaClient.='<td>'.'<p>'.$ca['caMoisDernier']." €".'</p>'.'</td>';
    $totalCaClient.='</tr>';
  
    

}
echo $totalCaClient;

foreach ($montantTotalCa as $montant) {
    $totalCa.='<tr>';
    $totalCa.='<td>'.'<p>'."Total généré".$montant["SUM(caMoisDernier)"]." €".'</p>'.'</td>';
    $totalCa.='</tr>';

}

echo $totalCa;


   









?>



</tbody>
</table>

    </div>

<?php include('template/footer.php'); ?>