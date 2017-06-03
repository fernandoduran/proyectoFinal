# proyectoFinal
Proyecto final de ciclo

En este repositorio se encuentran tanto los archivos de código como toda la documentación. En el archivo README.md se irá informando de los cambios realizados ordenados por fecha para que la supervisión del contenido sea más sencilla y se pueda ir directamente a la visualización de los cambios.

	- A fecha de 10/05/17:
		- Se ha subido una nueva versión de la documentación del proyecto.
		- Se han subido los archivos de código de la aplicación
		
	- A fecha de 15/05/17:
		- Se ha subido el diagrama Entidad-relación
		- Se ha subido la nueva versión del modelo relacional.
		- Se ha subido la nueva versión del diagrama de actores.
		- Se ha subido la nueva versión de la documentación.
		- Se ha subido el diagrama de clases
		- Se ha subido una nueva versión de la documentación.
		- Se ha subido la nueva versión del archivo include/funcions_dibuix.php
		- Actualización del archivo css/login.css
		- Nuevo archivo css/estils.css
		- Actualización del archivo include/estructura.php
		- Actualización del archivo inici/contingut.php
	
	- A fecha de 16/05/17:
		- Actualización del archivo include/estructura.php
		- Actualización del archivo include/funcions_dibuix.php
			- Modificada la función pintaMenu();
			- Modificada la función pinta_items_menu();
		- Actualización del archivo SQL con las tablas
			- Nuevos campos en tablas y eliminación en otros
		- Actualización del Modelo relacional
		- Inserción de datos en la BBDD (pendiente de subir a git)
	
	- A fecha de 17/05/17:
		- Actualización del modelo relacional
		- Actualización del archivo include/funcions_dibuix.php
		- Inserción de datos en la BBDD (pendiente de subir a git)
		- Actualización de la documentación
	
	- A fecha de 18/05/17:
		- Actualización del archivo css/login.css
		- Actualización del arhivo css/estils.css
		- Actualización del archivo inici/contingut.php
		- Actualización del archivo include/funcions_dibuix.php
		- Actualización del archivo include/estructura.php
		- Actualización del archivo include/connect.php
		- Nuevos ficheros:
			- inici/valida.php
			- inici/surt.php
			- include/funciones.php
		- Nueva carpeta clases con los archivos:
			- clases/Usuario.php
			- clases/Producto.php
			- clases/CarritoProducto.php
			- clases/Carrito.php
			- clases/EscuderiaUsuario.php
			- clases/PilotoUsuario.php
			- clases/Foro.php
			- clases/Piloto.php
			- clases/Mundial.php
			- clases/Escuderia.php
			- clases/TemporadaPilotEscuderia.php
			- clases/Temporada.php
			- clases/Classificacio.php
			- clases/Carrera.php
			- clases/Circuit.php
	
	- Entre las fechas 19/05/17 y 28/05/17:
		- En el archivo include/funciones.php se han creado las funciones d(), d2() y d3()
		- En el archivo include/funcions_dibuix.php se han creado las funciones clasificacion() y listaCarreras()
		- Se ha añadido la tabla clasificacionMundial tanto en el Modelo Relacional como en la BBDD y se ha creado su clase
		  en clases/ClasificacionMundial.php
		- Se han creado los archivos y carpetas:
			- acceso/contingut.php
			- acceso/index.php
			- acceso/inde2.php
			- acceso/registro.php
			- admin/index.php
			- admin/index2.php
			- campeonatos/index.php
			- campeonatos/index2.php
			- circuitos/contingut.php
			- circuitos/index.php
			- circuitos/index2.php
			- escuderias/index.php
			- escuderias/index2.php
			- js/arrow79.js
			- pilotos/contingut.php
			- pilotos/index.php
			- pilotos/index2.php
			- pilotos/lista_pilotos.php
			- super/carreras.php
			- super/contingut.php
			- super/index.php
			- super/index2.php
			- super/lista_campeonatos.php
			- super/nueva_carrera.php
			- super/nueva_clasificacion.php
			- tienda/index.php
			- tienda/index2.php
		
		- Se ha renombrado el archivo index.php por inicio.php y se ha creado un nuevo index.php con un video de fondo
		- Se ha modificado la funcion pintaMenu() de include/funcions_dibuix.php
		- Se han implementado los pluguins:
			- jQuery validate
			- jQuery UI Datepicker
			- DataTables
			- Fancybox
	
	- A fecha 29/05/17:
		- Se ha creado el archivo super/nueva_clasif_mundial.php para insertar datos en la tabla clasificacionMundial
		- Se ha creado un editor para introducir carreras y se han introducido todas las del 2016 en super/nueva_carrera.php
		- Se ha creado un editor para introducir clasificaciones de cada carrera en super/nueva_clasificacion.php
		- Se ha creado un editor para introducir clasificaciones de un mundial en super/nueva_clasif_mundial.php
		- Se ha creado el archivo admin/contingut.php con la inclusión del resto de achivos de la carpeta
		- Se ha creado el archivo super/nueva_clasif_mundial.php para insertar datos en la tabla clasificacionMundial
		- Se ha creado en include/funcions_dibuix.php la funcion listaUsuarios()
	
	- A fecha de 31/05!7:
		- Se ha modificado el Diagrama de Modelo Relacional 
		- Se ha actualizado la función listaUsuarios() y se han creado los editores para modificar y eliminar usuarios (aun)
		  en produccion
		- Se ha modificado el archivo inici/valida.php para guardar en una sesión el ID del usuario que entra al sistema
		- Se ha modificado el menú del invitado en include/estructura.php y la página de inicio en inici/contingut.php
		- Se han modificado los estilos propios
		- Se ha modificado la clase clases/ClasificacionMundial.php y la funcion clasificacion()
	
	- A fecha de 01/06/17:
		- Se ha modificado el Modelo Relacional
		- Se ha modificado la función clasificacion()
		- Se ha modificado la función listaPilotos()
		- Se ha creado el archivo campeonatos/contingut.php
		- Se ha creado el archivo campeonatos/campeonatos.php
		- Se han aplicado restricciones de acceso por URL a los archivos:
			- acceso/registro.php
			- admin/edita_usuarios.php
			- admin/gestion_usuarios.php
			- campeonatos/contingut.php
			- pilotos/lista_pilotos.php
		- Se han creado los archivos:
			- circuitos/lista_circuitos.php (archivo nuevo)
			- circuitos/buscador_circuitos.php (archivo nuevo)
		- Se ha creado el editor de usuarios en admin/edita_usuarios.php
		- Se ha creado la lista de usuarios en admin/gestion_usuarios.php
		- Se ha modificado la tabla clasificaionMundial y su correspondiente clase en clases/ClasificacionMundial.php
		- Se ha modificado la consulta de comprobación de redundancia de datos en el archivo super/contingut.php para la
		  inserción de nueva clasificación carrera
	
	- A fecha de 02/06/17:
		- Se han aplicacdo restricciones de acceso por URL a los archivos:
			- circuitos/contingut.php
		- Se ha creado la función listaCircuitos() en include/funcions_dibuix.php (aun no se ha aplicado)
		- Se ha modificado datos en la tabla circuit
		- Se ha investigado sobre jQuery autocomplete y se ha aplicado en el archivo circuitos/buscador_circuitos.php
	
	- A fecha de 03/06/17:
		- Se ha eliminado del menú de admin al gestión del foro (no habrá foro)
		- Se ha modificado la portada del usuario invitado en inici/contingut.php
		- Se han añadido videos a la carpeta media
		- Se han comentado de manera explicativa todas las funciones de include/funcions_dibuix.php
		- Se ha terminado la funcion listaCircuitos() y se ha aplicado en circuitos/lista_circuitos.php 
		  y circuitos_buscador_circutios.php
		- Se han creado los archivos:
			- favoritos/index.php
			- favoritos/index2.php
			- favoritos/contingut.php
			- favoritos/pilotos_fav.php
		- Se ha creado la función fichaPiloto() que se utiliza desde favoritos/pilotos_fav.php para listar los pilotos 
		  favoritos del usuario logueado y desde pilotos/lista_pilotos.php para mostrar la ficha del piloto seleccionado.
		- En el menu de super usuario se ha añadido la sección gestion temporadas para asociar un piloto con una escudería
		  en una temporada determinada
		- Añadida la funcionalidad para eliminar usuarios en admin/lista_usuarios.php y puesta en funcionamiento
		- Añadida la funcionalidad para añadir pilotos favoritos en pilotos/lista_pilotos.php y puesta en funcionamiento
		- Añadida la funcionalidad para eliminar pilotos favoritos en favoritos/pilotos_fav.php y puesta en funcionamiento
		- Añadida la funcionalidad para editar usuarios en admin/lista_usuaruis.phph (aun en produccion)
		
	
		
