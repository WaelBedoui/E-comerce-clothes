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
	
		
			 
	$req5 = "update panier set etat = 1 where id_client='$id_client'";
			 $envoi5 = @mysql_query($req5);
			 header("location:index_client.php#panier"); 
			 
			 
		
		 
		 ?>
			header("location:index_client.php#panier"); 
			  
		 
		  
		  
		  ?>
</body>
</html>