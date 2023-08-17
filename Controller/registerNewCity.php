<?php

    require_once("../Model/connection.php");
    require_once("../Model/query.php");

    $cod_ciudad = $_POST['cod_ciudad'];
    $ciudad = $_POST['ciudad'];

    $objQuery = new Query();
    $statement = $objQuery->insertCity($cod_ciudad, $ciudad);





?>