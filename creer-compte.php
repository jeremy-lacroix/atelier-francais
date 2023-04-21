<?php

// Partie mot de passe
function check_mdp($mdp1, $mdp2) {
  if($mdp1 == $mdp2) {
    return True;
  }
  else {
    header('Location: register.php?id=1&badpass=Les mots de passent ne sont pas identiques');
  }
}

//Partie Mail
//Partie Mail
function check_mail($mail) {
  if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
    return True;
  }
  else {
    header('Location: register.php?id=2&badmail=Email invalide');
  }
}
    
//Vérif mail et mdp
$mdp1 = $_POST['password1'];
$mdp2 = $_POST['password2'];
$mail = $_POST['email'];

if (check_mdp($mdp1, $mdp2) and check_mail($mail)) {
  // connexion à la base de données
  $conn = mysqli_connect("mysql-atelier-francais.alwaysdata.net","268194_root","atelierfrancais","atelier-francais_panier");

  // Récup data et élimination des attaques SQLI
  $prenom = mysqli_real_escape_string($conn, $_REQUEST['prenom']);
  $nom = mysqli_real_escape_string($conn, $_REQUEST['nom']);
  $pays = mysqli_real_escape_string($conn, $_REQUEST['pays']);
  $adresse = mysqli_real_escape_string($conn, $_REQUEST['adresse']);
  $email = mysqli_real_escape_string($conn, $_REQUEST['email']);
  $tel = mysqli_real_escape_string($conn, $_REQUEST['telephone']);
  $mdp = mysqli_real_escape_string($conn, $_REQUEST['password1']);

  //REQUETE
  $sql = "INSERT INTO client (Prenom_client, Nom_client, Pays_client, Adresse_client, email_client, tel_client, mdp_client) VALUES ('$prenom', '$nom', '$pays', '$adresse', '$email', '$tel', '$mdp')" ;

  // Vérification de l'envoi
  if ($conn->query($sql) === TRUE) {header('Location: login.php?msg=Le compte a été créé ! Veuillez vous connecter ci dessous');}else {echo "Error: " . $sql . "<br>" . $conn->error;}

  $conn->close();
}

?>