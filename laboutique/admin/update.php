<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Document sans titre</title>
<link href="../../attestation/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php	
	session_start();
	$id_a = $_SESSION['id_a'];
	
	$np = $_POST['np'];
	$file = $_POST['file'];
	$login = $_POST['login'];
	$mdp = $_POST['mdp'];
	
	
$tmpName=$_FILES['file']['tmp_name'];
$name = $_FILES['file']['name'];
$size =$_FILES['file'] ['size'];
$error = $_FILES['file'] ['error'];
move_uploaded_file($tmpName,'images/'.$name);
	
	
	@mysql_connect("localhost","root","") or die("prob 1");
	@mysql_select_db("laboutique") or die("prob 2");
	$req = "update admin set np='$np',login = '$login', mdp='$mdp', photo='$name' where id_a='$id_a'  ";
	$envoi = @mysql_query($req) or die("prob 3");
	
header("location:index_admin.php");
	
?>	
</body>
</html>