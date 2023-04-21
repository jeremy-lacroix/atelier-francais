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

<div style="background-image: url('images/produit/bg.webp')">
  <container class="container">
      <?php

        //image
        $img = $_GET['prod'];

        $conn = mysqli_connect("mysql-atelier-francais.alwaysdata.net","268194_root","atelierfrancais","atelier-francais_panier");
      
        //Requete et récup quantité tailles
        $sql = "SELECT Nom_produit, Description_produit, Prix_produit, Ref_produit FROM produit WHERE Ref_produit = $img";

        $result = $conn->query($sql);

        while($row = $result->fetch_assoc()) {
          $Ref = $row['Ref_produit'];
          $Libelé = $row["Nom_produit"];
          $Desc = $row["Description_produit"];
          $Prix = $row["Prix_produit"];
        }

        function taille($ID){

          $ref = $_GET['prod'];
          
          $conn = mysqli_connect("mysql-atelier-francais.alwaysdata.net","268194_root","atelierfrancais","atelier-francais_panier");
          //Requete et récup

          $sql = "SELECT Quantité_produit FROM produit WHERE Ref_produit = $ref AND Taille_produit='$ID'";
          $result = $conn->query($sql);

          while($row = $result->fetch_assoc()) {
            $qte = $row["Quantité_produit"];
          }
          return $qte;
        }

        echo "<form class='row m-0' action='panier.php' method='post'>";
        echo "<input type='hidden' name='action' value='ajout'>";
        echo "<input type='hidden' id='val' name='r' value='".$Ref."'>";
        echo "<input type='hidden' name='l' value='".$Libelé."'>";
        echo "<input type='hidden' name='p' value='".$Prix."'>";


        echo "<div class='row m-0 justify-content-center'>";
        echo "<div class='col-9 col-sm-3 ml-7 text-center my-auto'>";
        echo "<img src='images/produit/".$img."F.webp' class='img-fluid' style='max-height: 50vh; min-height: 15vh;padding-bottom: 15px;'>
        </div>
        <div class='col-9 col-sm-4 bg-white rounded'>
        <div class='row'>
        <div class='col'>
        <h3>".$Libelé."</h3>
        </div>
        </div>
        <div class='row'>
          <div class='col'>
            <p>Ce ".$Desc." contient 100% de coton issu de l'agriculture biologique, cultivé selon des règles strictes, sans utilisation de pesticides ni de produits chimiques.</p>

            <p>La griffe 'Atelier Français' et les finitions contrastées affiche une allure simple et élégante.</p>
        </div>
        </div>
        <div class='row'>
          <div class='col'>
            <select id='Taille' name='s'>";
        $else = 0;
        if(taille("XS") > 0){
          echo "<option valeur='xs'>XS</option>";
          $else = 1;
        }
        if(taille("S") > 0){
          echo "<option valeur='s'>S</option>";
          $else = 1;
        }
        if(taille("M") > 0){
          echo "<option valeur='m'>M</option>";
          $else = 1;
        }
        if(taille("L") > 0){
          echo "<option valeur='l'>L</option>";
          $else = 1;
        }
        if(taille("XL") > 0){
          echo "<option valeur='xl'>XL</option>";
          $else = 1;
        }
        if($else == 0){
          echo "<option>Rupture de stock</option></select></div></div></div></div></form>";
        }
        else {
        echo "</select>
            </div>
            </div>
            <br>
            <div class='row'>
              <div class='col'>
                <select id='Quantité' name='q'>
                  <nom>Quantité</nom>
                  <option valeur='1'>1</option>
                  <option valeur='2'>2</option>
                  <option valeur='3'>3</option>
                  <option valeur='4'>4</option>
                  <option valeur='5'>5</option>
                </select>
              </div>
            </div>
            <br>
            <div class='row d-flex justify-content-between'>
              <div class='col'>
                <h3 class='left'>".$Prix.",00€ /u</h3>
              </div>
              <div class='col'>
                <input type='submit' value='Acheter'>
              </div>
            </div>
            <div class='row'>
              <img></img>
            </div>
          </div>

        </div>

      </form>";}
      ?>

    </div>

  </container>
</div>
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
              Crée en 2022, L'Atelier Francais est engagé dans la production de vêtement 100% Français dans le respect de l'environnement.
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
</HTML>