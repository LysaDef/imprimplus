
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

       
    $list = userData_GetSalarieId($_SESSION['id']);
    $i_salarieId['id'] = $list[0]['id'];

    $salarieid=UserEmployeesData_GetMyCompany($i_salarieId['id']);
    $coordonneesClients=EmployeesData_GetAll($salarieid[0]['raisonSociale']);
    $mesCommandes=tarifData_getAllByUserId($_SESSION['id']);
    /*$clientUnUsers=user_getClient($userId);
    $usersUnClients=client_getUsers($client_id);
    $SalarieUnUsers=user_getSalarie($user_id);
    $commandesUnUsers=user_getCommandes($user_id);*/
    include('../page/responsibleforclientPage_defaultAction.php');
}
