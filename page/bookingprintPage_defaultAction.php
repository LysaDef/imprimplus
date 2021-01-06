<?php include('template/header.php'); ?>
<?php include('template/menu.php'); ?>


    <div class="container">
        <?php if (isset($message)) {
            echo "<small>" . $message . "</small>";

        } ?>
        <h2> Faire une commande </h2>
        <hr>

        <div class="row">
            <div class="col-md-6">
                <div class="jumbotron">

                    <h3>Créer une commande <span class="float-right"><i class="fas fa-plus-square"></i></span></h3>
                    <hr>


                    <form method="POST" action="?route=bookingprint&action=store">


                        <small id="emailHelp" class="form-text text-muted"><i class="fas fa-info-circle"></i> Votre
                            commande sera enregistré en tant
                            que <?php echo $_SESSION['prenom'] . " " . strtoupper($_SESSION['nom']) ?></small><br>


                        <div class="form-row">
                            <div class="col">

                                <select name="idModele" id="inputState" class="form-control">
                                    <?php
                                    foreach ($formats as $format) {
                                        $html .= '<option value="' . $format['id'] . '">' . $format['libelle'] . '</option>';
                                    }
                                    echo $html;
                                    ?>
                                </select>
                            </div>

                            <div class="col">

                                <div class="form-floating">
                                    <input name="nbQuantity" type="number" class="form-control" id="floatingInputValue"
                                           placeholder="Quantitée" value="">
                                </div>
                                <br>

                            </div>

                            <div class="col-md-12">


                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile02">
                                        <label class="custom-file-label" for="inputGroupFile02">Votre image</label>
                                    </div>

                                </div>

                            </div>
                            <div class="col-md-8">

                            </div>
                            <div class="col-md-4">


                                <button class="btn btn-primary float-right" type="submit" id="button-addon1">Valider
                                </button>


                            </div>

                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="jumbotron">
                    <h3>Vos réductions <span class="float-right"><i class="fas fa-ticket-alt"></i></span></h3>
                    <hr>
                </div>
            </div>
        </div>
    </div>


    <br>
    <h2> Vos commandes </h2>
    <hr>
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

        $html = '';
        foreach ($commandesPerso as $commandePerso) {

            $html .= '<tr>';
            $html .= '<td>' . $commandePerso['image'] . '</td>';
            $html .= '<td>' . $commandePerso['quantite'] . '</td>';
            $html .= '<td>' . $commandePerso['libelle'] . '</td>';
            $html .= '<td>' . $commandePerso['date'] . '</td>';
            $html .= '</tr>';


        }
        echo $html;

        ?>

        </tbody>
    </table>

<?php include('template/footer.php'); ?>