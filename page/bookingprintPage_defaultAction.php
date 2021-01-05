<?php include('template/header.php'); ?>
<?php include('template/menu.php'); ?>

    
    <br>
        <h1> Commandes </h1>
        <select class="form-select" aria-label="Default select example">
            <?php
            $html='';
            foreach ($formats as $format){
                $html.='<option value="'.$format['id'].'">'.$format['libelle'].'</option>';
            }
            echo $html;
            ?>
        </select>
        <caption>choisir l'image</caption>
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupFile01">Upload</label>
            <input type="file" class="form-control" id="inputGroupFile01">
        </div>
        <form class="form-floating">
            <input type="email" class="form-control" id="floatingInputValue" placeholder="quantitée" value="">
        </form>
        <div class="input-group mb-3">
            <button class="btn btn-outline-secondary" type="button" id="button-addon1">Validé</button>
        </div>

<?php include('template/footer.php'); ?>