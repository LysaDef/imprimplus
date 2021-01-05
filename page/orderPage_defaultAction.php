<?php include('template/header.php'); ?>
<?php include('template/menu.php'); ?>


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
foreach ($commandes as $commande) {
    $html.='<tr>';
    $html.='<th scope="row">'.$commande['id'].'</th>';
    $html.='<td>'.$commande['nom'].'</td>';
    $html.='<td>'.$commande['prenom'].'</td>';
    $html.='<td>'.$commande['date'].'</td>';
    $html.='<td>'.$commande['quantite'].'</td>';
    $html.='<td>'.$commande['libelle'].'</td>';
    $html.='</tr>';


}
echo $html;

?>

  </tbody>
</table>



<?php include('template/footer.php'); ?>