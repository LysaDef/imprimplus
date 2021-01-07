<?php include('template/header.php'); ?>
<?php include('template/menu.php'); ?>
    <div class="container">

<h2>Chiffre d'affaire total : </h2>


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

}?>
<p>
  <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Chiffre d'affaire total générémois par mois par toutes les commandes</a>;
  <div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="card card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
      </div>
    </div>
  </div>
echo $totalCa;







</tbody>
</table>

    </div>

<?php include('template/footer.php'); ?>