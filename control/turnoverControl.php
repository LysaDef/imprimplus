<?php
function turnoverControl($userAction){
    switch ($userAction){
        //code à ajouter quand il y aura des actions
        default:
            turnoverControl_defaultAction();
        break;

    }
}

function turnoverControl_defaultAction(){
    $caClient=chiffreAffaireData_getAll();
    $montantTotalCa=chiffreAffaireTotal();

    
    //$totalCa.= $totalCa + $chiffreAffaire['caMoisDernier'];
    include('../page/turnoverPage_defaultAction.php');
}

