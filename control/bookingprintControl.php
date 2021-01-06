<?php

function bookingprintControl($userAction){
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
    $formats=formatData_getAll();
    $commandes=commandeData_getAll();
    $commandesPerso=commandePersoData_getAll();
    $tabTitle = "BookingPrint";

    include('../page/bookingprintPage_defaultAction.php');
}
function bookingControl_CommandeAction(){

    $list=userData_GetSalarieId($_SESSION['id']);


    $datas['salarieid']=$list[0]['id'];
    $datas['modele']=$_POST["idModele"];
    $datas['quantity']=$_POST["nbQuantity"];


    $test=commandePersoData_sendBDD($datas);

    if ($test>0){

         $message = "sended to db";

    } else {

        $message = "error to db";

    }

    echo $message;

}