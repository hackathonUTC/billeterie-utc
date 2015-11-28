<?php 
	// Page d'accueil : /index.php 
	header("Content-Type: text/html; charset=UTF-8"); 
	$root = realpath($_SERVER["DOCUMENT_ROOT"]);
    require_once $root.'/config.inc.php';
	require_once $root.'/inc/checksession.php';
?>

<!DOCTYPE html>
<html>
    <head>
    
        <link rel="stylesheet" type="text/css" href="css/style.css?dev=01" />
        
        <title> Billetterie UTC </title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        
        <link href="bootstrap/css/bootstrap.min.css?dev=01" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        
        <style type="text/css">
            body {
                padding-top: 60px;
                padding-bottom: 40px;
              }
        </style>
        
        <link href="bootstrap/css/bootstrap-responsive.min.css?dev=01" rel="stylesheet">
        
        <script src="scripts/jquery-1.9.1.min.js?dev=01"  ></script>
        <!-- <script type="text/javascript" src="scripts/general.js" charset="utf-8"></script> -->

        
    </head>
    <body>
    
      <div class="container">
        <?php
            include("parts/header.php");
        ?>
        
        <div class="container">
		
		<div id="wrap">
                
			<div class="page-header">
				<a href="#" id="logout" class="btn btn-danger pull-right" style="display: none;"> Logout </a>
				<h1><center>Liste des événements</center></h1>
				
				
			</div>
		
			<div class="row">
			<table class="table">
				<tbody>
				  <tr class="success">
					<td><div class="span3"><img src="image/affiche.jpg" alt="affiche-evenement style="width=200px;height=200px"></div></td>
					<td><div class="span6"><br><h3><center>Estu Noel <br> <br> nombre de place restantes : 2 </center></h3></div></td>
					<td><div class="span3"><br><br><center><br><br><a href="http://localhost/billetterie.php" class="btn btn-primary" role="button">Acheter des places</a></center></div></td>
				  </tr>
				  <tr class="warning">
					<td><div class="span3"><img src="image/affiche2.jpg" alt="affiche-evenement style="width=200px;height=200px"></div></td>
					<td><div class="span6"><br><h3><center>Hackathon<br> <br> nombre de place restantes : 0 </center></h3></div></td>
					<td><div class="span3"><br><br><center><br><br><a href="http://localhost/billetterie.php" class="btn btn-primary disabled" role="button">Acheter des places</a></td>
				  </tr>
				  <tr class="info">
					<td><div class="span3"><img src="image/affiche3.jpg" alt="affiche-evenement style="width=200px;height=200px"></div></td>
					<td><div class="span6"><br><h3><center>Ski UTC<br> <br> nombre de place restantes : 73 </center></h3></div></td>
					<td><div class="span3"><br><br><center><br><br><a href="http://localhost/billetterie.php" class="btn btn-primary" role="button">Acheter des places</a></td>
				  </tr>
				</tbody>
			  </table>
				</div>
			</div>
          
        </div>
            
            <?php
                include("parts/footer.php");
            ?>
         
            <div class="modal hide fade" id="modal" style="display: none;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3 id="modal-header"></h3>
                </div>
                <div class="modal-body" id="modal-body">
                </div>
            </div>


        </div>
    
        <script src="bootstrap/js/bootstrap-modal.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
