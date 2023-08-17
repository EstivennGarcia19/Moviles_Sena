<?php

    require_once("../Model/connection.php");
    require_once("../Model/query.php");

    $Documento = $_POST['Documento'];
    $Email = $_POST['Email'];

    $objQuery = new Query();
    $statement = $objQuery->insertEmail($Documento, $Email);





?>