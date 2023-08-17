<?php

    require_once("../Model/connection.php");
    require_once("../Model/query.php");

    
    $id_city = $_POST['id_city'];
    $ciudad = $_POST['ciudad'];

    $objQuery = new Query();
    $statement = $objQuery->updateCity($id_city, $ciudad);





?>