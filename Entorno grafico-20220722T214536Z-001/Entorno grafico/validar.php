
<?php include ("index/titulo.php"); ?>
<body background="imagenes/registro.jpg">
<center><font size="7" color="#571254" face="comic sans ms"> Es un placer tenerte en OpenClass </font></center>

<center>
<form name=formulario method="post" action="index.php">
                <table width="50%"  border="2" cellpadding="10" cellspacing="0">
                    <tr>
                        <th>Nombre: <?php $nombre =$_POST['nombre']; echo $nombre ?>
                        <th>Primer apellido: <?php $primer =$_POST['primer']; echo $primer ?>
                        <th>Segundo apellido: <?php $segundo =$_POST['segundo']; echo $segundo ?>
                    </tr>
                    <tr>
                    <th>tipo de docuemnto: <?php $num1 =$_POST['document']; echo $num1 ?>
                     <th>   numero de docuemento: <?php $num2 =$_POST['doc']; echo $num2 ?>
                     <th>   Correo electronico: <?php $celular =$_POST['correo']; echo $celular ?> </th>
            <tr>         
       <th colspan=3>  <font size="3" color="red" face="comic sans ms"> Dar click aqui para ingresar
            <a href="index.php">Ingresar</a>

                
                    </form><p>

                    <script>
     // pregunta si quiero cerrar una pagina
      window.onbeforeunload = function () {
          return "desea cerrar la ventana? "
      };
      </script>
      </body>
      </html>