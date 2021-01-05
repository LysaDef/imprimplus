<?php

function formatData_getAll(){
     $request="SELECT libelle FROM modele";
     $results=Connection::query($request);
     return $results;
}