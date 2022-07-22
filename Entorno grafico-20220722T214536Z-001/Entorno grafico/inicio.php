
<?php 
$NumeroI = $_POST['ident'];
$Contra= $_POST['contrase'];
if ($NumeroI !="1022938789"){
echo " Numero de identificacion incorrecto "; 
header('Location: error.php');
}
else if ($NumeroI =="1022938789") 
if ($Contra !="12345") {
    echo "Contraseña incorrecta, intentelo de nuevo "; 
    header('Location: error.php');
}
    else 
    {}
    ?>
<div class="inicio">
<html> 
<head>
<link rel="stylesheet" href="estilosss.css"></head>
<?php include ("index/titulo.php"); ?>
<div class="titulos">
<html> 
<head>
<link rel="stylesheet" href="estilosss.css"></head>
<p><center>
    <font size="5" color="blue" face="comic sans ms"> BIENVENIDO <br></font>
    

<table border="0">
    
        <tr>
            
       <td><div class="tituloss">
<a href="Tareas.php"> <img src="imagenes\tareas.jpg" width="258" height="250">
            
            <td><div class="tituloss"> <a href="asignaturas.php"><img src="imagenes\ff.jpg" width="250" height="250">
            <td><div class="tituloss"> <a href="Calificaciones.php"><img src="imagenes\Calificaciones.jpg" width="250" height="250">
            <td><div class="tituloss"> <a href="calendario.php"><img src="imagenes\Calendario.jpg" width="250" height="250"></tr>
            <tr>
            <td> <center><font size="4" color="red" face="Georgia"><a href="Tareas.php">Tareas</a></td>
            <td> <center><font size="4" color="red" face="Georgia"><a href="Asignaturas.php">Asignaturas</a></td>
            <td> <center><font size="4" color="red" face="Georgia"><a href="Calificaciones.php">Calificaciones</a></td>
            <td> <center><font size="4" color="red" face="Georgia"><a href="Calendario.php">calendario</a></td></tr>
</div> </center>

 <script>
 //preguntar si quiero salir de la pagina aceptar o cancelar
 function checkAcceptation(){
     if (!confirm("preciona aceptar para ingresar, para volver preciona Cancelar"))
     history.go(-1);
     return " "
 }
 checkAcceptation();
 </script>
 </body>
 </html>