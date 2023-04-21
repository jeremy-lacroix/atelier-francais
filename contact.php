<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="icon" type="image/x-icon" href="/images/icon/logo.ico">
  <title>Atelier Français - Contact</title>
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
    <container class ="container">
      <div class="row justify-content-center align-item-center m-0">
        <div class="col-12 col-md-3">
          <div>
              <form class="login" action="ScriptContact.php" method="POST">
                  <h1>Nous contacter</h1>
                  <label><b>Adresse e-mail</b></label>
                  <input type="text" placeholder="Entrer votre adresse mail" name="email" required>

                  <label><b>Telephone</b></label>
                  <input type="text" placeholder="Entrer votre numéro de téléphone" name="tel" required>

                  <label><b>Objet</b></label>
                  <input type="text" placeholder="Entrer l'objet du message" name="objet" required>

                  <label><b>Message</b></label>
                  <textarea id="message" placeholder="Message" name="message"cols="60" rows="10" required></textarea>

                  <input type="submit" id='submit' value='ENVOYER' >
              </form>
          </div>
        </div>
        <div class="col-1 text-center">
          <span class="ligneContact"></span>
        </div>
        <div class="col-12 col-md-4 text-center pt-5">
          <iframe class="mt-5 pt-5" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2623.6979336939376!2d2.3858114!3d48.8830347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66dc6a6ef8785%3A0x324d2df957b90eb!2sRue%20Manin%2C%2075019%20Paris!5e0!3m2!1sfr!2sfr!4v1652875551369!5m2!1sfr!2sfr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </container>

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
            </p>
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