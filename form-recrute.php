<link href="style_form.css" rel="stylesheet" media="all">

<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="icon" type="image/x-icon" href="/images/icon/logo.ico">
  <title>Atelier Français - Produits</title>
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


<!-- BODY -->
<body>
    <div class="page-wrapper p-t-100 p-b-50" style="background: url(images/form-recrute/bg.jpg);background-size: cover;background-position: center;background-attachment: fixed;">
        <div class="wrapper wrapper--w900">
            <div class="card-6" style="border-top-width: 0px;border-right-width: 0px;border-bottom-width: 0px;border-left-width: 0px;">
                <div class="card-heading border-0">
                    <h1 class="title" style="color: black;">Postulez</h1>
                </div>
              
                <div class="card-body" style="border-right-width: 4.5;border-right-width: 4,5;border-right-width: 5px;border-left-width: 5px;border-top-width: 5px;border-bottom-width: 5px;">

                  <!-- FORMULAIRE -->
                  <form action="ScriptRecrute.php" method="POST">

                        <!-- Informations perso-->
                        <h3>&nbsp Informations personnelles</h3>
                        <div class="form-row">
                            
                            <div class="value">
                                <b>Nom</b>
                                <input class="input--style-6" type="text" name="nom" placeholder="*Nom" required>
                            </div>
                            
                            <div class="value">
                                <b>Prénom</b>
                                <input class="input--style-6" type="text" name="prenom" placeholder="*Prénom" required>
                            </div>
                            
                            <div class="value">
                                <b>Adresse E-Mail</b>
                                <input class="input--style-6" type="text" name="email" placeholder="*exemple@exemple.com" required>
                            </div>
                            
                            <div class="value">
                                <b>Numéro de téléphone</b>
                                <input class="input--style-6" type="text" name="tel" placeholder="*01 02 03 04 05" required>
                            </div>
                            
                            <div class="value">
                                <b>Adresse</b>
                                <input class="input--style-6" type="text" name="adresse" placeholder="*Adresse" required>
                            </div>
                        </div>

                        <!-- LE POSTE-->
                        <div class="form-row">
                            
                            <div class="value">
                                <b>Quel poste désirez-vous ?</b>
                                <select class = "input-group" name="poste" required>
                                    <option value="Commercial">Commercial</option>
                                    <option value="Dev Full stack">Développeur full stack</option>
                                    <option value="Expert en cybersécurité">Expert en cybersécurité</option>
                                    <option value="Webmaster">Webmaster</option>
                                    <option value="Webdesigner">Webdesigner</option>
                                    <option value="Expert en référencement">Expert en référencement</option>
                                    <option value="Traffic manager">Traffic Manager</option>
                                    <option value="Spécialiste cloud computing">Spécialiste du Cloud Computing</option>
                                </select>
                            </div>

                            
                            <div class="value">
                                <b>Votre situation</b>
                                <select class = "input-group" name="status" required>
                                    <option value="Employé">Employé(e)</option>
                                    <option value="Sans emploi">Sans emploi</option>
                                    <option value="Indépendant">Indépendant(e)</option>
                                    <option value="Étudiant">Étudiant</option>
                                    <option value="Autre">Autre</option>
                                </select>
                            </div>
                        </div>

                        <!-- MESSAGE -->

                        <div class="form-row">
                            <div class="value">
                                <b>Votre message</b>
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="message" placeholder="Votre message..." required></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- CV ET LETTRE MOTIV-->
                        <div class="form-row">
                            
                            <div class="value">
                                <div  class="mb-2">
                                    <b>Envoyer la lettre de motivation et le CV</b>
                                </div>
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="file_cv" id="file">
                                    <label class="label--file" for="file">Importer le CV</label>
                                    <br>
                                    <div class="px-2 mb-3">
                                        <span class="input-file__info">Aucun fichier selectionné</span>
                                    </div>
                                </div>

                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="file_motiv" id="file2">
                                    <label class="label--file" for="file2">Importer la lettre de motivation</label>
                                    <div class="px-2 mb-3">
                                        <span class="input-file__info">Aucun fichier selectionné</span>
                                    </div>
                                </div>

                                <p>Taille maximale 50 MB</p>

                            </div>
                        </div>
                      <div class="card-footer">
                        <input type="submit" class="btn btn-radius-2 btn--blue-2" id='submit' value='Envoyer' >
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Main JS-->
    <script src="js/global.js"></script>

<div>
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