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
            <a href="index.php" class="text-decoration-none"><i class="fa-solid fa-arrow-left" ></i>&nbsp Retour</a>
            <form action="verification.php" method="POST">
                <h1>Connexion</h1>
                <?php
                  if(isset($_GET['msg']))
                  {
                    echo $_GET['msg']."<br>";
                  }
                ?>
                <label><b>Adresse e-mail</b></label>
                <input class='form-control' type="text" placeholder="Entrer votre adresse mail" name="email" required>

                <label><b>Mot de passe</b></label>
                <input class='form-control' type="password" placeholder="Entrer votre mot de passe" name="password" required>

                <input class='form-control' type="submit" id='submit' value='LOGIN'>
                <?php
                if(isset($_GET['erreur'])){

                  $err = $_GET['erreur'];

                  if($err==1 || $err==2){
                    echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                  }
                }
                ?>
                <a href="politique-protection-donnee.html" target="_blank" class="underline">Notre politique sur la protection des données <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                <br><br>
                <p>Nouveau membre ?</p>
                <a href="register.php">Créer un compte</a>

            </form>
        </div>
      </div>
    </div>
  </container>
</body>