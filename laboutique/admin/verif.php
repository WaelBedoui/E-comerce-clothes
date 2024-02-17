
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
$login = $_POST['login'];	
$mdp = $_POST['mdp'];	
@mysql_connect("localhost","root","") or die('prob 1');
	@mysql_select_db("laboutique")or die('prob 2');
$req = "select * from admin where login='$login' and mdp='$mdp'";
$envoi = @mysql_query($req) or die('prob 3');
if($res = @mysql_fetch_array($envoi)){                 
	$_SESSION['id_a'] = $res['id_a']; 
	$_SESSION['np'] = $res['np']; 
	$_SESSION['login'] = $res['login']; 
	$_SESSION['mdp'] = $res['mdp']; 
	$_SESSION['photo'] = $res['photo'];
	
	header("location:index_admin.php");
}
else {
	header("location:index.html");
	
	
}
?>	
	
</html>