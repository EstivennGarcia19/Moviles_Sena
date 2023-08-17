<?php

    require_once("../Model/connection.php");
    require_once("../Model/query.php");

    $codProfesion = $_POST['codProfesion'];
    $Profesion = $_POST['Profesion'];

    $objQuery = new Query();
    $statement = $objQuery->insertProfession($codProfesion, $Profesion);





?>