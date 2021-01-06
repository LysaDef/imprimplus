<?php include('template/header.php'); ?>
<?php include('template/menu.php'); ?>

    

    <div class="container">
        
        <h1> Faire une commande </h1>
        <form method="POST" action="?route=bookingprint&action=commande"> 
            <select name="format" class="form-select">
                <?php
                foreach ($formats as $format){
                    $html.='<option value="'.$format['id'].'">'.$format['libelle'].'</option>';
                }
                echo $html;
                ?>
            </select>
            <br>
            <br>
            <caption>choisir l'image</caption>

            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupFile01">Upload</label>
                <input type="file" class="form-control" id="inputGroupFile01">
            </div>
            <br>
            <div class="form-floating">
                <input name="qte" type="text" class="form-control" id="floatingInputValue" placeholder="quantitée" value="">
            </div>
            <br>
            <div class="input-group mb-3">
                <button class="btn btn-outline-secondary" type="submit" id="button-addon1">Valider</button>
            </div>
        </form>
    <br>
    <h1> Liste de vos commandes </h1>
    <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Image</th>
      <th scope="col">Quantité</th>
      <th scope="col">Format</th>
      <th scope="col">Date</th>
      
    </tr>
  </thead>
  <tbody>


<?php 

$html='';
foreach ($commandesPerso as $commandePerso) {
  
      $html.='<tr>';
      $html.='<td>'.$commandePerso['quantite'].'</td>';
      $html.='<td>'.$commandePerso['libelle'].'</td>';
      $html.='<td>'.$commandePerso['date'].'</td>';
      $html.='</tr>';
  

  
  

}
echo $html;

?>

  </tbody>
</table>

<?php include('template/footer.php'); ?>