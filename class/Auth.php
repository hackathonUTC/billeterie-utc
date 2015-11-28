<?php
    /*
        Auth.php
    */
    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
	require_once $root.'/class/Cas.class.php';
    require_once $root.'/config.inc.php';
    
    session_start();

    if(!isset($_SESSION['auth']))
    {
        $_SESSION['auth'] = Array("logged" => False, "login_utc" => "", "cas_url" => Cas::getUrl());
    }

    function is_logged() {
        return $_SESSION['auth'];
    }

    function register_login() {        
        session_destroy();
        session_start();
        $ticket = $_GET["ticket"];
		//$service = $_CONFIG['service'];
		$service = $_GET["service"];
        $login = Cas::authenticate($ticket, $service);
        
        if($login == -1) {
            $_SESSION['auth'] = Array("logged" => False, "login_utc" => "", "cas_url" => Cas::getUrl());
            return array_merge( Array("error" => Array("title" => "Connexion refusé", "content" => "Nous n'avons malheureusement pas pu vous authentifier...")), is_logged());
        } else {
            // TODO: Verifier que l'utilisateur en question à des droits de vente.
            //       Sinon on le refuse ^^ ici seulement les vendeurs ont le droit de s'authentifier...
            $_SESSION['auth'] = Array("logged" => True, "login_utc" => $login, "cas_url" => Cas::getUrl());
            return array_merge( Array("success" => Array("title" => "Connexion réussi", "content" => "<br>Bienvenue <b>".$_SESSION['auth']["login_utc"]."</b> sur l'interface de réalisation de voeux pour les stages TN09 & TN10")), is_logged());
        }
    }

    function logout() {
        session_destroy();
        session_start();
        $_SESSION['auth'] = Array("logged" => False, "login_utc" => "", "cas_url" => Cas::getUrl());
        return is_logged();
    }

?>
