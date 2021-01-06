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

<<<<<<< HEAD
$totalCa= "";
=======
//$totalCa= "";
>>>>>>> 7651f311eba7796ae1bf0a69b969d3d8c992644d
//$totalCa.='<tr>';
//$totalCa.='<td>'.$caClient[0]['caMoisDernier'].'</th>';
//$totalCa.='<td>'.$caClient[1]['caMoisDernier'].'</th>';
//$totalCa.='<td>'.$caClient[2]['caMoisDernier'].'</th>';
//$totalCa.='<td>'.$caClient[3]['caMoisDernier'].'</th>';
//$totalCa.='</tr>';
<<<<<<< HEAD
=======

$totalCa='';
$totalCa.=$caClient;
var_dump($caClient['caMoisDernier']);
>>>>>>> 7651f311eba7796ae1bf0a69b969d3d8c992644d

foreach ($caClient as $ca){
    $totalCa.='<tr>';
    $totalCa.='<td>'.'<p>'.$ca['caMoisDernier'].'</p>'.'</th>';
}
<<<<<<< HEAD
echo $totalCa;


   







=======

$totalCa.=$totalCa .$ca[0]['caMoisDernier'].$ca[1]['caMoisDernier'].$ca[2]['caMoisDernier'].$ca[3]['caMoisDernier'];
$totalCa.=$totalCa + $ca['caMoisDernier'];
>>>>>>> 7651f311eba7796ae1bf0a69b969d3d8c992644d


?>



</tbody>
</table>

    </div>

<?php include('template/footer.php'); ?>