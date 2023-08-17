<?php

    require_once("../Model/connection.php");
    require_once("../Model/query.php");

    $id_profesion = $_GET['id_profesion'];
    

    $objQuery = new Query();
    $statement = $objQuery->dropProfession($id_profesion);

?>