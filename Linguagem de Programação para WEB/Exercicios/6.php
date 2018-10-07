<?php
	include "conexao.php";
	$sql = "INSERT INTO notas(id_aluno,nome,nota1,nota2,media) VALUES('201520339','Patrick','10','10','10')";
	$resultado = mysqli_query($con, $sql);
	if(mysqli_affected_rows($con) == 1){
		echo "Notas do Aluno inseridas!";
	}else{
		echo "Erro na insercao de notas do aluno!";
	}
?>