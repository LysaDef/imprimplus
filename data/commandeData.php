<?php

function commandeData_getAll()
{
    $request = "SELECT commander.id AS 'id', modele.libelle AS 'libelle', user.nom AS 'nom', user.prenom AS 'prenom', commander.quantite AS 'quantite', commander.date AS 'date' FROM commander JOIN salarie ON commander.salarie_id=salarie.id JOIN modele ON commander.modele_id=modele.id JOIN user ON salarie.user_id=user.id ORDER BY id ASC";
    $results = Connection::query($request);
    return $results;
    

}



function commandePersoData_getAll(){

    $request = "SELECT commander.id AS 'id', modele.libelle AS 'libelle', user.nom AS 'nom', user.prenom AS 'prenom', commander.quantite AS 'quantite', commander.date AS 'date' FROM commander JOIN salarie ON commander.salarie_id=salarie.id JOIN modele ON commander.modele_id=modele.id JOIN user ON salarie.user_id=user.id WHERE commander.salarie_id=".$_SESSION['id']."";
    $results = Connection::query($request);
    return $results;
    

}

function commandeForResponsibleData_getAll()
{
    $request = "SELECT commander.id AS 'id', modele.libelle AS 'libelle', user.nom AS 'nom', user.prenom AS 'prenom', commander.quantite AS 'quantite', commander.date AS 'date' FROM commander JOIN salarie ON commander.salarie_id=salarie.id JOIN modele ON commander.modele_id=modele.id JOIN user ON salarie.user_id=user.id ORDER BY salarie_id ASC";
    $results = Connection::query($request);
    return $results;
    

}