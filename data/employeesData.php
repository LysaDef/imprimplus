<?php


function UserEmployeesData_GetMyCompany($i_company)
{
    $request = "SELECT user.*, client.* FROM salarie JOIN user ON salarie.user_id=user.id JOIN client ON salarie.client_id=client.id WHERE salarie.id='" . $i_company . "'";
    $results = Connection::query($request);
    return $results;
}

function EmployeesData_GetAll($i_company)
{
    $request = "SELECT user.*, salarie.id AS 'sid', client.* FROM salarie JOIN user ON salarie.user_id=user.id JOIN client ON salarie.client_id=client.id WHERE raisonSociale='" . $i_company . "'";
    $results = Connection::query($request);
    return $results;
}

function EmployeesData_GetCommandes($i_salarie_id)
{


    $request = "SELECT commander.id AS 'id', modele.libelle AS 'libelle', user.nom AS 'nom', user.prenom AS 'prenom', commander.quantite AS 'quantite', commander.date AS 'date' FROM commander JOIN salarie ON commander.salarie_id=salarie.id JOIN modele ON commander.modele_id=modele.id JOIN user ON salarie.user_id=user.id WHERE commander.salarie_id=" . $i_salarie_id . ' ORDER BY date DESC';
    $results = Connection::query($request);
    return $results;


}