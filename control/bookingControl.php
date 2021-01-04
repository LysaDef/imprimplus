<?php
function bookingControl($userAction){
    switch ($userAction){
        //code à ajouter quand il y aura des actions
        case 'store':
            bookingControl_storeAction();
            break;
        default:
            bookingControl_defaultAction();
        break;

    }
}

function bookingControl_defaultAction()
{
    $tabTitle="Réservation";
    $salles=salleData_getAll();
    $reservations=reserverData_getAllWithSalleNameByLigueId($_SESSION['ligue_id']);
    include('../page/bookingPage_default.php');
}

function bookingControl_storeAction()
{
    $datas['date']=$_POST['dateResa'];
    $datas['heureDebut']=$_POST['heureDebutResa'];
    $datas['heureFin']=$_POST['heureFinResa'];
    $datas['salle_id']=$_POST['idSalleResa'];
    $datas['ligue_id']=$_SESSION['ligue_id'];
    
    $test=reserverData_store($datas);
    
    if ($test>0){
        $message="La salle a été réservée avec succès";
    }
    else {
        $message="Il y a un problème dans votre choix ou bien nous avons perdu la connexion";

    }

    // On appelle à nouveau la vue par défaut
    $tabTitle="Réservation";
    $salles=salleData_getAll();
    $reservations=reserverData_getAllWithSalleNameByLigueId($_SESSION['ligue_id']);
    include('../page/bookingPage_default.php');
}


