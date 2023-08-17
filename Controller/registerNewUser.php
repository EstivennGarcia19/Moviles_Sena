<?php

    require_once("../Model/connection.php");
    require_once("../Model/query.php");

    $Documento = $_POST['Documento'];
    $ciudad = $_POST['ciudad'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $sexo = $_POST['sexo'];
    $profesion = $_POST['profesion'];

    $objQuery = new Query();
    $statement = $objQuery->insertUser($Documento, $ciudad, $nombres, $apellidos, $sexo,$profesion);








?>