<?php
	include "conexao.php";
	session_start();
	//session_destroy();
if (isset($_POST['entrar'])) {
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	$sql = "SELECT * FROM usuarios WHERE usuario=".$usuario." AND senha=".$senha;
	$resultado = mysqli_query($con,$sql);
	if (mysqli_num_rows($resultado) != 1) {
		header("Location:login.html");
	}
	$resultArray = mysqli_fetch_assoc($resultado);
	$nome = $resultArray["nome"];
	fechaConexao($con);
	$_SESSION['nome'] = $nome;
	$_SESSION['usuario'] = $usuario;
	echo "Seja bem Vindo ".$nome."!";
}else{
	if (isset($_SESSION['usuario'])) {
		$nome = $_SESSION['nome'];
		echo "Seja bem Vindo ".$nome."!";
	}else{
		header("Location:login.html");
	}
}
?>