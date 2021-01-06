<?php

function user_getClient($user_id){
    $request="SELECT * FROM salarie JOIN client ON salarie.client_id=client.id";
    $results=Connection::query($request);
    return $results;

}

function client_getUsers($client_id){
    $request="SELECT * FROM salarie JOIN user ON salarie.user_id=user.id ";
    $results=Connection::query($request);
    return $results;
}