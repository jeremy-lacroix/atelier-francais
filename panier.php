<?php
session_start();
include_once("fonctions-panier.php");

$erreur = false;

$action = (isset($_POST['action'])? $_POST['action']:null);
if($action !== null)
{
   if(!in_array($action,array('ajout', 'remove', 'suppression')))
   $erreur=true;

   //récupération des variables en POST
   $r = (isset($_POST['r'])? $_POST['r']:null);
   $l = (isset($_POST['l'])? $_POST['l']:null);
   $s = (isset($_POST['s'])? $_POST['s']:null);
   $p = (isset($_POST['p'])? $_POST['p']:null);
   $q = (isset($_POST['q'])? $_POST['q']:null);
   $superID = $r.$s;

   //Suppression des espaces verticaux
   $l = preg_replace('#\v#', '',$l);
   //On vérifie que $p est un float
   $p = floatval($p);

   if ($s == "xs"){
    $r += 10;
   }

   //On traite $q qui peut être un entier simple ou un tableau d'entiers
    
   if (is_array($q)){
      $QteArticle = array();
      $i=0;
      foreach ($q as $contenu){
         $QteArticle[$i++] = intval($contenu);
      }
   }
   else
   $q = intval($q);
    
}

if (!$erreur){
   switch($action){
      Case "ajout":
         ajouterArticle($r,$l,$s,$q,$p,$superID);
         break;

      Case "remove":
          enleverArticle($superID,$q);
          break;

      Case "suppression":
         supprimerArticle($superID);
         break;


      Default:
         break;
   }
}



echo '<?xml version="1.0" encoding="utf-8"?>';?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="icon" type="image/x-icon" href="/images/icon/logo.ico">
  <title>Atelier Français</title>


  <link href="style.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" type="text/css" />
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

        <container class="justify-content-center">
          <hr class="m-5">
          <!--
            <div class="row align-items-center justify-content-center pb-5">
              <div class="col-1 text-right">
                <a><h3><i class="fa-solid fa-xmark"></i></h3></a>
              </div>
              <div class="col-3 col-sm-3 text-center">
                <img class="img-fluid" style="max-height: 30vh; min-height: 15vh;" src="images/produit/0000001F.webp">
              </div>
              <div class="col-4 p-0">
                <div class="row-2">
                  <h5>Libelé</h5>
                </div>
                <div class="row-2">
                  <h5>Taille</h5>
                </div>
                <div class="row-2">
                  <h5>Prix</h5>
                </div>
                <div class="row-2">
                </div>
                <div class="row-2 m-0 d-flex align-items-center">
                    <a href="">
                      <h3><i class="fa-solid fa-circle-plus"></i></h3>
                    </a>
                    <h5>&nbsp1&nbsp</h5>
                    <a href="">
                      <h3><i class="fa-solid fa-circle-minus"></i></h3>
                    </a>
                </div>
              </div>
            </div>
-->

        <?php

        if (creationPanier())
        {
          $nbArticles=count($_SESSION['panier']['référenceProduit']);
          if ($nbArticles <= 0)
          echo "<div class='text-center'><tr><td>Votre panier est vide </ td></tr></div>";
          else
          {
            for ($i=0 ;$i < $nbArticles ; $i++)
            {
            echo "
              <div class='row align-items-center justify-content-center pb-5 m-0'>
                <div class='col-1 text-right'>

                  <form action='panier.php' method='post'>
                    <input type='hidden' name='action' value='suppression'>
                    <input type='hidden' name='r' value=".$_SESSION['panier']['référenceProduit'][$i].">
                    <input type='hidden' name='s' value=".$_SESSION['panier']['tailleProduit'][$i].">
                    <button type='submit' style='outline: none;' class='border-0 bg-white'><img src='images/icon/x-solid.svg' style='height: 3vh;'></img></button>
                  </form>

                </div>
                <div class='col-4 col-sm-3 text-center'>
                  <img class='img-fluid' style='max-height: 30vh; min-height: 15vh;' src='images/produit/".$_SESSION['panier']['référenceProduit'][$i]."F.webp'>
                </div>
                <div class='col-4 p-0'>
                  <div class='row-2 m-0'>
                    <h5>".htmlspecialchars($_SESSION['panier']['libelleProduit'][$i])." / Ref: ".htmlspecialchars($_SESSION['panier']['référenceProduit'][$i])."</h5>
                  </div>
                  <div class='row-2 m-0'>
                    <h5>".htmlspecialchars($_SESSION['panier']['tailleProduit'][$i])."</h5>
                  </div>
                  <div class='row-2 m-0'>
                    <h5>".htmlspecialchars($_SESSION['panier']['prixProduit'][$i])." €</h5>
                  </div>
                  <div class='row-2 m-0'>
                  </div>
                  <div class='row-2 m-0 d-flex align-items-center'>

                    <form action='panier.php' method='post'>
                      <input type='hidden' name='action' value='remove'>
                      <input type='hidden' name='r' value=".$_SESSION['panier']['référenceProduit'][$i].">
                      <input type='hidden' name='s' value=".$_SESSION['panier']['tailleProduit'][$i].">
                      <input type='hidden' name='q' value='1'>
                      <button type='submit' style='outline: none;' class='border-0 bg-white'><img src='images/icon/circle-minus-solid.svg' style='height: 3vh;'></img></button>
                    </form>

                    <h5>&nbsp".$_SESSION['panier']['qteProduit'][$i]."&nbsp</h5>

                    <form action='panier.php' method='post'>
                      <input type='hidden' name='action' value='ajout'>
                      <input type='hidden' name='r' value=".$_SESSION['panier']['référenceProduit'][$i].">
                      <input type='hidden' name='l' value=".$_SESSION['panier']['libelleProduit'][$i].">
                      <input type='hidden' name='s' value=".$_SESSION['panier']['tailleProduit'][$i].">
                      <input type='hidden' name='q' value='1'>
                      <input type='hidden' name='p' value=".$_SESSION['panier']['prixProduit'][$i].">
                      <button type='submit' style='outline: none;' class='border-0 bg-white'><img src='images/icon/circle-plus-solid.svg' style='height: 3vh;'></img></button>
                    </form>
    
                  </div>
                </div>
              </div>";

            } 
          }
        }

        echo "
        <div class='text-center'> 
          Total : ".MontantGlobal()." €
        </div></br>";

        if (count($_SESSION['panier']['référenceProduit']) > 0)
        {

          echo "<div class='row justify-content-center m-0'>
                  <div class='col-12 col-md-4'>
                    <button id='btnPayment' onclick='changeClass()' class='btn btn-primary btn-block free-button'>Passer au paiement</button>
                  </div>
                </div>
                </container>";

        }
        

        echo "
        <container id='payement' class='Invisible'>
          <div class='row g-4 pb-4 justify-content-center m-0'>
            <div class='col-md-6'>  
            <a href='politique-protection-donnee.html' target='_blank'>Notre politique sur la protection des données <i class='fa-solid fa-arrow-up-right-from-square'></i></a>
                <br><br>
              <div class='card'>
                <div class='accordion' id='accordionExample'>

                  <div class='card'>
                    <div class='card-header p-0 id='headingTwo''>
                      <h2 class='mb-0'>
                        <button class='btn btn-light btn-block text-left p-3 rounded-0' data-toggle='collapse' data-target='#collapseThree' aria-expanded='true' aria-controls='collapseOne'>
                          <div class='d-flex align-items-center justify-content-between'>
                            <span>Informations Personelles</span>
                          </div>
                        </button>
                      </h2>
                    </div>
                    <div id='collapseThree' class='collapse show' aria-labelledby='headingTwo' data-parent='#accordionExample'>
                      <div class='card-body'>
                        <span>&nbsp* Nom :</span>
                        <input type='text' class='form-control' placeholder='Dupont' required>
                        <span>&nbsp* Prénom :</span>
                        <input type='text' class='form-control' placeholder='Dupont' required>
                        <span>&nbsp* Numéro de téléphone :</span>
                        <input type='tel' id='phone' name='phone' pattern='[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}' class='form-control' placeholder='06 00 00 00 00' required>
                        <span>&nbsp* Date de Naissance :</span>
                        <input type='date' class='form-control' min='1930-01-01' max='2005-12-31' required>
                      </div>
                    </div>
                  </div>

                  <div class='card'>
                    <div class='card-header p-0'>
                      <h2 class='mb-0'>
                        <button class='btn btn-light btn-block text-left p-3 rounded-0' data-toggle='collapse' data-target='#collapseFor' aria-expanded='false' aria-controls='collapseOne'>
                          <div class='d-flex align-items-center justify-content-between'>
                            <span>Informations Livraison</span>
                            <div class='icons'>
                              <img src='images/panier/coli.svg' width='70'>
                            </div>
                          </div>
                        </button>
                      </h2>
                    </div>
                    <div id='collapseFor' class='collapse' aria-labelledby='headingOne' data-parent='#accordionExample'>
                      <div class='card-body payment-card-body'>
                        <span class='font-weight-normal card-text'>Adresse de Livraison</span>
                        <div class='input'>
                          <i class='fa-solid fa-house'></i>
                          <input type='text' class='form-control' placeholder='00 Avenue de la République' required>
                        </div> 
                        <div class='row my-3 mx-0'>
                          <div class='col-md-6'>
                            <span class='font-weight-normal card-text'>Code Postal</span>
                            <div class='input'>
                              <i class='fa-solid fa-envelopes-bulk'></i>
                              <input type='tel' class='form-control' placeholder='00000' pattern='[0-9]{5}' required>
                            </div>  
                          </div>
                          <div class='col-md-6'>
                            <span class='font-weight-normal card-text'>Ville</span>
                            <div class='input'>
                              <i class='fa-solid fa-city'></i>
                              <input type='text' class='form-control' placeholder='Paris' required>
                            </div> 
                          </div>
                        </div>
                      </div>
                    </div>

                  <div class='card'>
                    <div class='card-header p-0' >
                      <h2 class='mb-0'>
                        <button class='btn btn-light btn-block text-left collapsed p-3 rounded-0 border-bottom-custom' type='button' data-toggle='collapse' data-target='#collapseTwo' aria-expanded='false' aria-controls='collapseTwo'>
                          <div class='d-flex align-items-center justify-content-between'>
                            <span>Paypal</span>
                            <img src='https://i.imgur.com/7kQEsHU.png' width='30'>
                          </div>
                        </button>
                      </h2>
                    </div>
                    <div id='collapseTwo' class='collapse' aria-labelledby='headingTwo' data-parent='#accordionExample'>
                      <div class='card-body'>
                        <input type='email' class='form-control' placeholder='Paypal email'>
                      </div>
                    </div>
                  </div>

                  <div class='card'>
                    <div class='card-header p-0'>
                      <h2 class='mb-0'>
                        <button class='btn btn-light btn-block text-left p-3 rounded-0' data-toggle='collapse' data-target='#collapseOne' aria-expanded='true' aria-controls='collapseOne'>
                          <div class='d-flex align-items-center justify-content-between'>
                            <span>Credit card</span>
                            <div class='icons'>
                              <img src='https://i.imgur.com/2ISgYja.png' width='30'>
                              <img src='https://i.imgur.com/W1vtnOV.png' width='30'>
                              <img src='https://i.imgur.com/35tC99g.png' width='30'>
                              <img src='https://i.imgur.com/2ISgYja.png' width='30'>
                            </div>
                          </div>
                        </button>
                      </h2>
                    </div>
                    <div id='collapseOne' class='collapse' aria-labelledby='headingOne' data-parent='#accordionExample'>
                      <div class='card-body payment-card-body'>
                        <span class='font-weight-normal card-text'>Carte Bancaire</span>
                        <div class='input'>
                          <i class='fa fa-credit-card'></i>
                          <input type='tel' class='form-control' placeholder='0000 0000 0000 0000' pattern='[0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4}'>
                        </div> 
                        <div class='row my-3 mx-0'>
                          <div class='col-md-6'>
                            <span class='font-weight-normal card-text'>Date d'expiration</span>
                            <div class='input'>
                              <i class='fa fa-calendar'></i>
                              <input type='date' min='2022-05-24' max='2030-12-31' class='form-control' placeholder='MM/YY'>
                            </div>  
                          </div>
                          <div class='col-md-6'>
                            <span class='font-weight-normal card-text'>CVC/CVV</span>
                            <div class='input'>
                              <i class='fa fa-lock'></i>
                              <input type='tel' pattern='[0,9]-{3}' class='form-control' placeholder='000'>
                            </div> 
                          </div>
                        </div>
                        <span class='text-muted certificate-text'><i class='fa fa-lock'></i> Votre transaction est securisé par un certificat ssl</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class='row g-4 pb-4 pt-4 justify-content-center m-0'>
              <div class='col-md-12'>
                <div class='card'>
                  <div class='d-flex justify-content-between p-3'>
                    <div class='d-flex flex-column'>
                      <span>Montant Panier TTC</span>  
                    </div>
                    <div class='mt-1'>
                      <span>".MontantGlobal()." €</span>
                    </div>
                  </div>
                  <hr class='mt-0 line'>
                  <div class='d-flex justify-content-between p-3'>
                    <div class='d-flex flex-column'>
                      <span>Montant Panier HT</span>    
                    </div>
                    <div class='mt-1'>
                      <span>".MontantHT()." €</span>
                    </div>
                  </div>
                  <hr class='mt-0 line'>
                  <div class='mt-1'>
                    <div class='d-flex justify-content-between p-3'>
                      <span>Frais de livraison</span>
                      <span>5.00 €</span>  
                    </div>
                  </div>
                  <hr class='mt-0 line'>
                  <div class='mt-1'>
                    <div class='d-flex justify-content-between p-3'>
                      <span>TVA - 20 % <i class='fa fa-clock-o'></i></span>
                      <span>".Tva()." €</span> 
                    </div>
                  </div>
                  <hr class='mt-0 line'>
                  <div class='p-3 d-flex justify-content-between'>
                    <div class='d-flex flex-column'>
                      <span>Total à payer (TTC)</span>
                    </div>
                    <span>".MontantTT()." €</span>
                  </div>
                  <div class='d-flex'>
                    <button class='btn btn-primary btn-block free-button m-3' onclick='Annuler()'>Annuler</button> 
                    <button class='btn btn-primary btn-block free-button m-3'>Payer</button> 
                  </div>
                </div>
              </div>
            </div>
            <script>
              function changeClass() { 
                document.getElementById('payement').className = 'Visible';
                document.getElementById('btnPayment').className = 'Invisible';
              }
              function Annuler() {
                document.getElementById('payement').className ='Invisible';
                document.getElementById('btnPayment').className = 'btn btn-primary btn-block free-button';
              }
            </script>
        </container>";
        ?>
</body>
</html>