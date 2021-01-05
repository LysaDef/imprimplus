<?php include('template/header.php'); ?>
<?php include('template/menu.php'); ?>

    

    <div class="container">
        
        <h1> Commandes </h1>
        <select class="form-select" aria-label="Default select example">
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
        <form class="form-floating">
            <input type="email" class="form-control" id="floatingInputValue" placeholder="quantitée" value="">
        </form>
        <br>
        <div class="input-group mb-3">
            <button class="btn btn-outline-secondary" type="button" id="button-addon1">Validé</button>
        </div>
    <br>
    <h1> Liste de vos commandes </h1>
    <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Date</th>
      <th scope="col">Quantité</th>
      <th scope="col">Modèle</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>


<?php 

$html='';
foreach ($commandesPerso as $commandePerso) {
  
      $html.='<tr>';
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