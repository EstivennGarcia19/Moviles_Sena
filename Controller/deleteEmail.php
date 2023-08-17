<?php

    require_once("../Model/connection.php");
    require_once("../Model/query.php");

    $Email = $_GET['Email'];
    

    $objQuery = new Query();
    $statement = $objQuery->dropEmail($Email);

?>