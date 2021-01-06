<?php

function bookingprintControl($userAction)
{
    switch ($userAction) {

        case 'store':
            bookingControl_CommandeAction();
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

function bookingControl_CommandeAction()
{


    $list = userData_GetSalarieId($_SESSION['id']);


    $datas['salarieid'] = $list[0]['id'];
    $datas['modele'] = $_POST["idModele"];
    $datas['quantity'] = $_POST["nbQuantity"];


    $test = commandePersoData_sendBDD($datas);

    if ($test > 0) {

        $message = "ok!";
        bookingprintControl_defaultAction();

    } else {

        $message = "nooo";
        bookingprintControl_defaultAction();

    }


}