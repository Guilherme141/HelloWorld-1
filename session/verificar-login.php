<?php
	session_start();
	if(!$_SESSION['usuario']) {
		header('Location:../front-cadastro/index-cadastrar.php');
		exit();
	}
