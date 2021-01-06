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
=======
<<<<<<< HEAD
>>>>>>> de142b0c6bd1801390fb68f44c5205bf365cc76b
//$totalCa= "";
//$totalCa.='<tr>';
//$totalCa.='<td>'.$caClient[0]['caMoisDernier'].'</th>';
//$totalCa.='<td>'.$caClient[1]['caMoisDernier'].'</th>';
//$totalCa.='<td>'.$caClient[2]['caMoisDernier'].'</th>';
//$totalCa.='<td>'.$caClient[3]['caMoisDernier'].'</th>';
//$totalCa.='</tr>';
<<<<<<< HEAD
=======
=======
$totalCa='';
$totalCa.=$caClient;
var_dump($caClient['caMoisDernier']);
>>>>>>> e74df138d923d872cfceea269f8a962e71d45215
>>>>>>> de142b0c6bd1801390fb68f44c5205bf365cc76b

foreach ($caClient as $ca){
    $totalCa.='<tr>';
    $totalCa.='<td>'.'<p>'.$ca['caMoisDernier'].'<p>'.'</th>';
}
<<<<<<< HEAD
$totalCa.=$totalCa .$ca[0]['caMoisDernier'].$ca[1]['caMoisDernier'].$ca[2]['caMoisDernier'].$ca[3]['caMoisDernier'];
=======
$totalCa.=$totalCa + $ca['caMoisDernier'];
>>>>>>> de142b0c6bd1801390fb68f44c5205bf365cc76b

?>

<?php echo $totalCa ?>

</tbody>
</table>

    </div>

<?php include('template/footer.php'); ?>