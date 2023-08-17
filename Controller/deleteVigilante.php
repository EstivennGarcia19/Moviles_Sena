<?php

    require_once("../Model/connection.php");
    require_once("../Model/query.php");

    $id_vig = $_GET['id_vig'];
    

    $objQuery = new Query();
    $statement = $objQuery->dropVigilante($id_vig);

?>