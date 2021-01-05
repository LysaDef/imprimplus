<?php 

function orderControl($userAction)
{
    switch ($userAction) {
        //code à ajouter quand il y aura des actions
        default:
            orderControl_defaultAction();
            break;

    }
}

function orderControl_defaultAction()
{
    $tabTitle="Commandes mois par mois";
    $commandes=commandeData_getAll();
    include('../page/orderPage_defaultAction.php');
}
