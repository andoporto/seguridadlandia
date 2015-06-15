<?php
	
	include('../proyecto/phpqrcode/qrlib.php');
	
	
	$host = "localhost";
    $user = "root";
    $pass = "";
    $db = "seguridadlandia";
    
    $enlace = conectarBaseDeDatos($host,$user,$pass,$db);
   
    if($enlace)
            echo "<br> Conectado exitosamente";
     
    $cadena = 'select password from usuario where apellido "braile"'; 
	$consulta = mysql_query($cadena,$enlace); 
	
	while ($fila = mysql_fetch_array($consulta))
				echo $fila['passoword'];
       
       QRcode::png('$consulta ');
      // echo '<img src="ejemploQr.php" />';
       
     
            
    function conectarBaseDeDatos($host,$user,$pass,$db)
    {
            $link=mysql_connect($host,$user,$pass) or die("Error al conectarse al servidor");
            mysql_select_db($db) or die("Error al conectarse la base de datos");
           
    
            return $link;
    }  
   
    
?>