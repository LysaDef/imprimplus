      <?php include('template/header.php'); ?>
      <?php include('template/menu.php'); ?>
          <div class="container">

          <p class="text-light bg-dark text-center font-weight-bold">Espace Superutilisateur</p>
       






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
      foreach ($commandesSalaries as $commandesSalarie) {
          $html.='<tr>';
          $html.='<td>Salarié</td>';
          $html.='</tr>';
          foreach ($commandesSalarie as $commandes) {
            $html.='<tr>';
            $html.='<td>Commandes</td>';
            $html.='<td>'.$commandes['quantiteCommandees'].'</td>';
            $html.='</tr>';
          }


         /* $html.='<td>'.$commandesSalarie['date'].'</td>';
          $html.='<td>'.$commandesSalarie['quantiteCommandees'].'</td>';
          $html.='<td>'.$commandesSalarie['libelle'].'</td>';
        
      
          $prix+=$commandesSalarie['quantiteCommandees'] * $commandesSalarie['montant'];
    
          $html.='<td>'.$commandesSalarie['montant'].'</td>';*/
          


      }


      

      $html.='  </tbody>
      </table>';

      $html.='<p> <h4>Prix total de mes commandes : '.$prix.'</h4> </p>';

      echo $html;
      ?>



          </div>
      <?php include('template/footer.php'); ?>