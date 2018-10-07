<?php
	$nomes = array($_POST['nome1'], $_POST['nome2'], $_POST['nome3'], $_POST['nome4'], $_POST['nome5']);
	function imprime($nomes){
		foreach ($nomes as $value) {
			echo $value."<br>";
		}
	}
	imprime($nomes);
?>