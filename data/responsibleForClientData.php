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
    $request="SELECT * FROM client";
    $results=Connection::query($request);
    return $results;
    
}