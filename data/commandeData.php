<?php

function userData_GetSalarieId($id)
{


    $request = "SELECT salarie.id, salarie.client_id AS 'client' FROM salarie JOIN user ON salarie.user_id=user.id WHERE user.id='" . $id . "'";
    $results = Connection::query($request);
    return $results;


}

function commandeData_getAll()
{
    //$request = "SELECT commander.id AS 'id', modele.libelle AS 'libelle', user.nom AS 'nom', user.prenom AS 'prenom', commander.quantite AS 'quantite', commander.date AS 'date' FROM commander JOIN salarie ON commander.salarie_id=salarie.id JOIN modele ON commander.modele_id=modele.id JOIN user ON salarie.user_id=user.id ORDER BY id ASC";
    $request = "SELECT client.raisonsociale AS 'raisonSociale', commander.prix, commander.id AS 'id', modele.libelle AS 'libelle', user.nom AS 'nom', user.prenom AS 'prenom', commander.quantite AS 'quantite', commander.date AS 'date',salarie.client_id AS 'client_id' FROM commander JOIN salarie ON commander.salarie_id=salarie.id JOIN modele ON commander.modele_id=modele.id JOIN user ON salarie.user_id=user.id JOIN client ON salarie.client_id=client.id  ORDER BY date DESC";
    $results = Connection::query($request);
    return $results;


}


function commandePersoData_getOnlyUserInfos($i_salarieId)
{

    $request = "SELECT commander.prix AS 'montant', commander.id AS 'id', modele.libelle AS 'libelle', user.nom AS 'nom', user.prenom AS 'prenom', commander.quantite AS 'quantite', commander.date AS 'date' FROM commander JOIN salarie ON commander.salarie_id=salarie.id JOIN modele ON commander.modele_id=modele.id JOIN user ON salarie.user_id=user.id WHERE commander.salarie_id=" . $i_salarieId . ' ORDER BY date DESC';
    $results = Connection::query($request);
    return $results;


}


function commandePersoData_getAll()
{

    $request = "SELECT commander.id AS 'id', modele.libelle AS 'libelle', user.nom AS 'nom', user.prenom AS 'prenom', commander.quantite AS 'quantite', commander.date AS 'date' FROM commander JOIN salarie ON commander.salarie_id=salarie.id JOIN modele ON commander.modele_id=modele.id JOIN user ON salarie.user_id=user.id WHERE commander.salarie_id=" . $_SESSION['id'] . ' ORDER BY date DESC';
    $results = Connection::query($request);
    return $results;


}

function commandePersoData_getAllByUserId($userId)
{

    $request = "SELECT commander.id AS 'id', modele.libelle AS 'libelle', user.nom AS 'nom', user.prenom AS 'prenom', commander.quantite AS 'quantite', commander.date AS 'date' FROM commander JOIN salarie ON commander.salarie_id=salarie.id JOIN modele ON commander.modele_id=modele.id JOIN user ON salarie.user_id=user.id WHERE commander.salarie_id=" . $_SESSION['id'] . ' ORDER BY date DESC';
    $results = Connection::query($request);
    return $results;


}

function commandeData_GetImage($showId)
{
    $request = "SELECT fichierImage FROM commander WHERE id='" . $showId . "'";
    $results = Connection::query($request);
    return $results;

}

function commandeForResponsibleData_getAll()
{
    $request = "SELECT commander.id AS 'id', modele.libelle AS 'libelle', user.nom AS 'nom', user.prenom AS 'prenom', commander.quantite AS 'quantite', commander.date AS 'date' FROM commander JOIN salarie ON commander.salarie_id=salarie.id JOIN modele ON commander.modele_id=modele.id JOIN user ON salarie.user_id=user.id ORDER BY salarie_id ASC";
    $results = Connection::query($request);
    return $results;

}

function commandePersoData_sendBDD($datas)
{

    $request = "INSERT INTO commander VALUES(NULL,'" . $datas['modele'] . "', '" . $datas['salarieid'] . "', '" . $datas['quantity'] . "', '" . $datas['filename'] . "', NOW(), '".$datas['prix'] ."')";

    $results = Connection::exec($request);
    return $results;

}