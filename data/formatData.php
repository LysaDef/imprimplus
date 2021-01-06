<?php

function formatData_getAll(){
     $request="SELECT * FROM modele";
     $results=Connection::query($request);
     return $results;
}