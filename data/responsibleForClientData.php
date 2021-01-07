<?php

function user_getClient($userId){
    $request="SELECT * FROM client WHERE user_id=".$userId;
    $results=Connection::query($request);
    return $results;
    

}

function client_getUsers($clientId){
    $request="SELECT * FROM user WHERE client_id=".$clientId;
    var_dump($request);
    $results=Connection::query($request);
    return $results;
}

function user_getSalarie($userId){
    $request="SELECT * FROM salarie WHERE user_id=".$userId ;
    $results=Connection::query($request);
    return $results;
    var_dump($request);
}

function user_getCommandes($userId){
    $request="SELECT * FROM commander WHERE user_id=".$userId;
    $results=Connection::query($request);
    return $results;

}

function coordonneesClientData_getAll(){
    $request="SELECT * FROM commander JOIN salarie ON commander.salarie_id=salarie.id ";
    $results=Connection::query($request);
    return $results;

}

function commandesSalariesData_getAll($i_company){
    $request="SELECT commander.quantite AS 'quantiteCommandees', salarie.id AS 'salarieId' ,modele.libelle AS 'modele' ,tarif.montant AS 'montant'
    FROM commander JOIN salarie ON salarie.id=commander.salarie_id JOIN modele ON modele.id=commander.modele_id JOIN tarif ON modele.id=commander.modele_id
    WHERE salarie_id='" . $i_company . "'";
   // var_dump($request);
    $results=Connection::query($request);
    return $results;
    
}