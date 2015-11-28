<?php    

	header("Content-Type: text/html; charset=UTF-8"); 
	$root = realpath($_SERVER["DOCUMENT_ROOT"]);
    require_once $root.'/config.inc.php';
    require_once $root.'/inc/checksession.php';
    require_once $root.'/inc/dbconnect.php';

    if (isset($_SESSION['login']))
    {
       $login = $_SESSION['login'];

        $stmt = $connexion->prepare("select count(*) as 'exist' from users where `casLogin` = :login");
        $stmt->bindParam(':login', $login);

        $stmt-> execute();

        $userInDB = $stmt -> fetch();

        if(!$userInDB['exist'])
        {
            $currentAddr = "http://".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
            if ($currentAddr != $_CONFIG['home'])
                header('Location: '.$_CONFIG['home'].'account/index.php');
        } 
    }
    else
    {
        $currentAddr = "http://".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
        if ($currentAddr != $_CONFIG['home'])
            header('Location: '.$_CONFIG['home']);
    }
    
?>