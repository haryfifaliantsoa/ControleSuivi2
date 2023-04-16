<?php 

	$con = new mysqli('localhost','root','','gestion_controle_suivi');

	if (!$con)
	{
		die(mysqli_error($con));
	}

?>