<?php
	//Conectando com o Server
	$con = mysqli_connect('localhost',
					'root','','migo');

	//Verificando a conexão
	if(!$con)
	{
		die("Erro ao conectar! Entrar 
			contato com o desenvolvedor!!!");	
	}

?>

