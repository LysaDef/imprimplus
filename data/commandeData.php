<?php

function commandeData_getAll()
{
    $request = "SELECT * FROM salle";
    $results = Connection::query($request);
    return $results;

}