
<?php
	/**
	 * @author Fernando Duran Ruiz
	 * 
	 * Archivo de funciones para el proyecto de fin
	 * de ciclo del CFGS Desarrollo de aplicaciones web
	*/

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

		//Menu super
		$menu_super = "#Super*Gestión pilotos|../super/index.php?sec=lista_pilotos;";
		$menu_super .= "Gestión escuderías|../super/index.php?sec=lista_escuderias;";
		$menu_super .= "Gestión campeonatos|../super/index.php?sec=lista_campeonatos;";
		$menu_super .= "Gestión circuitos|../super/index.php?sec=lista_circuitos;";
		$menu_super .= "Gestión carreras|../super/index.php?sec=lista_carreras;";
		$menu_super .= "Gestión temporadas|../super/index.php?sec=asocia_piloto;";
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

			echo
			'
				<tr>
					<td><a class="various" href="../piloto/index.php?sec=ficha&id='.$piloto -> getId().'" data-fancybox-type="iframe">'.$piloto -> getNom().'</a></td>
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

				echo'<td>
							<a class="various" data-fancybox-type="iframe" href="../super/index2.php?sec=gest_pilotos&acc=edita">
								<span class="glyphicon glyphicon-pencil"></span>
							</a>
						</td>
						<td>
							<a class="various" data-fancybox-type="iframe" href="../super/index2.php?sec=gest_pilotos&acc=elimina">
								<span class="glyphicon glyphicon-remove"></span>
							</a>
						</td>';
				}
				if($_SESSION['rol'] == 'registrado')
					echo '<td> 
					<form action="" method="POST">
						<button type="submit" name="fFav" class="btn btn-success"><span class="glyphicon glyphicon-star"></span></button>
				<input type="hidden" value="'.$piloto -> getId().'" name="fIdPiloto"></form></td>';

			echo	'</tr>';
		}
	}
	/*
	 * Función que tiene parametrizada la variable que
	 * se conecta con la BBDD y el valor de un <select>
	 * de un formulario.
	*/
	function clasificacion($connect, $any = '')
	{
		//Objetos de clases
		$carrera = new Carrera();
		$circuit = new Circuit();
		$piloto = new Piloto();
		$clasif = new Classificacio();
		$cmundial = new ClasificacionMundial();

		$connect -> query("SET NAMES 'utf8'");
		
		/*
		 * En función de si se le pasa año se realizará
		 * una consulta genérica o teniendo en cuenta
		 * el año que se le pasa.
		*/
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
				
				/*
				 * Estructura de control para mostrar
				 * unas abreviaturas en concreto
				 * dependiendo del pais de la carrera
				*/
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
					/*
					 * mb_strtoupper convierte en
					 * mayusculas todos los caracteres
					 * de un string, incluyendo las
					 * palabras con acentos.
					 *
					 * con substr extraemos las dos
					 * primeras letras de cada pais
					*/	
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
			
			/*
			 * Búcle que pinta cada una de las filas
			 * de la tabla donde se muestra la
			 * clasificación general de un mundial.
			*/
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
				$cmundial -> _setVL($row2['VL']);
				$cmundial -> _setAZ($row2['AZ']);
				$cmundial -> _setAT($row2['AT']);
				$cmundial -> _setGR($row2['GR']);
				$cmundial -> _setHU($row2['HU']);
				$cmundial -> _setAL($row2['AL']);
				$cmundial -> _setBE($row2['BE']);
				$cmundial -> _setIT($row2['IT']);
				$cmundial -> _setSG($row2['SG']);
				$cmundial -> _setMA($row2['MA']);
				$cmundial -> _setKO($row2['KO']);
				$cmundial -> _setJA($row2['JA']);
				$cmundial -> _setND($row2['ND']);
				$cmundial -> _setUSA($row2['USA']);
				$cmundial -> _setME($row2['ME']);
				$cmundial -> _setBR($row2['BR']);
				$cmundial -> _setAB($row2['AB']);
				$cmundial -> _setFR($row2['FR']);

				$result .='
					<tr>
						<td>'.$pos.'</td>
						<td>'.$piloto -> getNom().'</td>';
				/*
				 * El orden y las carreras varian en
				 * función del año, por ello se ha
				 * elaborada una estructura de control
				 * por cada año.
				*/
				if($any == '2007'){

					$result .= '
					<td>'.$cmundial -> getAU().'</td>
					<td>'.$cmundial -> getMA().'</td>
					<td>'.$cmundial -> getBA().'</td>
					<td>'.$cmundial -> getES().'</td>
					<td>'.$cmundial -> getMO().'</td>
					<td>'.$cmundial -> getCA().'</td>
					<td>'.$cmundial -> getUSA().'</td>
					<td>'.$cmundial -> getFR().'</td>
					<td>'.$cmundial -> getGR().'</td>
					<td>'.$cmundial -> getAL().'</td>
					<td>'.$cmundial -> getHU().'</td>
					<td>'.$cmundial -> getTU().'</td>
					<td>'.$cmundial -> getIT().'</td>
					<td>'.$cmundial -> getBE().'</td>
					<td>'.$cmundial -> getJA().'</td>
					<td>'.$cmundial -> getCH().'</td>
					<td>'.$cmundial -> getBR().'</td>';

				} elseif ($any == '2008') {
					
					$result .= '
					<td>'.$cmundial -> getAU().'</td>
					<td>'.$cmundial -> getMA().'</td>
					<td>'.$cmundial -> getBA().'</td>
					<td>'.$cmundial -> getES().'</td>
					<td>'.$cmundial -> getTU().'</td>
					<td>'.$cmundial -> getMO().'</td>
					<td>'.$cmundial -> getCA().'</td>
					<td>'.$cmundial -> getFR().'</td>
					<td>'.$cmundial -> getGR().'</td>
					<td>'.$cmundial -> getAL().'</td>
					<td>'.$cmundial -> getHU().'</td>
					<td>'.$cmundial -> getVL().'</td>
					<td>'.$cmundial -> getBE().'</td>
					<td>'.$cmundial -> getIT().'</td>
					<td>'.$cmundial -> getSG().'</td>
					<td>'.$cmundial -> getJA().'</td>
					<td>'.$cmundial -> getCH().'</td>
					<td>'.$cmundial -> getBR().'</td>';

				} elseif ($any == '2009') {
					
					$result .= '
					<td>'.$cmundial -> getAU().'</td>
					<td>'.$cmundial -> getMA().'</td>
					<td>'.$cmundial -> getCH().'</td>
					<td>'.$cmundial -> getBA().'</td>
					<td>'.$cmundial -> getES().'</td>
					<td>'.$cmundial -> getMO().'</td>
					<td>'.$cmundial -> getTU().'</td>
					<td>'.$cmundial -> getGR().'</td>
					<td>'.$cmundial -> getAL().'</td>
					<td>'.$cmundial -> getHU().'</td>
					<td>'.$cmundial -> getVL().'</td>
					<td>'.$cmundial -> getBE().'</td>
					<td>'.$cmundial -> getIT().'</td>
					<td>'.$cmundial -> getSG().'</td>
					<td>'.$cmundial -> getJA().'</td>
					<td>'.$cmundial -> getBR().'</td>
					<td>'.$cmundial -> getAB().'</td>';

				} elseif ($any == '2010') {
					
					$result .= '
					<td>'.$cmundial -> getBA().'</td>
					<td>'.$cmundial -> getAU().'</td>
					<td>'.$cmundial -> getMA().'</td>
					<td>'.$cmundial -> getCH().'</td>
					<td>'.$cmundial -> getES().'</td>
					<td>'.$cmundial -> getMO().'</td>
					<td>'.$cmundial -> getTU().'</td>
					<td>'.$cmundial -> getCA().'</td>
					<td>'.$cmundial -> getVL().'</td>
					<td>'.$cmundial -> getGR().'</td>
					<td>'.$cmundial -> getAL().'</td>
					<td>'.$cmundial -> getHU().'</td>
					<td>'.$cmundial -> getBE().'</td>
					<td>'.$cmundial -> getIT().'</td>
					<td>'.$cmundial -> getSG().'</td>
					<td>'.$cmundial -> getJA().'</td>
					<td>'.$cmundial -> getKO().'</td>
					<td>'.$cmundial -> getBR().'</td>
					<td>'.$cmundial -> getAB().'</td>';

				} elseif ($any == '2011') {
					
					$result .= '
					<td>'.$cmundial -> getAU().'</td>
					<td>'.$cmundial -> getMA().'</td>
					<td>'.$cmundial -> getCH().'</td>
					<td>'.$cmundial -> getTU().'</td>
					<td>'.$cmundial -> getES().'</td>
					<td>'.$cmundial -> getMO().'</td>
					<td>'.$cmundial -> getCA().'</td>
					<td>'.$cmundial -> getVL().'</td>
					<td>'.$cmundial -> getGR().'</td>
					<td>'.$cmundial -> getAL().'</td>
					<td>'.$cmundial -> getHU().'</td>
					<td>'.$cmundial -> getBE().'</td>
					<td>'.$cmundial -> getIT().'</td>
					<td>'.$cmundial -> getSG().'</td>
					<td>'.$cmundial -> getJA().'</td>
					<td>'.$cmundial -> getKO().'</td>
					<td>'.$cmundial -> getND().'</td>
					<td>'.$cmundial -> getAB().'</td>
					<td>'.$cmundial -> getBR().'</td>';
				
				} elseif ($any == '2012') {
					
					$result .= '
					<td>'.$cmundial -> getAU().'</td>
					<td>'.$cmundial -> getMA().'</td>
					<td>'.$cmundial -> getCH().'</td>
					<td>'.$cmundial -> getBA().'</td>
					<td>'.$cmundial -> getES().'</td>
					<td>'.$cmundial -> getMO().'</td>
					<td>'.$cmundial -> getCA().'</td>
					<td>'.$cmundial -> getVL().'</td>
					<td>'.$cmundial -> getGR().'</td>
					<td>'.$cmundial -> getAL().'</td>
					<td>'.$cmundial -> getHU().'</td>
					<td>'.$cmundial -> getBE().'</td>
					<td>'.$cmundial -> getIT().'</td>
					<td>'.$cmundial -> getSG().'</td>
					<td>'.$cmundial -> getJA().'</td>
					<td>'.$cmundial -> getKO().'</td>
					<td>'.$cmundial -> getND().'</td>
					<td>'.$cmundial -> getBR().'</td>
					<td>'.$cmundial -> getUSA().'</td>
					<td>'.$cmundial -> getAB().'</td>';

				} elseif ($any == '2013') {
					
					$result .= '
					<td>'.$cmundial -> getAU().'</td>
					<td>'.$cmundial -> getMA().'</td>
					<td>'.$cmundial -> getCH().'</td>
					<td>'.$cmundial -> getBA().'</td>
					<td>'.$cmundial -> getES().'</td>
					<td>'.$cmundial -> getMO().'</td>
					<td>'.$cmundial -> getCA().'</td>
					<td>'.$cmundial -> getGR().'</td>
					<td>'.$cmundial -> getAL().'</td>
					<td>'.$cmundial -> getHU().'</td>
					<td>'.$cmundial -> getBE().'</td>
					<td>'.$cmundial -> getIT().'</td>
					<td>'.$cmundial -> getSG().'</td>
					<td>'.$cmundial -> getKO().'</td>
					<td>'.$cmundial -> getJA().'</td>
					<td>'.$cmundial -> getND().'</td>
					<td>'.$cmundial -> getAB().'</td>
					<td>'.$cmundial -> getUSA().'</td>
					<td>'.$cmundial -> getBR().'</td>';

				} elseif ($any == '2014') {
					
					$result .= '
					<td>'.$cmundial -> getAU().'</td>
					<td>'.$cmundial -> getMA().'</td>
					<td>'.$cmundial -> getBA().'</td>
					<td>'.$cmundial -> getCH().'</td>
					<td>'.$cmundial -> getES().'</td>
					<td>'.$cmundial -> getMO().'</td>
					<td>'.$cmundial -> getCA().'</td>
					<td>'.$cmundial -> getAT().'</td>
					<td>'.$cmundial -> getGR().'</td>
					<td>'.$cmundial -> getAL().'</td>
					<td>'.$cmundial -> getHU().'</td>
					<td>'.$cmundial -> getBE().'</td>
					<td>'.$cmundial -> getIT().'</td>
					<td>'.$cmundial -> getSG().'</td>
					<td>'.$cmundial -> getJA().'</td>
					<td>'.$cmundial -> getRU().'</td>
					<td>'.$cmundial -> getUSA().'</td>
					<td>'.$cmundial -> getBR().'</td>
					<td>'.$cmundial -> getAB().'</td>';

				} elseif ($any == '2015') {

					$result .= '
					<td>'.$cmundial -> getAU().'</td>
					<td>'.$cmundial -> getMA().'</td>
					<td>'.$cmundial -> getCH().'</td>
					<td>'.$cmundial -> getBA().'</td>
					<td>'.$cmundial -> getES().'</td>
					<td>'.$cmundial -> getMO().'</td>
					<td>'.$cmundial -> getCA().'</td>
					<td>'.$cmundial -> getAT().'</td>
					<td>'.$cmundial -> getGR().'</td>
					<td>'.$cmundial -> getHU().'</td>
					<td>'.$cmundial -> getBE().'</td>
					<td>'.$cmundial -> getIT().'</td>
					<td>'.$cmundial -> getSG().'</td>
					<td>'.$cmundial -> getJA().'</td>
					<td>'.$cmundial -> getRU().'</td>
					<td>'.$cmundial -> getUSA().'</td>
					<td>'.$cmundial -> getME().'</td>
					<td>'.$cmundial -> getBR().'</td>
					<td>'.$cmundial -> getAB().'</td>';

				} elseif ($any == '2016') {
					
					$result .= '
					<td>'.$cmundial -> getAU().'</td>
					<td>'.$cmundial -> getBA().'</td>
					<td>'.$cmundial -> getCH().'</td>
					<td>'.$cmundial -> getRU().'</td>
					<td>'.$cmundial -> getES().'</td>
					<td>'.$cmundial -> getMO().'</td>
					<td>'.$cmundial -> getCA().'</td>
					<td>'.$cmundial -> getAZ().'</td>
					<td>'.$cmundial -> getAT().'</td>
					<td>'.$cmundial -> getGR().'</td>
					<td>'.$cmundial -> getHU().'</td>
					<td>'.$cmundial -> getAL().'</td>
					<td>'.$cmundial -> getBE().'</td>
					<td>'.$cmundial -> getIT().'</td>
					<td>'.$cmundial -> getSG().'</td>
					<td>'.$cmundial -> getMA().'</td>
					<td>'.$cmundial -> getJA().'</td>
					<td>'.$cmundial -> getUSA().'</td>
					<td>'.$cmundial -> getME().'</td>
					<td>'.$cmundial -> getBR().'</td>
					<td>'.$cmundial -> getAB().'</td>';

				} elseif ($any == '2017') {
					
					$result .= '
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

				}

				/*
				 * Sumatorio de los puntos de cada
				 * carrera de cada piloto
				*/
				$suma = 
				$cmundial -> getAU() 
				+ $cmundial -> getCH()
				+ $cmundial -> getBA()
				+ $cmundial -> getRU()
				+ $cmundial -> getES()
				+ $cmundial -> getMO()
				+ $cmundial -> getCA()
				+ $cmundial -> getVL()
				+ $cmundial -> getAZ()
				+ $cmundial -> getAT()
				+ $cmundial -> getGR()
				+ $cmundial -> getHU()
				+ $cmundial -> getAL()
				+ $cmundial -> getBE()
				+ $cmundial -> getIT()
				+ $cmundial -> getSG()
				+ $cmundial -> getMA()
				+ $cmundial -> getKO()
				+ $cmundial -> getJA()
				+ $cmundial -> getND()
				+ $cmundial -> getUSA()
				+ $cmundial -> getME()
				+ $cmundial -> getBR()
				+ $cmundial -> getFR()
				+ $cmundial -> getTU()
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

	/*
	 * Función que tiene parametrizadas la variable
	 * de conexión a la BBDD y lso valores de dos
	 * <select> de un formulario.
	*/
	function listaCarreras($connect, $idCarrera, $any)
	{	
		// Objetos de clase
		$carrera = new Carrera();
		$circuit = new Circuit();
		$result = "";

		/*
		 * En función de los valores de los <select>
		 * se generará una consulta en concreto
		*/
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

			/*
			 * Estructura de control que mostrará
			 * la imagen del circuito teniendo en 
			 * cuenta el valor seleccionado.
			*/
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

	/*
	 * Función que tiene parametrizada la variable
	 * de conexión a la BBDD y los valores de las
	 * $_SESSION['rol'] y $_SESSION['id'] del usuario
	 * logueado para lsitar los usuarios del sistema.
	*/
	function listaUsuarios($connect, $rol, $id)
	{	
		// Objeto de clase
		$user = new Usuario();
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
		// Objeto de clase
		$circuit = new Circuit();

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
		$connect -> query("SET NAMES 'utf8'");
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

	function fichaPiloto($connect, $idUser = '', $idPiloto = '')
	{
		// Objetos de clases
		$piloto = new Piloto();
		$tpe = new TemporadaPilotEscuderia();
		$scuderia = new Escuderia();

		//Variable que devolverá el resultado
		$result = "";

		$connect -> query("SET NAMES 'utf8'");
		/*
		 * Si la función es llamada con la
		 * variable $connect y la variable de
		 * idPiloto se mostrará la ficha del
		 * piloto entera. Si es llamada con la sesión
		 * del usuario sólo mostrará los que tenga
		 * marcados como favoritos.
		*/
		if($idUser == ''){

			$sql = $connect -> query('SELECT pilot.*, scuderia.id AS "sID", scuderia.nomEscuderia FROM pilot, scuderia, temporada_pilot_escuderia WHERE scuderia.id = temporada_pilot_escuderia.scuderia_id AND pilot.id = temporada_pilot_escuderia.pilot_id AND pilot.id ='.$idPiloto);
		} else {

			$sql = $connect -> query('SELECT pilot.*, scuderia.id AS "sID",  scuderia.nomEscuderia FROM pilot, pilot_usuari, scuderia, temporada_pilot_escuderia WHERE scuderia.id = temporada_pilot_escuderia.scuderia_id AND pilot.id = temporada_pilot_escuderia.pilot_id AND pilot.id = pilot_usuari.pilot_id AND pilot_usuari.log_user_id = '.$idUser.' AND temporada_pilot_escuderia.temporada_any = "'.date('Y').'"');
		}

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

			//Setters para la tabla scuderia
			$scuderia -> _setId($row['sID']);
			$scuderia -> _setNomEscuderia($row['nomEscuderia']);

			$result .= '
			<div class="panel panel-success">
				<div class="panel-body">
					<h3>'.$piloto -> getNom().'</h3>
					<img src="../img/pilotos/'.$piloto -> getSigles().'.jpg" class="img-responsive img-rounded" style="margin-bottom:3%;">';

			$result .='
			<div class="table-responsive">
				<table class="table table-bordered">
					<thead>
						<tr class="success">
							<th>Siglas</th>
							<th>Fecha nacimiento</th>
							<th>Peso y altura</th>
							<th>Nacionalidad</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>'.$piloto -> getSigles().'</td>
							<td>'.d3($piloto -> getDataNaixement()).'</td>
							<td>'.$piloto -> getPes().' Kg<br>'.$piloto -> getAltura().' cm</td>
							<td>'.$piloto -> getNacionalitat().'</td>
						</tr>
					</tbody>
					<thead>
						<tr class="success">
							<th>Año debut</th>
							<th>Primera escudería</th>
							<th>Escudería actual</th>
							<th>Carreras totales</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>'.$piloto -> getAnyDebut().'</td>
							<td>'.$piloto -> getPrimeraEscuderia().'</td>
							<td>'.$scuderia -> getNomEscuderia().'</td>
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
		return $result;
	}
?>