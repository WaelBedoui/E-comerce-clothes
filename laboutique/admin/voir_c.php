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
		
		<br><br>
		
		<?php
		$id_client = $_POST['id_client'];
		$date = $_POST['date']; 
		$req2 = "select distinct date, id_client from panier where id_client='$id_client' and date='$date' and etat = 1" ; 
$envoi2 = @mysql_query($req2);
		
		$req3 = "select * from client where id_client = '$id_client'";
		$envoi3 = @mysql_query($req3);
		$res3 = @mysql_fetch_array($envoi3);
		
		
		?>
		<h1 align="center"> Liste des Commandes </h1>
		<h6 align="left" style="margin-left: 50px;"> Date de commande : <?php echo $date ?> </h6>
		<h6 align="left"  style="margin-left: 50px;"> Nom et prénom : <?php echo $res3['nom']." ".$res3['prenom']; ?>
		<br> Téléphone : <?php echo $res3['tel']; ?>
		<br> Email : <?php echo $res3['email']; ?>
		<br> Adresse : <?php echo $res3['adresse']; ?>
		<br> Ville : <?php echo $res3['ville']; ?>
	<br> Pays : <?php echo $res3['pays']; ?>
		</h6>
		
		
		<table class="table" width="80%">
		<tr>
		<td><strong> Image </strong></td>
			<td><strong> Catégorie </strong></td>
			<td><strong> Nom </strong></td>
			<td><strong>Prix</strong>  </td>
			<td> <strong>Quantité</strong> </td>
			
		</tr>
		<?php
		$req4 = "select id_p , qte from panier where id_client = '$id_client' and date='$date'";
		$envoi4 = @mysql_query($req4);
		while($res4 = @mysql_fetch_array($envoi4)){
			$id_p = $res4['id_p'];
			$qte = $res4['qte'];
			
		$req5 = "select * from produit where id_p = '$id_p'";
		$envoi5 = @mysql_query($req5);
		$res5 =  @mysql_fetch_array($envoi5) ; 	
		
		
		?>
		
		
		
		<tr>
		<td><img src="images/<?php echo $res5['image']; ?>" width="100" height="100"> </td>
			<td> <?php echo $res5['cat']; ?> </td>
			<td> <?php echo $res5['nom']; ?> </td>
			<td> <?php echo $res5['prix']; ?> TND </td>
			<td> <?php echo $res5['qte']; ?> </td>
			<td> 
			
		</tr>
	<?php
			
		}
		
		?>
		</table>
	</center>
	</div>	
	
	
	
	
	
	
</body>
</html>