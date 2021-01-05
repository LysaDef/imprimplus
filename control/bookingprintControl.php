<?php

function bookingprintControl($userAction){
    switch ($userAction) {
        //code à ajouter quand il y aura des actions
        default:
            bookingprintControl_defaultAction();
            break;

    }
}

function bookingprintControl_defaultAction()
{
    $formats=formatData_getAll();
    $tabTitle = "BookingPrint";

    include('../page/bookingprintPage_defaultAction.php');
}
