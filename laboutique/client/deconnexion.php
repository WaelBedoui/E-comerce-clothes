<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Document sans titre</title>
</head>

<body>
<?php	
	session_start();
	session_destroy();
	header("location:../index.php"); 
	
	
?>	
</body>
</html>