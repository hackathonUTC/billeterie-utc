<?php 
	// Page d'accueil : /index.php 
	header("Content-Type: text/html; charset=UTF-8"); 
	$root = realpath($_SERVER["DOCUMENT_ROOT"]);
    require_once $root.'/config.inc.php';
	require_once $root.'/inc/checksession.php';
	require_once $root.'/inc/dbconnect.php';
?>

<!DOCTYPE html>
<html>
    <head>
    
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
        
        <title> Billetterie UTC </title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        
        <style type="text/css">
            body {
                padding-top: 60px;
                padding-bottom: 40px;
              }
        </style>
        
        <link href="../bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        
        <script src="../scripts/jquery-1.9.1.min.js"  ></script>
        <!-- <script type="text/javascript" src="scripts/general.js" charset="utf-8"></script> -->

        
    </head>
    <body>
    
      <div class="container">
        <?php
            include("../parts/header.php");
        ?>
        
        <div class="container">
		
		<div id="wrap">
                
			<div class="page-header">
				<a href="#" id="logout" class="btn btn-danger pull-right" style="display: none;"> Logout </a>
				<h1><center>Estu Noël</center></h1>
				
				
			</div>
		
			<div class="row">
				<div class="span5">
					<img src="image/affiche.jpg" alt="affiche-evenement">
				</div>
				<div class="span7">
					<table class="table">
						<thead>
						  <tr>
							<th>Type de place</th>
							<th>Prix de la place</th>
							<th>Nombre de place</th>
							<th>                </th>
						  </tr>
						</thead>
						<tbody>
						  <tr class="success">
							<td>Places cotisant BDE</td>
							<td>2000 &#8364</td>
							 <td>
								<div class="form-group">
								  <select class="form-control" id="sel1">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
									<option>7</option>
									<option>8</option>
								</select>
								</div>
							</td>
							<td><button type="button" class="btn btn-success">Acheter</button></td>
						  </tr>
						  <tr class="warning"></td>
							<td>Places non cotisant BDE</td>
							<td>3000 &#8364</td>
							<td>
								<div class="form-group">
								  <select class="form-control" id="sel1">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
									<option>7</option>
									<option>8</option>
								</select>
								</div>
							</td>
							<td><button type="button" class="btn btn-success">Acheter</button></td>
						  </tr>
						  <tr class="info">
							<td>Places extérieure</td>
							<td>4000 &#8364</td>
							<td>
								<div class="form-group">
								  <select class="form-control" id="sel1">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
									<option>7</option>
									<option>8</option>
								</select>
								</div>
							</td>
							<td><button type="button" class="btn btn-success">Acheter</button></td>
						  </tr>
						</tbody>
					  </table>
					<br>
					<h3><center>Nombre de place restantes : 2</center></h3>
					<br>
					contact : estunoel@utc.fr
				</div>
			</div>
          
        </div>
            
            <?php
                include("../parts/footer.php");
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
    
        <script src="../bootstrap/js/bootstrap-modal.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
