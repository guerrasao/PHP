<?php
	include "conexao.php";
	$sql = "SELECT nome,nota1,nota2,media FROM notas";
	$resultado = mysqli_query($con, $sql);
	while ($value = mysqli_fetch_assoc($resultado)) {
		echo "Nome: ".$value["nome"].", Nota1: ".$value["nota1"].", Nota2: ".$value["nota2"].", Media: ".$value["media"]."<br>";
	}
	fechaConexao($con);
?>