<?php
	include ('conexao.php');

	$login = $_POST['login'];
	$senha = $_POST['senha'];

	$sql = "SELECT * FROM login WHERE login = '$login' AND senha = '$senha'";

	$resultado = mysqli_query($con,$sql);

	if(mysqli_num_rows($resultado) == 0)
	{
		header('Location: login.php?erro=login%20inexistente');

	} 

	else
	{
		session_start();
		$_SESSION['login'] = $login;
		header('Location: lista.php');
	}




?>
