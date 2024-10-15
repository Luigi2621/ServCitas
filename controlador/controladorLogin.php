<?php
	if (!empty($_POST["btnLogin"])) { //Se verifica que el boton ingresar no esté vacío
		$user = $_POST["txtUser"];    //Si no está vacío se procede a llenar la variable $user con lo que hay en la caja txtUser
		$pass = $_POST["txtPassword"];//Si no está vacío se procede a llenar la variable $user con lo que hay en la caja txtPassword

		if (!empty($user) AND !empty($pass)) {
			include "Modelo/Conectar.php"; //Aquí es como si se trajera todo el código que está en "Conectar.php" y se ejecutara aquí
			$sql = "SELECT nombre, usuario, rol,correo FROM loguin inner join Usuarios on Identificacion = id WHERE Usuario = '$user' AND Clave = $pass";	
			//$sql = "SELECT * FROM loguin WHERE Usuario='$user' AND Clave=$pass";//Query directa con MySQL que verifica igualdad en ambos
			$registros = $conexion->query($sql);//Es la funcion de php que permite enviar una sentencia SQL. Lo que hace $conexion->query es decirle a php, que de ese objeto conexión manda a ejecutar una funcion que se llama query.  Se le llama //función flecha en JavaScript.  
			$objUsuario = $registros->fetch_object();//Esta es la función que me permite leer UN SOLO registro con fetch_object()
			//Esta es la similar a resultset de Java. Carga los registros de la base de datos
			if ($objUsuario!=null) {//Si $objUsuario es diferente a null, es porque sí devolvió un objeto de la base de datos
				$nom = $objUsuario->nombre;
				$user = $objUsuario->usuario;
				$rol = $objUsuario->rol;
				$correo = $objUsuario->correo;
				//echo('<div class = "alert alert-danger"> Login correcto 'nom' bd </div>');
				session_start();
				$_SESSION['nom']=$nom;
				$_SESSION['correo']=$correo;
				$_SESSION['user']=$user;
				header("location:vista/menu.php");//REDIRECCIONA el flujo a la pagina Menu.php
			} else {
				echo('<div class = "alert alert-danger"> No existe en bd </div>'); //esto en caso de que no exista el usuario
			}
			
		} else {
			echo('<div class = "alert alert-danger"> Error Campos vacíos </div>');
		}
		

		echo ("Usuario ".$user." clave: ".$pass);
	} else {
		echo ("El usuario requiere registrarse o recuperar su contraseña");
	}	
?>