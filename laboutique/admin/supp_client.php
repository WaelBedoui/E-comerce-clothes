<!doctype html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>	
	
	
	<style>
		.gauche{
			width: 30%;
			height: 800px;
			position: fixed;
			
			background-color: #606060;
			float: left;
		}
		.droite{
			width: 70%;
			height: 500px;
			/* background-color: red; */ 
			float: right;
		}
		#profil{
			border-radius: 75px;
		}	
		hr {
			width: 40%;
			border:3px solid #8B8484;
		}
		.formulaire{
			width:70%;
			height: 500px;
		}		
		
		
	</style>
	
	
	
	
<meta charset="utf-8">
<title>Document sans titre</title>
</head>

<body>
	<?php
	session_start();
	$id_a = $_SESSION['id_a'];
	
	@mysql_connect("localhost","root","") or die("prob 1");
	@mysql_select_db("laboutique") or die("prob 2");
	
	$req ="select * from admin where id_a = '$id_a'";
	$envoi = @mysql_query($req);
	$res = @mysql_fetch_array($envoi);
	
$id_client = $_GET['id_client'];
	$req2 = "delete from client where id_client='$id_client'";
	$envoi2 = @mysql_query($req2); 
	header("location:gest_clients.php");
	?>
	
	
</body>
</html>