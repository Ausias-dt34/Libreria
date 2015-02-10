<?php
require_once "config.inc.php";
require_once "funciones.inc";
$conexion=mysqli_DBinit($config);
        
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        (isset($_POST['iniciado']))  ? $iniciado = true                             : $iniciado = false ;  
        (isset($_POST['nombre']))    ? $nombre   = test_input($_POST['nombre'])     : $nombre="" ;
        (isset($_POST['apellidos'])) ? $apellidos= test_input($_POST['apellidos'])  : $apellidos="" ;  
        (isset($_POST['username']))  ? $username = test_input($_POST['username'])   : $username="" ;
        (isset($_POST['password']))  ? $password = test_input($_POST['password'])   : $password="" ;
        (isset($_POST['email']))     ? $correo   = test_input($_POST['email'])      : $correo="" ;
        (isset($_POST['fechaAlta'])) ? $fechaAlta= test_input($_POST['fechaAlta'])  : $fechaAlta= date("Y-m-d") ;
        (isset($_POST['terminos']))  ? $suscripcion = "1"                           : $suscripcion="0" ;
        (isset($_POST['guardar']))   ? $accion   = test_input($_POST['guardar'])    : $accion="" ;
    }   
        
    if (($accion=="Guardar") && ($nombre==true) && ($apellidos==true) && ($username==true) && ($password==true) && ($correo==true) && ($fechaAlta==true)){                                                               
            $sql ="INSERT INTO usuarios ( nombre, apellidos, username, password, correo, suscripcion, fechaAlta  ) ".
                  " VALUES ('$nombre', '$apellidos', '$username', '$password', '$correo', '1', '$fechaAlta')";
                  //" VALUES (`$nombre`, `$apellidos`, `$username`, `$password`, `$correo`, `$suscripcion`, `$fechaAlta`)";
            if (mysqli_query($conexion, $sql)) {
            ?>
                <script language="JavaScript">
                    alert("Sus datos se han grabado satisfactoriamente");
                </script>
            <?php
            } else {
                $error=mysqli_error($conexion);
            ?>
                <script language="JavaScript">
                    alert("Error: ".$error) ;
                </script>
            <?php
            }
            //$resultados = mysqli_query($conexion, $sql);
        }

        echo "<FORM METHOD=\"post\" ACTION=\"inputForm.php\" name=\"volver_atras\">";
//        // Si es borra o graba reseateamos las variables 
//        if (($accion=="Borrar") or ($accion=="Grabar") or ($accion=="Actualizar")){                                                               
//            echo "<input type=\"hidden\" name=\"aux\" value=\"Leer\">";
//            echo "<input type=\"hidden\" name=\"dorsal\" value=\"\">";
//            echo "<input type=\"hidden\" name=\"nombre\" value=\"\">";
//            echo "<input type=\"hidden\" name=\"equipo\" value=\"\">";
//            echo "<input type=\"hidden\" name=\"edad\" value=\"\">";  
//        }
//        // Si no pasamos los valores
//        else 
//        { 
//            echo "<input type=\"hidden\" name=\"aux\" value=\"Leer\">";
//            echo "<input type=\"hidden\" name=\"dorsal\" value=\"$dorsal\">";
//            echo "<input type=\"hidden\" name=\"nombre\" value=\"$nciclista\">";
//            echo "<input type=\"hidden\" name=\"equipo\" value=\"$nomeq\">";
//             echo "<input type=\"hidden\" name=\"edad\" value=\"$edad\">";  
//         }
        echo "</form>";
         
        mysqli_close($conexion);
    ?> 
    </body>

    <script language="JavaScript">
    document.volver_atras.submit();  
    </script> 

</HTML>
