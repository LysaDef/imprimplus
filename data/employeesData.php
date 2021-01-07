<?php


function UserEmployeesData_GetMyCompany($i_company){
    $request="SELECT user.*, client.* FROM salarie JOIN user ON salarie.user_id=user.id JOIN client ON salarie.client_id=client.id WHERE salarie.id='".$i_company."'";
    $results=Connection::query($request);
    return $results;
}

function EmployeesData_GetAll($i_company){
    $request="SELECT user.*, client.* FROM salarie JOIN user ON salarie.user_id=user.id JOIN client ON salarie.client_id=client.id WHERE raisonSociale='".$i_company."'";
    $results=Connection::query($request);
    
    return $results;
}