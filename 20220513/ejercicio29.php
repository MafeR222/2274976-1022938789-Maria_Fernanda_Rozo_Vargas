<?php 
$servidor="localhost"; //127.0.0.1
$usuario="root";
$contrasena="";

try{

    $conexion=new PDO("mysql:host=$servidor;dbname=album_1022938789", $usuario,$contrasena);
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    $sql="SELECT * FROM `fotos`";

   $sentencia=$conexion->prepare($sql);
   $sentencia->execute();

   $resultado=$sentencia->fetchAll();
   //print_r($resultado);

   foreach($resultado as $foto){

    echo$foto['nombre']."<br/>";

   }
   echo "Conexion establecida";

}catch(PDOExeption $error){
    echo "Conexion erronea".$error;

}

?>
