<?php
function bookingprintControl_defaultAction()
{

    $formats=formatData_getAll();

    include('../page/bookingprintPage_defaultAction.php');
}