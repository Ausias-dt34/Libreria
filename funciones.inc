<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// Funcion de mi libreria para generar el select 
function WriteCombo($vals, $name, $selected){
    $res = "<select name='$name' method=\"POST\" onChange=document.forms.ActionForm.submit() > \n";
    while(list($val, $opt)=each($vals)){
        $res .= "<option value='$val'". (($val==$selected)?' selected="selected"':''). ">$opt</option>\n";
    }
    $res .= "</select>\n";
    return $res;
}

// Funcion de filtrado de url, copyright w3schools.com  
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function mysqli_DBinit($config){
// Uso :
// Inicia y configura la base de datos, se pasa el array $config[]
// Devuelve $conexion    

    // Abrimos la conexion
    $conexion = mysqli_connect($config['dbhost'], $config['dblogin'], $config['dbpass'], $config['dbname']);
    // Comprobamos la conexion
    if (!$conexion){
        echo "La conexion con MySQL ha fallado.";
        die ( "Codigo del error de conexion : " . mysqli_connect_error());
    }
    // Forzamos que coja utf8
    mysqli_set_charset($conexion,$config['encoding']);
    return $conexion;
    };

    
?>