<?php

function chiffreAffaireData_getAll()
{
    $request = "SELECT * FROM reduction";
    $results = Connection::query($request);
    return $results;
    

}
