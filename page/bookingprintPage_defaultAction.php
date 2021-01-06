<?php include('template/header.php'); ?>
<?php include('template/menu.php'); ?>


    <div class="container">
        <?php if (isset($message) and isset($messagetype)) {
            switch ($messagetype) {


                case 2:
                    ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $message ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div><br>
                    <?php
                    break;

                case 1: ?>

                    <div class="alert alert-success" role="alert">
                        <?php echo $message ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div><br>
                    <?php
                    break;

                default:
                    break;
            }
        }

        ?>


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
                            que <b><?php echo $_SESSION['prenom'] . " " . strtoupper($_SESSION['nom']) ?>
                                *</b></small><br>


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


                    PARTIE DE LYSA
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
            <th scope="col">Actions</th>

        </tr>
        </thead>
        <tbody>


        <?php

        $html = '';
        foreach ($commandesPerso as $commandePerso) {


            $html .= '<tr>';
            $html .= '<td><a href="#" target="_blank">Prévisualisation</a>' . $commandePerso['image'] . '</td>';
            $html .= '<td>' . $commandePerso['quantite'] . '</td>';
            $html .= '<td>' . $commandePerso['libelle'] . '</td>';
            $html .= '<td>' . date_format($commandePerso['date'], "g:ia") . '</td>';
            $html .= '<td><span class="badge badge-danger" style="cursor: pointer;"><i class="fas fa-trash-alt"></i></span>&nbsp;
                          <span class="badge badge-primary" style="cursor: pointer;"><i class="fas fa-pen"></i></span>&nbsp;
                        <!--  <span class="badge badge-dark" style="cursor: pointer;"><i class="fas fa-eye" style="color: white;"></i></span>-->
                          </td>';
            $html .= '</tr>';


        }
        echo $html;

        ?>

        </tbody>
    </table>

<?php include('template/footer.php'); ?>