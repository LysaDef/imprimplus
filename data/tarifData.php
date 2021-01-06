<?php

function tarifData_getAll(){
     $request="SELECT commander.quantite AS 'quantite', tarif.montant AS 'montant' FROM commander,modele,tarif WHERE commander.modele_id=modele.id AND tarif.modele_id=modele.id  ";
     $results=Connection::query($request);
     return $results;
}


function tarifData_getAllByUserId($userId){
     $request="SELECT *, commander.quantite AS 'quantiteCommandees' FROM commander,modele,tarif WHERE commander.modele_id=modele.id AND tarif.modele_id=modele.id AND commander.salarie_id=".$_SESSION['id'];
     $results=Connection::query($request);
     return $results;
}