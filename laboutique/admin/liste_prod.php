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
		<br> <br>
	<h1> Liste des produits </h1>	
		<br> <br> 
	Choisir une Catégorie : 	
		<div style="width: 80%">
<form method="post" action="">
	<select class="form-select" aria-label="Default select example" name="produit" >
  <option selected>Casquettes & Chapeaux</option>
  <option value="Ceintures">Ceintures</option>
  <option>Montres</option>
<option>Bijoux</option>
<option>Cravates & Nœuds Papillons</option>
		 
        
  
</select>
		<br> 	
<button class="btn btn-primary" type="submit" style="width: 100%;" name="a">Chercher </button>			
</form>
		<br> <br>	
<?php
if(isset($_POST['a'])){
	$produit = $_POST['produit'];
echo "<h5>Liste des Produits de catégorie : ".$produit."</h5>";
?>	
<br> <br>
<?php	
error_reporting(0);

	
	$req2 = "SELECT *from produit  
where cat='$produit'  ";	
	
$envoi2 = @mysql_query($req2);
while($res2 = @mysql_fetch_array($envoi2)){	
?>
<!--code de la carte bootstrap--> 			
<div class="card mb-3" style="max-width: 800px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="images/<?php echo $res2['image']; ?>" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"> <?php echo $res2['nom']; ?> </h5>
        <p class="card-text"> 
		  
		  Prix : <?php echo $res2['prix']; ?> TND &nbsp; <BR>
			 Quantité en Stock  : <?php echo $res2['qte']; ?>  &nbsp;
			
		  <br>      
			
			
		  </p>
      </div>
    </div>
  </div>
</div>
			
			
<?php } } ?>			
			
	</div>	
	</center>
	</div>	
	
	
	
	
	
	
</body>
</html>