<?php

function bookingprintControl($userAction){
    switch ($userAction) {
        //code à ajouter quand il y aura des actions
        case 'commande':
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
    var_dump($commandes);
}