
<?php

	/**
	 * @author Fernando Duran Ruiz
	 * 
	 * Archivo de funciones para el proyecto de fin
	 * de ciclo del CFGS Desarrollo de aplicaciones web
	*/

	/*
	 * Al usar la función date, en escritorios que estén en
	 * otro idioma, puede no funcionar, por lo que se ha
	 * especificado la zona horaria.
	*/
	date_default_timezone_set('Europe/Madrid');
	/*
	 * Al no hacerse tratamiento de imagenes en los
	 * formularios, se ha creado un array con las siglas
	 * de los pilotos existentes para que, si se añaden 
	 * datos nuevos,
	 * no aparezca el icono de aviso de que no se ha
	 * encontrado el archivo.
	*/
	$arraySiglas = array('VET','HAM','BOT','RAI','VES','RIC','PER','MAS','SAI','OCO','HUL','GRO','MAG','KVY','WEH','STR','GIO','PAL','VAN','ALO','ERI','ROS','NAS','GUT','HAR','RSI','STE','MER','MAL','BUT','VER','BIA','SUT','CHI','KOB','LOT','WEB','DIR','PIC','KOV','VDG','MSC','SEN','PET','GLO','DAM','DLR','KAR','HEI','ALG','BUE','BAR','TRU','LIU','CHD','KUB','DIG','YAM','KLI','BAD','FIS','PIQ','NAK','BOU','COU','SAT','DAV','WUR','SPE','ALB','WIN');

	/*
	 * Función para pintar el titular de cada página
	*/

	function titular($titulo)
	{
		return '
			<div class="container">
				<div class="page-header">
					<div class="row">
						<div class="col-lg-12">
							<h3>'.$titulo.'</h3>
						</div>
					</div>
				</div>
			<div>';
	}

	/*
	 * Función que tiene parametrizado el string de
	 * un menú proviniente de la función pintaMenu()
	 *
	 * Se recorre el string con 4 foreach anidados
	 * haciendo explode en cada caracter especial y
	 * construyendo de este modo el <nav> de la 
	 * página.
	*/
	function pinta_items_menu($menu)
	{	
		//Variable que devolverá el resultado
		$result='
			<div class="menu_top">
				<div class="menu_top_nom" >
					<a href="../inici/"><img alt="Logo página" src="../img/logoF1_2.jpg" width="55"></a>

					<a href="https://www.facebook.com/Formula1" target="_blank" class="btn btn-social-icon btn-facebook"><span class="fa fa-facebook"></span></a>

					<a href="https://twitter.com/f1" target="_blank" class="btn btn-social-icon btn-twitter"><span class="fa fa-twitter"></span></a>
					
					<a href="https://www.instagram.com/f1/" target="_blank" class="btn btn-social-icon btn-instagram"><span class="fa fa-instagram"></span></a>

					<a href="https://vimeo.com/user66994675" target="_blank" class="btn btn-social-icon btn-vimeo"><span class="fa fa-vimeo"></span></a>
				</div>

				<div class="menu_top_botons"><br>';
		
						if($_SESSION['nomUsuari'] <> ""){
							$result.='
							<a class="various" data-fancybox-type="iframe" href="../acceso/index2.php?sec=modifica&id='.$_SESSION['id'].'"><span class="glyphicon glyphicon-user"></span> Bienvenido '.$_SESSION['nomUsuari'].' </a>| 
        					<a href="../inici/surt.php" style="color:#ff693f"><span class="glyphicon glyphicon-log-out"></span> Salir</a>';
						}
					
		$result.='
				</div>
			</div>';
		
		$result .= '
		<nav class="navbar navbar-inverse">
  			<div class="container-fluid">
    			<div class="navbar-header">
      				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
      				</button>
      				<a class="navbar-brand" href="/inici/">F1 History</a>
    			</div>

    			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      				<ul class="nav navbar-nav">';
      	
      	/*
      	 * El primer explode corta el string a partir de #,
      	 * que indica que es el nombre del menú
      	*/
      	$titol_dropdown = explode("#", $menu);
		
		foreach ($titol_dropdown as $stringMenu) {
		
			if($stringMenu != ""){

				/*
		      	 *  Hacemos un nuevo explode a partir de #,
		      	 * que indica que es el un nuevo menú
		      	*/				
				$itemMenuGeneral = explode("#", $stringMenu);
				
				if($itemMenuGeneral[0] != ""){

					foreach ($itemMenuGeneral as $numVolta => $valor) {
						
						/*
						 * El tercer explode a partir de *
						 * indica que lo que viene después
						 * es un subitem del menu
						*/
						$nomDelItemPrincipal = explode("*", $valor);
						
						$result .= '<li class="dropdown">';
						$result.= '<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">'.$nomDelItemPrincipal[0].'<span class="caret"></span></a>';
						
						$llista_links = array($nomDelItemPrincipal[1]);
						
						foreach ($llista_links as $nom_link) {
							
							/*
							 * El cuarto explode a partir de
							 * ; es para indicar el final de
							 * un string
							*/
							$subItem = explode(";", $nom_link);
							
							$result .= '<ul class="dropdown-menu">';

							foreach ($subItem as $valor) {
								
								/*
								 * El quinto y último explode
								 * a partir de | es para 
								 * identificar la url del
								 * subitem del menu
								*/
								$nomDelSubItem = explode("|", $valor);
								if($nomDelSubItem[0] != ""){
									if(preg_match('#^https://.*#s', $nomDelSubItem[1])){

									$result .= '<li><a target="_blank" href="'.$nomDelSubItem[1].'">'.$nomDelSubItem[0].'</a></li>';

								} else {
										
									$result .= '<li><a href="'.$nomDelSubItem[1].'">'.$nomDelSubItem[0].'</a></li>';
								}
								}
								
							}
							$result .= '</ul>
									</li>
									';	
						}
					}
				}
			}
		}					

        $result .= '
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>';
		echo $result;
	}

	/*
	 * Función que contiene los string de cada item
	 * de menú con sus subitems y enlaces. Dependiendo
	 * del tipo de usuario, se mostrarán una serie de
	 * items.
	*/
	function pintaMenu()
	{

		//Menu Campeonatos
		$menu_campeonatos = "#Campeonatos*2017|../campeonatos/index.php?sec=2017;";
		$menu_campeonatos .= "2016|../campeonatos/index.php?sec=2016;";
		$menu_campeonatos .= "2015|../campeonatos/index.php?sec=2015;";
		$menu_campeonatos .= "2014|../campeonatos/index.php?sec=2014;";
		$menu_campeonatos .= "2013|../campeonatos/index.php?sec=2013;";
		$menu_campeonatos .= "2012|../campeonatos/index.php?sec=2012;";
		$menu_campeonatos .= "2011|../campeonatos/index.php?sec=2011;";
		$menu_campeonatos .= "2010|../campeonatos/index.php?sec=2010;";
		$menu_campeonatos .= "2009|../campeonatos/index.php?sec=2009;";
		$menu_campeonatos .= "2008|../campeonatos/index.php?sec=2008;";
		$menu_campeonatos .= "2007|../campeonatos/index.php?sec=2007;";

		//Menu circuitos
		$menu_circuitos = "#Circuitos*Todos|../circuitos/index.php?sec=lista_circuitos;";
		$menu_circuitos .= "Por pais|../circuitos/index.php?sec=pais;";

		//Menú Pilotos
		$menu_pilotos = "#Pilotos*Todos|../pilotos/index.php?sec=lista_pilotos;";
		$menu_pilotos .= "Por nacionalidad|../pilotos/index.php?sec=nacionalidad;";

		//Menu escuderías
		$menu_escuderias = "#Escuderías*Buscardor|../escuderias/index.php?sec=lista_escuderias;";
		

		//Menu favoritos
		$menu_favoritos = "#Tus favoritos*Pilotos|../favoritos/index.php?sec=pilotos;";
		$menu_favoritos .= "Escuderias|../favoritos/index.php?sec=escuderias;";

		//Menu media
		$menu_media = "#Galerias*Videos|../media/index.php?sec=videos;";
		$menu_media .= "Imágenes|../media/index.php?sec=fotos;";

		//Menu admin
		$menu_admin = "#Admin*Gestión usuarios|../admin/index.php?sec=lista_usuarios;";

		//Menu super
		$menu_super = "#Super*Gestión pilotos|../super/index.php?sec=lista_pilotos;";
		$menu_super .= "Gestión campeonatos|../super/index.php?sec=lista_campeonatos;";
		$menu_super .= "Gestión carreras|../super/index.php?sec=lista_carreras;";
		$menu_super .= "Gestión temporadas|../super/index.php?sec=asocia_piloto;";
		$menu_super .= "Gestión escuderias|../super/index.php?sec=gest_escuderias;";
		
		/*
		 * En función del rol del usuario, la variable
		 * $menu_usuario que se le pasa a la funcion
		 * pinta_items_menu() tendrá diferente valor
		*/
		switch ($_SESSION['rol']) {
			
			case 'registrado':
				$menu_usuario = $menu_campeonatos.$menu_circuitos.$menu_pilotos.$menu_escuderias.$menu_favoritos.$menu_media;
				break;
			case 'admin':
				$menu_usuario = $menu_admin;
				break;
			case 'super':
				$menu_usuario = $menu_admin.$menu_super.$menu_media;
				break;
		}

		pinta_items_menu($menu_usuario);
	}

	/*
	 * Función que tiene parametrizada un consulta a
	 * la BBDD que, como resultado, muestra todos los
	 * pilotos existentes en esta.
	 *
	 * Se recorre el resultado de la consulta y se 
	 * muestra en formato tabla.
	*/
	function listaPilotos($sql)
	{	

		// Objeto de clase
		$piloto = new Piloto();
		
		//Variable que devolverá el resultado
		$result = "";
		
		while($row = $sql -> fetch_array()){

			//Setters de la clase pilot
			$piloto -> _setId($row['id']);
			$piloto -> _setNom($row['nom']);
			$piloto -> _setPuntsTotals($row['punts_totals']);
			$piloto -> _setCarreresTotals($row['carreres_totals']);
			$piloto -> _setPrimeraEscuderia($row['primera_escuderia']);
			$piloto -> _setNacionalitat($row['nacionalitat']);
			$piloto -> _setAnyDebut($row['any_debut']);
			$piloto -> _setVictories($row['victories']);
			$piloto -> _setTitols($row['titols']);


			$result .=
			'
				<tr>
					<td><a href="../pilotos/index.php?sec=ficha&id='.$piloto -> getId().'" >'.$piloto -> getNom().'</a></td>
					<td>'.$piloto -> getNacionalitat().'</td>
					<td>'.$piloto -> getAnyDebut().'</td>
					<td>'.$piloto -> getPrimeraEscuderia().'</td>
					<td>'.$piloto -> getCarreresTotals().'</td>
					<td>'.$piloto -> getPuntsTotals().'</td>
					<td>'.$piloto -> getVictories().'</td>
					<td>'.$piloto -> getTitols().'</td>';
				/*
				 * En caso de que la sesión abierta sea
				 * la del super usuario, podrá ver en
				 * la tabla las acciones que puede 
				 * realizar sobre cada piloto. En este
				 * caso, editarlo y eliminarlo.
				*/
				if($_SESSION['rol'] == 'super'){

				$result .='<td>
							<a class="various" data-fancybox-type="iframe" href="../super/index2.php?sec=gest_pilotos&id='.$piloto -> getId().'&acc=edita">
								<span class="glyphicon glyphicon-pencil"></span>
							</a>
						</td>
						<td>
							<a class="various" data-fancybox-type="iframe" href="../super/index2.php?sec=gest_pilotos&id='.$piloto -> getId().'&acc=elimina">
								<span class="glyphicon glyphicon-remove"></span>
							</a>
						</td>';
				}

				/*
				 * Si el valor de la sesión del usuario
				 * logueado es registrado aparecerá un campo
				 * para marcar como favoritos los pilotos.
				*/
				if($_SESSION['rol'] == 'registrado'){
					$result .= '<td> 
					<form action="" method="POST">
						<button type="submit" name="fFav" class="btn btn-success"><span class="glyphicon glyphicon-star"></span></button>
				<input type="hidden" value="'.$piloto -> getId().'" name="fIdPiloto"></form></td>';
				}

			$result .=	'</tr>';
		}
		//Llamada al plugin de fancybox
		?>
		<script type="text/javascript">
		$(document).ready(function() {
			$(".various").fancybox({
				maxWidth	: 800,
				maxHeight	: 600,
				fitToView	: false,
				width		: '70%',
				height		: '70%',
				autoSize	: false,
				closeClick	: false,
				openEffect	: 'none',
				closeEffect	: 'none',
				overlay : {
	          	closeClick : false  // Evita que se cierre al hacer click fuera del modal
	        	}
			});
		});
		</script>
		<?php
		return $result;
	}

	/*
	 * Función que tiene parametrizada la variable que
	 * se conecta con la BBDD y el valor de un <select>
	 * de un formulario.
	*/
	function clasificacion($connect, $any)
	{	
		/*
		 * Establecemos el mapa de caracteres para que los
		 * acentos se muestre correctamente
		*/
		$connect -> query("SET NAMES 'utf8'");

		//Objetos de clases
		$carrera = new Carrera();
		$circuit = new Circuit();
		$piloto = new Piloto();
		$clasif = new Classificacio();

	
		/*
		 * Consulta para mostrar la clasificación de cada
		 * carrera del año seleccionado
		*/
		$sql = $connect -> query('SELECT carrera.id AS "cId", carrera.nom_carrera, carrera.data_carrera, circuit.id AS "ctId", circuit.nom, circuit.pais FROM carrera, circuit WHERE carrera.circuit_id = circuit.id AND carrera.data_carrera LIKE "'.$any.'%"');

		/*
		 * Función que hace el sumatorio de puntos de cada
		 * carrera por cada piloto del año seleccionado
		*/
		$sqlPilotos = $connect -> query('SELECT pilot.nom, SUM(punts) AS "suma" FROM `clasificacio`, `pilot`, `carrera` WHERE pilot.id = clasificacio.pilot_id AND carrera.id = clasificacio.carrera_id AND carrera.data_carrera LIKE "'.$any.'%" GROUP BY pilot.nom ORDER BY suma DESC');

		if($sqlPilotos -> num_rows > 0){

			//Variable que devolverá el resultado
			$result = '
			
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-sm-12">
						<h1 class="text-center">Así va el mundial</h1>
						<div class="col-lg-4 col-lg-push-4 col-sm-4 col-xs-4">
						<table class="table table-condensed" id="puntosTotales">
							<thead>
								<tr>
									<th class="text-center">Piloto</th>
									<th class="text-center">Puntos</th>
								</tr>
							</thead>';
			while ($ele = $sqlPilotos -> fetch_array()) {
				
				$piloto -> _setNom($ele['nom']);

				$clasif -> _setPunts($ele['suma']);
				
				$result .=		'<tbody>
							<tr>
								<td>'.$piloto -> getNom().'</td>
								<td>'.$clasif -> getPunts().'</td></tr>';

			}

			$result .= '</tbody></table></div></div></div></div>';
		} else {

			$result = '
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-sm-12">
						<div class="alert alert-warning" role="alert">
				 			<strong>Oops!</strong> No hay resultados.
						</div>
					</div>
				</div>
			</div>';
		}


		$panel = 1;
		while ($row = $sql -> fetch_array()) {
			
			$carrera -> _setId($row['cId']);
			$carrera -> _setNomCarrera($row['nom_carrera']);
			$carrera -> _setDataCarrera($row['data_carrera']);

			$circuit -> _setId($row['ctId']);
			$circuit -> _setNom($row['nom']);
			$circuit -> _setPais($row['pais']);

			//Array de los ID de las carreras
			$idCarrera = array($carrera -> getId());

			/*
			 * Si la fecha de la carrera es menor a la fecha
			 * actual significa que la carrera se ha
			 * disputado, por tanto se mostrará en pantalla
			*/
			if($carrera -> getDataCarrera() < date('Y-m-d')){


				$result .= '
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-sm-12">
							<div class="panel-group">
								<div class="panel panel-success">
									<div class="panel-heading">
										<h1 class="panel-title">'.$carrera -> getNomCarrera().' ('.d3($carrera -> getDataCarrera()).')</h1>
										<h2>'.$circuit -> getNom().' ('.$circuit -> getPais().')</h2>

										<a data-toggle="collapse" href="#collapse'.$panel.'">Ver resultados</a>
									</div>
								<div id="collapse'.$panel.'" class="panel-collapse collapse">	
								<div class="panel-body">
									<div class="table-responsive">
										<table class="table table-bordered">
												<thead>
													<tr>
														<th>Piloto</th>
														<th>Puntos</th>
													</tr>
												</thead>
												<tbody>';
				/*
				 * A raíz del array de los ID de carrera
				 * se realizará una consulta para saber
				 * los puntos que ha obtenido cada piloto
				*/
				foreach ($idCarrera as $id) {
					
					$sql2 = $connect -> query('SELECT pilot.nom, clasificacio.punts FROM pilot, clasificacio WHERE pilot.id = clasificacio.pilot_id AND clasificacio.carrera_id = '.$id.' ORDER BY punts DESC');

					while($row2 = $sql2 -> fetch_array()){

						$piloto -> _setNom($row2['nom']);
						$clasif -> _setPunts($row2['punts']);

						$result .= 
						'<tr>
							<td>'.$piloto -> getNom().'</td>
							<td>'.$clasif -> getPunts().'</td>
						</tr>';
					} 
				}

				$result .= 
				'</tbody></table></div></div></div></div></div></div></div></div>';

				$panel++;
			}
		}

		return $result;
	}

	/*
	 * Función que tiene parametrizadas la variable
	 * de conexión a la BBDD y lso valores de dos
	 * <select> de un formulario.
	*/
	function listaCarreras($connect, $idCarrera, $any)
	{	
		/*
		 * Establecemos el mapa de caracteres para que los
		 * acentos se muestre correctamente
		*/
		$connect -> query("SET NAMES 'utf8'");

		// Objetos de clase
		$carrera = new Carrera();
		$circuit = new Circuit();

		//Variable que devolverá el resultado
		$result = "";

		/*
		 * En función de los valores de los <select>
		 * se generará una consulta en concreto
		*/
		if($idCarrera == "" && $any == ""){

			$query = 'SELECT carrera.id, carrera.nom_carrera, carrera.data_carrera, circuit.nom, circuit.pais FROM carrera, circuit WHERE circuit.id = carrera.circuit_id';
		
		} elseif($idCarrera != "" && $any == "") {

			$query = 'SELECT carrera.id, carrera.nom_carrera, carrera.data_carrera, circuit.nom, circuit.pais FROM carrera, circuit WHERE circuit.id = carrera.circuit_id AND carrera.id ='.$idCarrera;
		
		} elseif($idCarrera == "" && $any != "") {

			$query = 'SELECT carrera.id, carrera.nom_carrera, carrera.data_carrera, circuit.nom, circuit.pais FROM carrera, circuit WHERE circuit.id = carrera.circuit_id AND carrera.data_carrera LIKE "'.$any.'%"';
		
		} elseif ($idCarrera != "" && $any != "") {
			$query = 'SELECT carrera.id, carrera.nom_carrera, carrera.data_carrera, circuit.nom, circuit.pais FROM carrera, circuit WHERE circuit.id = carrera.circuit_id AND carrera.id ='.$idCarrera.' AND carrera.data_carrera LIKE "'.$any.'%"';
		}

		$sql = $connect -> query($query);
		
		if($sql -> num_rows > 0){

			$result .= '
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-sm-12">';

			

			$result .= '
				<div class="table-responsive">
					<table id="listaCarreras" class="table  table-bordered"  cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>Nombre</th>
								<th>Circuito</th>
								<th>Pais</th>
								<th>Fecha carrera</th>
								<th>Acción</th>
							</tr>
						</thead>
						<tbody>';
			
			while($row = $sql -> fetch_array()){

				$carrera -> _setId($row['id']);
				$carrera -> _setNomCarrera($row['nom_carrera']);
				$carrera -> _setDataCarrera($row['data_carrera']);
				$circuit -> _setNom($row['nom']);
				$circuit -> _setPais($row['pais']);

				
				$result .= '
					<tr>
						<td>'.$carrera -> getNomCarrera().'</td>
						<td>'.$circuit -> getNom().'</td>
						<td>'.$circuit -> getPais().'</td>
						<td>'.$carrera -> getDataCarrera().'</td>
						<td><a class="various" data-fancybox-type="iframe" href="../super/index2.php?sec=edita_carrera&id='.$carrera -> getId().'">
							<span class="glyphicon glyphicon-pencil"></span></a>
						</td>
					</tr>';

			}
			$result .= '
					</tbody>
				</table>';

			/*
			 * Estructura de control que mostrará
			 * la imagen del circuito teniendo en 
			 * cuenta el valor seleccionado.
			*/
			if($idCarrera > 0){

				switch ($circuit -> getNom()) {
					
					case 'Circuito Albert Park':
						$result .= '<img src="../img/circuitos/'.$circuit -> getNom().'.png" class="img-responsive">';
						break;
					
					case 'Shanghai International Circuit':
						$result .= '<img src="../img/circuitos/'.$circuit -> getNom().'.png" class="img-responsive">';
						break;
					
					case 'Circuito de Sakhir':
						$result .= '<img src="../img/circuitos/'.$circuit -> getNom().'.png" class="img-responsive">';
						break;

					case 'Sochi Autodrom':
						$result .= '<img src="../img/circuitos/'.$circuit -> getNom().'.png" class="img-responsive">';
						break;

					case 'Circuit de Montmeló':
						$result .= '<img src="../img/circuitos/'.$circuit -> getNom().'.png" class="img-responsive">';
						break;

					case 'Circuito de Montecarlo':
						$result .= '<img src="../img/circuitos/'.$circuit -> getNom().'.png" class="img-responsive">';
						break;

					case 'Circuito Gilles-Villeneuve':
						$result .= '<img src="../img/circuitos/'.$circuit -> getNom().'.png" class="img-responsive">';
						break;

					case 'Baku City Circuit':
						$result .= '<img src="../img/circuitos/'.$circuit -> getNom().'.png" class="img-responsive">';
						break;

					case 'Red Bull Ring':
						$result .= '<img src="../img/circuitos/'.$circuit -> getNom().'.png" class="img-responsive">';
						break;

					case 'Silverstone Circuit':
						$result .= '<img src="../img/circuitos/'.$circuit -> getNom().'.png" class="img-responsive">';
						break;

					case 'Circuito Hungaroring':
						$result .= '<img src="../img/circuitos/'.$circuit -> getNom().'.png" class="img-responsive">';
						break;

					case 'Hockenheimring':
						$result .= '<img src="../img/circuitos/'.$circuit -> getNom().'.png" class="img-responsive">';
						break;

					case 'Spa-Francorchamps':
						$result .= '<img src="../img/circuitos/'.$circuit -> getNom().'.png" class="img-responsive">';
						break;

					case 'Autodromo di Monza':
						$result .= '<img src="../img/circuitos/'.$circuit -> getNom().'.png" class="img-responsive">';
						break;

					case 'Marina Bay':
						$result .= '<img src="../img/circuitos/'.$circuit -> getNom().'.png" class="img-responsive">';
						break;

					case 'Sepang':
						$result .= '<img src="../img/circuitos/'.$circuit -> getNom().'.png" class="img-responsive">';
						break;

					case 'Suzuka':
						$result .= '<img src="../img/circuitos/'.$circuit -> getNom().'.png" class="img-responsive">';
						break;

					case 'Austin':
						$result .= '<img src="../img/circuitos/'.$circuit -> getNom().'.png" class="img-responsive">';
						break;

					case 'Autódromo Hermanos Rodriguez':
						$result .= '<img src="../img/circuitos/'.$circuit -> getNom().'.png" class="img-responsive">';
						break;

					case 'Autódromo José Carlos Pace - Interlagos':
						$result .= '<img src="../img/circuitos/'.$circuit -> getNom().'.png" class="img-responsive">';
						break;

					case 'Yas Marina':
						$result .= '<img src="../img/circuitos/'.$circuit -> getNom().'.png" class="img-responsive"/>';
						break;
					default:
						$result .= '<img src="../img/circuitos/calendario-f1-17.jpg" class="img-responsive">';
						break;
				}
			}

			$result .='	</div>
					</div>
				</div>
			</div>';
		
		} else {

			$result .= '
			<div class="alert alert-warning" role="alert">
				  <strong>Oops!</strong> No hay resultados.
				</div>';
		}

		return $result;

	}

	/*
	 * Función que tiene parametrizada la variable
	 * de conexión a la BBDD y los valores de las
	 * $_SESSION['rol'] y $_SESSION['id'] del usuario
	 * logueado para lsitar los usuarios del sistema.
	*/
	function listaUsuarios($connect, $rol, $id)
	{	
		/*
		 * Establecemos el mapa de caracteres para que los
		 * acentos se muestre correctamente
		*/
		$connect -> query("SET NAMES 'utf8'");

		// Objeto de clase
		$user = new Usuario();

		//Variable que devolverá el resultado
		$result = "";

		/*
		 * En función de los valores de las sesiones
		 * la consulta se hará para que el admin no
		 * puedo ver listados los administradores ni
		 * los super usuarios; y para que el super
		 * usuario no puede verse listado a si mismo.
		*/
		if($rol == 'admin'){

			$query = 'SELECT * FROM log_user WHERE rol <> "admin" AND rol <> "super"';
		
		} else {
			
			$query = 'SELECT * FROM log_user WHERE id <> '.$id;
		}

		$sql = $connect -> query($query);

		while($row = $sql -> fetch_array()){

			$user -> _setId($row['id']);
			$user -> _setNom($row['nom']);
			$user -> _setCognom($row['cognom']);
			$user -> _setMail($row['mail']);
			$user -> _setPassword($row['password']);
			$user -> _setDataNaixement($row['data_naixement']);
			$user -> _setRol($row['rol']);

			$result .='
				<tr>
					<td>'.$user -> getNom().'</td>
					<td>'.$user -> getCognom().'</td>
					<td>'.$user -> getMail().'</td>
					<td>ENCRYPTED</td>
					<td>'.d3($user -> getDataNaixement()).'</td>
					<td>'.$user -> getRol().'</td>
					<td><a class="various" data-fancybox-type="iframe" href="../admin/index2.php?sec=edita&id='.$user -> getId().'"><span class="glyphicon glyphicon-pencil"></span></a></td>
					<td><a class="various" data-fancybox-type="iframe" href="../admin/index2.php?sec=elimina&id='.$user -> getId().'"><span class="glyphicon glyphicon-remove"></span></a></td>
				</tr>';
		}
		return $result;
	}

	/*
	 * Función que tiene parametrizada la variable de
	 * conexión con la BBDD y el valor de un <input>
	 * de un formulario.
	*/
	function listaCircuitos($connect, $circuito = '')
	{	
		/*
		 * Establecemos el mapa de caracteres para que los
		 * acentos se muestre correctamente
		*/
		$connect -> query("SET NAMES 'utf8'");

		// Objeto de clase
		$circuit = new Circuit();

		//Variable que devolverá el resultado
		$result = "
			<div class='container'>
				<div class='row'>
					<div class='col-lg-12 col-sm-12 col-xs-12'>";
		/*
		 * En función del valor del input, la consulta
		 * será genérica o teniendo en cuenta dicho
		 * valor.
		*/
		if($circuito == ''){

			$query = 'SELECT * FROM circuit';

		} else {

			$query = 'SELECT * FROM circuit WHERE pais = "'.$circuito.'"';
		}
		$sql = $connect -> query($query);

		while($row = $sql -> fetch_array()){

			$circuit -> _setId($row['id']);
			$circuit -> _setNom($row['nom']);
			$circuit -> _setCiutat($row['ciutat']);
			$circuit -> _setLongitud($row['longitud']);
			$circuit -> _setCurves($row['curves']);
			$circuit -> _setZonesActivacioDRS($row['zones_activacio_DRS']);
			$circuit -> _setZonesDeteccioDRS($row['zones_deteccio_DRS']);
			$circuit -> _setVoltes($row['voltes']);

			$result .= '
			<div class="panel panel-success">
				<div class="panel-body">
					<h3 class="text-center">'.$circuit -> getNom().'</h3>';

			$result .= '
			<div class="table-responsive">
				<table class="table table-bordered">
					<thead>
						<tr class="info">
							<th class="text-center">Ciudad</th>
							<th class="text-center">Longitud</th>
							<th class="text-center">Curvas</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>'.$circuit -> getCiutat().'</td>
							<td>'.$circuit -> getLongitud().'</td>
							<td>'.$circuit -> getCurves().'</td>
						</tr>
					</tbody>
					<thead>
						<tr class="info">
							<th class="text-center">Zonas activación DRS</th>
							<th class="text-center">Zonas detección DRS</th>
							<th class="text-center">Vueltas de carrera</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>'.$circuit -> getZonesActivacioDRS().'</td>
							<td>'.$circuit -> getZonesDeteccioDRS().'</td>
							<td>'.$circuit -> getVoltes().'</td>
						</tr>
					</tbody>
				</table>

					<img src="../img/circuitos FIA/'.$circuit -> getNom().'.png" width="950" height="663">
			</div>
			</div>
		</div>';
		}

		return $result;
	}

	/*
	 * Función que tiene parametrizada la variable de
	 * conexión a al BBDD y el valor de la $_SESSION
	 * del id del usuario logueado.
	*/

	function fichaPilotoFav($connect, $idUser)
	{	
		//Acceso al array de pilotos
		global $arraySiglas;
		/*
		 * Establecemos el mapa de caracteres para que los
		 * acentos se muestre correctamente
		*/
		$connect -> query("SET NAMES 'utf8'");

		// Objetos de clases
		$piloto = new Piloto();
		$scuderia = new Escuderia();

		//Variable que devolverá el resultado
		$result = "";
		$result2 = "";

		/*
		 * Si la función es llamada con la
		 * variable $connect y la variable de
		 * sesión del usuario sólo mostrará los que tenga
		 * marcados como favoritos.
		*/
		


		$sql = $connect -> query('SELECT pilot.* FROM pilot, pilot_usuari WHERE pilot.id = pilot_usuari.pilot_id AND pilot_usuari.log_user_id = '.$idUser);
		
		if($sql -> num_rows > 0){

			while($row = $sql -> fetch_array()){

				//Setter para la tabla pilot
				$piloto -> _setId($row['id']);
				$piloto -> _setNom($row['nom']);
				$piloto -> _setSigles($row['sigles']);
				$piloto -> _setDataNaixement($row['data_naixement']);
				$piloto -> _setPes($row['pes']);
				$piloto -> _setAltura($row['altura']);
				$piloto -> _setPuntsTotals($row['punts_totals']);
				$piloto -> _setCarreresTotals($row['carreres_totals']);
				$piloto -> _setPrimeraEscuderia($row['primera_escuderia']);
				$piloto -> _setNacionalitat($row['nacionalitat']);
				$piloto -> _setAnyDebut($row['any_debut']);
				$piloto -> _setTotalVoltesRapides($row['total_voltes_rapides']);
				$piloto -> _setVictories($row['victories']);
				$piloto -> _setTitols($row['titols']);


				$result .= '
				<div class="panel panel-success">
					<div class="panel-body">
						<h3>'.$piloto -> getNom().'</h3>';
				
				if(in_array($piloto -> getSigles(), $arraySiglas)){

					$result .=	'<img src="../img/pilotos/'.$piloto -> getSigles().'.jpg" class="img-responsive img-rounded" style="margin-bottom:3%;">';
				}	

				$result .='
				<div class="table-responsive">
					<table class="table table-bordered">
						<thead>
							<tr class="success">
								<th>Siglas</th>
								<th>Fecha nacimiento</th>
								<th>Peso</th>
								<th>Altura</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>'.$piloto -> getSigles().'</td>
								<td>'.d3($piloto -> getDataNaixement()).'</td>
								<td>'.$piloto -> getPes().' Kg<br></td>
								<td>'.$piloto -> getAltura().' cm</td>
							</tr>
						</tbody>
						<thead>
							<tr class="success">
								<th>Nacionalidad</th>
								<th>Año debut</th>
								<th>Primera escudería</th>
								<th>Carreras totales</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>'.$piloto -> getNacionalitat().'</td>
								<td>'.$piloto -> getAnyDebut().'</td>
								<td>'.$piloto -> getPrimeraEscuderia().'</td>
								<td>'.$piloto -> getCarreresTotals().'</td>
							</tr>
						</tbody>
						<thead>
							<tr class="success">
								<th>Vueltas rápidas</th>
								<th>Victorias en carreras</th>
								<th>Puntos totales</th>
								<th>Titulos mundiales</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>'.$piloto -> getTotalVoltesRapides().'</td>
								<td>'.$piloto -> getVictories().'</td>
								<td>'.$piloto -> getPuntsTotals().'</td>
								<td>'.$piloto -> getTitols().'</td>
							</tr>
						</tbody>
					</table>
				</div>';
				if($idUser != ''){
					$result.='
						<form action="" method="POST">
							<button type="submit" name="fEliminaFav" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span>Eliminar de favoritos</button>
							<input type="hidden" name="fPilotId" value="'.$piloto -> getId().'">
						</form>';
				}
				$result .='</div></div>';
			}

		}
		
		return $result;
	}

	/*
	 * Función que tiene parametrizada la variable de
	 * conexión a al BBDD y el valor del id del piloto.
	*/
	function fichaPiloto($connect, $idPiloto)
	{	
		//Acceso al array de pilotos
		global $arraySiglas;
		/*
		 * Establecemos el mapa de caracteres para que los
		 * acentos se muestre correctamente
		*/
		$connect -> query("SET NAMES 'utf8'");

		// Objetos de clases
		$piloto = new Piloto();
		$tpe = new TemporadaPilotEscuderia();
		$scuderia = new Escuderia();

		//Varible que devolverá el resultado
		$result = "";

		$sql = $connect -> query('SELECT pilot.*, temporada_pilot_escuderia.xasis, temporada_pilot_escuderia.motor, temporada_pilot_escuderia.numero_pilot, temporada_pilot_escuderia.jefeEquip, temporada_pilot_escuderia.director, scuderia.nomEscuderia, scuderia.seu FROM pilot, temporada_pilot_escuderia, scuderia WHERE pilot.id = temporada_pilot_escuderia.pilot_id AND scuderia.id = temporada_pilot_escuderia.scuderia_id  AND temporada_pilot_escuderia.temporada_any = "'.date('Y').'" AND pilot.id = '.$idPiloto);


		if($sql -> num_rows > 0){

			while ($row = $sql -> fetch_array()) {
			
			//Setter tabla pilot
			$piloto -> _setId($row['id']);
			$piloto -> _setNom($row['nom']);
			$piloto -> _setSigles($row['sigles']);
			$piloto -> _setDataNaixement($row['data_naixement']);
			$piloto -> _setPes($row['pes']);
			$piloto -> _setAltura($row['altura']);
			$piloto -> _setPuntsTotals($row['punts_totals']);
			$piloto -> _setCarreresTotals($row['carreres_totals']);
			$piloto -> _setPrimeraEscuderia($row['primera_escuderia']);
			$piloto -> _setNacionalitat($row['nacionalitat']);
			$piloto -> _setAnyDebut($row['any_debut']);
			$piloto -> _setTotalVoltesRapides($row['total_voltes_rapides']);
			$piloto -> _setVictories($row['victories']);
			$piloto -> _setTitols($row['titols']);

			//Setters para la tabla scuderia
			$scuderia -> _setNomEscuderia($row['nomEscuderia']);
			$scuderia -> _setSeu($row['seu']);

			//Setters para la tabla temporada_pilot_escuderia
			$tpe -> _setXasis($row['xasis']);
			$tpe -> _setMotor($row['motor']);
			$tpe -> _setNumeroPilot($row['numero_pilot']);
			$tpe -> _setJefeEquip($row['jefeEquip']);
			$tpe -> _setDirector($row['director']);

		if(in_array($piloto -> getSigles(), $arraySiglas)){
			$result .= '
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 col-sm-12 col-xs-12">
						<a class="btn btn-primary" href="javascript:history.back()">Volver</a>
						<h3>'.$piloto -> getNom().'</h3>
						<div id="carouselPilotos" class="carousel slide" data-ride="carousel">
						  <ol class="carousel-indicators">
						    <li data-target="#carouselPilotos" data-slide-to="0" class="active"></li>
						    <li data-target="#carouselPilotos" data-slide-to="1"></li>
						    <li data-target="#carouselPilotos" data-slide-to="2"></li>
						    <li data-target="#carouselPilotos" data-slide-to="3"></li>
						    <li data-target="#carouselPilotos" data-slide-to="4"></li>
						    <li data-target="#carouselPilotos" data-slide-to="5"></li>
						    <li data-target="#carouselPilotos" data-slide-to="6"></li>
						    <li data-target="#carouselPilotos" data-slide-to="7"></li>
						    <li data-target="#carouselPilotos" data-slide-to="8"></li>
						  </ol>
						  <div class="carousel-inner" role="listbox">
						    <div class="item active">
						      <img class="d-block img-fluid" src="../img/carouselPilotos/'.$piloto -> getSigles().'1.jpg" alt="First slide">
						    </div>
						    <div class="item">
						      <img class="d-block img-fluid" src="../img/carouselPilotos/'.$piloto -> getSigles().'2.jpg" alt="Second slide">
						    </div>
						    <div class="item">
						      <img class="d-block img-fluid" src="../img/carouselPilotos/'.$piloto -> getSigles().'3.jpg" alt="Third slide">
						    </div>
						    <div class="item">
						      <img class="d-block img-fluid" src="../img/carouselPilotos/'.$piloto -> getSigles().'4.jpg" alt="Third slide">
						    </div>
						    <div class="item">
						      <img class="d-block img-fluid" src="../img/carouselPilotos/'.$piloto -> getSigles().'5.jpg" alt="Third slide">
						    </div>
						    <div class="item">
						      <img class="d-block img-fluid" src="../img/carouselPilotos/'.$piloto -> getSigles().'6.jpg" alt="Third slide">
						    </div>
						    <div class="item">
						      <img class="d-block img-fluid" src="../img/carouselPilotos/'.$piloto -> getSigles().'7.jpg" alt="Third slide">
						    </div>
						    <div class="item">
						      <img class="d-block img-fluid" src="../img/carouselPilotos/'.$piloto -> getSigles().'8.jpg" alt="Third slide">
						    </div>
						  </div>
						  <a class="left carousel-control" href="#carouselPilotos" role="button" data-slide="prev">
						    <span class="glyphicon glyphicon-chevron-left"></span>
    						<span class="sr-only">Previous</span>
						  </a>
						  <a class="right carousel-control" href="#carouselPilotos" role="button" data-slide="next">
						    <span class="glyphicon glyphicon-chevron-right"></span>
    						<span class="sr-only">Next</span>
						  </a>
						</div>
					</div>
				</div>
			</div>';
		}
		$result .=	'<br><br><br><br>
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6 col-sm-6 col-xs-6">
						<ul style="list-style: none;">
					 		<li><span style="font-size:20px;"><strong>Siglas:</strong> '.$piloto -> getSigles().'</span></li>
					 		<li><span style="font-size:20px;"><strong>Fecha nacimiento:</strong> '.d3($piloto -> getDataNaixement()).'</span></li>
					 		<li><span style="font-size:20px;"><strong>Peso:</strong> '.$piloto -> getPes().' Kg</span></li>
					 		<li><span style="font-size:20px;"><strong>Altura:</strong> '.$piloto -> getAltura().' cm</span></li>
					 		<li><span style="font-size:20px;"><strong>Nacionalidad:</strong> '.$piloto -> getNacionalitat().'</span></li>
					 		<li><span style="font-size:20px;"><strong>Año debut:</strong> '.$piloto -> getAnyDebut().'</span></li>
						</ul>
					</div>
					<div class="col-lg-6 col-sm-6 col-xs-6">
						<ul style="list-style: none;">
						<li><span style="font-size:20px;"><strong>Primera escudería:</strong> '.$piloto -> getPrimeraEscuderia().'</span></li>
					 		<li><span style="font-size:20px;"><strong>Puntos totales:</strong> '.$piloto -> getPuntsTotals().'</span></li>
					 		<li><span style="font-size:20px;"><strong>GPs disputados:</strong> '.$piloto -> getCarreresTotals().'</span></li>
					 		<li><span style="font-size:20px;"><strong>V. rápidas:</strong> '.$piloto -> getTotalVoltesRapides().'</span></li>
					 		<li><span style="font-size:20px;"><strong>Victorias:</strong> '.$piloto -> getVictories().'</span></li>
					 		<li><span style="font-size:20px;"><strong>Titulos:</strong> '.$piloto -> getTitols().'</span></li>
						</ul>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-lg-6 col-sm-6 col-xs-6">
						<ul style="list-style: none;">
					 		<li><span style="font-size:20px;"><strong>Equipo actual:</strong> '.$scuderia -> getNomEscuderia().'</span></li>
					 		<li><span style="font-size:20px;"><strong>Sede:</strong> '.$scuderia -> getSeu().'</span></li>
					 		<li><span style="font-size:20px;"><strong>Dorsal:</strong> '.$tpe -> getNumeroPilot().'</li>
						</ul>
					</div>
					<div class="col-lg-6 col-sm-6 col-xs-6">
						<ul style="list-style: none;">
					 		<li><span style="font-size:20px;"><strong>Chasis:</strong> '.$tpe -> getXasis().'</span></li>
					 		<li><span style="font-size:20px;"><strong>Motor:</strong> '.$tpe -> getMotor().'</span></li>
					 		<li><span style="font-size:20px;"><strong>Jefe equipo:</strong> '.$tpe -> getJefeEquip().'</span></li>
					 		<li><span style="font-size:20px;"><strong>Director:</strong> '.$tpe -> getDirector().'</span></li>
						</ul>
					</div>
				</div>
			</div>';
			}

		} else {

			$sql2 = $connect -> query('SELECT * FROM pilot WHERE id = '.$idPiloto);

			while ($row2 = $sql2 -> fetch_array()) {
				
				//Setter tabla pilot
			$piloto -> _setId($row2['id']);
			$piloto -> _setNom($row2['nom']);
			$piloto -> _setSigles($row2['sigles']);
			$piloto -> _setDataNaixement($row2['data_naixement']);
			$piloto -> _setPes($row2['pes']);
			$piloto -> _setAltura($row2['altura']);
			$piloto -> _setPuntsTotals($row2['punts_totals']);
			$piloto -> _setCarreresTotals($row2['carreres_totals']);
			$piloto -> _setPrimeraEscuderia($row2['primera_escuderia']);
			$piloto -> _setNacionalitat($row2['nacionalitat']);
			$piloto -> _setAnyDebut($row2['any_debut']);
			$piloto -> _setTotalVoltesRapides($row2['total_voltes_rapides']);
			$piloto -> _setVictories($row2['victories']);
			$piloto -> _setTitols($row2['titols']);

			if(in_array($piloto -> getSigles(), $arraySiglas)){
			$result .= '
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 col-sm-12 col-xs-12">
						<a class="btn btn-primary" href="javascript:history.back()">Volver</a>
						<h3>'.$piloto -> getNom().'</h3>
						<div id="carouselPilotos" class="carousel slide" data-ride="carousel">
						  <ol class="carousel-indicators">
						    <li data-target="#carouselPilotos" data-slide-to="0" class="active"></li>
						    <li data-target="#carouselPilotos" data-slide-to="1"></li>
						    <li data-target="#carouselPilotos" data-slide-to="2"></li>
						    <li data-target="#carouselPilotos" data-slide-to="3"></li>
						    <li data-target="#carouselPilotos" data-slide-to="4"></li>
						    <li data-target="#carouselPilotos" data-slide-to="5"></li>
						    <li data-target="#carouselPilotos" data-slide-to="6"></li>
						    <li data-target="#carouselPilotos" data-slide-to="7"></li>
						    <li data-target="#carouselPilotos" data-slide-to="8"></li>
						  </ol>
						  <div class="carousel-inner" role="listbox">
						    <div class="item active">
						      <img class="d-block img-fluid" src="../img/carouselPilotos/'.$piloto -> getSigles().'1.jpg" alt="First slide">
						    </div>
						    <div class="item">
						      <img class="d-block img-fluid" src="../img/carouselPilotos/'.$piloto -> getSigles().'2.jpg" alt="Second slide">
						    </div>
						    <div class="item">
						      <img class="d-block img-fluid" src="../img/carouselPilotos/'.$piloto -> getSigles().'3.jpg" alt="Third slide">
						    </div>
						    <div class="item">
						      <img class="d-block img-fluid" src="../img/carouselPilotos/'.$piloto -> getSigles().'4.jpg" alt="Third slide">
						    </div>
						    <div class="item">
						      <img class="d-block img-fluid" src="../img/carouselPilotos/'.$piloto -> getSigles().'5.jpg" alt="Third slide">
						    </div>
						    <div class="item">
						      <img class="d-block img-fluid" src="../img/carouselPilotos/'.$piloto -> getSigles().'6.jpg" alt="Third slide">
						    </div>
						    <div class="item">
						      <img class="d-block img-fluid" src="../img/carouselPilotos/'.$piloto -> getSigles().'7.jpg" alt="Third slide">
						    </div>
						    <div class="item">
						      <img class="d-block img-fluid" src="../img/carouselPilotos/'.$piloto -> getSigles().'8.jpg" alt="Third slide">
						    </div>
						  </div>
						  <a class="left carousel-control" href="#carouselPilotos" role="button" data-slide="prev">
						    <span class="glyphicon glyphicon-chevron-left"></span>
    						<span class="sr-only">Previous</span>
						  </a>
						  <a class="right carousel-control" href="#carouselPilotos" role="button" data-slide="next">
						    <span class="glyphicon glyphicon-chevron-right"></span>
    						<span class="sr-only">Next</span>
						  </a>
						</div>
					</div>
				</div>
			</div>';
		}
		$result .=	'<br><br><br><br>
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-sm-6 col-xs-6">
						<ul style="list-style: none;">
					 		<li><span style="font-size:20px;"><strong>Siglas:</strong> '.$piloto -> getSigles().'</span></li>
					 		<li><span style="font-size:20px;"><strong>Fecha nacimiento:</strong> '.d3($piloto -> getDataNaixement()).'</span></li>
					 		<li><span style="font-size:20px;"><strong>Peso:</strong> '.$piloto -> getPes().' Kg</span></li>
					 		<li><span style="font-size:20px;"><strong>Altura:</strong> '.$piloto -> getAltura().' cm</span></li>
					 		<li><span style="font-size:20px;"><strong>Nacionalidad:</strong> '.$piloto -> getNacionalitat().'</span></li>
					 		<li><span style="font-size:20px;"><strong>Año debut:</strong> '.$piloto -> getAnyDebut().'</span></li>
						</ul>
					</div>
					<div class="col-lg-6 col-sm-6 col-xs-6">
						<ul style="list-style: none;">
						<li><span style="font-size:20px;"><strong>Primera escudería:</strong> '.$piloto -> getPrimeraEscuderia().'</span></li>
					 		<li><span style="font-size:20px;"><strong>Puntos totales:</strong> '.$piloto -> getPuntsTotals().'</span></li>
					 		<li><span style="font-size:20px;"><strong>GPs disputados:</strong> '.$piloto -> getCarreresTotals().'</span></li>
					 		<li><span style="font-size:20px;"><strong>V. rápidas:</strong> '.$piloto -> getTotalVoltesRapides().'</span></li>
					 		<li><span style="font-size:20px;"><strong>Victorias:</strong> '.$piloto -> getVictories().'</span></li>
					 		<li><span style="font-size:20px;"><strong>Titulos:</strong> '.$piloto -> getTitols().'</span></li>
						</ul>
					</div>
				</div>
			</div>
			<h3>ACTUALMENTE NO PARTICIPA EN LA FÓRMULA 1</h3>';


			}
		
		}
		return $result;
	}

	/*
	 * Función que tiene parametrizada la variable de
	 * conexión a la BBDD, el año del cual se quiere ver
	 * la información de la escuderia y, de manera opcional,
	 * el nombre de la escuderia.
	*/

	function listaEscuderias($connect, $any, $escuderia = '')
	{	

		$connect -> query("SET NAMES 'utf8'");
		if($escuderia == ''){

			$query = 'SELECT scuderia.*,temporada_pilot_escuderia.temporada_any,temporada_pilot_escuderia.xasis, temporada_pilot_escuderia.motor, temporada_pilot_escuderia.jefeEquip, temporada_pilot_escuderia.director FROM scuderia, temporada_pilot_escuderia WHERE scuderia.id = temporada_pilot_escuderia.scuderia_id AND temporada_any = "'.$any.'" GROUP BY scuderia.nomEscuderia';
		} else {

			$query = 'SELECT scuderia.*,temporada_pilot_escuderia.temporada_any, temporada_pilot_escuderia.xasis, temporada_pilot_escuderia.motor, temporada_pilot_escuderia.jefeEquip, temporada_pilot_escuderia.director FROM scuderia, temporada_pilot_escuderia WHERE temporada_any = "'.$any.'" AND scuderia.nomEscuderia = "'.$escuderia.'" AND scuderia.id = temporada_pilot_escuderia.scuderia_id GROUP BY scuderia.nomEscuderia';
		}

		$sql = $connect -> query($query);
		$result = "";
		while ($row = $sql -> fetch_array()) {
			
			//Objetos de clase
			$scuderia = new Escuderia();
			$tpe = new TemporadaPilotEscuderia();

			//Variable que devolverá el resultado
			

			//Setters tabla scuderia
			$scuderia -> _setId($row['id']);
			$scuderia -> _setNomEscuderia($row['nomEscuderia']);
			$scuderia -> _setSeu($row['seu']);
			$scuderia -> _setDebut($row['debut']);

			//Setters para la tabla temporada_pilot_escuderia
			$tpe -> _setTemporadaAny($row['temporada_any']);
			$tpe -> _setXasis($row['xasis']);
			$tpe -> _setMotor($row['motor']);
			$tpe -> _setJefeEquip($row['jefeEquip']);
			$tpe -> _setDirector($row['director']);

			$idEscuderia = array($scuderia -> getId());

			$result .= '
			<div class="container">
				<div class="row">
					<div class="panel panel-default">
						<div class="panel-body">
					<div class="col-lg-6 col-sm-6 col-xs-6">
						<ul style="list-style: none;">
					 		<li><span style="font-size:20px;"><strong>Nombre:</strong> '.$scuderia -> getNomEscuderia().'</span></li>
					 		<li><span style="font-size:20px;"><strong>Debut:</strong> '.$scuderia -> getDebut().'</span></li>
					 		<li><span style="font-size:20px;"><strong>Peso:</strong> '.$scuderia -> getSeu().' Kg</span></li>
						</ul>
					
					</div>
					<div class="col-lg-6 col-sm-6 col-xs-6">
					
						<ul style="list-style: none;">
						<li><span style="font-size:20px;"><strong>Primera escudería:</strong> '.$tpe -> getXasis().'</span></li>
					 		<li><span style="font-size:20px;"><strong>Puntos totales:</strong> '.$tpe -> getMotor().'</span></li>
					 		<li><span style="font-size:20px;"><strong>GPs disputados:</strong> '.$tpe -> getJefeEquip().'</span></li>
					 		<li><span style="font-size:20px;"><strong>V. rápidas:</strong> '.$tpe -> getDirector().'</span></li>
						</ul>
					</div>

				<table class="table table-bordered">
					<thead>
						<tr>
							<th colspan="3">Pilotos</th>
						</tr>
					</thead>
					<tbody>';
				foreach ($idEscuderia as $scuderiaId) {
					
					$sql2 = $connect -> query('SELECT pilot.nom FROM pilot, temporada_pilot_escuderia WHERE pilot.id = temporada_pilot_escuderia.pilot_id AND temporada_pilot_escuderia.scuderia_id = '.$scuderiaId.' AND temporada_pilot_escuderia.temporada_any = "'.$any.'"');

					$colspan = 1;
					while ($row2 = $sql2 -> fetch_array()) {
						
						//Objeto de clase
						$piloto = new Piloto();

						//Setter tabla pilot
						$piloto -> _setNom($row2['nom']);

						if($sql -> num_rows > 0){

							$result .= '
							<tr>
								<td>'.$piloto -> getNom().'</td></tr>';

						} else {

							$result .= '
							<tr>
								<td>Sin pilotos</td>
							</tr>';
						}
						$colspan++;
					}
				}

			$result .=	'
						</tbody>
					</table>';

			/*
			 * Si el valor de la sesión del usuario
			 * logueado es registrado aparecerá un campo
			 * para marcar como favoritas las escuderias.
			*/
			if($_SESSION['rol'] == 'registrado'){
				$result .= '<td> 
				<form action="" method="POST">
					<button type="submit" name="fFav" class="btn btn-success"><span class="glyphicon glyphicon-star"></span></button>
			<input type="hidden" value="'.$scuderia -> getId().'" name="fIdEscuderia"></form></td>';
			}	

			$result .=	'
				</div>
			</div>';


		}
		return $result;
	}

	/*
	 * Función para listar las escuderias favoritas del
	 * usuario logueado.
	*/
	function escuderiasFav($connect, $idUser)
	{
		
		//Mapa de caracteres
		$connect -> query("SET NAMES 'utf8'");

		//Variable de retorno para el resultado
		$result = "";

		$sql = $connect -> query('SELECT scuderia.* FROM scuderia, escuderia_usuari WHERE scuderia.id = escuderia_usuari.scuderia_id');

		while ($row = $sql -> fetch_array()) {
				
			//Objetos de clase
			$scud = new Escuderia();

			//Setters tabla scuderia
			$scud -> _setId($row['id']);
			$scud -> _setNomEscuderia($row['nomEscuderia']);
			$scud -> _setSeu($row['seu']);
			$scud -> _setDebut($row['debut']);

			
			$result .= 
			'<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 col-sm-12 col-xs-12">
						<div class="col-lg-4 col-sm-4 col-xs-4">
							<ul style="list-style:none">
								<li><span style="font-size:20px;"><strong>Nombre: </strong>Nombre '.$scud -> getNomEscuderia().'</span></li>
							</ul>
						</div>
						<div class="col-lg-4 col-sm-4 col-xs-4">
							<ul style="list-style:none">
								<li><span style="font-size:20px;"><strong>Año debut: </strong>Año debut '.$scud -> getDebut().'</span></li>
							</ul>
						</div>
						<div class="col-lg-4 col-sm-4 col-xs-4">
							<ul style="list-style:none">
								<li><span style="font-size:20px;"><strong>Sede: </strong>Sede '.$scud -> getSeu().'</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>';
		}

		return $result;
	}

	/*
	 * Función para gestionar las diferentes temporadas
	*/
	function listaTemporadas($connect, $any)
	{
		//Objetos de clase
		$temp = new Temporada();

		//Mapa de caracteres
		$connect -> query("SET NAMES 'utf8'");

		//Variable de retorno
		$result = "
		
			<table class='table table-bordered'>
				<thead>
					<tr>
						<th>Año</th>
						<th>Reglamento</th>
					</tr>
				</thead>
				<tbody>";

		$sql = $connect -> query('SELECT * FROM temporada WHERE any = '.$any.' ORDER BY any DESC');

		while ($row = $sql -> fetch_array()) {
			
			//Setters tabla temporada
			$temp -> _setAny($row['any']);
			$temp -> _setReglament($row['reglament']);

			$result .= '
				<tr>
					<td>'.$temp -> getAny().'</td>
					<td>'.$temp -> getReglament().'</td>
				</tr>';

		}
		$result .= '
				</tbody>
			</table>
		';

		return $result;
	}

	/*
	 * Función que lista las escuderías en una tabla para
	 * que el super usuario pueda modificar sus datos.
	*/
	function gestionEscuderias($connect)
	{

		//Mapa de caractertes
		$connect -> query("SET NAMES 'utf8'");

		//Objetos de clase
		$scud = new Escuderia();

		//Variable de retorno
		$result = "
			<div class='table-responsive'>
				<table class='table table-bordered'>
					<thead>
						<tr>
							
							<th>Nombre</th>
							<th>Sede</th>
							<th>Año debut</th>
							<th>Edita</th> 
						</tr>
					</thead>
					<tbody>";

		$sql = $connect -> query('SELECT * FROM scuderia');

		while ($row = $sql -> fetch_array()) {
			
			$scud -> _setId($row['id']);
			$scud -> _setNomEscuderia($row['nomEscuderia']);
			$scud -> _setSeu($row['seu']);
			$scud -> _setDebut($row['debut']);

			$result .= "
				<tr>
					<td>".$scud -> getNomEscuderia()."</td>
					<td>".$scud -> getSeu()."</td>
					<td>".$scud -> getDebut()."</td>
					<td><a class='various' data-fancybox-type='iframe' href='../super/index2.php?sec=edita_scuderia&id=".$scud -> getId()."'><span class='glyphicon glyphicon-pencil'></span></a></td>
				</tr>";
		}

		$result .= "
			</tbody>
		</table>
	</div>";

	return $result;

		
	}
?>