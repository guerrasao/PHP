<?php
/*
Exercicio 1
@author: Patrick Guerra
*/
	if (!isset($_COOKIE['visitas'])) {
		echo "Seja bem vindo!";
		setcookie('visitas',1);
	}else{
		$visitas = $_COOKIE['visitas'];
		$visitas++;
		echo "Visita de numero: ".$visitas;
		setcookie('visitas',$visitas);
	}
	//apagar cookie
	//setcookie('visitas',0,time()-60);
?>