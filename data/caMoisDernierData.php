<?php

function chiffreAffaireData_getAll()
{
    $request = "SELECT *  FROM reduction";
    $results = Connection::query($request);
    return $results;
    

}

function chiffreAffaireTotal()
{
    $request = "SELECT SUM(caMoisDernier) FROM reduction";
    $results = Connection::query($request);
    return $results;
}
