<?php

    require_once("../Model/connection.php");
    require_once("../Model/query.php");

    $id_city = $_GET['id_city'];
    

    $objQuery = new Query();
    $statement = $objQuery->dropCity($id_city);

?>