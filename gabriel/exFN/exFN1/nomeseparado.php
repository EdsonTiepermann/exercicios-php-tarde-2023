<?php

	
	echo $nomeCompleto = $_GET['nome'];
	
	$nomeArray = explode(" ",$nomeCompleto );
	
	print_r($nomeArray);

?>