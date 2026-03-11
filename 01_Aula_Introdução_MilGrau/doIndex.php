<?php
	// 0) Incluindo a conexao
	include 'conexao.php';

	// 1) Recebendo os valores do form
	$nome = $_GET['nome'];
	$sobrenome = $_GET['sobrenome'];
	$curso = $_GET['curso'];

	//Recebendo a imagem
	$imgNome = $_FILES['foto']['name'];
	$imgTemp = $_FILES['foto']['tmp_name'];

	//Caminho para salvar imagem
	$caminho = "C:/wamp64/www/Continuacao/imagens/";

	// 2) Montando a query de Insert
	$query = "INSERT INTO migo(nome,sobrenome,curso)
	VALUES('$nome','$sobrenome','$curso')";

	// 3) Executando a query
	$result = mysqli_query($con,$query);

	// 4) Verificando se deu certo
	if($result)
	{
		echo "Amigo inserido com sucesso!!!";
		echo "<br>";
		echo "<h2>Parabéns, Otário!!!</h2>";
	}
	else
	{
		echo "Deu ruim...";
		echo "<br>";
		echo $query;
	}



?>


