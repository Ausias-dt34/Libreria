<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Rellena tu CV</title>
</head>

<body>

<h3>INSCRIPCION DE USUARIO</h3>
 

<form action="grabador.php" name="grabador" method="post" enctype="multipart/form-data">

Username <br/>
<input type="text" name="username" value="" size="20" maxlength="20" required />
<br/>

Password <br/>
<input id="password" type="password" name="password" value="" size="20" maxlength="20" required />
<br/>

Nombre <br/>
<input type="text" name="nombre" value="" size="20" maxlength="64" required/>
 <br/>
 
Apellidos <br/>
<input type="text" name="apellidos" value="" size="20" maxlength="128" required/>
<br/>
 
email<br/>
<input type="text" name="email" value="" size="40" maxlength="40" required/>
<br/><br/>

<label for="descripcion">Condiciones del servicio</label> <br/>
<textarea id="descripcion" cols="80" rows="8" ">
El uso de nuestros Servicios no te convierte en titular de ninguno de los derechos de propiedad intelectual de los mismos ni del contenido al que accedas. Solo podrás usar el contenido de nuestros Servicios si te autoriza su titular o si está permitido por la ley. Estas condiciones no te otorgan el derecho a usar las marcas ni los logotipos utilizados en nuestros Servicios. No elimines, ocultes ni alteres los avisos legales que se muestren en nuestros Servicios.

Este contenido es responsabilidad exclusiva de la entidad que lo haya puesto a disposición. Podemos revisar el contenido para determinar si es ilegal o infringe nuestras políticas, y eliminarlo o negarnos a publicarlo si tenemos razones suficientes para considerar que infringe nuestras políticas o la ley. Sin embargo, esta posibilidad no implica necesariamente que revisemos el contenido, por lo que no debes dar por sentado que vayamos a hacerlo.

En relación con el uso de los Servicios, podemos enviarte avisos de servicio, mensajes administrativo y otro tipo de información. Si quieres, puedes desactivar algunas de estas comunicaciones.

Algunos de nuestros Servicios están disponibles en dispositivos móviles. No utilices esos Servicios de un modo que pueda distraerte y que te impida cumplir las leyes de tráfico o de seguridad."
</textarea>

<br/><br/>
<input name="terminos" type="checkbox" value="1" required / > <!-- ACEPTO LOS TERMINOS DE USO -->
 <br/><br/><br/>
 
<input type="submit" name="guardar" value="Guardar" onclick="cifrar()"/>
<!-- <button id="guardar" type="submit" value="Guardar" onclick="cifrar()" >Guardar y continuar</button> -->
<input type="hidden" name="fechaAlta" size="10" value=<?php echo date("Y-m-d");?> >
</form>
 
<!--<script src="md5.js"></script>-->
<script src="jshash-2.2/sha1.js" type="text/javascript"></script>    <script>
        function cifrar(){
            //document.forms.grabador.password.value = sha1(document.forms.grabador.password.value);
            //var input_pass = document.getElementsByTagName("password");
            var input_pass = document.forms.grabador.password.value
            var encrypted =  hex_sha1(input_pass);
                
            //input_pass.value = md5(input_pass.value);
            document.forms.grabador.password.value = encrypted ;
        }
    </script>   

</body>
 
</html>
