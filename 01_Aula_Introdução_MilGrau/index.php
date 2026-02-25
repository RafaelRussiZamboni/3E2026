<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

 	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

	<title>Cadastro de migos!!!</title>
</head>
<body>
	<div class="container">
		<h3>Cadastre seu melhor!!! :) </h3>

		<form action="doIndex.php" method="GET" enctype="multpart/form-data">

			<!-- NOME DO MANO -->
			<label class="form-label">
				Nome:				
			</label>
			<input type="text" name="nome" 
			class="form-control" 
			placeholder="Digite o nominho <3">	
			<!-- NOME DO MANO -->

			<!-- SOBRENOME DO MANO -->
			<label class="form-label">
				Sobrenome:				
			</label>
			<input type="text" name="sobrenome" 
			class="form-control" 
			placeholder="Digite o sobrenominho <3">	
			<!-- SOBRENOME DO MANO -->

			<!-- CURSO DO MANO -->
			<label class="form-label">
				Curso:				
			</label>
			<input type="text" name="curso" 
			class="form-control" 
			placeholder="Digite seu curso, meu chuchu!!!">	
			<!-- CURSO DO MANO -->


			<!-- IMAGEM -->
			<label class="form-label">Foto do migo!!!</label>
			<input type="file" name="foto" 
			class="form-control" accept="image">
			<!-- IMAGEM -->


			<!-- Botão   -->			
			<button type="submit" class="btn btn-success">
				Salvar o migo!!!! S2
			</button>
			<!-- Botão   -->		
		</form>
	</div>
</body>
</html>