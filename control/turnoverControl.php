<?php
function turnoverControl($userAction){
    switch ($userAction){
        //code à ajouter quand il y aura des actions
        default:
            turnoverControl_defaultAction();
        break;

    }
}
$totalCa='';
function turnoverControl_defaultAction(){
    $chiffreAffaire=chiffreAffaireData_getAll();
    $totalCa.= $totalCa + $chiffreAffaire['caMoisDernier'];

}