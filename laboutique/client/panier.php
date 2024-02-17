<!DOCTYPE html>
<html>
<head>
	
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	
	
  <meta charset="utf-8">
  <title>Nike</title>
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
	
	
	
?>	

  <!--==========================
  Header
  ============================-->
  <header id="header" style="background-color: black;">
    <div class="container" >

      <div id="logo" class="pull-left">
       <a href="#hero"><img src="img/logo.png" width="170" height="100" style="margin-top: -40px;" alt="" title="" /></a>
        <!-- Uncomment below if you prefer to use a text logo -->
		 <!-- <h1><a href="#hero">Nike</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="index_client.php#hero">Acceuil</a></li>
          <li><a href="#about">Mon Compte</a></li>
          <li class="menu-has-children"><a href="">Catégorie</a>
            <ul>
              <li><a href="index_client.php#Vetements">Bagues</a></li>
              <li class="menu-has-children"><a href="index_client.php#Chaussures">Boucles D'oreilles</a></li>
			
			 <li><a href="index_client.php#Accessoires">Bracelets</a></li>
			 <li><a href="index_client.php#Cheville">Bracelets De Cheville</a></li>
			 <li><a href="index_client.php#Colliers">Colliers</a></li>
			
             
            </ul>
          </li>
<li> <a href="index_client.php#panier" > Mon Panier </a> </li>	
			
          <li><a href="index_client.php#contact">Contact</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

	
  <!--==========================
    Hero Section
  ============================-->
 

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
   

    <!--==========================
      Facts Section
    ============================-->
    
<br> <br> 
    <!--==========================
      Vetements Section
    ============================-->
    <section id="Vetements">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="" align="center">Nos Bagues</h3>
          
        </div>
 <?php 
		  $id_p = $_GET['id_p']; 
		  
@mysql_connect("localhost","root","");	  
@mysql_select_db("laboutique");
$req = "SELECT * from produit 
where id_p='$id_p' ";

$envoi = @mysql_query($req);

?>		 	  


 
<?php
	$res = @mysql_fetch_array($envoi) ;
	?>
 <div class="card mb-3" >
  <div class="row g-0">
    <div class="col-md-4">
      <img src="../admin/images/<?php echo $res['image']; ?>" class="img-fluid rounded-start" width="500" height="500" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo $res['nom']; ?></h5>
        <p class="card-text">Prix : <?php echo $res['prix']; ?> TND &nbsp;  </p>
		  <br><br><br>
		<form method="post" action="panier2.php">	
			<input type="hidden" name="id_p" value="<?php echo $id_p; ?>">
			
			
		 <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Choisir la quantité : </label>
    <input type="number" name="qte" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
			 <br>
			<button type="submit" class="btn btn-secondary" name="a">Ajouter au Panier</button>
  </div> 	
		  
		  </form> 
		  
        
      </div>
    </div>
  </div>
</div>
	<?php
		  if(isset($_POST['a'])){
			  $qte = $_POST['qte'];
			  $date_a = date('Y-m-d');
$req = "insert into panier values ('','$id_client','$id_p','$qte','$date_a','0')";
			 $envoi = @mysql_query($req);
			 echo "<h2 align='center'> Votre produit a été bien Ajouter au panier </h2>";
			  
		  }
		  
		  
		  ?>
	
	

		  
		  
      </div>
    </section><!-- #services -->
<br> <br> 

    <!--==========================
      Chaussures Section
    ============================-->
   

   
	  
	  
	 
	  
	  
   

    
   
    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Contact</h3>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>
      </div>

      <!-- Uncomment below if you wan to use dynamic maps -->
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>

      <div class="container wow fadeInUp mt-5">
        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-4">

            <div class="info">
              <div>
                <i class="fa fa-map-marker"></i>
                <p>A108 Adam Street<br>New York, NY 535022</p>
              </div>

              <div>
                <i class="fa fa-envelope"></i>
                <p>info@example.com</p>
              </div>

              <div>
                <i class="fa fa-phone"></i>
                <p>+1 5589 55488 55s</p>
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
        &copy; Copyright <strong>Regna</strong>. All Rights Reserved
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