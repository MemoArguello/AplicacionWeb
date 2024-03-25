<!DOCTYPE html>
<html class="no-js" lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title><?php echo COMPANY; ?></title>
    <?php include "./vistas/inc/link.php" ?>
</head>
<body>
	<?php
		$peticionAjax=false;
		require_once "./controladores/vistasControlador.php";
		$IV = new vistasControlador();

		$vistas = $IV->obtener_vista_controlador();
		if($vistas=="login" || $vistas=="404"){
			require_once "./vistas/contenidos/".$vistas."-view.php";
		}else{
	?>
	<!-- Main container -->
	<div class="page-container">
		<!-- Nav lateral -->
            <?php include "./vistas/inc/navlateral.php" ?>
		<!-- Page content -->
             <?php include "./vistas/inc/navbar.php" ?>
             <?php 
				include $vistas;	
			 ?>
	</div>
    <?php
		}
	 include "./vistas/inc/scrip.php" 
	 ?>
	 
</body>
</html>