<?php

    require_once("../Model/connection.php");
    require_once("../Model/query.php");

    $Documento = $_POST['Documento'];
    $Telefono = $_POST['Telefono'];

    $objQuery = new Query();
    $statement = $objQuery->insertPhoneNum($Documento, $Telefono);

?>