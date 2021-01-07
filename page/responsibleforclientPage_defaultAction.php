      <?php include('template/header.php'); ?>
      <?php include('template/menu.php'); ?>
          <div class="container">

          <p class="text-light bg-dark text-center font-weight-bold">Espace Superutilisateur<h2>Les coordonnées de votre entreprise : </h2></p>
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
      foreach ($commandesSalaries as $commandesSalarie){
        $totalCommandes.='<tr>';
        $totalCommandes.='<td>'.$commandesSalarie['raisonSociale'].'</td>';
        $totalCommandes.='<td>'.$commandesSalarie['adresse'].'</td>';
        $totalCommandes.='<td>'.$commandesSalarie['cp'].'</td>';
        $totalCommandes.='<td>'.$commandesSalarie['ville'].'</td>';
        $totalCommandes.='<td>'.$commandesSalarie['tel'].'</td>';
        $totalCommandes.='<td>'.$commandesSalarie['email'].'</td>';
        $totalCommandes.='</tr>';
      
        
    
    }

    echo $totalCommandes;?>
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

      echo $html;
      ?>



          </div>
      <?php include('template/footer.php'); ?>