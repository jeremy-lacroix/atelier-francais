<?php
session_start();
if(isset($_POST['email']) && isset($_POST['password']))
{
    // connexion à la base de données
    $db_username = '268194_root';
    $db_password = 'atelierfrancais';
    $db_name     = 'atelier-francais_panier';
    $db_host     = 'mysql-atelier-francais.alwaysdata.net';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');
    
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $username = mysqli_real_escape_string($db,htmlspecialchars($_POST['email'])); 
    $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));
    
    if($username !== "" && $password !== "")
    {
        $requete = "SELECT count(*) FROM client where 
              email_client = '".$username."' and mdp_client = '".$password."' ";
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correcte
        {
           // AFFICHAGE PAGE PRINCIPALE
           $_SESSION['email'] = $_POST['email'];
           header('Location: index.php?login=1');
        }
        else
        {
           header('Location: login.php?erreur=1'); // email ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: login.php?erreur=2'); // email ou mot de passe vide
    }
}
else
{
   header('Location: login.php');
}
mysqli_close($db); // fermer la connexion
?>