<?php

function userData_GetSalarieId($id){


    $request = "SELECT salarie.id FROM salarie JOIN user ON salarie.user_id=user.id WHERE user.id='".$id."'";
    $results = Connection::query($request);
    return $results;


}

function commandeData_getAll()
{
    $request = "SELECT commander.id AS 'id', modele.libelle AS 'libelle', user.nom AS 'nom', user.prenom AS 'prenom', commander.quantite AS 'quantite', commander.date AS 'date' FROM commander JOIN salarie ON commander.salarie_id=salarie.id JOIN modele ON commander.modele_id=modele.id JOIN user ON salarie.user_id=user.id ORDER BY id ASC";
    $results = Connection::query($request);
    return $results;
    

}



function commandePersoData_getAll(){

    //$request = "SELECT commander.id AS 'id', modele.libelle AS 'libelle', user.nom AS 'nom', user.prenom AS 'prenom', commander.quantite AS 'quantite', commander.date AS 'date' FROM commander JOIN salarie ON commander.salarie_id=salarie.id JOIN modele ON commander.modele_id=modele.id JOIN user ON salarie.user_id=user.id WHERE commander.salarie_id=".$_SESSION['id']."";
    $request = "SELECT commander.id AS 'id', modele.libelle AS 'libelle', user.nom AS 'nom', user.prenom AS 'prenom', commander.quantite AS 'quantite', commander.date AS 'date' FROM commander JOIN salarie ON commander.salarie_id=salarie.id JOIN modele ON commander.modele_id=modele.id JOIN user ON salarie.user_id=user.id ORDER BY date DESC";
    $results = Connection::query($request);
    return $results;
    

}

<<<<<<< HEAD
=======

>>>>>>> 883539a5feb2d983dde0f158c362d3c82b6c2730
function commandeForResponsibleData_getAll()
{
    $request = "SELECT commander.id AS 'id', modele.libelle AS 'libelle', user.nom AS 'nom', user.prenom AS 'prenom', commander.quantite AS 'quantite', commander.date AS 'date' FROM commander JOIN salarie ON commander.salarie_id=salarie.id JOIN modele ON commander.modele_id=modele.id JOIN user ON salarie.user_id=user.id ORDER BY salarie_id ASC";
    $results = Connection::query($request);
    return $results;
<<<<<<< HEAD
    
=======

}

function commandePersoData_sendBDD($datas){

    $request = "INSERT INTO commander VALUES(NULL,'".$datas['modele']."', '".$datas['salarieid']."', '".$datas['quantity']."', 'Undifinded', NOW())";

    $results=Connection::exec($request);
    return $results;
>>>>>>> 883539a5feb2d983dde0f158c362d3c82b6c2730

}