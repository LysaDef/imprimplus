<?php include('template/header.php'); ?>
    <div class="container">

<!--<table>
    <caption>Les commandes mois par mois, client par client</caption>
    <thead>
    <tr><th>#</th><th>Nom</th><th>Prenom</th><th>Date</th><th>Quantité</th><th>Modèle</th><th>Image</th></tr>
    </thead>
    <tbody>

    </tbody>
    <tfoot>
    <tr><th>#</th><th>Nom</th><th>Prenom</th><th>Date</th><th>Quantité</th><th>Modèle</th><th>Image</th></tr>
</table>-->

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
    $html.='<td>'.$commande['id'].'</td>';
    $html.='<td>'.$commande['date'].'</td>';
    $html.='<td>'.$commande['heureDebut'].'</td>';
    $html.='<td>'.$commande['heureFin'].'</td>';
    $html.='<td>'.$commande['salle'].'</td>';
    $html.='</tr>';
}

echo $html

?>


    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table>

    </div>
<?php include('template/footer.php'); ?>