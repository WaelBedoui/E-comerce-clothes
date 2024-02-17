<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	
	
	<?php
		 session_start();
@mysql_connect("localhost","root","");	  
@mysql_select_db("laboutique");
	
	$id_client = $_SESSION['id_client']; 
	 $id_p = $_POST['id_p'];		 
	$qte = $_POST['qte'];
			  $date_a = date('Y-m-d');
$req = "insert into panier values ('','$id_client','$id_p','$qte','$date_a',0)";
			 $envoi = @mysql_query($req);
			header("location:index_client.php#panier"); 
			  
		 
		  
		  
		  ?>
</body>
</html>