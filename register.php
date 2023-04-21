<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="icon" type="image/x-icon" href="/images/icon/logo.ico">
  <title>Atelier Français - Login</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- LINK BURGER -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <!--FIN LINK BURGER -->
</head>

<body>
  <container class ="container">
    <div class="row justify-content-center align-item-center m-0">
      <div class="col-12 col-md-3">
        <div>
            <a href="login.php" class="text-decoration-none"><i class="fa-solid fa-arrow-left" ></i>&nbsp Retour</a>
            <form action="creer-compte.php" method="POST">
                <h1>Inscription</h1>

                <label><b>Prénom</b></label>
                <input type="text" placeholder="Prénom*" name="prenom" required>

                <label><b>Nom</b></label>
                <input type="text" placeholder="Nom*" name="nom" required>

                <label><b>Pays</b></label>
                <input type="text" placeholder="Pays*" name="pays" required>

                <label><b>Adresse</b></label>
                <input type="text" placeholder="Adresse*" name="adresse" required>

                <label><b>Adresse e-mail</b></label>
                <input id=2 type="text" placeholder="Adresse e-mail*" name="email" required>
                <?php
                    //BAD MAIL
                    if (isset($_GET['badmail'])) {
                        echo "<h3 style='text-align: center'>".$_GET['badmail']."</h2>";
                    }
                ?>

                <label><b>Téléphone</b></label>
                <input type="text" placeholder="Téléphone*" name="telephone" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Mot de passe*" name="password1" required>

                <input id=1 type="password" placeholder="Confirmer votre mot de passe*" name="password2" required>
                <?php
                    // BAD PASSWORD
                    if (isset($_GET['badpass'])) {
                        echo "<h2 style='text-align: center'>".$_GET['badpass']."</h2>";
                    }
                ?>
                <small>Tous les champs avec un * sont obligatoires</small><br><br>

                <!-- Affichage badmail et badpass-->                
                <input type="submit" id='submit' value='CRÉER UN COMPTE'>
                <a href="politique-protection-donnee.html" target="_blank" class="underline">Notre politique sur la protection des données <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                <br><br>

                <p>Déja un compte ?</p>
                <a href="login.php">Se connecter</a>
            </form>
        </div>
      </div>
    </div>
  </container>
</body>