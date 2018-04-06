<!DOCTYPE html>
<html>
<head>
	<head>
		<title>PERFIL PROFESIONAL</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>-->
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
        <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
</head>
<body class="homepage">
	

	<!-- Header -->
		<div id="header">
			<div class="container">
					
				<!-- Logo -->
					<!--<div id="logo">
						<h1><a href="#">PERFIL PROFESIONAL</a></h1>
						<span>GUSTAVO FERNANDO ALBAN BECERRA</span>
					</div>-->
				
				<!-- Nav -->
					<nav id="nav">
						<!--<ul>
							<li class="active"><a href="index.html">Bienvenido</a></li>
							<li><a href="threecolumn.html">MIS ESTUDIOS</a></li>
							<li><a href="twocolumn1.html">AFICIONES</a></li>
							<li><a href="twocolumn2.html">MI EXPERIENCIA LABORAL</a></li>
							<li><a href="onecolumn.html">MIS PLANES A FUTURO</a></li>
						</ul>-->
					</nav>

			</div>
		</div>
		<div id="main">

<?php 

	function validaletras($var){
		if (ctype_alpha($var)) {
			return $var;
		}
	}
	function validaletras2($var){
		if (ctype_alpha($var)) {
			return $var;
		}
	}
	function validaletras3($var){
		if (ctype_alpha($var)) {
			return $var;
		}
	}
	function validanumeros($var){
		if (is_numeric($var)) {
			return $var;
		}
	}
	function validaasunto($var){
		if (ctype_alpha($var)) {
			return $var;
		}
	}

	
 	echo "Nombre: ";
	echo validaletras($_GET['Nombre']);
	echo "<br>";

	echo "Apellido: ";
	echo validaletras2($_GET['Apellido']);
	echo "<br>";

	echo "Telefono: ";
	echo validanumeros($_GET['Telefono']);
	echo "<br>";

	echo "Asunto: ";
	echo validaasunto($_GET['Asunto']);
	echo "<br>";

	$correo = $_GET['email'];
	echo " tu correo es: ".$correo;
	echo "<br>";

	$mensaje = $_GET['Mensaje'];
	echo " tu mensaje es: ".$mensaje;
	echo "<br>";
	
	
?>
		</div>
</body>

</html>
