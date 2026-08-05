<?php
	/*
	   Este script funciona puramente
	   como o servidos dos dados!!!
	   Recebe (GET,POST,DELETE) e responde com o JSON!!! :)
	*/

	//1) Montando o cabeçalho
	header("Access-Control-Allow-Origin: *");   
	header("Access-Control-Allow-Method: GET, POST");
	header("Access-Control-Allow-Headers: Content-Type");
	header("Content-Type: application/json; charset=UTF-8");

	//2) Tratamento do navegador
	//O navegador envia uma requisição 'OPTIONS' para saber se servidor é seguro
	if($_SERVER['REQUEST_METHOD'] == 'OPTIONS')
	{
		exit(0); //Vida que segue
	}


	//3) Conexão com o DB
	$conexao = mysqli_connect('localhost','root','','comidinhas');

	//Verificando conexão
	if(!$conexao)
	{
		echo json_encode(["Erro" => "Erro ao conectar com o DB!"]);
		exit(); // Mata o script
	}

	//4) Verificando tipo de requisição
	$metodo = $_SERVER['REQUEST_METHOD'];

	if($metodo == 'GET')
	{
		$sql = "SELECT * FROM comidinhas";
		$resultado = mysqli_query($conexao,$sql);

		//Array para receber o select
		$comidinhas = [];

		//Percorrer o resultado e salvar no array
		while($linha = mysqli_fetch_array($resultado)) 
		{
			$comidinhas[] = $linha;
		}

		//Devolver pela API
		echo json_encode($comidinhas);
	}

	//Fechar a conexão
	mysqli_close($conexao);

?>