
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
    $commandesSalaries=[]; // array();
    // Récuperére la liste tous les salariées du client donc du responable qui est connecté, donc du user

    $list = userData_GetSalarieId($_SESSION['id']);
    $i_salarieId['id'] = $list[0]['id'];

    $salarieid = UserEmployeesData_GetMyCompany($i_salarieId['id']);

    $salaries = EmployeesData_GetAll($salarieid[0]['raisonSociale']);
    //var_dump($salaries);

    
    // Boucler pour chacun des salariés de la liste,récupérer ces commandes 
    foreach ($salaries as $salarie){
        $salarieCommandes=commandesSalariesData_getAll($salarie['sid']);
        //var_dump($salarieCommandes);
        $commandesSalaries[]=$salarieCommandes;
        $salarieCommandes=[];
        
        
    }
   

    //$commandesSalaries=commandesSalariesData_getAll($salarieid[0]['client_id']);*/
    //var_dump($commandesSalaries);
    

    /*$clientUnUsers=user_getClient($userId);
    $usersUnClients=client_getUsers($client_id);
    $SalarieUnUsers=user_getSalarie($user_id);
    $commandesUnUsers=user_getCommandes($user_id);*/
    include('../page/responsibleforclientPage_defaultAction.php');
}
