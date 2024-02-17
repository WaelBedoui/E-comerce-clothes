<!DOCTYPE html>
<html>
<head>
	
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	
	
  <meta charset="utf-8">
  <title>La Boutique</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Regna
    Theme URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>
<?php
	session_start();
@mysql_connect("localhost","root","");	  
@mysql_select_db("laboutique");
	
	$id_client = $_SESSION['id_client']; 
$req2 = "select * from client where id_client = '$id_client'";
$envoi2 = @mysql_query($req2);
	$res2 = @mysql_fetch_array($envoi2);
	
$req = "select * from client where id_client = '$id_client'";
$envoi = @mysql_query($req);
	$res = @mysql_fetch_array($envoi);	
	
?>	

  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
       <a href="#hero"><img src="img/logo.png" width="170" height="100" style="margin-top: -40px;" alt="" title="" /></a>
        <!-- Uncomment below if you prefer to use a text logo -->
		 <!-- <h1><a href="#hero">Nike</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Acceuil</a></li>
          <li><a href="#profil">Mon Compte</a></li>
          <li class="menu-has-children"><a href="">Catégorie</a>
            <ul>
              <li><a href="#Casquettes">Casquettes & Chapeaux</a></li>
              <li class="menu-has-children"><a href="#Ceintures">Ceintures</a></li>
			
			 <li><a href="#Montres">Montres</a></li>
			 <li><a href="#Bijoux">Bijoux</a></li>
			 <li><a href="#Cravates">Cravates & Nœuds Papillons</a></li>
			
             
            </ul>
          </li>
<li> <a href="#panier" > Mon Panier </a> </li>	
			
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
	
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Connexion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <form method="post" action="verif.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Adresse Email </label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Mot de Passe </label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="mdp">
  </div>
 
  <button type="submit" class="btn btn-primary">Se Connecter </button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermé</button>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">Créer Un compte </button>
      </div>
    </div>
  </div>
</div>
	
	
	<!-- Modal 2 Créer un compte-->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Créer un Nouveau Compte</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
     
		  
		  <form class="row g-3" method="post" action="inscription.php">
	<div class="row g-3">
  <div class="col">
    <input type="text" class="form-control" placeholder="Nom" aria-label="First name" name="nom">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Prénom" aria-label="Last name" name="prenom">
  </div>
</div>		  
			  
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4" name="email">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Mot de passe</label>
    <input type="text" class="form-control" id="inputPassword4" name="mdp">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Adresse 1 </label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="adr1">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Téléphone</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Téléphone" name="tel"> 
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Ville</label>
    <input type="text" class="form-control" id="inputCity" name="ville">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Pays</label>
    <select id="inputState" class="form-select" name="pays">
      <option selected>Tunisie</option>
      <option>Autres</option>
    </select>
  </div>
 
 
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Enregistrer</button>
  </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermé</button>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Se connecter </button>
      </div>
    </div>
  </div>
</div>
	
	
  <!--==========================
    Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <h1>Welcome <?php echo $res2['nom']." ".$res2['prenom']; ?>  </h1>
      
      <a href="deconnexion.php" class="btn-get-started">Déconnexion</a>
    </div>
  </section><!-- #hero -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="profil">
      <div class="container">
        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <h2> Mon Profil </h2>  
	<br> <br>	  
		  
	<?php
if(isset($_POST['btn2'])){
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$adresse = $_POST['adresse'];
	$ville = $_POST['ville'];
	$telephone = $_POST['telephone'];
	$email = $_POST['email'];
	$mdp = $_POST['mdp'];
	$confirm_mdp = $_POST['confirm_mdp'];
	$emdp = $_POST['emdp'];
	
if($nom ==""){
	echo '<div class="alert alert-danger" role="alert">
  Veuillez insérer votre Nom 
</div>'; 
}	
else if($prenom ==""){
	echo '<div class="alert alert-danger" role="alert">
  Veuillez insérer votre Prénom 
</div>'; 
}	
else if($adresse ==""){
	echo '<div class="alert alert-danger" role="alert">
  Veuillez insérer votre Adresse 
</div>'; 
}	
else if($ville ==""){
	echo '<div class="alert alert-danger" role="alert">
  Veuillez insérer votre Ville 
</div>'; 
}	
else if($telephone ==""){
	echo '<div class="alert alert-danger" role="alert">
  Veuillez insérer votre Numéro de téléphone 
</div>'; 
}
else if($email ==""){
	echo '<div class="alert alert-danger" role="alert">
  Veuillez insérer votre Adresse Email 
</div>'; 
}
else if($emdp ==""){
	echo '<div class="alert alert-danger" role="alert">
  Veuillez insérer votre Encien Mot de passe
</div>'; 
}	
	else if($mdp ==""){
	echo '<div class="alert alert-danger" role="alert">
  Veuillez insérer votre nouveau Mot de Passe
</div>'; 
}
	else if($confirm_mdp ==""){
	echo '<div class="alert alert-danger" role="alert">
  Veuillez insérer à nouveau votre nouveau mot de passe 
</div>'; 
}
	else if($confirm_mdp != $mdp){
	echo '<div class="alert alert-danger" role="alert">
  Les mots de passe ne sont pas identique 
</div>'; 
}	

	else {
	$req2 = "select email from client where email = '$email' and id_client != '$id_client'" ;
	$envoi2 = @mysql_query($req2);
		
		if($res2 = @mysql_fetch_array($envoi2)){
			
			echo '<div class="alert alert-danger" role="alert">
  Cette Adresse email a été utilisé dans un autre compte  
</div>'; 
		}
		else {
			
			$emdp2 = md5($emdp); 
$req4 = "select mdp from client where mdp = '$emdp2' and id_client='$id_client'"; 		
	$envoi4 = @mysql_query($req4);		
	if($res4 = @mysql_fetch_array($envoi4)){
			
		$nvmdp = md5($confirm_mdp); 
		
$req5 = "update client set nom = '$nom' , prenom = '$prenom', adresse='$adresse', ville = '$ville', tel = '$telephone', email = '$email', mdp = '$nvmdp' where id_client='$id_client'   "	;	
		
	$envoi5 = @mysql_query($req5);	
	 	//header("location:abc.php");
			echo '<div class="alert alert-danger" role="alert">
 Modification terminée avec succée   
</div>';
		
		}	
		else {
		echo '<div class="alert alert-danger" role="alert">
  Vérifier votre Mot de passe   
</div>'; 	
		}	
			
		}
		
		
		
		
		
		
	}
	
	
	
	
	
	
}
			
?>	  
		  
	<br> <br>	  
<form action="#profil" method="post">
      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="nom" class="form-label">Nom :</label>
          <input type="text" class="form-control" id="nom" name="nom" value="<?php echo $res['nom']; ?>">
        </div>

        <div class="col-md-6 mb-3">
          <label for="prenom" class="form-label">Prénom :</label>
          <input type="text" class="form-control" id="prenom" name="prenom" value="<?php echo $res['prenom']; ?>">
        </div>
      </div>

      <div class="mb-3">
        <label for="adresse" class="form-label">Adresse :</label>
        <input type="text" class="form-control" id="adresse" name="adresse" value="<?php echo $res['adresse']; ?>">
      </div>

      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="ville" class="form-label">Ville :</label>
          <input type="text" class="form-control" id="ville" name="ville" value="<?php echo $res['ville']; ?>">
        </div>

        <div class="col-md-6 mb-3">
          <label for="telephone" class="form-label">Téléphone :</label>
          <input type="text" class="form-control" id="telephone" name="telephone" value="<?php echo $res['tel']; ?>">
        </div>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email :</label>
        <input type="email" class="form-control" id="email" name="email" value="<?php echo $res['email']; ?>">
      </div>

	 <div class="mb-3">
        <label for="motdepasse" class="form-label">Réecrire Encien Mot de passe :</label>
        <input type="password" class="form-control" id="emotdepasse" name="emdp">
      </div>
	
      <div class="mb-3">
        <label for="motdepasse" class="form-label">Nouveau Mot de passe :</label>
        <input type="password" class="form-control" id="motdepasse" name="mdp">
      </div>

      <div class="mb-3">
        <label for="confirm_motdepasse" class="form-label">Confirmer nouveau  mot de passe :</label>
        <input type="password" class="form-control" id="confirm_motdepasse" name="confirm_mdp">
      </div>

      <button type="submit" class="btn btn-primary" name="btn2" >Modifier Mon Compte </button>
    </form>	 			
				  
		  
		  
       

           

           

          </div>

          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInRight"></div>
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Facts Section
    ============================-->
     <section id="facts">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Statistique</h3>
         <?php
	@mysql_connect("localhost","root","");	  
@mysql_select_db("laboutique");
			
	$req3 = "select count(tel) as nbclient from client";	  
	$envoi3 = @mysql_query($req3);
	$res3 = @mysql_fetch_array($envoi3);
			
	$req4 = "select count(id_p) as nbp from produit";	  
	$envoi4 = @mysql_query($req4);
	$res4 = @mysql_fetch_array($envoi4);
			
			$req5 = "select count(id_panier) as nbpanier from panier";	  
	$envoi5 = @mysql_query($req5);
	$res5 = @mysql_fetch_array($envoi5);
	  ?>
			
			
			
			
        </div>
        <div class="row counters">

  				<div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?php echo $res3['nbclient']; ?> </span>
            <p>Clients</p>
  				</div>
 <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">5</span>
            <p>Catégorie</p>
  				</div>
          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?php echo $res4['nbp']; ?></span>
            <p>Produits</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?php echo $res5['nbpanier']; ?></span>
            <p>Produits vendus</p>
  				</div>

         

  			</div>

      </div>
    </section><!-- #facts -->
<br> <br> 
    <!--==========================
      Vetements Section
    ============================-->
    <section id="Casquettes">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="" align="center">Nos Casquettes & Chapeaux</h3>
          
        </div>
 <?php 
@mysql_connect("localhost","root","");	  
@mysql_select_db("laboutique");
$req = "SELECT * from produit 
where cat='Casquettes & Chapeaux' ";

$envoi = @mysql_query($req);

?>		 	  
<div class="row row-cols-1 row-cols-md-3 g-4" >

 
<?php
	while($res = @mysql_fetch_array($envoi)) {
	?>
  <div class="col-lg-4 col-md-6">
    <div class="card"  data-wow-delay="0.8s">
      <img src="../admin/images/<?php echo $res['image']; ?>" class="card-img-top" style="width:320px; height:320px;" alt="...">
      <div class="card-body">
        <h5 class="card-title"> <?php echo $res['nom']; ?> </h5>
        <p class="card-text"> 
		  
		  Prix : <?php echo $res['prix']; ?> TND &nbsp; 
			<br> <br>
			
		<a href="panier.php?id_p=<?php echo $res['id_p']; ?>" style="color: blue;"> <img src="img/panier.png" width="75" height="75"> Ajouter au Panier </a>	
			
		  
		  </p>
      </div>
    </div>
  </div>
	<?php } ?>
	
	
</div>
		  
		  
      </div>
    </section><!-- #services -->
<br> <br> 
			
			
    <!--==========================
      Chaussures Section
    ============================-->
    <section id="Ceintures">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="" align="center">Nos Ceintures</h3>
          
        </div>
 <?php 
@mysql_connect("localhost","root","");	  
@mysql_select_db("laboutique");
$req = "SELECT * from produit 
where cat='Ceintures'";

$envoi = @mysql_query($req);

?>		 	  
<div class="row row-cols-1 row-cols-md-3 g-4" >

 
<?php
	while($res = @mysql_fetch_array($envoi)) {
	?>
  <div class="col-lg-4 col-md-6">
    <div class="card"  data-wow-delay="0.8s">
      <img src="../admin/images/<?php echo $res['image']; ?>" class="card-img-top" style="width:320px; height:320px;" alt="...">
      <div class="card-body">
        <h5 class="card-title"> <?php echo $res['nom']; ?> </h5>
        <p class="card-text"> 
		  
		  Prix : <?php echo $res['prix']; ?> TND &nbsp; 
			<br> <br>
		<a href="panier.php?id_p=<?php echo $res['id_p']; ?>" style="color: blue;"> <img src="img/panier.png" width="75" height="75"> Ajouter au Panier </a>
		  </p>
      </div>
    </div>
  </div>
	<?php } ?>
	
	
</div>
		  
		  
      </div>
    </section><!-- #services -->	  
	  
	<br> <br> 
	 
			
    <!--==========================
      Accessoires Section
    ============================-->
    <section id="Montres">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="" align="center">Nos Montres</h3>
          
        </div>
 <?php 
@mysql_connect("localhost","root","");	  
@mysql_select_db("laboutique");
$req = "SELECT * from produit 
where cat='Montres'  ";

$envoi = @mysql_query($req);

?>		 	  
<div class="row row-cols-1 row-cols-md-3 g-4" >

 
<?php
	while($res = @mysql_fetch_array($envoi)) {
	?>
  <div class="col-lg-4 col-md-6">
    <div class="card"  data-wow-delay="0.8s">
      <img src="../admin/images/<?php echo $res['image']; ?>" class="card-img-top" style="width:320px; height:320px;" alt="...">
      <div class="card-body">
        <h5 class="card-title"> <?php echo $res['nom']; ?> </h5>
        <p class="card-text"> 
		  
		 Prix : <?php echo $res['prix']; ?> TND &nbsp; 
			<br><br>
		<a href="panier.php?id_p=<?php echo $res['id_p']; ?>" style="color: blue;"> <img src="img/panier.png" width="75" height="75"> Ajouter au Panier </a> 
		  </p>
      </div>
    </div>
  </div>
	<?php } ?>
	
	
</div>
		  
		  
      </div>
    </section><!-- #services -->	
	  <br> <br> 
	  
	  
			
	  
	   <!--==========================
      Accessoires Section
    ============================-->
    <section id="Bijoux">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="" align="center">Nos Bijoux</h3>
          
        </div>
 <?php 
@mysql_connect("localhost","root","");	  
@mysql_select_db("laboutique");
$req = "SELECT * from produit 
where cat='Bijoux'  ";

$envoi = @mysql_query($req);

?>		 	  
<div class="row row-cols-1 row-cols-md-3 g-4" >

 
<?php
	while($res = @mysql_fetch_array($envoi)) {
	?>
  <div class="col-lg-4 col-md-6">
    <div class="card"  data-wow-delay="0.8s">
      <img src="../admin/images/<?php echo $res['image']; ?>" class="card-img-top" style="width:320px; height:320px;" alt="...">
      <div class="card-body">
        <h5 class="card-title"> <?php echo $res['nom']; ?> </h5>
        <p class="card-text"> 
		  
		 Prix : <?php echo $res['prix']; ?> TND &nbsp; <br><br>
		<a href="panier.php?id_p=<?php echo $res['id_p']; ?>" style="color: blue;"> <img src="img/panier.png" width="75" height="75"> Ajouter au Panier </a>	
		 
		  </p>
      </div>
    </div>
  </div>
	<?php } ?>
	
	
</div>
		  
		  
      </div>
    </section><!-- #services -->	
	  <br> <br> 
	  
	  
	  
	     <!--==========================
      Accessoires Section
    ============================-->
    <section id="Cravates">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="" align="center">Nos Cravates & Nœuds Papillons</h3>
          
        </div>
 <?php 
@mysql_connect("localhost","root","");	  
@mysql_select_db("laboutique");
$req = "SELECT * from produit 
where cat='Cravates & Nœuds Papillons'  ";

$envoi = @mysql_query($req);

?>		 	  
<div class="row row-cols-1 row-cols-md-3 g-4" >

 
<?php
	while($res = @mysql_fetch_array($envoi)) {
	?>
  <div class="col-lg-4 col-md-6">
    <div class="card"  data-wow-delay="0.8s">
      <img src="../admin/images/<?php echo $res['image']; ?>" class="card-img-top" style="width:320px; height:320px;" alt="...">
      <div class="card-body">
        <h5 class="card-title"> <?php echo $res['nom']; ?> </h5>
        <p class="card-text"> 
		  
		 Prix : <?php echo $res['prix']; ?> TND &nbsp; 
			<br><br>
			<a href="panier.php?id_p=<?php echo $res['id_p']; ?>" style="color: blue;"> <img src="img/panier.png" width="75" height="75"> Ajouter au Panier </a>
		 
		  </p>
      </div>
    </div>
  </div>
	<?php } ?>
	
	
</div>
		  
		  
      </div>
    </section><!-- #services -->	
	  <br> <br> 
    <!--==========================
    Call To Action Section
    ============================-->
  

    <!--==========================
      Portfolio Section
    ============================-->
   <section>
	  <br><br><section id="panier">
     <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="" align="center">Mon Panier </h3>
          
			
			
			
        </div>
<?php 
		 $req3 = "select * from panier where panier.id_client ='$id_client' and etat=0 ";
		$envoi3 = @mysql_query($req3);
		 
		 
		?>
<table class="table">
	<tr>
	<td><strong>Date </strong></td>
	<td><strong>Image </strong></td>
	<td><strong>Nom de produit </strong></td>
	<td><strong>Prix </strong></td>
		<td><strong>Quantité </strong></td>
				<td><strong>Total </strong></td>
				<td><strong>Supprimer </strong></td>


	</tr>
	<?php
	$somme = 0 ;
	while($res3 = @mysql_fetch_array($envoi3)){
		
		$id_p = $res3['id_p'];
		 $req4 = "select * from produit where produit.id_p ='$id_p' ";
		$envoi4 = @mysql_query($req4);
		$res4 = @mysql_fetch_array($envoi4); 
		?>
<tr>
	<td> <?php echo $res3['date']; ?> </td>
<td> <img src="../admin/images/<?php echo $res4['image']; ?>" class="card-img-top" style="width:100px; height:100px; border-radius: 50px;" alt="..."> </td>
<td> <?php echo $res4['nom']; ?> </td>
<td> <?php echo $res4['prix']; ?> TND </td>
<td> <?php echo $res3['qte']; ?> </td>
	<td> <?php echo $res3['qte']*$res4['prix'] ; ?> .000 TND </td>
	<td> <a href="supp.php?id_panier=<?php echo $res3['id_panier']; ?>" onClick="return confirm('Voulez-vous supprimer cette article de votre panier ?')">Supprimer </a></td>
</tr>		
	
	
		<?php
		$somme = $somme + $res3['qte']*$res4['prix'] ;
	}
	?>
	<TR>
	<td></td> <td></td><td></td><td></td><td><strong>Total d'Achat</strong></td> <td><strong><?php echo $somme; ?> 000.TND</strong></td>
		<?php
		if($somme != 0){
		?>
		
		<td>
			<form method="post" action="commande.php">
			<button type="submit" class="btn btn-danger">Confirmer l'Achat</button> </form>
		<?php } ?>
		</td>
	</TR>
		 
		 </table>
		 
	   </div>
    </section><!-- #portfolio -->

	   
	   
	   
	   
	   
	      <section>
	  <br><br><section id="panier">
     <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="" align="center">Mes Achats </h3>
          
			
			
			
        </div>
<?php 
		 $req3 = "select * from panier where panier.id_client ='$id_client' and etat=1 ";
		$envoi3 = @mysql_query($req3);
		 
		 
		?>
<table class="table">
	<tr>
	<td><strong>Date </strong></td>
	
	<td><strong>Nom de produit </strong></td>
	<td><strong>Prix </strong></td>
		<td><strong>Quantité </strong></td>
				<td><strong>Total </strong></td>
				


	</tr>
	<?php
	$somme = 0 ;
	while($res3 = @mysql_fetch_array($envoi3)){
		
		$id_p = $res3['id_p'];
		 $req4 = "select * from produit where produit.id_p ='$id_p' ";
		$envoi4 = @mysql_query($req4);
		$res4 = @mysql_fetch_array($envoi4); 
		?>
<tr>
	<td> <?php echo $res3['date']; ?> </td>

<td> <?php echo $res4['nom']; ?> </td>
<td> <?php echo $res4['prix']; ?> TND </td>
<td> <?php echo $res3['qte']; ?> </td>
	<td> <?php echo $res3['qte']*$res4['prix'] ; ?> .000 TND </td>
	
</tr>		
	
	
		<?php
		$somme = $somme + $res3['qte']*$res4['prix'] ;
	}
	?>
	<TR>
	<td></td> <td></td><td></td><td><strong>Total d'Achat</strong></td> <td><strong><?php echo $somme; ?> 000.TND</strong></td>
		
	</TR>
		 
		 </table>
		 
	   </div>
    </section><!-- #portfolio -->
    <!--==========================
      Team Section
    ============================-->
   
    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Contact</h3>
         
        </div>
      </div>

      <!-- Uncomment below if you wan to use dynamic maps -->
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d30385.2013828618!2d10.175567191386435!3d36.82209346455526!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2cf06d7e07bcc90!2sACADEMIE%20SHERBROOKE%20CANADA%20%E2%80%93%20TUNISIE!5e0!3m2!1sfr!2stn!4v1667385025008!5m2!1sfr!2stn" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>

      <div class="container wow fadeInUp mt-5">
        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-4">

            <div class="info">
              <div>
                <i class="fa fa-map-marker"></i>
                <p>06, Rue Abou Baker Esseddik, par Alain Savary – en face du Ministère de l’Agriculture - Tunis</p>
              </div>

              <div>
                <i class="fa fa-envelope"></i>
                <p>info@academiesherbrooke.com.tn</p>
              </div>

              <div>
                <i class="fa fa-phone"></i>
                <p>(+216) 71 254 444</p>
              </div>
            </div>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>La Boutique</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Regna
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>