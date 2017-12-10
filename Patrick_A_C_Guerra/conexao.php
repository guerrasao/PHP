<?php
	$con = abreConexao();
	function abreConexao(){
		return $con = mysqli_connect("localhost","root","","base_escolar");
	};
	function fechaConexao($con){
		mysqli_close($con);
	};
?>