<?php

function user_getClient($user_id){
    $request="SELECT * FROM client WHERE user_id=$user.id";
    $results=Connection::query($request);
    return $results;

}

function client_getUsers($client_id){
    $request="SELECT * FROM user WHERE client_id=$client.id";
    $results=Connection::query($request);
    return $results;
}

function user_getSalarie($user_id){
    $request="SELECT * FROM salarie WHERE user_id=$user.id ";
    $results=Connection::query($request);
    return $results;
}

function user_getCommandes($user_id){
    $request="SELECT * FROM commander WHERE user_id=$user.id";
    $results=Connection::query($request);
    return $results;

}