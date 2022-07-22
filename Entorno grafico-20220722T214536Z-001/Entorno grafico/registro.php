<html><head><title> Registro </title></head>
<body>
<body background="imagenes/registro.jpg">
<?php include ("index/titulo.php"); ?>
<body bgcolor="#F9D2F0"></body>
<center><font size="6" color="#AC28OB" face="comic sans ms"> Comienza tu registro :) </font></center>
<center>
<form name=formulario method="post" action="validar.php">
                <table width="50%"  border="2" cellpadding="10" cellspacing="0">
                    <tr>
                        <th>Nombres <input type="text" name="nombre" size="25" maxlength="50"></th>
                        <th>Primer apellido <input type="text" name="primer" size="25" maxlength="50"></th>
                        <th>Segundo apellido <input type="text" name="segundo" size="25" maxlength="50"></th>
                    </tr>
                    <tr>
                    <th>tipo de documento 
                        <select name="document">
                                <option value="CC">Cedula de ciudadania</option>
                                <option value="C.E">Cedula de extrenjeria</option>
                                <option value="TI">Tarjeta de identidad</option>
</optgroup>
                    </th>
                     <th>   numero de documento <input type="number" name="doc"  size="25" maxlength="50"></th>
                     <th>   Correo electronico <input type="text" name="correo" value=@ size="25" maxlength="50"></th>
                <tr>
                <th colspan=3> <input type="submit" value="Enviar" />
                        </th></tr>
                </table>
                    </form><p></center>

    
 <script>
     // pregunta si quiero cerrar una pagina
      window.onbeforeunload = function () {
          return "desea cerrar la ventana? "
      };
      </script>
      </body>
      </html>