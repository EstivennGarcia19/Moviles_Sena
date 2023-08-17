<?php

    require_once("../Model/connection.php");
    require_once("../Model/query.php");

    $id_usu = $_GET['id_usu'];
    

    $objQuery = new Query();
    $statement = $objQuery->dropUser($id_usu);

?>