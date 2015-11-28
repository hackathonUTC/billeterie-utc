<?php
	// Page d'accueil : /index.php 
	header("Content-Type: text/html; charset=UTF-8"); 
	$root = realpath($_SERVER["DOCUMENT_ROOT"]);
	require_once $root.'/config.inc.php';

	$email = isset($_POST['email']) ? $_POST['email'] : '';
	$password = isset($_POST['email']) ? $_POST['email'] : '';
	
	if ($email == "" or $password == "")
		//header('Location: '.$_CONFIG['home']);
		echo "redirect";
	
	echo $email;
	echo $password;

?>