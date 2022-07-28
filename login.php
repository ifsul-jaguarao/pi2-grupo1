<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta  charset="utf-8" />
<title>Validando Login</title>
</head>
<body>

<?php

// Substitua pelos valores do host, usuário, senha e base de dados respectivamente
$conexao   = mysqli_connect("172.16.88.55", "pi2-grupo1", "grupo1", "pi2-grupo1");

// Substitua pela tabela correta
$resultado = mysqli_query($conexao, "SELECT * FROM Usuario");

while ($linha = mysqli_fetch_assoc($resultado)) {

	// Substitua pelo campo correto
	echo $linha['nome'] . "<br />";
}

?>


</body>
</html>
