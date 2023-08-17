<?php


    function showCitiesToUser() {

        $objQuery = new Query();
        $statement = $objQuery->searchCities();

        foreach ($statement as $f) {

            echo 
            '
                <option value="'.$f['cod_ciudad'].'">'.$f['ciudad'].'</option>
            ';
        }
    }
    
    function showProfessionToUser() {

        $objQuery = new Query();
        $statement = $objQuery->searchProfessions();

        foreach ($statement as $f) {

            echo 
            '
                <option value="'.$f['CodProfesion'].'">'.$f['Profesion'].'</option>
            ';
        }
    }



    function showAllCities() {

        $objQuery = new Query();
        $statement = $objQuery->searchCities();

        if (!$statement) {

            echo '<td>No Hay ciudades registradas aun</td>';
        } else {

            foreach ($statement as $f) {
    
                echo 
                '
                    <tr>
                        <td> '.$f['cod_ciudad'].' </td>
                        <td> '.$f['ciudad'].'  </td>
                     
                        <td><a href="EditCiudad.php?id_city='.$f['cod_ciudad'].'">Editar</a></td>
                        <td><a href="../Controller/deleteCity.php?id_city='.$f['cod_ciudad'].'">Borrar</a></td>
                    </tr>
                ';
            }
        }

    }



    function showAllProfessions() {

        $objQuery = new Query();
        $statement = $objQuery->searchProfessions();

        if (!$statement) {

            echo 
            '
                <tr><td colspan="100%">No hay Profesiones registradas aun</td></tr>
            ';
        } else {

            foreach ($statement as $f) {
    
                echo 
                '   
                    <tr>
                        <td> '.$f['CodProfesion'].' </td>
                        <td> '.$f['Profesion'].'  </td>
                    
                        
                        <td><a href="../Controller/deleteProfesion.php?id_profesion='.$f['CodProfesion'].'">Borrar</a></td>
                    </tr>
    
                ';
            }
            
        }

    }



    function showAllEmails() {

        $objQuery = new Query();
        $statement = $objQuery->searchEmails();

        if (!$statement) {

            echo 
            '
                <tr><td colspan="100%">No hay Correos registradas aun</td></tr>
            ';
        } else {

            
            foreach ($statement as $f) {
    
                echo 
                '   
    
                    <tr>
                        <td> '.$f['Documento'].' </td>
                        <td> '.$f['Email'].'  </td>
                    
                        <td><a href="../Controller/deleteEmail.php?Email='.$f['Email'].'">Borrar</a></td>
                    </tr>
                   
    
                ';
            }
            
        }




    }


    function showAllPhoneNum() {

        $objQuery = new Query();
        $statement = $objQuery->searchPhoneNum();


        if (!$statement) {

            echo 
            '
                <tr><td colspan="100%">No hay Telefonos registradas aun</td></tr>
            ';
        } else {

       
            foreach ($statement as $f) {
    
                echo 
                '   
    
                    <tr>
                        <td> '.$f['Documento'].' </td>
                        <td> '.$f['Telefono'].'  </td>
                    
                        <td><a href="../Controller/deleteMovil.php?Telefono='.$f['Telefono'].'">Borrar</a></td>
                        
                    </tr>
                   
    
                ';
            }
            
        }

    }



    function showCityToEdit() {
        
        $id_city = $_GET['id_city'];

        $objQuery = new Query();
        $statement = $objQuery->searchCity($id_city);

        if (!$statement) {

            echo 
            '
                <tr><td colspan="100%">No hay Ciudades registradas aun</td></tr>
            ';
        } else {

          
            foreach($statement as $f) {
    
                echo 
                '
                    <form action="../Controller/editCity.php" method="POST" class="formulario">
                        
                        <h1>Actualizar Ciudad</h1>
                        
                        <p>Actualiza una ciudad en la base de datos</p>		
                        
                        <div class="cont-form">
                            <input type="number" name="id_city" required="true" value="'.$f['cod_ciudad'].'" readonly>												
                        </div>	
    
                        <div class="cont-form">
                            <input type="text" name="ciudad" required="true" value="'.$f['ciudad'].'">												
                        </div>												
                            
                        <button type="submit">Actualizar</button>
    
                        <div class="cont-form">                                                
                            <p> <a href="#">¿Olvidaste el correo o la contraseña ?</a> | <a href="#">Enviar verificación al correo</a></p>                            
                        </div>
                        
                    </form>
                ';
            }
            
        }        
    }


    function showUserToEdit() {
        
        $id_usu = $_GET['id_usu'];

        $objQuery = new Query();
        $statement = $objQuery->searchUser($id_usu);

        if (!$statement) {

            echo 
            '
                <tr><td colspan="100%">No hay Usuarios registradas aun</td></tr>
            ';
        } else {

          
            foreach($statement as $f) {
    
                echo 
                '
                    <form action="../Controller/editUser.php" method="POST" class="formulario">

                        <h1>Actualizar Persona</h1>

                        <p>Actualiza una persona en la base de datos</p>					

                        <div class="cont-form">
                            <input type="text" name="Documento" required="true" readonly value=" '.$f['Documento'].' ">												
                        </div>	
                        <div class="cont-form">
                            <select name="ciudad" id="">
                                <option value="'.$f['CodCiudad'].'">'.$f['CodCiudad'].'</option>'; showCitiesToUser(); echo '
                                
                                                    
                            </select>
                        </div>	
                        <div class="cont-form">
                            <input type="text" name="nombres" required="true" value="'.$f['Nombres'].'">												
                        </div>	
                        <div class="cont-form">
                            <input type="text" name="apellidos" required="true" value="'.$f['Apellidos'].'">												
                        </div>	
                        <div class="cont-form">
                            <input type="text" name="sexo" required="true" value="'.$f['Sexo'].'">												
                        </div>	
                        <div class="cont-form">
                            <select name="profesion" id="">
                                <option value="'.$f['CodProfesion'].'">'.$f['CodProfesion'].'</option>'; showProfessionToUser(); echo'
                                
                                                    
                            </select>
                        </div>	
                        
                        <button type="submit" value="Ingresar">Actualizar</button>

            
                    
                    </form>   
                ';
            }
            
        }        
    }


    function showUsers() {

        $objQuery = new Query();
        $statement = $objQuery->searchUsers();


        if (!$statement) {

            echo 
            '
                <tr><td colspan="100%">No hay Usuarios registradas aun</td></tr>
            ';
        } else {

          
            foreach ($statement as $f) {
    
                echo 
                '
                    <tr>
                        <td> '.$f['Documento'].' </td>
                        <td> '.$f['CodCiudad'].'  </td>
                        <td> '.$f['Nombres'].' </td>
                        <td> '.$f['Apellidos'].'  </td>
                        <td> '.$f['Sexo'].' </td>
                        <td> '.$f['CodProfesion'].'</td>
                    
                        <td><a href="editUser.php?id_usu='.$f['Documento'].'">Editar</a></td>
                        <td><a href="../Controller/deleteUser.php?id_usu='.$f['Documento'].'">Borrar</a></td>
                    </tr>   
                ';
            }
            
        }

    }

    function showVigilantes() {

        $objQuery = new Query();
        $statement = $objQuery->searchVigilantes();


        if (!$statement) {

            echo 
            '
                <tr><td colspan="100%">No hay Historial registrado</td></tr>
            ';
        } else {

          
            foreach ($statement as $f) {
    
                echo 
                '
                    <tr>
                        <td> '.$f['id_vigilante'].' </td>
                        <td> '.$f['registro'].'  </td>                                                        
                        <td><a href="../Controller/deleteVigilante.php?id_vig='.$f['id_vigilante'].'">Borrar</a></td>
                    </tr>   
                ';
            }
           
            
        } 

    }


    function showInform() {

        $objQuery = new Query();
        $statement = $objQuery->searchInform();

        if (!$statement) {

            echo 
            '
                <tr><td colspan="100%">No hay nadie con correo o telefono registrados</td></tr>
            ';
        } else {

          
            foreach ($statement as $f) {
    
                echo 
                '
                    <tr>
                        <td> '.$f['documento'].' </td>
                        <td> '.$f['nombres'].'  </td>                                                        
                        <td> '.$f['apellidos'].'  </td>                                                        
                        <td> '.$f['sexo'].'  </td>                                                        
                        <td> '.$f['nombre_profesion'].'  </td>                                                        
                        <td> '.$f['telefono'].'  </td>                                                        
                        <td> '.$f['nombre_ciudad'].'  </td>                                                        
                        <td> '.$f['correo'].'  </td>  
    
                    </tr>   
                ';
            }
            
            
        } 

    }