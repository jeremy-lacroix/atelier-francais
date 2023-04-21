<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/x-icon" href="/images/icon/logo.ico">
  <title>L'Atelier Français - A propos</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- LINK BURGER -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <!--FIN LINK BURGER -->
</head>

<header>

 <div class="header1">
    <div class="row d-flex flex-row justify-content-between">
      <?php
        if (isset($_SESSION['nom'])) {
          echo "
          <div class='d-flex flex-row justify-content-start ml-2'>
            <div>
              <img src='images/icon/fr.png' class='text-left align-middle pb-2 pt-1'></img>
            </div>
            <div>
              <h3 class='text-dark m-0'>&nbspFR</h1>
            </div>
            
          </div>
          <div class='d-flex flex-row justify-content-end mr-2'>
            <a href='deconnect.php'><h3 class='text-dark'>Déconnexion</h3></a>
            <a href='panier.php' ><h3 class='text-right text-dark pl-2'>Panier</h3></a>
          </div>
          </div>
          <div class='row d-flex flex-row justify-content-start'>
            <h3>&nbspBonjour ".$_SESSION['nom']." !</h3>
          </div>";
        }
        else{
          echo "
          <div class='d-flex flex-row justify-content-start ml-2'>
            <div>
              <img src='images/icon/fr.png' class='text-left align-middle pb-2 pt-1'></img>
            </div>
            <div>
              <h3 class='text-dark m-0'>&nbspFR</h1>
            </div>
          </div>
          <div class='d-flex flex-row justify-content-end mr-2'>
            <a href='login.php'><h3 class='text-dark'>Login</h3></a>
            <a href='panier.php' ><h3 class='text-right text-dark pl-2'>Panier</h3></a>
          </div>
          </div>";
        }
      ?>
        
      
  </div>
    
    <!-- DEBUT BURGER (remplace navbar1 complétement)-->
  
  <nav class="navbar navbar-expand-lg navbar-light navbar1">
    <a class="navbar-brand" href="#"><img class="logo" src="images/logo/AF.png"></img></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active navigation">
          <a class="nav-link" href="index.php"><h2 class="nav1 text-dark">Accueil</h2></a>
        </li>
        <li class="nav-item navigation">
          <a class="nav-link" href="produit.php"><h2 class="nav1 text-dark">Produits</h2></a>
        </li>
        <li class="nav-item navigation">
          <a class="nav-link" href="equipe.php"><h2 class="nav1 text-dark">À propos</h2></a>
        </li>
        <li class="nav-item navigation">
          <a class="nav-link" href="contact.php"><h2 class="nav1 text-dark">Contact</h2></a>
        </li>
        <li class="nav-item navigation">
          <a class="nav-link" href="form-recrute.php"><h2 class="nav1 text-dark">Recrutement</h2></a>
        </li>
      </ul>
    </div>
  </nav>
  
  <!-- FIN BURGER -->

  <!-- DEFILEMENT -->
  <div class="black" style="background: #276635">
    <h3 class="défil text-white">L'atelier français : la qualité, notre métier<span style="padding-left:100vw;"></span>Bienvenue<span style="padding-left:100vw;"></span>Welcome</h3>
  </div>
<!-- FIN DEFILEMENT -->

</header>

<body>


<br><br><br><br><br><br><br><br>
<center>
    <div class="col-md-7">
  <div>
      <h1 class="featurette-heading"><strong>À propos de L'Atelier Français ?</strong></h1><br>
    </div>
    <div class="an" id="m2">
    <h3 class="lead">Fondée en 2022, notre entreprise porte le nom de "L'Atelier Français".<br>
                    Nos produits sont confectionnés à la main, dans l'hexagone.</h3>
   </div>
    </div>
  <br><br><br><br><br><br><br><br>
</center>
    
  <div class="div3-1">
  <br>
  
<div class="container marketing">

        <!-- START THE FEATURETTES -->
<br><br><br>
   
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading" >L'Aspect Français. <h4 style="color:blue" class="font-weight-bold">______</h4>
            <p class="lead">Produit en France avec des fournisseurs locaux.<br>
                            Le 100 % français permet d'encourager cette industrie mondialement connue.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto shad" data-src="holder.js/400x300/auto" alt="400x300" style="width: 400px; height: 300px; border-radius: 25px;" src="images/equipe/made.png" data-holder-rendered="true">
          </div>
        </div>
<br><br>
        <hr class="featurette-divider">
<br><br>
        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">L'Aspect Environnemental. <h4 style="color:blue" class="font-weight-bold">______</h4>
            <p class="lead">L'Atelier Français échange avec des fournisseurs <br> de l'hexagone qui respectent les normes
    environnementales <br>
    ainsi que par l'utilisation de matières innovantes.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto shad" data-src="holder.js/400x300/auto" alt="400x300" src="images/equipe/enviro.png" data-holder-rendered="true" style="width: 400px; height: 300px; border-radius: 25px;">
          </div>
        </div>
<br><br>
        <hr class="featurette-divider">
<br><br>
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">L'Aspect Qualité. <h4 style="color:blue" class="font-weight-bold">______</h4>
            <p class="lead">Le textile français est mondialement reconnu dans le monde pour sa qualité.<br>
    Possèdent un label éthique et responsable envers l’environnement.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto shad" data-src="holder.js/400x300/auto" alt="400x300" src="images/equipe/textile.png" data-holder-rendered="true" style="width: 400px; height: 300px; border-radius: 25px;">
          </div>
        </div>
<br><br><br>
       
     </div>
</div>
   <center>
   <br><br><br>
   <h1 class="featurette-heading"><strong>Notre équipe</strong></h1>
   <br><br>
   <p class="lead">Notre entreprise se compose actuellement de 11 salariés</p>
   <br><br>  
</div>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
 
  <div class="carousel-inner">

    <div class="carousel-item active">
      <div class="row">
        <div class="col-lg-4">
          <img class="rounded-circle" src="images/equipe/tanguy.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Tanguy MARMIER</h2>
          <p>PDG</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="rounded-circle" src="images/equipe/jeremyL.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Jérémy LACROIX</h2>
          <p>DSI</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="rounded-circle" src="images/equipe/brendan.png" alt="Generic placeholder image" alt="Generic placeholder image" width="140" height="140">
          <h2>Brendan JAGOZ</h2>
          <p>DAF / DRH</p>
        </div>
      </div>
    </div>
  

    <div class="carousel-item">
      <div class="row">
        <div class="col-lg-4">
          <img class="rounded-circle" src="images/equipe/jeremyMe.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Jérémy MEGESSIER</h2>
          <p>Administrateur de base de donnée</p>  
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="rounded-circle" src="images/equipe/arthur.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Arthur MONTAGNE</h2>
          <p>Architecte réseau</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="rounded-circle" src="images/equipe/vincent.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Vincent DESFORGES</h2>
          <p>Administrateur réseau</p>  
        </div><!-- /.col-lg-4 -->
      </div>
    </div>
      
    <div class="carousel-item">
      <div class="row">
        <div class="col-lg-4">
          <img class="rounded-circle" src="images/equipe/sandra.png" alt="Generic placeholder image" alt="Generic placeholder image" width="140" height="140">
          <h2>Sandra BOURBONEUX</h2>
          <p>Marketing</p> 
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="rounded-circle" src="images/equipe/dorian.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Dorian PONGO</h2>
          <p>Commercial</p> 
          </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="rounded-circle" src="images/equipe/raphael.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Raphael GERMANY</h2>
          <p>Responsable fournisseur</p>  
        </div><!-- /.col-lg-4 -->
      </div>
    </div>
      
    
      
    <div class="carousel-item">
      <div class="row">
        <div class="col-lg-4">
          <img class="rounded-circle" src="images/equipe/mattheo.png" alt="Generic placeholder image" alt="Generic placeholder image" width="140" height="140">
          <h2>Mattheo NAEGELLEN</h2>
          <p>Responsable communication</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="rounded-circle" src="images/equipe/antoine.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Antoine HUCHARD</h2>
          <p>Développeur sécurité système</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="rounded-circle" src="images/equipe/AF_4.png" alt="Generic placeholder image" width="200" height="200">
        </div><!-- /.col-lg-4 -->
      </div>
    </div>
    
    </div>
    <a class="carousel-control-prev text-dark" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <div class="icon"><svg aria-hidden="true" focusable="false" viewBox="0 0 24 24" role="img" width="24px" height="24px" fill="none"><path stroke="currentColor" stroke-width="1.5" d="M15.525 18.966L8.558 12l6.967-6.967"></path></svg></div>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next text-dark" href="#carouselExampleIndicators" role="button" data-slide="next">
      <div class="icon"><svg aria-hidden="true" focusable="false" viewBox="0 0 24 24" role="img" width="24px" height="24px" fill="none"><path stroke="currentColor" stroke-width="1.5" d="M8.474 18.966L15.44 12 8.474 5.033"></path></svg></div>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
 
    <br><br><br>
 <script> 
window.onscroll = function() {myFunction()};
function myFunction() {  
 if (document.documentElement.scrollTop > 150) {
    document.getElementById("m2").className = "slideUp";
  } 
  if (document.documentElement.scrollTop > 2100) {
    document.getElementById("myImg").className = "slideUp";
  }
}
</script>

<!-- Footer -->
  <footer
          class="text-center text-lg-start text-white"
          style="background-color: #276635"
          >
    <!-- Grid container -->
    <div class="container p-4 pb-0" style="background-color: #276635;">
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">
              <i>L'Atelier français</i>
            </h6>
            <p>
               Créée en 2022, L'Atelier Francais est engagé dans la production de vêtements 100% Français dans le respect de l'environnement.
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            
            <a href="index.php"><h6 class="text-uppercase mb-4 font-weight-bold text-white">ACCUEIL</h6></a>
            <a href="produit.php"><h6 class="text-uppercase mb-4 font-weight-bold text-white">PRODUITS</h6></a>
            <a href="equipe.php"><h6 class="text-uppercase mb-4 font-weight-bold text-white">EQUIPE</h6></a>
            <a href="form-recrute.php"><h6 class="text-uppercase mb-4 font-weight-bold text-white">RECRUTEMENT</h6></a>
            <a href="contact.php"><h6 class="text-uppercase mb-4 font-weight-bold text-white">NOUS CONTACTER</h6></a>
          
          </div>

          <!-- Grid column -->
          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
            <p><i class="fas fa-home mr-3"></i> Rue Manin Jaures 75019, Paris </p>
            <p><i class="fas fa-envelope mr-3"></i> atelierfrancais.pro@gmail.com</p>
            <p><i class="fas fa-phone mr-3"></i> 06 52 50 29 62</p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Suivez-nous</h6>

            <!-- Instagram -->
            <a
               class="btn btn-primary btn-floating m-1 rounded-circle"
               href="https://instagram.com/l_atelier_francais?igshid=YmMyMTA2M2Y="
               role="button">
               <i class="fa-brands fa-instagram"></i>
             </a>


          </div>
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div
         class="text-center p-3"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
      © 2022 Copyright:
      <a class="text-white">L'Atelier Français</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</div>
<!-- End of .container -->

</body>
</html>