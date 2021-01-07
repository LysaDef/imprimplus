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

function commandesSalariesData_getAll(){
    $request="SELECT * FROM commander JOIN salarie ON commander.salarie_id=salarie.id WHERE raisonSociale='" . $i_company . "'";
    $results=Connection::query($request);
    return $results;
    
}