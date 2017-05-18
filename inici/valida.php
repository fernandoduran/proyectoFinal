<?php


$user = new Usuario();

if(isset($_POST['fLogin'])){

		$query = $connect -> query("SELECT id, nom, cognom, mail, password, rol FROM log_user WHERE mail = '".$_POST['fMail']."'");

		$pass = md5($_POST['fPass']);

		while ($ele = $query -> fetch_array()) {
				
				$user -> _setId($ele['id']);
				$user -> _setNom($ele['nom']);
				$user -> _setCognom($ele['cognom']);
				$user -> _setMail($ele['mail']);
				$user -> _setPassword($ele['password']);
				$user -> _setRol($ele['rol']);

				if($user -> getMail() == $_POST['fMail'] && $user -> getPassword() == $pass){

					$_SESSION['nomUsuari'] = $user -> getNom();
					$_SESSION['rol'] = $user -> getRol();
					
					
				} else {

					echo "<script type='text/javascript'>alert('Les dades introduïdes no son correctes.');</script>";
				}
		}
	} 
?>