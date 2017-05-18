<?php
	/**
	 * @author Fernando Duran Ruiz
	 * 
	 * Archivo de funciones para el proyecto de fin
	 * de ciclo del CFGS Desarrollo de aplicaciones web
	*/

	//Titulos de las páginas

	function titular($titulo)
	{
		return '<div class="row">
					<div class="col-lg-12">
						<h3>'.$titulo.'</h3>
					</div>
				</div>';
	}

	function pinta_items_menu($menu)
	{	
		$result='
			<div class="menu_top">
				<div class="menu_top_nom" >
					<a href="../inici/"><img alt="Logo página" src="../img/logoF1_2.jpg" width="55"></a>

					<a href="" class="btn btn-social-icon btn-facebook"><span class="fa fa-facebook"></span></a>

					<a href="" class="btn btn-social-icon btn-twitter"><span class="fa fa-twitter"></span></a>

					<a href="" class="btn btn-social-icon btn-vimeo"><span class="fa fa-vimeo"></span></a>
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
		<nav class="navbar navbar-default">
  			<div class="container-fluid">
    			<div class="navbar-header">
      				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
      				</button>
      				<a class="navbar-brand" href="#">F1 History</a>
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

		//Menu admin
		$menu_admin = "#Admin*Gestión usuarios|../admin/index.php?sec=lista_usuarios;";
		$menu_admin .= "Gestión foro|../admin/index.php?sec=gestion_foro;";

		//Menu super
		$menu_super = "#Super*Gestión pilotos|../super/index.php?sec=lista_pilotos;";
		$menu_super .= "Gestión escuderías|../super/index.php?sec=lista_escuderias;";
		$menu_super .= "Gestión campeonatos|../super/index.php?sec=lista_campeonatos;";
		$menu_super .= "Gestión tienda|../super/index.php?sec=lista_productos;";
		



		switch ($_SESSION['rol']) {
			
			case 'registrado':
				$menu_usuario = $menu_campeonatos.$menu_pilotos.$menu_escuderias.$menu_favoritos.$menu_tienda;
				break;
			case 'admin':
				$menu_usuario = $menu_admin;
				break;
			case 'super':
				$menu_usuario = $menu_campeonatos.$menu_pilotos.$menu_escuderias.$menu_tienda.$menu_admin.$menu_super;
				break;
		}

		pinta_items_menu($menu_usuario);
	}
?>