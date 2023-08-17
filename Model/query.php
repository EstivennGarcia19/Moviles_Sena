<?php

    class Query {

        public function insertCity($cod_ciudad, $ciudad) {


            $objConnection = new Connection();
            $connection = $objConnection->get_connection();

            $sql = "SELECT * FROM ciudad WHERE cod_ciudad = :cod_ciudad";
            $statement = $connection->prepare($sql);
            $statement->bindParam(":cod_ciudad", $cod_ciudad);
            $statement->execute();

            if ($f = $statement->fetch()) {

                echo '<script>alert("La ciudad ya existe mano :/")</script>';
                echo "<script>location.href='../Views/ciudades.php'</script>";


            } else {


                $sql = "INSERT INTO ciudad VALUES (:cod_ciudad, :ciudad)";
    
                $statement = $connection->prepare($sql);
    
                $statement->bindParam(":cod_ciudad", $cod_ciudad);
                $statement->bindParam(":ciudad", $ciudad);
    
                $statement->execute();
    
                echo '<script>alert("Ciudad Registrada")</script>';
                echo "<script>location.href='../Views/ciudades.php'</script>";
            }

        }


        public function insertProfession($codProfesion, $Profesion) {

            $objConnection = new Connection();
            $connection = $objConnection->get_connection();

            $sql = "INSERT INTO profesiones VALUES (:codProfesion, :Profesion)";

            $statement = $connection->prepare($sql);

            $statement->bindParam(":codProfesion", $codProfesion);
            $statement->bindParam(":Profesion", $Profesion);

            $statement->execute();

            echo '<script>alert("Profesion Registrada")</script>';
            echo "<script>location.href='../Views/profesiones.php'</script>";


        }

        public function insertPhoneNum($Documento, $Telefono) {

            $objConnection = new Connection();
            $connection = $objConnection->get_connection(); 
            
            $sql = "SELECT * FROM movil WHERE Documento = :Documento";
            $statement = $connection->prepare($sql);
            $statement->bindParam(":Documento", $Documento);
            $statement->execute();

            if ($f = $statement->fetch()) {
                
                $sql = "INSERT INTO movil VALUES (:Documento, :Telefono)";
        
                $statement = $connection->prepare($sql);
        
                $statement->bindParam(":Documento", $Documento);
                $statement->bindParam(":Telefono", $Telefono);
        
                $statement->execute();
        
                echo '<script>alert("Telefono Registrado")</script>';
                echo "<script>location.href='../Views/Movil.php'</script>";


            } else {

                echo '<script>alert("El documento no existe")</script>';
                echo "<script>location.href='../Views/Movil.php'</script>";

            }

            



        }



        public function insertEmail($Documento, $Email) {

            $objConnection = new Connection();
            $connection = $objConnection->get_connection();

            $sql = "SELECT * FROM correo WHERE Documento = :Documento;";

            $statement = $connection->prepare($sql);                
            $statement->bindParam(":Documento", $Documento);
            $statement->execute();


            if ($f = $statement->fetch()) {
                
                $sql = "INSERT INTO correo VALUES (:Documento, :Email)";
        
                $statement = $connection->prepare($sql);
        
                $statement->bindParam(":Documento", $Documento);
                $statement->bindParam(":Email", $Email);
        
                $statement->execute();
        
                echo '<script>alert("Correo Registrado")</script>';
                echo "<script>location.href='../Views/correos.php'</script>";


            } else {

                echo '<script>alert("El Documento No existe")</script>';
                echo "<script>location.href='../Views/correos.php'</script>";  

                
            }                                    

        }



        public function searchCities() {

            $objConnection = new Connection();
            $connection = $objConnection->get_connection();

            $sql = "SELECT * FROM ciudad";

            $statement = $connection->prepare($sql);    
            $statement->execute();

            $f = null;

            while ($result = $statement->fetch()) {

                $f[] = $result;
            }
            return $f;



        }

        public function searchCity($id_city) {

            $objConnection = new Connection();
            $connection = $objConnection->get_connection();

            $sql = "SELECT * FROM ciudad WHERE cod_ciudad = :id_city";

            $statement = $connection->prepare($sql); 
            $statement->bindParam(":id_city", $id_city);
               
            $statement->execute();

            $f = null;

            while ($result = $statement->fetch()) {

                $f[] = $result;
            }
            return $f;



        }

        public function searchProfessions() {

            $objConnection = new Connection();
            $connection = $objConnection->get_connection();

            $sql = "SELECT * FROM profesiones";

            $statement = $connection->prepare($sql);    
            $statement->execute();

            $f = null;

            while ($result = $statement->fetch()) {

                $f[] = $result;
            }
            return $f;



        }



        public function insertUser($Documento, $ciudad, $nombres, $apellidos, $sexo,$profesion) {

            $objConnection = new Connection();
            $connection = $objConnection->get_connection();

            $sql = "SELECT * FROM personas WHERE Documento = :Documento";

            $statement = $connection->prepare($sql);
            $statement->bindParam(":Documento", $Documento);
            $statement->execute();

            if ($f = $statement->fetch()) {

                echo '<script>alert("El usuario ya existe en el sistema")</script>';
                echo "<script>location.href='../'</script>";


            } else {

                $sql = "INSERT INTO personas VALUES (:Documento, :ciudad, :nombres, :apellidos, :sexo, :profesion)";
                $statement  = $connection->prepare($sql);

                $statement->bindParam(":Documento", $Documento);
                $statement->bindParam(":ciudad", $ciudad);
                $statement->bindParam(":nombres", $nombres);
                $statement->bindParam(":apellidos", $apellidos);
                $statement->bindParam(":sexo", $sexo);
                $statement->bindParam(":profesion", $profesion);

                $statement->execute();

                echo '<script>alert("Usuario Registrado en el sistema")</script>';
                echo "<script>location.href='../'</script>";
            }


        }


        public function updateUser($Documento, $ciudad, $nombres, $apellidos, $sexo,$profesion) {

            $objConnection = new Connection();
            $connection = $objConnection->get_connection();          

            $sql = "UPDATE personas SET CodCiudad = :ciudad, nombres = :nombres, apellidos = :apellidos, sexo = :sexo, CodProfesion = :profesion WHERE Documento = :Documento";
            $statement  = $connection->prepare($sql);

            $statement->bindParam(":Documento", $Documento);
            $statement->bindParam(":ciudad", $ciudad);
            $statement->bindParam(":nombres", $nombres);
            $statement->bindParam(":apellidos", $apellidos);
            $statement->bindParam(":sexo", $sexo);
            $statement->bindParam(":profesion", $profesion);

            $statement->execute();

            echo '<script>alert("Usuario Actualizado con exitante exito")</script>';
            echo "<script>location.href='../'</script>";
            


        }


        public function searchEmails() {

            $objConnection = new Connection();
            $connection = $objConnection->get_connection();

            $sql = "SELECT * FROM correo";

            $statement = $connection->prepare($sql);    
            $statement->execute();

            $f = null;

            while ($result = $statement->fetch()) {

                $f[] = $result;
            }
            return $f;



        }


        public function searchPhoneNum() {

            $objConnection = new Connection();
            $connection = $objConnection->get_connection();

            $sql = "SELECT * FROM movil";

            $statement = $connection->prepare($sql);    
            $statement->execute();

            $f = null;

            while ($result = $statement->fetch()) {

                $f[] = $result;
            }
            return $f;



        }

        public function searchUsers() {

            $objConnection = new Connection();
            $connection = $objConnection->get_connection();

            $sql = "SELECT * FROM personas";

            $statement = $connection->prepare($sql);    
            $statement->execute();

            $f = null;

            while ($result = $statement->fetch()) {

                $f[] = $result;
            }
            return $f;



        }


        public function searchUser($id_usu) {

            $objConnection = new Connection();
            $connection = $objConnection->get_connection();

            $sql = "SELECT * FROM personas WHERE Documento = :id_usu";

            $statement = $connection->prepare($sql);
            $statement->bindParam(":id_usu", $id_usu);  
            $statement->execute();

            $f = null;

            while ($result = $statement->fetch()) {

                $f[] = $result;
            }
            return $f;



        }


        public function superQuery() {

            $objConnection = new Connection();
            $connection = $objConnection->get_connection();

            $sql = "SELECT 
            p.Documento as documento, 
            p.codCiudad as ciudad, 
            p.Nombres as nombres, 
            p.Apellidos as apellidos,
            p.Sexo as sexo, 
            pro.codProfesion as cod_profesion,
            pro.Profesion as nombre_profesion, 
            m.Telefono as telefono, 
            c.cod_ciudad as cod_ciudad, 
            c.ciudad as nombre_ciudad,
            co.Email as correo FROM 
            personas p 
            join profesiones pro on p.CodProfesion = pro.CodProfesion
            join movil m on m.Documento = p.Documento
            join ciudad c on c.cod_ciudad = p.CodCiudad
            join correo co on co.Documento = p.Documento";

            $statement = $connection->prepare($sql);    
            $statement->execute();

            $f = null;

            while ($result = $statement->fetch()) {

                $f[] = $result;
            }
            return $f;



        }


        public function dropCity($id_city) {

            $objConnection = new Connection();
            $connection = $objConnection->get_connection();

            $sql = "DELETE FROM ciudad WHERE cod_ciudad = :id_city";

            $statement = $connection->prepare($sql); 
            
            $statement->bindParam(":id_city", $id_city);
            $statement->execute();

            echo '<script>alert("Ciudad Eliminada del el sistema")</script>';
            echo "<script>location.href='../Views/showCities.php'</script>";            


        }


        public function dropVigilante($id_vig) {

            $objConnection = new Connection();
            $connection = $objConnection->get_connection();

            $sql = "DELETE FROM repartidor_vigilante WHERE id_vigilante = :id_vig";

            $statement = $connection->prepare($sql); 
            
            $statement->bindParam(":id_vig", $id_vig);
            $statement->execute();

            echo '<script>alert("Se elimino un historial :/")</script>';
            echo '<script>alert("Sospechoso -__-")</script>';
            echo "<script>location.href='../Views/vigilante.php'</script>";            


        }

        public function dropUser($id_usu) {

            $objConnection = new Connection();
            $connection = $objConnection->get_connection();

            $sql = "DELETE FROM movil WHERE Documento IN (select Documento from personas where Documento = :id_usu);
            delete from correo where Documento in (select Documento from personas where Documento = :id_usu);
            delete from personas where Documento = :id_usu;";

            $statement = $connection->prepare($sql); 
            
            $statement->bindParam(":id_usu", $id_usu);
            $statement->execute();

            echo '<script>alert("Usuario Eliminado del el sistema")</script>';
            echo "<script>location.href='../Views/showUsers.php'</script>";

            


        }

        public function dropMovil($Telefono) {

            $objConnection = new Connection();
            $connection = $objConnection->get_connection();

            $sql = "DELETE FROM movil WHERE Telefono = :Telefono";

            $statement = $connection->prepare($sql); 
            
            $statement->bindParam(":Telefono", $Telefono);
            $statement->execute();

            echo '<script>alert("Movil Eliminada del el sistema")</script>';
            echo "<script>location.href='../Views/showPhoneNum.php'</script>";

            


        }

        public function dropEmail($Email) {

            $objConnection = new Connection();
            $connection = $objConnection->get_connection();

            $sql = "DELETE FROM correo WHERE Email = :Email";

            $statement = $connection->prepare($sql); 
            
            $statement->bindParam(":Email", $Email);
            $statement->execute();

            echo '<script>alert("Correo Eliminada del el sistema")</script>';
            echo "<script>location.href='../Views/showEmails.php'</script>";

            


        }

        public function dropProfession($id_profesion) {

            $objConnection = new Connection();
            $connection = $objConnection->get_connection();

            $sql = "DELETE FROM profesiones WHERE CodProfesion = :id_profesion";

            $statement = $connection->prepare($sql); 
            
            $statement->bindParam(":id_profesion", $id_profesion);
            $statement->execute();

            echo '<script>alert("Profesion Eliminada del el sistema")</script>';
            echo "<script>location.href='../Views/showProfessions.php'</script>";

            


        }


        public function updateCity($id_city, $ciudad) {


            $objConnection = new Connection();
            $connection = $objConnection->get_connection();

            $sql = "UPDATE ciudad SET ciudad = :ciudad WHERE cod_ciudad = :id_city";

            $statement = $connection->prepare($sql);
        
            $statement->bindParam(":id_city", $id_city);
            $statement->bindParam(":ciudad", $ciudad);

            $statement->execute();

            echo '<script>alert("Ciudad Actualizada")</script>';
            echo "<script>location.href='../Views/ciudades.php'</script>";
        }


        public function searchVigilantes() {

            $objConnection = new Connection();
            $connection = $objConnection->get_connection();

            $sql = "SELECT * FROM repartidor_vigilante";

            $statement = $connection->prepare($sql);    
            $statement->execute();

            $f = null;

            while ($result = $statement->fetch()) {

                $f[] = $result;
            }
            return $f;



        }


        public function searchInform() {

            $objConnection = new Connection();
            $connection = $objConnection->get_connection();

            $sql = "SELECT * FROM informe";

            $statement = $connection->prepare($sql);    
            $statement->execute();

            $f = null;

            while ($result = $statement->fetch()) {

                $f[] = $result;
            }
            return $f;



        }



        
    }




?>