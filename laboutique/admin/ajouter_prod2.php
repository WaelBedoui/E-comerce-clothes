<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Document sans titre</title>
</head>

<body>
<?php
error_reporting(0);
	session_start();
	$id_a = $_SESSION['id_a'];
	
	@mysql_connect("localhost","root","") or die("prob 1");
	@mysql_select_db("laboutique") or die("prob 2");
	
	$req ="select * from admin where id_a = '$id_a'";
	$envoi = @mysql_query($req);
	$res = @mysql_fetch_array($envoi);
	
	$np = $res['np'];
	$login = $res['login'];
	$mdp = $res['mdp'];
	$photo = $res['photo'];
	
	$nom = $_POST['nom'];
	$prix = $_POST['prix'];
	$qte = $_POST['qte'];
	$file = $_POST['file'];
	
	
	

	
	
	
	$produit = $_POST['produit'];
	
	
	
$tmpName=$_FILES['file']['tmp_name'];
$name = $_FILES['file']['name'];
$size =$_FILES['file'] ['size'];
$error = $_FILES['file'] ['error'];
move_uploaded_file($tmpName,'images/'.$name);	
	
$req2 = "insert into produit values('','$name','$produit','$nom','$prix','$qte')";
$envoi2 = @mysql_query($req2);
	
$req10 = "select id_p from produit order by id_p desc";	
$envoi10 = @mysql_query($req10);
$res10 = @mysql_fetch_array($envoi10);
	$id_p = $res10['id_p'];
	
	echo "Numéro dernier produit ".$id_p ;
	
	
		
	header("location:ajouter_prod.php");
	?>	
	
	
	
	
</body>
</html>