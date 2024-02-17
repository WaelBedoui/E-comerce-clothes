
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
$email= $_POST['email'];	
$mdp = $_POST['mdp'];
	
$mdp2 = md5($mdp);	
	
@mysql_connect("localhost","root","") or die('prob 1');
	@mysql_select_db("laboutique")or die('prob 2');
$req = "select * from client where email='$email' and mdp='$mdp2'";
$envoi = @mysql_query($req) or die('prob 3');
if($res = @mysql_fetch_array($envoi)){                 
	$_SESSION['id_client'] = $res['id_client']; 
	
	
	header("location:client/index_client.php");
}
else { 
	
	header("location:index.php");
}
?>	
	
</html>