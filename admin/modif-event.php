<?php
	header("Content-Type: text/html; charset=UTF-8"); 
?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>Dashboard I Admin Panel</title>
	
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="js/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="js/hideshow.js" type="text/javascript"></script>
	<script src="js/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.equalHeight.js"></script>
	<script type="text/javascript">
	$(document).ready(function() 
    	{ 
      	  $(".tablesorter").tablesorter(); 
   	 } 
	);
	$(document).ready(function() {

	//When page loads...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

});
    </script>
    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
</script>

</head>


<body>

	<?php
            include("../parts/header.php");
    ?>
	
	<section id="secondary_bar">
		<div class="user">
			<p>John Doe (<a href="#">3 Messages</a>)</p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="index.html">Website Admin</a> <div class="breadcrumb_divider"></div> <a class="current">Dashboard</a></article>
		</div>
	</section><!-- end of secondary bar -->
	
	<?php
		include("parts/menu.php");
	?>
	
	<section id="main" class="column">
		<h4 class="alert_info"><center>Modification de l'événement</center></h4>
		
		<div class="clear"></div>
		<div class="spacer"></div>
		<article class="module width_3_quarter">
		<header><h3 class="tabs_involved" style="margin-top:-5px;"></h3>
		<ul class="tabs">
   			<li><a href="#tab1">Événement</a></li>
    		<li><a href="#tab2">Tarifs</a></li>
		</ul>
		</header>
		
		
		<div class="tab_container">
			<div id="tab1" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			<tbody> 
				<tr> 
    				<td>Nom</td> 
    				<td><input type="text" class="form-control" id="usr"></td> 
    				<td><button type="button" class="btn btn-success">Valider</button></td>
				</tr> 
				<tr> 
    				<td>Date</td> 
    				<td><input type="text" class="form-control" id="usr"></td> 
    				<td><button type="button" class="btn btn-success">Valider</button></td>
				</tr>   
				<tr> 
    				<td>Lieu</td> 
    				<td><input type="text" class="form-control" id="usr"></td> 
    				<td><button type="button" class="btn btn-success">Valider</button></td>
				</tr>
				<tr> 
    				<td>Affiche</td> 
    				<td><input type="file" /></td>
					<td><button type="button" class="btn btn-success">Valider</button></td>
				</tr>
				<tr> 
    				<td>Nombre de places maximal</td> 
    				<td><input type="text" class="form-control" id="usr"></td> 
    				<td><button type="button" class="btn btn-success">Valider</button></td>
				</tr>
				<tr>	
					<td></td>
					<td><button type="button" class="btn btn-danger">Supprimer l'événement</button></td>
					<td></td>
				</tr>
			</tbody> 
			</table>
			</div><!-- end of #tab1 -->
			
			<div id="tab2" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			<tbody> 
				<tr> 
    				<td>Package repas+concert</td> 
    				<td>Cotisant BDE</td> 
    				<td>53 &#8364</td>
					<td>750</td>
    				<td><a href="modif-tarif.php"><img src="images/icn_edit.png" alt="affiche-evenement"></a>&nbsp;&nbsp;&nbsp;<a href="del-tarif.php"><img src="images/icn_trash.png" alt="affiche-evenement"></td> 
				</tr> 
				<tr> 
    				<td>place de concert</td> 
    				<td>Non cotisant BDE</td> 
    				<td>43 &#8364</td>
					<td>110</td>
    				<td><a href="modif-tarif.php"><img src="images/icn_edit.png" alt="affiche-evenement"></a>&nbsp;&nbsp;&nbsp;<a href="del-tarif.php"><img src="images/icn_trash.png" alt="affiche-evenement"></a></td> 
				</tr>
				<tr>
					<br>
					<center><a href="create-tarif.php" class="btn btn-primary" role="button"> Ajouter un tarif </a></center>
					<br>
				</tr>
			</tbody> 
			</table>

			</div><!-- end of #tab2 -->
			
		</div><!-- end of .tab_container -->
		
		
		
	</section>
	
	<?php
            include("../parts/footer.php");
    ?>


</body>

</html>