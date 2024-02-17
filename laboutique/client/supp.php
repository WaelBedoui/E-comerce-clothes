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
	 $id_panier = $_GET['id_panier'];		 
	
			  
$req = "delete from panier where id_panier = '$id_panier'";
			 $envoi = @mysql_query($req);
			header("location:index_client.php#panier"); 
			  
		 
		  
		  
		  ?>
</body>
</html>