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
<<<<<<< HEAD
foreach ($commandesSalaries as $commandesSalarie) {
    $html.='<tr>';
    $html.='<td>'.$commandesSalarie['salarie_id'].'</td>';
    $html.='<td>'.$commandesSalarie['nom'].'</td>';
    $html.='<td>'.$commandesSalarie['prenom'].'</td>';
    $html.='<td>'.$commandesSalarie['date'].'</td>';
    $html.='<td>'.$commandesSalarie['quantite'].'</td>';
    $html.='<td>'.$commandesSalarie['libelle'].'</td>';
    
=======
foreach ($commandes as $commande['id']) {
    $html.='<tr>';
    $html.='<th>'.$commande['id'].'</th>';
    $html.='<td>'.$commande['nom'].'</td>';
    $html.='<td>'.$commande['prenom'].'</td>';
    $html.='<td>'.$commande['date'].'</td>';
    $html.='<td>'.$commande['quantite'].'</td>';
    $html.='<td>'.$commande['libelle'].'</td>';
>>>>>>> dd228b6dbee91a3fe6e463acadb21e67479cb911
    $html.='</tr>';


}

foreach ($caClient as $ca){
  $totalCaClient.='<tr>';
  $totalCaClient.='<td>'.'<p>'.$ca['caMoisDernier']." €".'</p>'.'</td>';
  $totalCaClient.='</tr>';}

echo $html;
echo $totalCaClient;

?>


    </div>
<?php include('template/footer.php'); ?>