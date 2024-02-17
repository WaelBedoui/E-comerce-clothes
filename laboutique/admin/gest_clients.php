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
	
	$np = $res['np'];
	$login = $res['login'];
	$mdp = $res['mdp'];
	$photo = $res['photo'];
	?>
	
<div class="gauche">
	<center>
	<br> <br> 
	<img src="images/<?php echo $photo; ?>" width="150" height="150" id="profil" >
	<br> <br>
	<a class="btn btn-primary" href="index_admin.php" role="button" style="background-color: red; width: 200px;">Index </a>
			<br>	
	<div class="btn-group dropend">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: red; width: 200px;">
    Gestion des Produits
  </button>
  <ul class="dropdown-menu">
 <li><a class="dropdown-item" href="ajouter_prod.php">Ajouter un produit</a></li>
 <li><a class="dropdown-item" href="liste_prod.php">Liste des Produits</a></li>
   </ul>
</div>
	<br>	
<a class="btn btn-primary" href="gest_clients.php" role="button" style="background-color: red; width: 200px;">Gestion des Clients </a>
	<br>	
<a class="btn btn-primary" href="gest_commandes.php" role="button" style="background-color: red; width: 200px;">Gestion des Commandes </a>
<br>
	<a class="btn btn-primary" href="deconnexion.php" role="button" style="background-color: red; width: 200px;">Déconnexion </a>
			

	</center>
	</div>	
<div class="droite">
	<center>
	<?php
	$req2 = "select * from client";
	$envoi2 = @mysql_query($req2);
		
		
	?>	
		<br><br>
		<h1 align="center"> Liste des Clients</h1>
<table class="table" width="80%" align="center">
<tr>
<td><strong>Nom</strong></td>
<td><strong>Prénom</strong></td>
<td><strong>Email</strong></td>
<td><strong>Adresse</strong></td>
<td><strong>Téléphone</strong></td>
<td><strong>Ville</strong></td>
<td><strong>Pays</strong></td>
</tr>
	<?php
	while($res2 = @mysql_fetch_array($envoi2)){
	?>
<tr>
	<td> <?php echo $res2['nom']; ?></td>
	<td> <?php echo $res2['prenom']; ?></td>
	<td> <?php echo $res2['email']; ?></td>
	<td> <?php echo $res2['adresse']; ?></td>
	<td> <?php echo $res2['tel']; ?></td>
	<td> <?php echo $res2['ville']; ?></td>
	<td> <?php echo $res2['pays']; ?></td>
	<td><a href="supp_client.php?id_client=<?php echo $res2['id_client']; ?>" onClick="return confirm('Voulez vous supprimer ce client ?')"> Supprimer </a></td>
</tr>
	<?php } ?>
</table>
		
		
	</center>
	</div>	
	
	
	
	
	
	
</body>
</html>