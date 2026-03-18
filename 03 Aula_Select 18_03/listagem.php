<?php
	//1) Incluindo a 'conexao.php'
	include 'conexao.php';

	//2) Variável para query
	$query = "SELECT * FROM migo";

	//3) Executando a query
	$resultado = mysqli_query($con,$query);
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
 
 	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<title>Lista de migos!!!</title>
</head>

<body>
	<div class="container">
		<h2 class="text-center">
			Listinha fofa!!! :) S2!!!
		</h2>
		<div class="row">
			<?php
				if($resultado)
				{
					// 4) Percorrendo o resultado
					while($linha = mysqli_fetch_assoc($resultado))
					{
						//5) Recuperando os valores da coluna
						$nome = $linha['nome'];
						$sobrenome = $linha['sobrenome'];
						$curso = $linha['curso'];
						$foto = $linha['foto'];

						// 6) html dentro do php (echo)
						echo "
								<div class='card mb-4'>
									<img src='$foto' class='card-img-top'>
									<div class='card-body'>
										<h5 class='card-title'>
											$nome $sobrenome
										</h5>		
										<p class='card-text'>
											Curso: $curso
										</p>			
									</div>
								</div>
						     ";
					}
				}
				else
				{
					echo "Erro na consulta!!! :(";
				}

			?>
			
		</div>
	</div>
</body>
</html>