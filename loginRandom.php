<?php
	/** 
	* @file
	* \brief Inicio de la aplicación
	* \details Pantalla de inicio de la aplicación. Añade cabeceras, muestra 
	* los mensajes de error de logAttempt.php y define la estructura del layout.
	* \author auth.agoraUS
	*/
	
	include_once 'variables.php';
	
	session_start();
	
	// Inicializamos o recuperamos la sesión
	$formularioLogin = $_SESSION["formularioRandom"];
	
	// Asignamos valor por defecto a los elementos
	if (!isset($formularioRandom)) {
		$formularioRandom["codigo"] = "";
	}
	
	$_SESSION["formularioRandom"] = $formularioRandom;

?>



<!DOCTYPE html>
<html lang="es" xmlns="http://www.w3.org/1999/xhtml">
	
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.mi.js"></script>
	<script type="text/javascript" src="bootstrap/js/npm.js"></script>
	<script type="text/javascript" src="bootstrap/js/index.js"></script>
	<script type="text/javascript" src="scripts/index.js"></script>
	
	<link rel="stylesheet" href="style/style.css" type="text/css">

	<link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="styles/bootstrap/css/bootstrap-theme.css" type="text/css">
	<link rel="stylesheet" href="styles/bootstrap/css/bootstrap-theme.css.map" type="text/css">
	<link rel="stylesheet" href="styles/bootstrap/css/bootstrap.css.map" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'>
	

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title><?php echo TITLE?></title>
    
    <script>
 	
    </script>
    
</head>
<body style="background-color: #F5F5F5;font-family: Roboto;">
	
	<div class="tituloInicio">
		<h1 style="font-size: 100px; font-family: Roboto">¡Bienvenidos a agor@us!</h1>
	</div>
	
	<?php
		$d = mt_rand(10000,99999);
		$formularioRandom["codigo"] = md5($d);
	
		$_SESSION["formularioRandom"] = $formularioRandom;
		
	?>
	
	<label id="label_codigo" for="codigoLogin"> <h3>Código de Verificación (Esto se manda por SMS </br> al usuario para una mayor seguridad): </h3> <?php echo $formularioRandom["codigo"]; ?>  </label>
	
	<div class="row">
   		<form method="post" action="validacionLoginRandom.php">
   			
				<label id="label_codigo" for="codigoLogin"> <h3>Código de Verificación</h3> </label>
				<input type="codigo" required="required" value="" id="codigo" name="codigo" class="input_reg" style="height: 25px; background: #C0C0C0;">
			
			<div>
				<input id="login" type="submit" value ="Verificar" class="btn btn-info"/>
			</div>
			
		</form>
	</div>
   	
   <!-- $d=mt_rand(1000000,999999);
   echo $d;		 -->
	
	
	
	
  </body>
</html>
