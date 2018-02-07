<!DOCTYPE html>
<html>
	<head>
		<title>RESULTADO DA PESQUISA</title>
		<style type="text/css">
			div {
				display: flex;
				flex-direction: column;
				align-items: center;
			}
		</style>
	</head>

	<body>
		<div>
			<h2>Mostrando Resultados da Pesquisa:</h2>
			<p>BEM VINDO</p>

			<?php
				$nome = $_POST["nome"];
				$nascimento = $_POST["nascimento"];
				$sexo = $_POST["sexo"];
				$idade = 2018 - $nascimento;

				echo $nome;
				echo $nascimento; 
				echo $sexo; 
				echo "Sua idade é: ". $idade;

			?>

		</div>
	</body>

</html>