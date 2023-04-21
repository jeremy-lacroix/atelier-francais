<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
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

<body>
	
<div class="productbg">
	<container class="container">
		<!-- TEE HOMME -->
		<div class="row pl-5 pr-5 m-0">
			<div class="col-sm-3 pt-5">
				<div class="card mx-auto border-0">
						<div class="product">
							<img class="card-img-top picture1" src="images/produit/1F.webp" alt="Card image cap">
					  	<img class="card-img-top picture2" src="images/produit/1B.webp" alt="Card image cap">
				  	</div>
				  	<div class="card-body">
					    <h5 class="card-title">T-Shirt HOMME- Coton</h5>
					    <div class="d-flex row justify-content-between">
					    	<?php $cpt += 1;
					    		echo "<a href='detail-produit.php?prod=".$cpt."'class='ml-3 3 btn btn-secondary' >Fiche Produit</a>";
					    	?>
					    	<h3 class="mr-3 rounded text-info">40,00€<?php $prix ?></h3>
					    </div>
				  	</div>
				</div>
			</div>
			<div class="col-sm-3 pt-5">
				<div class="card mx-auto product border-0">
				  <img class="card-img-top picture1" src="images/produit/2F.webp" alt="Card image cap">
				  <img class="card-img-top picture2" src="images/produit/2B.webp" alt="Card image cap">
				  <div class="card-body">
				    <h5 class="card-title">T-Shirt HOMME- Coton</h5>
				    <div class="d-flex row justify-content-between">
				    		<?php $cpt += 1;
					    		echo "<a href='detail-produit.php?prod=".$cpt."'class='ml-3 3 btn btn-secondary' >Fiche Produit</a>";
					    	?>
				    	<h3 class="mr-3 rounded text-info">40,00€<?php $prix ?></h3>
				    </div>
				  </div>
				</div>
			</div>
			<div class="col-sm-3 pt-5">
				<div class="card mx-auto product border-0">
				  <img class="card-img-top picture1" src="images/produit/3F.webp" alt="Card image cap">
				  <img class="card-img-top picture2" src="images/produit/3B.webp" alt="Card image cap">
				  <div class="card-body">
				    <h5 class="card-title">T-Shirt HOMME- Coton</h5>
				    <div class="d-flex row justify-content-between">
				    		<?php $cpt += 1;
					    		echo "<a href='detail-produit.php?prod=".$cpt."'class='ml-3 3 btn btn-secondary' >Fiche Produit</a>";
					    	?>
				    	<h3 class="mr-3 rounded text-info">40,00€<?php $prix ?></h3>
				    </div>
				  </div>
				</div>
			</div>
			<div class="col-sm-3 pt-5">
				<div class="card mx-auto product border-0">
				  <img class="card-img-top picture1" src="images/produit/4F.webp" alt="Card image cap">
				  <img class="card-img-top picture2" src="images/produit/4B.webp" alt="Card image cap">
				  <div class="card-body">
				    <h5 class="card-title">T-Shirt HOMME - Coton</h5>
				    <div class="d-flex row justify-content-between">
				    		<?php $cpt += 1;
					    		echo "<a href='detail-produit.php?prod=".$cpt."'class='ml-3 3 btn btn-secondary' >Fiche Produit</a>";
					    	?>
				    	<h3 class="mr-3 rounded text-info">40,00€<?php $prix ?></h3>
				    </div>
				  </div>
				</div>
			</div>
			<div class="col-sm-3 pt-5">
				<div class="card mx-auto product border-0">
				  <img class="card-img-top picture1" src="images/produit/5F.webp" alt="Card image cap">
				  <img class="card-img-top picture2" src="images/produit/5B.webp" alt="Card image cap">
				  <div class="card-body">
				    <h5 class="card-title">T-Shirt HOMME - Coton</h5>
				    <div class="d-flex row justify-content-between">
				    		<?php $cpt += 1;
					    		echo "<a href='detail-produit.php?prod=".$cpt."'class='ml-3 3 btn btn-secondary' >Fiche Produit</a>";
					    	?>
				    	<h3 class="mr-3 rounded text-info">40,00€<?php $prix ?></h3>
				    </div>
				  </div>
				</div>
			</div>
			<div class="col-sm-3 pt-5">
				<div class="card mx-auto product border-0">
				  <img class="card-img-top picture1" src="images/produit/6F.webp" alt="Card image cap">
				  <img class="card-img-top picture2" src="images/produit/6B.webp" alt="Card image cap">
				  <div class="card-body">
				    <h5 class="card-title">T-Shirt HOMME - Coton</h5>
				    <div class="d-flex row justify-content-between">
				    		<?php $cpt += 1;
					    		echo "<a href='detail-produit.php?prod=".$cpt."'class='ml-3 3 btn btn-secondary' >Fiche Produit</a>";
					    	?>
				    	<h3 class="mr-3 rounded text-info">40,00€<?php $prix ?></h3>
				    </div>
				  </div>
				</div>
			</div>
			<div class="col-sm-3 pt-5">
				<div class="card mx-auto product border-0">
				  <img class="card-img-top picture1" src="images/produit/7F.webp" alt="Card image cap">
				  <img class="card-img-top picture2" src="images/produit/7B.webp" alt="Card image cap">
				  <div class="card-body">
				    <h5 class="card-title">T-Shirt HOMME - Coton</h5>
				    <div class="d-flex row justify-content-between">
				    		<?php $cpt += 1;
					    		echo "<a href='detail-produit.php?prod=".$cpt."'class='ml-3 3 btn btn-secondary' >Fiche Produit</a>";
					    	?>
				    	<h3 class="mr-3 rounded text-info">40,00€<?php $prix ?></h3>
				    </div>
				  </div>
				</div>
			</div>
			<div class="col-sm-3 pt-5">
				<div class="card mx-auto product border-0">
				  <img class="card-img-top picture1" src="images/produit/8F.webp" alt="Card image cap">
				  <img class="card-img-top picture2" src="images/produit/8B.webp" alt="Card image cap">
				  <div class="card-body">
				    <h5 class="card-title">T-Shirt HOMME - Coton</h5>
				    <div class="d-flex row justify-content-between">
				    		<?php $cpt += 1;
					    		echo "<a href='detail-produit.php?prod=".$cpt."'class='ml-3 3 btn btn-secondary' >Fiche Produit</a>";
					    	?>
				    	<h3 class="mr-3 rounded text-info">40,00€<?php $prix ?></h3>
				    </div>
				  </div>
				</div>
			</div>
			<div class="col-sm-3 pt-5">
				<div class="card mx-auto product border-0">
				  <img class="card-img-top picture1" src="images/produit/9F.webp" alt="Card image cap">
				  <img class="card-img-top picture2" src="images/produit/9B.webp" alt="Card image cap">
				  <div class="card-body">
				    <h5 class="card-title">T-Shirt HOMME - Coton</h5>
				    <div class="d-flex row justify-content-between">
				    		<?php $cpt += 1;
					    		echo "<a href='detail-produit.php?prod=".$cpt."'class='ml-3 3 btn btn-secondary' >Fiche Produit</a>";
					    	?>
				    	<h3 class="mr-3 rounded text-info">40,00€<?php $prix ?></h3>
				    </div>
				  </div>
				</div>
			</div>

			<!-- POLO -->

			<div class="col-sm-3 pt-5">
				<div class="card mx-auto product border-0">
				  <img class="card-img-top picture1" src="images/produit/10F.webp" alt="Card image cap" style="max-height: 62vh">
				  <img class="card-img-top picture2" src="images/produit/10B.webp" alt="Card image cap" style="max-height: 62vh">
				  <div class="card-body">
				    <h5 class="card-title">Polo HOMME - Coton <a class="text-success">Bio</a> Certifié OCS100</h5>
				    <div class="d-flex row justify-content-between">
				    		<?php $cpt += 1;
					    		echo "<a href='detail-produit.php?prod=".$cpt."'class='ml-3 3 btn btn-secondary' >Fiche Produit</a>";
					    	?>
				    	<h3 class="mr-3 rounded text-info">80,00€<?php $prix ?></h3>
				    </div>
				  </div>
				</div>
			</div>
			<div class="col-sm-3 pt-5">
				<div class="card mx-auto product border-0">
				  <img class="card-img-top picture1" src="images/produit/11F.webp" alt="Card image cap" style="max-height: 62vh">
				  <img class="card-img-top picture2" src="images/produit/11B.webp" alt="Card image cap" style="max-height: 62vh">
				  <div class="card-body">
				    <h5 class="card-title">Polo HOMME - Coton <a class="text-success">Bio</a> Certifié OCS100</h5>
				    <div class="d-flex row justify-content-between">
				    		<?php $cpt += 1;
					    		echo "<a href='detail-produit.php?prod=".$cpt."'class='ml-3 3 btn btn-secondary' >Fiche Produit</a>";
					    	?>
				    	<h3 class="mr-3 rounded text-info">80,00€<?php $prix ?></h3>
				    </div>
				  </div>
				</div>
			</div>
			<div class="col-sm-3 pt-5">
				<div class="card mx-auto product border-0">
				  <img class="card-img-top picture1" src="images/produit/12F.webp" alt="Card image cap" style="max-height: 62vh">
				  <img class="card-img-top picture2" src="images/produit/12B.webp" alt="Card image cap" style="max-height: 62vh">
				  <div class="card-body">
				    <h5 class="card-title">Polo HOMME - Coton <a class="text-success">Bio</a> Certifié OCS100</h5>
				    <div class="d-flex row justify-content-between">
				    		<?php $cpt += 1;
					    		echo "<a href='detail-produit.php?prod=".$cpt."'class='ml-3 3 btn btn-secondary' >Fiche Produit</a>";
					    	?>
				    	<h3 class="mr-3 rounded text-info">80,00€<?php $prix ?></h3>
				    </div>
				  </div>
				</div>
			</div>
			<div class="col-sm-3 pt-5">
				<div class="card mx-auto product border-0">
				  <img class="card-img-top picture1" src="images/produit/13F.webp" alt="Card image cap" style="max-height: 62vh">
				  <img class="card-img-top picture2" src="images/produit/13B.webp" alt="Card image cap" style="max-height: 62vh">
				  <div class="card-body">
				    <h5 class="card-title">Polo HOMME - Coton <a class="text-success">Bio</a> Certifié OCS100</h5>
				    <div class="d-flex row justify-content-between">
				    		<?php $cpt += 1;
					    		echo "<a href='detail-produit.php?prod=".$cpt."'class='ml-3 3 btn btn-secondary' >Fiche Produit</a>";
					    	?>
				    	<h3 class="mr-3 rounded text-info">80,00€<?php $prix ?></h3>
				    </div>
				  </div>
				</div>
			</div>
			<div class="col-sm-3 pt-5">
				<div class="card mx-auto product border-0">
				  <img class="card-img-top picture1" src="images/produit/14F.webp" alt="Card image cap" style="max-height: 62vh">
				  <img class="card-img-top picture2" src="images/produit/14B.webp" alt="Card image cap" style="max-height: 62vh">
				  <div class="card-body">
				    <h5 class="card-title">Polo HOMME - Coton <a class="text-success">Bio</a> Certifié OCS100</h5>
				    <div class="d-flex row justify-content-between">
				    		<?php $cpt += 1;
					    		echo "<a href='detail-produit.php?prod=".$cpt."'class='ml-3 3 btn btn-secondary' >Fiche Produit</a>";
					    	?>
				    	<h3 class="mr-3 rounded text-info">80,00€<?php $prix ?></h3>
				    </div>
				  </div>
				</div>
			</div>
			<div class="col-sm-3 pt-5">
				<div class="card mx-auto product border-0">
				  <img class="card-img-top picture1" src="images/produit/15F.webp" alt="Card image cap" style="max-height: 62vh">
				  <img class="card-img-top picture2" src="images/produit/15B.webp" alt="Card image cap" style="max-height: 62vh">
				  <div class="card-body">
				    <h5 class="card-title">Polo HOMME - Coton <a class="text-success">Bio</a> Certifié OCS100</h5>
				    <div class="d-flex row justify-content-between">
				    		<?php $cpt += 1;
					    		echo "<a href='detail-produit.php?prod=".$cpt."'class='ml-3 3 btn btn-secondary' >Fiche Produit</a>";
					    	?>
				    	<h3 class="mr-3 rounded text-info">80,00€<?php $prix ?></h3>
				    </div>
				  </div>
				</div>
			</div>
			<div class="col-sm-3 pt-5">
				<div class="card mx-auto product border-0">
				  <img class="card-img-top picture1" src="images/produit/16F.webp" alt="Card image cap" style="max-height: 62vh">
				  <img class="card-img-top picture2" src="images/produit/16B.webp" alt="Card image cap" style="max-height: 62vh">
				  <div class="card-body">
				    <h5 class="card-title">Polo FEMME - Coton <a class="text-success">Bio</a> Certifié OCS100</h5>
				    <div class="d-flex row justify-content-between">
				    		<?php $cpt += 1;
					    		echo "<a href='detail-produit.php?prod=".$cpt."'class='ml-3 3 btn btn-secondary' >Fiche Produit</a>";
					    	?>
				    	<h3 class="mr-3 rounded text-info">80,00€<?php $prix ?></h3>
				    </div>
				  </div>
				</div>
			</div>
			<div class="col-sm-3 pt-5">
				<div class="card mx-auto product border-0">
				  <img class="card-img-top picture1" src="images/produit/17F.webp" alt="Card image cap" style="max-height: 62vh">
				  <img class="card-img-top picture2" src="images/produit/17B.webp" alt="Card image cap" style="max-height: 62vh">
				  <div class="card-body">
				    <h5 class="card-title">Polo FEMME - Coton <a class="text-success">Bio</a> Certifié OCS100</h5>
				    <div class="d-flex row justify-content-between">
				    		<?php $cpt += 1;
					    		echo "<a href='detail-produit.php?prod=".$cpt."'class='ml-3 3 btn btn-secondary' >Fiche Produit</a>";
					    	?>
				    	<h3 class="mr-3 rounded text-info">80,00€<?php $prix ?></h3>
				    </div>
				  </div>
				</div>
			</div>
			<div class="col-sm-3 pt-5">
				<div class="card mx-auto product border-0">
				  <img class="card-img-top picture1" src="images/produit/18F.webp" alt="Card image cap" style="max-height: 62vh">
				  <img class="card-img-top picture2" src="images/produit/18B.webp" alt="Card image cap" style="max-height: 62vh">
				  <div class="card-body">
				    <h5 class="card-title">Polo FEMME - Coton <a class="text-success">Bio</a> Certifié OCS100</h5>
				    <div class="d-flex row justify-content-between">
				    		<?php $cpt += 1;
					    		echo "<a href='detail-produit.php?prod=".$cpt."'class='ml-3 3 btn btn-secondary' >Fiche Produit</a>";
					    	?>
				    	<h3 class="mr-3 rounded text-info">80,00€<?php $prix ?></h3>
				    </div>
				  </div>
				</div>
			</div>
			<div class="col-sm-3 pt-5">
				<div class="card mx-auto product border-0">
				  <img class="card-img-top picture1" src="images/produit/19F.webp" alt="Card image cap" style="max-height: 62vh">
				  <img class="card-img-top picture2" src="images/produit/19B.webp" alt="Card image cap" style="max-height: 62vh">
				  <div class="card-body">
				    <h5 class="card-title">Polo FEMME - Coton <a class="text-success">Bio</a> Certifié OCS100</h5>
				    <div class="d-flex row justify-content-between">
				    		<?php $cpt += 1;
					    		echo "<a href='detail-produit.php?prod=".$cpt."'class='ml-3 3 btn btn-secondary' >Fiche Produit</a>";
					    	?>
				    	<h3 class="mr-3 rounded text-info">80,00€<?php $prix ?></h3>
				    </div>
				  </div>
				</div>
			</div>
			<div class="col-sm-3 pt-5">
				<div class="card mx-auto product border-0">
				  <img class="card-img-top picture1" src="images/produit/20F.webp" alt="Card image cap" style="max-height: 62vh">
				  <img class="card-img-top picture2" src="images/produit/20B.webp" alt="Card image cap" style="max-height: 62vh">
				  <div class="card-body">
				    <h5 class="card-title">Polo FEMME - Coton <a class="text-success">Bio</a> Certifié OCS100</h5>
				    <div class="d-flex row justify-content-between">
				    		<?php $cpt += 1;
					    		echo "<a href='detail-produit.php?prod=".$cpt."'class='ml-3 3 btn btn-secondary' >Fiche Produit</a>";
					    	?>
				    	<h3 class="mr-3 rounded text-info">80,00€<?php $prix ?></h3>
				    </div>
				  </div>
				</div>
			</div>
			<div class="col-sm-3 pt-5">
				<div class="card mx-auto product border-0">
				  <img class="card-img-top picture1" src="images/produit/21F.webp" alt="Card image cap" style="max-height: 62vh">
				  <img class="card-img-top picture2" src="images/produit/21B.webp" alt="Card image cap" style="max-height: 62vh">
				  <div class="card-body">
				    <h5 class="card-title">Polo FEMME - Coton <a class="text-success">Bio</a> Certifié OCS100</h5>
				    <div class="d-flex row justify-content-between">
				    		<?php $cpt += 1;
					    		echo "<a href='detail-produit.php?prod=".$cpt."'class='ml-3 3 btn btn-secondary' >Fiche Produit</a>";
					    	?>
				    	<h3 class="mr-3 rounded text-info">80,00€<?php $prix ?></h3>
				    </div>
				  </div>
				</div>
			</div>
			<div class="col-sm-3 pt-5">
				<div class="card mx-auto product border-0">
				  <img class="card-img-top picture1" src="images/produit/22F.webp" alt="Card image cap" style="max-height: 62vh">
				  <img class="card-img-top picture2" src="images/produit/22B.webp" alt="Card image cap" style="max-height: 62vh">
				  <div class="card-body">
				    <h5 class="card-title">Polo FEMME - Coton <a class="text-success">Bio</a> Certifié OCS100</h5>
				    <div class="d-flex row justify-content-between">
				    		<?php $cpt += 1;
					    		echo "<a href='detail-produit.php?prod=".$cpt."'class='ml-3 3 btn btn-secondary' >Fiche Produit</a>";
					    	?>
				    	<h3 class="mr-3 rounded text-info">80,00€<?php $prix ?></h3>
				    </div>
				  </div>
				</div>
			</div>



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
</HTML>