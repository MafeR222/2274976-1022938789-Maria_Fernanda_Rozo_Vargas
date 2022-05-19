<?php
$txtNombre="";
$rdgLenguaje="";

$chkphp="";
$chkhtml="";
$chkcss="";


if ($_POST){

    $txtNombre=  (isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
    $rdgLenguaje=  (isset($_POST['lenguaje']))?$_POST['lenguaje']:"";

    $chkphp= (isset($_POST['chkphp'])=="si" )?$_POST['chkphp']:"";
    $chkhtml= (isset($_POST['chkhtml']))?$_POST['chkhtml']:"";
    $chkcss= (isset($_POST['chkcss']))?$_POST['chkcss']:"";

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body>

    <?php if ($_POST){ ?>     
    <strong> Hola </strong>: <?php echo $txtNombre; ?>
    <br/>
    <strong>Tu lenguaje es: </strong> <?php echo $rdgLenguaje; ?>
     <?php } ?>  
    
     <form action="ejercicio31.php"  method="post">
      
     Nombre:<br/>
    <input value="<?php echo $txtNombre;?>" type="text" name="txtNombre" id="">
     <br/>
     ¿Te gusta?:<br/>
     <br/> php: <input type="radio" <?php echo ($rdgLenguaje=="php")?"checked":""; ?> name="lenguaje"  value="php"   id=""> <br/>
     <br/> html: <input type="radio" <?php echo ($rdgLenguaje=="html")?"checked":""; ?> name="lenguaje" value="html" id=""> <br/>
     <br/> css: <input type="radio" <?php echo ($rdgLenguaje=="css")?"checked":""; ?> name="lenguaje" value="css" id=""> <br/>

     Estas aprendiendo... <br/>
     <br/> php:<input type="checkbox" name="chkphp" value="si" id="">
     <br/> html:<input type="checkbox" name="chkhtml" value="si" id="">
     <br/> css:<input type="checkbox" name="chkcss" value="si" id="">
     <br/>

    
    
     <input type="submit" value="Enviar informacion">

    </form>
</body>
</html>