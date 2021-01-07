<?php 
session_start();
include ('../config/env.php');


include ('../data/Connection.php');
include ('../data/commandeData.php');
include ('../data/formatData.php');
include ('../data/caMoisDernierData.php');
include ('../data/userData.php');
include ('../data/tarifData.php');
include ('../data/deleteData.php');
include ('../data/permissionsData.php');

include ('../control/authenticateControl.php');
include ('../control/orderControl.php');
include ('../control/dashboardControl.php');
include ('../control/responsibleforclientControl.php');
include ('../control/bookingprintControl.php');
include ('../control/turnoverControl.php');





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
    case 'order':
        orderControl($action);
        break;
    case 'turnover':
        turnoverControl($action);
        break;

        case 'responsible':
        responsibleControl($action);
    break;

    default:
    echo "La route spécifiée n'existe pas";
    break;
}



//include('../control/dashboardControl.php');
//include('../control/roomControl.php');