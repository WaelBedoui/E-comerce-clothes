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

  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
       <a href="#hero"><img src="img/logo.png" width="200" height="100" style="margin-top: -40px;" alt="" title="" /></a>
        <!-- Uncomment below if you prefer to use a text logo -->
		 <!-- <h1><a href="#hero">Nike</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Acceuil</a></li>
          <li><a href="#about">A propos</a></li>
          <li class="menu-has-children"><a href="">Catégorie</a>
            <ul>
              <li><a href="#Casquettes">Casquettes & Chapeaux</a></li>
              <li class="menu-has-children"><a href="#Ceintures">Ceintures</a></li>
			
			 <li><a href="#Montres">Montres</a></li>
			 <li><a href="#Bijoux">Bijoux</a></li>
			 <li><a href="#Cravates">Cravates & Nœuds Papillons</a></li>
			
             
            </ul>
          </li>
<li> <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"> Inscription </a> </li>	
			
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
      <h1>Bienvenue à  <img src="img/logo.png"></h1>
      <h2>vente des accessoires pour Homme</h2>
      <a href="#about" class="btn-get-started">Get Started</a>
    </div>
  </section><!-- #hero -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <h2 class="title">A Propos de Nous</h2>
            <p>
             Établie depuis bientôt 2 ans, La Boutique a fait sa marque dans le domaine de la domaine des accessoires pour <strong> Homme </strong>. Toujours à l’avant-garde des tendances, nous offrons des produits de grandes qualités que ce soit fabriqués en Tunisie ou de belles importations européennes. 
            </p>
<p>
Fière de sa petite nouvelle expérience, toujours en quête de nouveautés et de dernières tendances, La boutique grimpe au sommet du chic, à l’apogée de la mode. C’est pour sa précieuse clientèle que <strong> La Boutique </strong> cherchait toujours  la plus grande tendance du marché.			 
</p>
            

           

           

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
      <img src="admin/images/<?php echo $res['image']; ?>" class="card-img-top" style="width:320px; height:320px;" alt="...">
      <div class="card-body">
        <h5 class="card-title"> <?php echo $res['nom']; ?> </h5>
        <p class="card-text"> 
		  
		  Prix : <?php echo $res['prix']; ?> TND &nbsp; 
			
		  
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
      <img src="admin/images/<?php echo $res['image']; ?>" class="card-img-top" style="width:320px; height:320px;" alt="...">
      <div class="card-body">
        <h5 class="card-title"> <?php echo $res['nom']; ?> </h5>
        <p class="card-text"> 
		  
		  Prix : <?php echo $res['prix']; ?> TND &nbsp; 
			
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
      <img src="admin/images/<?php echo $res['image']; ?>" class="card-img-top" style="width:320px; height:320px;" alt="...">
      <div class="card-body">
        <h5 class="card-title"> <?php echo $res['nom']; ?> </h5>
        <p class="card-text"> 
		  
		 Prix : <?php echo $res['prix']; ?> TND &nbsp; 
			
		 
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
      <img src="admin/images/<?php echo $res['image']; ?>" class="card-img-top" style="width:320px; height:320px;" alt="...">
      <div class="card-body">
        <h5 class="card-title"> <?php echo $res['nom']; ?> </h5>
        <p class="card-text"> 
		  
		 Prix : <?php echo $res['prix']; ?> TND &nbsp; 
			
		 
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
      <img src="admin/images/<?php echo $res['image']; ?>" class="card-img-top" style="width:320px; height:320px;" alt="...">
      <div class="card-body">
        <h5 class="card-title"> <?php echo $res['nom']; ?> </h5>
        <p class="card-text"> 
		  
		 Prix : <?php echo $res['prix']; ?> TND &nbsp; 
			
		 
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