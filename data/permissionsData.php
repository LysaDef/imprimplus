<?php


function UserPermissionData_getSuperUser($i_userId){

        $request="SELECT FROM user WHERE id='.$i_userId.'";
        $results=Connection::query($request);
        return $results;



}