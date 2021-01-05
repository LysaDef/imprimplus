<?php 
session_start();
include ('../config/env.php');
include ('../data/Connection.php');
include ('../data/commandeData.php');
include ('../data/formatData.php');
include ('../control/authenticateControl.php');
include ('../control/dashboardControl.php');
include ('../control/bookingprintControl.php');
include ('../data/userData.php');




$route='';

if (isset($_GET['route'])) {
    $route=$_GET['route'];
}

$action='';
if (isset($_GET['action'])) {
    $action=$_GET['action'];
}

if (!isset($_SESSION['id'])){
    $route='authenticate';
}

switch($route){

    case 'dashboard':
        dashboardControl($action);
    break;
    case 'authenticate':
        authenticateControl($action);
    break;
    case 'bookingprint':
        bookingprintControl($action);
        break;

    default:
    echo "La route spécifiée n'existe pas";
    break;
}



//include('../control/dashboardControl.php');
//include('../control/roomControl.php');