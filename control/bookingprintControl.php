<?php

function bookingprintControl($userAction)
{
    switch ($userAction) {

        case 'store':
            bookingControl_CommandeAction();
            break;
        case 'delete':
            $deleteId=$_GET['id'];
            commandeData_deleteById($deleteId);
            bookingControl_SetupAlert("Element supprimé avec succès !", 1);

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

    $commandesPerso = commandePersoData_getAll($i_salarieId['id']);
    $tabTitle = "BookingPrint";

    include('../page/bookingprintPage_defaultAction.php');
}

function bookingControl_SetupAlert($arg1, $arg2)
{


    $message = $arg1; // "Erreur: Vous ne pouvez pas mettre une quantitée négative...";
    $messagetype = $arg2;
    $formats = formatData_getAll();
    $commandes = commandeData_getAll();


    $list = userData_GetSalarieId($_SESSION['id']);
    $i_salarieId['id'] = $list[0]['id'];

    $commandesPerso = commandePersoData_getAll($i_salarieId['id']);
    $tabTitle = "BookingPrint";

    include('../page/bookingprintPage_defaultAction.php');
}

function bookingControl_CommandeAction()
{

    if (!empty($_POST['nbQuantity']) and !empty($_POST['idModele'])) {

        if ($_POST['nbQuantity'] <= 0) {


            bookingControl_SetupAlert("Erreur: Vous ne pouvez pas mettre une quantitée négative...", 2);

        } else {


            $list = userData_GetSalarieId($_SESSION['id']);


            $datas['salarieid'] = $list[0]['id'];
            $datas['modele'] = $_POST["idModele"];
            $datas['quantity'] = $_POST["nbQuantity"];


            $test = commandePersoData_sendBDD($datas);

            if ($test > 0) {


                bookingControl_SetupAlert("Votre enregistrement à bien été effectué !", 1);
            } else {

                bookingControl_SetupAlert("Erreur enregistrement base de donnée", 2);

            }
        }

    } else {

        bookingControl_SetupAlert("Erreur: Veuillez remplir tout les champs!", 2);

    }


}

