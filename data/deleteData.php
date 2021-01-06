<?php

function commandeData_deleteById($i_id){


    $request = "DELETE FROM commander WHERE id='".$i_id."'";
    $results = Connection::exec($request);
    return $results;



}
