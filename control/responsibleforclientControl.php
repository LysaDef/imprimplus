
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
    $cordonneesClient=coordonneesClientData_getAll();
    //$mesCommandes=commandePersoData_getAllByUserId($_SESSION['id']);
    
    $mesCommandes=tarifData_getAllByUserId($_SESSION['id']);
    //$clientUnUsers=user_getClient($user_id);
    //$usersUnClients=client_getUsers($client_id);
    //$SalarieUnUsers=user_getSalarie($user_id);
    //$commandesUnUsers=user_getCommandes($user_id);
    include('../page/responsibleforclientPage_defaultAction.php');
}
