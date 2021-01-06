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


    if(!empty($_POST['idModele'] AND !empty($_POST['content']))){


        $list=userData_GetSalarieId($_SESSION['id']);


        $datas['salarieid']=$list[0]['id'];
        $datas['modele']=$_POST["idModele"];
        $datas['quantity']=$_POST["nbQuantity"];


        $test=commandePersoData_sendBDD($datas);

        if ($test>0){

            $message="ok!";
            bookingprintControl_defaultAction();

        } else {

            $message="nooo";
            bookingprintControl_defaultAction();

        }

    } else {

        $formats=formatData_getAll();
        $commandes=commandeData_getAll();
        $commandesPerso=commandePersoData_getAll();
        $tabTitle = "BookingPrint";
        $message = "VEUILLEZ REMPLIR TOUT LES CHAMPS!";

        include('../page/bookingprintPage_defaultAction.php');

    }




}