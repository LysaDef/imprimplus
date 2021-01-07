<?php


function UserPermissionData_getsu($i_userId){

        $request="SELECT FROM user WHERE id='.$i_userId.'";
        $results=Connection::query($request);
        return $results;



}