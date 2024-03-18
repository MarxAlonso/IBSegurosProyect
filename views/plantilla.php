<?php
    require_once 'views/modulos/header.php';
		
	if (isset($_GET['ruta'])) {



		if ($_GET["ruta"] == "inicio" 
		||$_GET["ruta"] == "contacto"
		||$_GET["ruta"] == "Consultas"
		|| $_GET["ruta"] == "seguros"
		|| $_GET["ruta"] == "agente"
		|| $_GET["ruta"] == "vision"
		|| $_GET["ruta"] == "valores"
		|| $_GET["ruta"] == "nosotros"
		|| $_GET["ruta"] == "consultas"
		|| $_GET["ruta"] == "seguros-salud"
		|| $_GET["ruta"] == "seguros-ahorro"
		|| $_GET["ruta"] == "seguros-largoPlazo"
		|| $_GET["ruta"] == "seguros-cortoPlazo"
		|| $_GET["ruta"] == "seguros-academico"
		|| $_GET["ruta"] == "seguros-hogar"
		|| $_GET["ruta"] == "seguros-vehicular"
		|| $_GET["ruta"] == "seguros-soat"

		|| $_GET["ruta"] == "Caucion-Credito"
		||$_GET["ruta"] == "Incendio"
		||$_GET["ruta"] == "EPS"
		||$_GET["ruta"] == "Responsabilidad-Civil"
		||$_GET["ruta"] == "Robo-Asalto"
		||$_GET["ruta"] == "SCTR"
		||$_GET["ruta"] == "Seguro-3D"
		||$_GET["ruta"] == "Vida-Ley"
		||$_GET["ruta"] == "Cascos-Maritimos"
		||$_GET["ruta"] == "TREC"
		||$_GET["ruta"] == "Rotura-Maquinaria"
		||$_GET["ruta"] == "Lucro-Cesante"
		||$_GET["ruta"] == "CAR"
		||$_GET["ruta"] == "EAR"
		
		//seguros
		||$_GET["ruta"] == "Aviacion"
		||$_GET["ruta"] == "Equipo-electronico"
		||$_GET["ruta"] == "Multirriesgo"
		||$_GET["ruta"] == "Seguro-contra-Accidentes"
		||$_GET["ruta"] == "Seguro-de-Viajes"
		||$_GET["ruta"] == "Seguro-EPS-empresas"
		||$_GET["ruta"] == "Seguro-Oncologico"
		||$_GET["ruta"] == "Transporte"
		||$_GET['ruta'] == "buscar" 

		 ) {
	
			if (file_exists("views/modulos/" . $_GET["ruta"] . ".php")) {
				include_once "views/modulos/" . $_GET["ruta"] . ".php";
			}  else if (file_exists("controller/" . $_GET["ruta"] . ".php")) {
				include_once "controller/" . $_GET["ruta"] . ".php";
			}  else if (file_exists("views/modulos/seguros/" . $_GET["ruta"] . ".php")) {
				include_once "views/modulos/seguros/" . $_GET["ruta"] . ".php";
			}
		} 
	} else {
		include_once "views/modulos/inicio.php";
	}
		
	require_once 'views/modulos/footer.php';
?>

		
