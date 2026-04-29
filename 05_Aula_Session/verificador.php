<?php
	
	function VerificarLogin()
	{
		//Se a sessão não estiver iniciada
		//iniciamos uma
		if(!isset($_SESSION))
		{
			session_start();	
		}

		//Verificando  se a var 'login' não existe
		if(!isset($_SESSION['login']))
		{
			//Senão existir volta para o login
			header("Location: login.php");
		}
	}	

?>