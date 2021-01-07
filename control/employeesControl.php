<?php
function employeesControl($userAction)
{
    switch ($userAction) {
        case "check":
            $confirmId = $_GET['id'];
            $commandesUsers = EmployeesData_GetCommandes($confirmId);


            include('../page/bookingPersonalPage_defaultAction.php');
            break;

        default:
            employeesControl_defaultAction();
            break;

    }
}

function employeesControl_defaultAction()
{

    $list = userData_GetSalarieId($_SESSION['id']);
    $i_salarieId['id'] = $list[0]['id'];
    $i_salarieId['client_id'] = $list[0]['client'];

    $salarieid = UserEmployeesData_GetMyCompany($i_salarieId['id']);

    $employees = EmployeesData_GetAll($salarieid[0]['raisonSociale']);
    $tabTitle = "Mes employés";

    include('../page/employeesPage_defaultAction.php');
}
