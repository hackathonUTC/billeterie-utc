<?php

	// Page d'accueil : /index.php 
	header("Content-Type: text/html; charset=UTF-8"); 
	$root = realpath($_SERVER["DOCUMENT_ROOT"]);
	require_once $root.'/config.inc.php';
	require_once $root.'/inc/dbconnect.php';

	$email = isset($_POST['email']) ? $_POST['email'] : '';
	$password1 = isset($_POST['pass1']) ? $_POST['pass1'] : '';
	$password2 = isset($_POST['pass2']) ? $_POST['pass2'] : '';
	
	
	
	if ($email == "" or $password1 == "" or $password2 == "")
		header('Location: '.$_CONFIG['home']."admin/subscribe.php?error=1");
	
	else if ($password1 != $password2)
		header('Location: '.$_CONFIG['home']."admin/subscribe.php?error=2");
	
	$sth = $connexion->prepare('INSERT INTO `compte_assos` (`idAsso`, `name`, `email`, `password`, `verified`) VALUES  (NULL, :name, CONCAT(:email, "@assos.utc.fr"), SHA1(:password), 0)');
	
	$sth->bindParam(':name', $email);
	$sth->bindParam(':email', $email);
	$sth->bindParam(':password', $password1);

	if($sth->execute())
		header('Location: '.$_CONFIG['home']."admin/index.php?checkemail=1");
	/*
	if ($row["rslt"] == 1){
		session_start();
		$_SESSION['asso'] = $row["name"];
		$_SESSION['idAsso'] = $row["idAsso"];
		$_SESSION['email'] = $email;
		header('Location: '.$_CONFIG['home']."admin/admin.php");
	}
	else
		header('Location: '.$_CONFIG['home']."admin/");
	*/

?>