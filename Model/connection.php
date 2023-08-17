<?php

    class Connection {

        public function get_connection() {

            $user = "root";
            $pass = "";
            $db = "db_mobil_sena";
            $host = "localhost";

            $connection = new PDO("mysql:host=$host; dbname=$db;", $user, $pass);

            return $connection;
        }
    }


?>