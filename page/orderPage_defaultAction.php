<?php include('template/header.php'); ?>
<?php include('template/menu.php'); ?>

<p class="text-light bg-dark text-center font-weight-bold">Services Comptable/Achat<h2>Les Commandes en cours mois par mois et client par client : </h2></p>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Id client</th>
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
    $html.='<td>'.$commande['client_id'].'</td>';
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