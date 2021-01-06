<?php include('template/header.php'); ?>
<?php include('template/menu.php'); ?>


        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="?route=dashboard">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="?route=bookingprint">Commander</a></li>
                <li class="breadcrumb-item active" aria-current="page">Autres</li>
            </ol>
        </nav>



        <div class="alert alert-warning" role="alert">
            [TODO]<br>
            - Système d'update<br>
            - Optimisation pour la prévisualisation<br><br>Avancement de la page:<br>
            <div class="progress">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
            </div>

            <br>[+ OPTIONNEL]
            <br>Réductions
        </div>


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


                    <form method="POST" action="?route=bookingprint&action=store" enctype="multipart/form-data">


                        <small id="emailHelp" class="form-text text-muted"><i class="fas fa-info-circle"></i> Votre
                            commande sera enregistrée en tant
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
                                           placeholder="Quantité" value="">
                                </div>
                                <br>

                            </div>

                            <div class="col-md-12">


                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input type="file" name="image" class="form-control-file"
                                               id="exampleFormControlFile1">
                                        <!--<input type="file" name="image" class="custom-file-input" id="inputGroupFile02">
                                        //<label class="custom-file-label" for="inputGroupFile02">Votre image</label>-->
                                    </div>

                                </div>

                            </div>
                            <div class="col-md-8">

                            </div>
                            <div class="col-md-4">


                                <button class="btn btn-primary float-right" type="submit" id="button-addon1">Valider</button>


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



    <br>
    <h2> Vos commandes </h2>
    <hr>
    <table class="table table-striped">
        <thead class="thead-light">
        <tr>
            <th scope="col">Image</th>
            <th scope="col">Quantité</th>
            <th scope="col">Format</th>
            <th scope="col">Date</th>
            <th scope="col">Modifié</th>
            <th scope="col">Actions</th>

        </tr>
        </thead>
        <tbody>


        <?php

        $html = '';
        $i = 0;
        foreach ($commandesPerso as $commandePerso) {

            $i = $i + 1;

            $html .= '<tr>';
            $html .= '<td><a href="?route=bookingprint&action=show&id=' . $commandePerso['id'] . '" target="_blank">Prévisualisation</a></td>';
            $html .= '<td>' . $commandePerso['quantite'] . '</td>';
            $html .= '<td>' . $commandePerso['libelle'] . '</td>';
            $html .= '<td>' . date('d/m/y à H:i', strtotime($commandePerso['date'])) . '</td>';
            $html .= '<td>Non</td>';
            $html .= '<td><a href="#" data-toggle="modal" data-target="#exampleModal' . $i . '" class="badge badge-danger" ><i class="fas fa-trash-alt"></i></a>&nbsp;
                          <a href="?route=bookingprint&action=update&id='. $commandePerso['id'] . '" class="badge badge-primary" style="cursor: pointer;"><i class="fas fa-pen"></i></a>&nbsp;
                        <!--  <span class="badge badge-dark" style="cursor: pointer;"><i class="fas fa-eye" style="color: white;"></i></span>-->
                          </td>';
            $html .= '</tr>';

            $html .= '<div class="modal fade" id="exampleModal' . $i . '" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Êtes vous sûr?</h5>
                         
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">


                        <small id="emailHelp" class="form-text text-muted">Le contenu suivant sera supprimé :<br></small>

                        Identifiant: <kbd>' . $commandePerso['id'] . '</kbd><br><BR>Format: <kbd>' . $commandePerso['libelle'] . '</kbd> <br>Quantité: <kbd>' . $commandePerso['quantite'] . '</kbd><br>Créé le: <kbd>' . date('d/m/y à H:i', strtotime($commandePerso['date'])) . '</kbd>
                        
                        <hr>
                        <div class="alert alert-danger" role="alert">
                          Attention: Cette action sera irréversible
                        </div>
                 
                           
                    </div>
                    <div class="modal-footer">
                    
                    
                    
                      
                        <button type="button" class="btn btn-light" data-dismiss="modal">Fermer</button>
                    
                        <a href="?route=bookingprint&action=delete&id=' . $commandePerso['id'] . '" class="btn btn-danger active" role="button" aria-pressed="true">Supprimer définitivement</a>
                    </div>
                </div>
            </div>';

        }
        echo $html;

        ?>


        </tbody>
    </table>

<?php include('template/footer.php'); ?>