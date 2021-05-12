<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$bdname = "estudo";

	//criar conexao

	$conn = mysqli_connect($servidor, $usuario, $senha, $bdname);

	if (!$conn) {
		die("Falha na conexao".mysqli_connect_error());
	}else{
		echo "Conexao Realizada com sucesso <br>";
	}
?>