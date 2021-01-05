<?php

function chiffreAffaireData_getAll()
{
    $request = "SELECT caMoisDernier FROM reduction";
    $results = Connection::query($request);
    return $results;
    

}
