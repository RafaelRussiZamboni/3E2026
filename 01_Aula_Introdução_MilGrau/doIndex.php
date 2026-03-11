<?php
	// 0) Incluindo a conexao
	include 'conexao.php';

	// 1) Recebendo os valores do form
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$curso = $_POST['curso'];

	//Recebendo a imagem
	//O arquivo vem em duas partes
	// 1-[arquivo] 2-[nome]
	$imgNome = $_FILES['foto']['name'];
	$imgTemp = $_FILES['foto']['tmp_name'];

	//Caminho para salvar imagem
	$caminho = "C:/wamp64/www/Continuacao/imagens/$imgNome";

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

	// 5) Salvando o arquivo no servidor
	if(@move_uploaded_file($imgTemp,$caminho))
	{
		//Arquivo Salvo
		echo "<h3>Upload com sucesso!!!</h3>";
		echo "Salvo em: $caminho";
	}
	else
	{
		//Deu ruim
		echo "<h3>Erro ao fazer o upload!!!</h3>";
		echo "$caminho";
	}
?>


