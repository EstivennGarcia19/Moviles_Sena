<?php

    require_once("../Model/connection.php");
    require_once("../Model/query.php");

    $Telefono = $_GET['Telefono'];
    

    $objQuery = new Query();
    $statement = $objQuery->dropMovil($Telefono);

?>