<?php

function commandeData_getAll()
{
    $request = "SELECT commander.id, modele.libelle, user.nom, user.prenom, commander.quantite, commander.date FROM commander JOIN salarie ON commander.salarie_id=salarie.id JOIN modele ON commander.modele_id=modele.id JOIN user ON salarie.user_id=user.id ";
    $results = Connection::query($request);
    return $results;

}
