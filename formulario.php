<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Análise</title>
</head>
<body>

	<h1>Análise de cadastro</h1>

	<?php

	$nomeCliente = $_GET['nome'];
	$salarioCliente = $_GET['salario'];

	if ($salarioCliente >= 1500) {
		echo "<h2> Olá, $nomeCliente! <br><br>
		Seu empréstimo foi aprovado no valor de $1.200,00 </h2><br><br>";
	}
	elseif ($salarioCliente >= 1000) {
		echo "<h2> Olá, $nomeCliente! <br><br>
		Seu empréstimo foi aprovado no valor de $1.000,00 </h2><br><br>";
	}
	elseif ($salarioCliente >= 700) {
		echo "<h2> Olá, $nomeCliente! <br><br>
		Seu empréstimo foi aprovado no valor de $800,00 </h2><br><br>";
	}
	else{
		echo "Desculpe, não conseguimos aprovar seu empréstimo nesse momento.";
	}

	?>

	<p><a href="index.php"> << Voltar</a></p>

</body>
</html>