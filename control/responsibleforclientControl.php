
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
    //$mesCommandes=commandePersoData_getAllByUserId($_SESSION['id']);
    
    //$mesCommandes=tarifData_getAllByUserId($_SESSION['id']);
    $clientUnUser=user_getClient($user_id);
    $usersUnClient=client_getUsers($client_id);
    $SalarieUnUser=user_getSalarie($user_id);
    $commandesUnUser=user_getCommandes($user_id);
    include('../page/responsibleforclientPage_defaultAction.php');
}
