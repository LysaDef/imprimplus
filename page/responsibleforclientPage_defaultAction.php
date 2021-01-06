<?php include('template/header.php'); ?>
<?php include('template/menu.php'); ?>
    <div class="container">
    <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Date</th>
      <th scope="col">Quantité</th>
      <th scope="col">Modèle</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>
    <?php 

$html='';
$prix='';
foreach ($commandesSalaries as $commandesSalarie) {
    $html.='<tr>';
    $html.='<td>'.$commandesSalarie['salarie_id'].'</td>';
    $html.='<td>'.$commandesSalarie['nom'].'</td>';
    $html.='<td>'.$commandesSalarie['prenom'].'</td>';
    $html.='<td>'.$commandesSalarie['date'].'</td>';
    $html.='<td>'.$commandesSalarie['quantite'].'</td>';
    $html.='<td>'.$commandesSalarie['libelle'].'</td>';
    $html.='</tr>';


}



foreach ($tarifs as $tarif){
  $prix.='<tr>';
  $prix.='<td>'.'<p>'.$tarif['quantite'] * $tarif['montant']." €".'</p>'.'</td>';
  $prix.='</tr>';}


echo $html;
echo $prix;
?>

</tbody>
</table>

    </div>
<?php include('template/footer.php'); ?>