<?php include('template/header.php'); ?>
<?php include('template/menu.php'); ?>

    
<<<<<<< HEAD
    <div class="container">
<<<<<<< HEAD
        
        <div class="row g-2">
            <div class="col-md">
                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="mdo@example.com">
                    <label for="floatingInputGrid">Email address</label>
                </div>
            </div>
            <div class="col-md">
                <div class="form-floating">
                    <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <label for="floatingSelectGrid">Works with selects</label>
                </div>
            </div>
        </div>
=======
=======
    <br>
>>>>>>> 5d964a470a84c233a21d5e98fecab65ca3a74614
        <h1> Commandes </h1>
        <select class="form-select" aria-label="Default select example">
            <?php
            foreach ($formats as $format){
                $html.='<option value="'.$format['id'].'">'.$format['libelle'].'</option>';
            }
            echo $html;
            ?>
        </select>
        <caption>choisir l'image</caption>
>>>>>>> 5825e4c4fa9ffada1f1cd11dc485c7a686872b31
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