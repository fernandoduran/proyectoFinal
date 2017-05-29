
<?php
//$connect = new mysqli('localhost', 'root', '', 'f1history');
	/**
	 * @author Fernando Duran Ruiz
	 * 
	 * Archivo de funciones para el proyecto de fin
	 * de ciclo del CFGS Desarrollo de aplicaciones web
	*/

	//Titulos de las páginas

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

	function pinta_items_menu($menu)
	{	
		$result='
			<div class="menu_top">
				<div class="menu_top_nom" >
					<a href="../inici/"><img alt="Logo página" src="../img/logoF1_2.jpg" width="55"></a>

					<a href="" class="btn btn-social-icon btn-facebook"><span class="fa fa-facebook"></span></a>

					<a href="" class="btn btn-social-icon btn-twitter"><span class="fa fa-twitter"></span></a>

					<a href="https://vimeo.com/user66994675" target="_blank" class="btn btn-social-icon btn-vimeo"><span class="fa fa-vimeo"></span></a>
				</div>

				<div class="menu_top_botons"><br>';

									
						if($_SESSION['nomUsuari'] <> ""){
							$result.='<span class="glyphicon glyphicon-user"></span> Bienvenido '.$_SESSION['nomUsuari'].' | 
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
      	
      	$titol_dropdown = explode("#", $menu);
		
		foreach ($titol_dropdown as $stringMenu) {
		
			if($stringMenu != ""){
				$itemMenuGeneral = explode("#", $stringMenu);
				
				if($itemMenuGeneral[0] != ""){

					foreach ($itemMenuGeneral as $numVolta => $valor) {
						
						$nomDelItemPrincipal = explode("*", $valor);
						
						$result .= '<li class="dropdown">';
						$result.= '<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">'.$nomDelItemPrincipal[0].'<span class="caret"></span></a>';
						
						$llista_links = array($nomDelItemPrincipal[1]);
						
						foreach ($llista_links as $nom_link) {
							
							$subItem = explode(";", $nom_link);
							
							$result .= '<ul class="dropdown-menu">';

							foreach ($subItem as $valor) {
								
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
		$menu_escuderias = "#Escuderías*Todas|../escuderias/index.php?sec=lista_escuderias;";
		$menu_escuderias .= "Por sede|../escuderias/index.php?sec=sede;";

		//Menu favoritos
		$menu_favoritos = "#Tus favoritos*Pilotos|../favoritos/index.php?sec=pilotos;";
		$menu_favoritos .= "Escuderias|../favoritos/index.php?sec=escuderias;";

		//Menu tienda
		$menu_tienda = "#Tienda*Productos|../tienda/index.php?sec=lista_productos;";
		$menu_tienda .= "Carrito|../tienda/..index.php?sec=carrito;";
		$menu_tienda .= "Mis compras|../tienda/index.php?sec=historico;";
		//Menu multimedia
		$menu_media = "#Multimedia*Imagenes|../media/index.php?sec=imagenes;";
		$menu_media .= "Videos|../media/index.php?sec=videos;";

		//Menu admin
		$menu_admin = "#Admin*Gestión usuarios|../admin/index.php?sec=lista_usuarios;";
		$menu_admin .= "Gestión foro|../admin/index.php?sec=gestion_foro;";

		//Menu super
		$menu_super = "#Super*Gestión pilotos|../super/index.php?sec=lista_pilotos;";
		$menu_super .= "Gestión escuderías|../super/index.php?sec=lista_escuderias;";
		$menu_super .= "Gestión campeonatos|../super/index.php?sec=lista_campeonatos;";
		$menu_super .= "Gestión circuitos|../super/index.php?sec=lista_circuitos;";
		$menu_super .= "Gestión carreras|../super/index.php?sec=lista_carreras;";
		$menu_super .= "Gestión tienda|../super/index.php?sec=lista_productos;";
		



		switch ($_SESSION['rol']) {
			
			case 'registrado':
				$menu_usuario = $menu_campeonatos.$menu_circuitos.$menu_pilotos.$menu_escuderias.$menu_favoritos.$menu_tienda.$menu_media;
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

	function listaPilotos($sql)
	{	
		$piloto = new Piloto();
		
		while($row = $sql -> fetch_array()){

			$piloto -> _setId($row['id']);
			$piloto -> _setNom($row['nom']);
			$piloto -> _setPuntsTotals($row['punts_totals']);
			$piloto -> _setCarreresTotals($row['carreres_totals']);
			$piloto -> _setPrimeraEscuderia($row['primera_escuderia']);
			$piloto -> _setNacionalitat($row['nacionalitat']);
			$piloto -> _setAnyDebut($row['any_debut']);
			$piloto -> _setVictories($row['victories']);
			$piloto -> _setTitols($row['titols']);

			echo '
				<tr>
					<td><a class="various" href="../piloto/index.php?sec=ficha&id='.$piloto -> getId().'" data-fancybox-type="iframe">'.$piloto -> getNom().'</a></td>
					<td>'.$piloto -> getNacionalitat().'</td>
					<td>'.$piloto -> getAnyDebut().'</td>
					<td>'.$piloto -> getPrimeraEscuderia().'</td>
					<td>'.$piloto -> getCarreresTotals().'</td>
					<td>'.$piloto -> getPuntsTotals().'</td>
					<td>'.$piloto -> getVictories().'</td>
					<td>'.$piloto -> getTitols().'</td>
				</tr>';
		}
	}

	function clasificacion($connect, $any = '')
	{
		
		$carrera = new Carrera();
		$circuit = new Circuit();
		$piloto = new Piloto();
		$clasif = new Classificacio();
		$cmundial = new ClasificacionMundial();

		$connect -> query("SET NAMES 'utf8'");
		
		if($any == ''){

			$sql = $connect -> query('SELECT carrera.id, circuit.pais, carrera.nom_carrera FROM circuit, carrera WHERE carrera.circuit_id = circuit.id');
		
		} else {

			$sql = $connect -> query('SELECT carrera.id,circuit.pais, carrera.nom_carrera FROM circuit, carrera WHERE carrera.circuit_id = circuit.id AND data_carrera LIKE "'.$any.'%"');
		}
		
		
		if($sql -> num_rows > 0 ){

			$result = '
			<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-sm-12"><div class="table-responsive">';
					echo titular('Clasificación mundial '.$any.'');
			$result.='
			<table id="listaPilotos" class="table table-bordered"  cellspacing="0" width="100%">
								<thead>
									<tr>
										<th>Pos.</th>
										<th>Piloto</th>';
			while($row = $sql -> fetch_array()){

				$carrera -> _setId($row['id']);
				$circuit -> _setPais($row['pais']);
				$carrera -> _setNomCarrera($row['nom_carrera']);
				
				switch ($circuit -> getPais()) {
					case 'Estados Unidos':
						$result .= '<th data-container="body" data-toggle="tooltip" data-placement="top" title="'.$carrera -> getNomCarrera().'">USA</th>';
						break;
					case 'Mónaco':
						$result .= '<th data-container="body" data-toggle="tooltip" data-placement="top" title="'.$carrera -> getNomCarrera().'">MO</th>';
						break;
					case 'Bélgica':
						$result .= '<th data-container="body" data-toggle="tooltip" data-placement="top" title="'.$carrera -> getNomCarrera().'">BE</th>';
						break;
					case 'México':
						$result .= '<th data-container="body" data-toggle="tooltip" data-placement="top" title="'.$carrera -> getNomCarrera().'">ME</th>';
						break;
					case 'Emiratos Arabes Unidos':
						$result .= '<th data-container="body" data-toggle="tooltip" data-placement="top" title="'.$carrera -> getNomCarrera().'">AB</th>';
						break;
					case 'Austria':
						$result .= '<th data-container="body" data-toggle="tooltip" data-placement="top" title="'.$carrera -> getNomCarrera().'">AT</th>';
						break;
						case 'Singapur':
						$result .= '<th data-container="body" data-toggle="tooltip" data-placement="top" title="'.$carrera -> getNomCarrera().'">SG</th>';
						break;
					default:
						$result .= '<th data-container="body" data-toggle="tooltip" data-placement="top" title="'.$carrera -> getNomCarrera().'">'.substr(mb_strtoupper($circuit -> getPais()), 0, 2) .'</th>';
						break;
				}

				$carreras = array($carrera -> getId());
				


			}
			$result .= '<th>Tot.</th>
					</thead>
					<tbody>';
			
			
			$sql2 = $connect -> query('SELECT pilot.id AS "pId", pilot.nom, clasificacionMundial.* FROM pilot, clasificacionMundial WHERE pilot.id = clasificacionMundial.pilot_id AND clasificacionMundial.temporada_any = "'.$any.'"');
			$pos = 1;
			while ($row2 = $sql2 -> fetch_array()) {

				$piloto -> _setId($row2['pId']);
				$piloto -> _setNom($row2['nom']);

				$cmundial -> _setTemporadaAny($row2['temporada_any']);
				$cmundial -> _setAU($row2['AU']);
				$cmundial -> _setCH($row2['CH']);
				$cmundial -> _setBA($row2['BA']);
				$cmundial -> _setRU($row2['RU']);
				$cmundial -> _setES($row2['ES']);
				$cmundial -> _setMO($row2['MO']);
				$cmundial -> _setCA($row2['CA']);
				$cmundial -> _setAZ($row2['AZ']);
				$cmundial -> _setAT($row2['AT']);
				$cmundial -> _setGR($row2['GR']);
				$cmundial -> _setHU($row2['HU']);
				$cmundial -> _setBE($row2['BE']);
				$cmundial -> _setIT($row2['IT']);
				$cmundial -> _setSG($row2['SG']);
				$cmundial -> _setMA($row2['MA']);
				$cmundial -> _setJA($row2['JA']);
				$cmundial -> _setUSA($row2['USA']);
				$cmundial -> _setME($row2['ME']);
				$cmundial -> _setBR($row2['BR']);
				$cmundial -> _setAB($row2['AB']);

				$result .='
					<tr>
						<td>'.$pos.'</td>
						<td>'.$piloto -> getNom().'</td>
						<td>'.$cmundial -> getAU().'</td>
						<td>'.$cmundial -> getCH().'</td>
						<td>'.$cmundial -> getBA().'</td>
						<td>'.$cmundial -> getRU().'</td>
						<td>'.$cmundial -> getES().'</td>
						<td>'.$cmundial -> getMO().'</td>
						<td>'.$cmundial -> getCA().'</td>
						<td>'.$cmundial -> getAZ().'</td>
						<td>'.$cmundial -> getAT().'</td>
						<td>'.$cmundial -> getGR().'</td>
						<td>'.$cmundial -> getHU().'</td>
						<td>'.$cmundial -> getBE().'</td>
						<td>'.$cmundial -> getIT().'</td>
						<td>'.$cmundial -> getSG().'</td>
						<td>'.$cmundial -> getMA().'</td>
						<td>'.$cmundial -> getJA().'</td>
						<td>'.$cmundial -> getUSA().'</td>
						<td>'.$cmundial -> getME().'</td>
						<td>'.$cmundial -> getBR().'</td>
						<td>'.$cmundial -> getAB().'</td>';
				$suma = 
				$cmundial -> getAU() 
				+ $cmundial -> getCH()
				+ $cmundial -> getBA()
				+ $cmundial -> getRU()
				+ $cmundial -> getES()
				+ $cmundial -> getMO()
				+ $cmundial -> getCA()
				+ $cmundial -> getAZ()
				+ $cmundial -> getAT()
				+ $cmundial -> getGR()
				+ $cmundial -> getHU()
				+ $cmundial -> getBE()
				+ $cmundial -> getIT()
				+ $cmundial -> getSG()
				+ $cmundial -> getMA()
				+ $cmundial -> getJA()
				+ $cmundial -> getUSA()
				+ $cmundial -> getME()
				+ $cmundial -> getBR()
				+ $cmundial -> getAB();
					$result .= '<td>'.$suma.'</td>';
				$pos++;
			}
					
			/*$sql2 = $connect -> query('SELECT pilot.id AS "pId", pilot.nom, carrera.id AS "cId" FROM pilot, clasificacio, carrera WHERE pilot.id = clasificacio.pilot_id AND carrera.id = clasificacio.carrera_id AND clasificacio.carrera_id AND carrera.data_carrera LIKE "2017%" ');

			$result .= '<tbody><tr>';

			$pos = 1;	
			while($row2 = $sql2 -> fetch_array()){

				$piloto -> _setId($row2['pId']);
				$piloto -> _setNom($row2['nom']);
				$carrera -> _setId($row2['cId']);
				

				$result .='
					<tr>
						<td>'.$pos.'</td>
						<td>'.$piloto -> getNom().'</td>';
				$pId = array($piloto -> getId());
				$cId = array($carrera -> getId());		
				
				foreach ($pId as $key) {
					foreach ($cId as $value) {
						
						$sql3 = $connect -> query('SELECT punts FROM clasificacio WHERE clasificacio.pilot_id = '.intval($key).' AND clasificacio.carrera_id = '.intval($value).'');
						//var_dump('SELECT punts FROM clasificacio WHERE clasificacio.pilot_id = '.intval($key).' AND clasificacio.carrera_id = '.intval($value).'');
						while ($row3 = $sql3 -> fetch_array()) {
							
							$clasif -> _setPunts($row3['punts']);
						$result .= '<td>'.$clasif -> getPunts().'</td></tr>';
						}
					}
				}
				$pos++;
			}*/


			$result .=		'</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			';
			?>
			<script>
				$(document).ready(function(){
				    $('[data-toggle="tooltip"]').tooltip();   
				});
			</script>
			<?php
		
		} else {

			$result = '
			<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-sm-12">';

				echo titular('Clasificación mundial '.$any.'');
			$result .= '
					<div class="alert alert-warning" role="alert">
  							<strong>Oops!</strong> No hay resultados.
						</div>
					</div>
				</div>
			</div>';
		}
		return $result;
	}

	function listaCarreras($connect, $idCarrera, $any)
	{	
		$carrera = new Carrera();
		$circuit = new Circuit();
		$result = "";
		if($idCarrera == "" && $any == ""){

			$query = 'SELECT carrera.nom_carrera, carrera.data_carrera, circuit.nom, circuit.pais FROM carrera, circuit WHERE circuit.id = carrera.circuit_id';
		
		} elseif($idCarrera != "" && $any == "") {

			$query = 'SELECT carrera.nom_carrera, carrera.data_carrera, circuit.nom, circuit.pais FROM carrera, circuit WHERE circuit.id = carrera.circuit_id AND carrera.id ='.$idCarrera;
		
		} elseif($idCarrera == "" && $any != "") {

			$query = 'SELECT carrera.nom_carrera, carrera.data_carrera, circuit.nom, circuit.pais FROM carrera, circuit WHERE circuit.id = carrera.circuit_id AND carrera.data_carrera LIKE "'.$any.'%"';
		
		} elseif ($idCarrera != "" && $any != "") {
			$query = 'SELECT carrera.nom_carrera, carrera.data_carrera, circuit.nom, circuit.pais FROM carrera, circuit WHERE circuit.id = carrera.circuit_id AND carrera.id ='.$idCarrera.' AND carrera.data_carrera LIKE "'.$any.'%"';
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
							</tr>
						</thead>
						<tbody>';
			
			while($row = $sql -> fetch_array()){

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
					</tr>';

			}
			$result .= '
					</tbody>
				</table>';

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

	function listaUsuarios($connect, $rol, $id)
	{	
		$user = new Usuario();

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

			$result ='
				<tr>
					<td>'.$user -> getNom().'</td>
					<td>'.$user -> getCognom().'</td>
					<td>'.$user -> getMail().'</td>
					<td>'.$user -> getPassword().'</td>
					<td>'.$user -> getDataNaixement().'</td>
					<td>'.$user -> getRol().'</td>
					<td><a class="various" data-fancybox-type="iframe" href="../admin/index.php?sec=edita&id='.$user -> getId().'"><span class="glyphicon glyphicon-pencil"></span></a></td>
					<td><a class="various" data-fancybox-type="iframe" href="../admin/index.php?sec=eimina&id='.$user -> getId().'"><span class="glyphicon glyphicon-remove"></span></a></td>
				</tr>';
		}
		return $result;
	}
?>