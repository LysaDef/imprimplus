  <?php include('template/header.php'); ?>
  <?php include('template/menu.php'); ?>
      <div class="container">
      <table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">Date</th>
        <th scope="col">Quantité</th>
        <th scope="col">Modèle</th>
        <th scope="col">Montant total au mois</th>
      </tr>
    </thead>
    <tbody>
      <?php 

  $html='';
  $prix=0;
  foreach ($mesCommandes as $mesCommande) {
      $html.='<tr>';
      $html.='<td>'.$mesCommande['date'].'</td>';
      $html.='<td>'.$mesCommande['quantiteCommandees'].'</td>';
      $html.='<td>'.$mesCommande['libelle'].'</td>';
     
   
      $prix+=$mesCommande['quantiteCommandees'] * $mesCommande['montant'];
 
      $html.='<td>'.$mesCommande['montant'].'</td>';
      $html.='</tr>';


  }
  $html.='  </tbody>
  </table>';


  $html.='<p> <h4>Prix total de mes commandes : '.$prix.'</h4> </p>';
  echo $html;
  
  ?>



      </div>
  <?php include('template/footer.php'); ?>