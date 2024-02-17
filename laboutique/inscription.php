<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Document sans titre</title>
</head>

<body>
<?php	

	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$email = $_POST['email'];
	$mdp = $_POST['mdp'];
	$adr1 = $_POST['adr1'];
	$tel = $_POST['tel'];
	$ville = $_POST['ville'];
	$pays = $_POST['pays'];
	
	//cryptage de mot de passe 
	$mdp2 =md5($mdp);
	
	
@mysql_connect("localhost","root","");
@mysql_select_db("laboutique");

$req = "insert into client values('','$nom','$prenom','$email','$mdp2','$adr1','$tel','$ville','$pays')";

$envoi = @mysql_query($req);
header("location:index.php"); 	
	
	
	
?>	
</body>
</html>