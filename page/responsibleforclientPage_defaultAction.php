      <?php include('template/header.php'); ?>
      <?php include('template/menu.php'); ?>
          <div class="container">

  <h2>Les coordonnées de votre entreprise : </h2>
          <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">Nom du client</th>
            <th scope="col">Adresse</th>
            <th scope="col">Code postal</th>
            <th scope="col">Ville</th>
            <th scope="col">Numéro de téléphone</th>
            <th scope="col">Email</th>
          </tr>
        </thead>
        <tbody>
      <?php
      $totalCoordonnees="";
      foreach ($coordonneesClients as $coordonneesClient){
        $totalCoordonnees.='<tr>';
        $totalCoordonnees.='<td>'.$coordonneesClient['raisonSociale'].'</td>';
        $totalCoordonnees.='<td>'.$coordonneesClient['adresse'].'</td>';
        $totalCoordonnees.='<td>'.$coordonneesClient['cp'].'</td>';
        $totalCoordonnees.='<td>'.$coordonneesClient['ville'].'</td>';
        $totalCoordonnees.='<td>'.$coordonneesClient['tel'].'</td>';
        $totalCoordonnees.='<td>'.$coordonneesClient['email'].'</td>';
        $totalCoordonnees.='</tr>';
      
        
    
    }

    echo $totalCoordonnees;?>
</tbody>
</table>






          <h2>Liste des commandes des salariés de votre entreprise : </h2>
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

      //echo $html;
      /*
      $html="";
      foreach ($SalarieUnUsers as $SalarieUnUser) {
        $html.='<tr>';
        $html.='<td>'.$SalarieUnUser['user_id'].'</td>';
      foreach ($usersUnClients as $usersUnClient){

      
      $html.='</tr>';
      //}
      }*/

      

      echo $html;
      ?>



          </div>
      <?php include('template/footer.php'); ?>