<?php


function UserPermissionData_getsu($i_userId){

        $request="SELECT FROM user WHERE id='.$i_userId.'";
        $results=Connection::query($request);
        return $results;



}


function UserPermissionData_getService($i_userId){

        $request="SELECT service.libelle, service.id FROM user JOIN operateur ON user.id=operateur.user_id JOIN service ON operateur.service_id=service.id WHERE user.id='".$i_userId."'";
        $results=Connection::query($request);
        return $results;



}