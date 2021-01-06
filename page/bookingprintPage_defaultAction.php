<?php include('template/header.php'); ?>
<?php include('template/menu.php');?>





    

    <div class="container">
    <?php if(isset($message)){
    echo "<small>". $message."</small>";

    } ?>
        <h1> Faire une commande </h1>

    <div class="rows">
        <div class="col-md-6">
            <div class="jumbotron">
                <form method="POST" action="?route=bookingprint&action=store">
                        <div class="row">
                            <div class="co-lg-12">

                        <select name="idModele" id="inputState" class="form-control">
                            <?php
                            foreach ($formats as $format){
                                $html.='<option value="'.$format['id'].'">'.$format['libelle'].'</option>';
                            }
                            echo $html;
                            ?>
                        </select>


                            </div>
                            <div class="col-lg-6">
                        <br>


                       <div class="input-group mb-3">
                           <div class="custom-file">
                               <input type="file" class="custom-file-input" id="inputGroupFile02">
                               <label class="custom-file-label" for="inputGroupFile02">Votre image</label>
                           </div>

                       </div>
                            </div>
                            <div class="col-lg-6">


                        <div class="form-floating">
                            <input name="nbQuantity" type="number" class="form-control" id="floatingInputValue" placeholder="Quantitée" value="">
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <button class="btn btn-primary btn-sm"  style="float: right;" type="submit" id="button-addon1">Valider</button>
                        </div>


                            </div>
                    </div>

                </div>
              </form>
            </div>
        </div>
    </div>


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
      $html.='<td>'.$commandePerso['image'].'</td>';
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