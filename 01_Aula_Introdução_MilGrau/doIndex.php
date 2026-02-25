<?php
	// 1) Recebendo os valores do form
	$nome = $_GET['nome'];
	$sobrenome = $_GET['sobrenome'];
	$curso = $_GET['curso'];

	// 2) Montando a query de Insert
	$query = "INSERT INTO migo(nome,sobrenome,curso)VALUES($nome,$sobrenome,$curso)";

	// 3) Monstrando query
	echo $query;

?>


