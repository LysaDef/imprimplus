
<?php

function responsibleControl($userAction)
{
    switch ($userAction) {
        //code à ajouter quand il y aura des actions
        default:
            responsibleControl_defaultAction();
            break;

    }
}

function responsibleControl_defaultAction()
{
    $tabTitle="Commandes mois par mois";
    $commandesSalaries=commandeForResponsibleData_getAll();
    $caClient=chiffreAffaireData_getAll();
    include('../page/responsibleforclientPage_defaultAction.php');
}
