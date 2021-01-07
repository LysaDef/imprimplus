<?php

function bookingprintControl($userAction)
{
    switch ($userAction) {

        case 'store':
            bookingControl_CommandeAction();



            break;
        case 'delete':
            $deleteId = $_GET['id'];
            commandeData_deleteById($deleteId);
            bookingControl_SetupAlert("Element supprimé avec succès !", 1);

            break;
        case 'show':
            $showId = $_GET['id'];
            $check = commandeData_GetImage($showId);
            $imageContent = $check[0]['fichierImage'];
            echo "<img src=" . $imageContent . ">";

            break;
        case 'update':
            $showId = $_GET['id'];
            break;
        default:
            bookingprintControl_defaultAction();
            break;

    }
}

function bookingprintControl_defaultAction()
{
    $formats = formatData_getAll();
    $commandes = commandeData_getAll();


    $list = userData_GetSalarieId($_SESSION['id']);
    $i_salarieId['id'] = $list[0]['id'];

    $commandesPerso = commandePersoData_getOnlyUserInfos($i_salarieId['id']);
    $tabTitle = "BookingPrint";

    include('../page/bookingprintPage_defaultAction.php');
}

function bookingControl_SetupAlert($raison, $type)
{


    $message = $raison; // "Erreur: Vous ne pouvez pas mettre une quantitée négative...";
    $messagetype = $type;
    $formats = formatData_getAll();
    $commandes = commandeData_getAll();




    $list = userData_GetSalarieId($_SESSION['id']);
    $i_salarieId['id'] = $list[0]['id'];

    $commandesPerso = commandePersoData_getOnlyUserInfos($i_salarieId['id']);
    $tabTitle = "BookingPrint";

    include('../page/bookingprintPage_defaultAction.php');
}

function bookingControl_CommandeAction()
{

    if (!empty($_POST['nbQuantity']) and !empty($_POST['idModele'])) {

        if ($_POST['nbQuantity'] <= 0) {


            bookingControl_SetupAlert("Erreur: Vous ne pouvez pas mettre une quantitée négative...", 2);

        } else {


            if (!empty($_FILES['image']['name'])) {
                $list = userData_GetSalarieId($_SESSION['id']);


                $datas['salarieid'] = $list[0]['id'];


                $filename = $_FILES['image']['name'];
                $target_dir = "../public/imagerepository/";


                $imageExtension = pathinfo($filename, PATHINFO_EXTENSION);
                $randomno = rand(0, 60);
                $imageRename = 'upload' . date('Ymd') . $randomno;
                $imageNewName = $imageRename . '.' . $imageExtension;

                move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $imageNewName);

                $datas['filename'] = $target_dir . $imageNewName;
                $datas['modele'] = $_POST["idModele"];
                $datas['quantity'] = $_POST["nbQuantity"];

                $test = commandePersoData_sendBDD($datas);

                if ($test > 0) {


                    bookingControl_SetupAlert("Votre enregistrement à bien été effectué !", 1);


                } else {

                    bookingControl_SetupAlert("Erreur enregistrement base de donnée", 2);

                }

            } else {


                bookingControl_SetupAlert("Erreur: Veuillez préciser l'image", 2);
            }


        }

    } else {

        bookingControl_SetupAlert("Erreur: Veuillez remplir tout les champs!", 2);

    }


}

