<?php

function formatData_getAll(){
     $request="SELECT modele.*, tarif.montant AS 'montant' FROM modele JOIN tarif ON modele.id=tarif.modele_id";
    //$request="SELECT * FROM modele";
     $results=Connection::query($request);
     return $results;
}


function formatData_getAmout($i_prix){
    $request="SELECT tarif.montant AS 'montant' FROM modele JOIN tarif ON modele.id=tarif.modele_id WHERE modele.id='".$i_prix."'";
    $results=Connection::query($request);
    return $results;
}