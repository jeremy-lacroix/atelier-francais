<?php
  $nom = htmlentities($_POST['nom']);
  $prenom = htmlentities($_POST['prenom']);
  $email = htmlentities($_POST['email']);
  $tel = htmlentities($_POST['tel']);
  $adresse = htmlentities($_POST['adresse']);
  // Ville département ?
  $poste = htmlentities($_POST['poste']);
  $status = htmlentities($_POST['status']);
  //Date ?
  $msg = htmlentities($_POST['message']);

  //SCRIP ENVOI MAIL
  $destinataire = 'atelier-francais@alwaysdata.net';
  // Pour les champs $expediteur / $copie / $destinataire, séparer par une virgule sil y a plusieurs adresses
  $expediteur = $_POST['email'];

  $objet = "Recrutement";

  $headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME
  $headers .= 'Content-type: text/html; charset=ISO-8859-1'."\n"; // l'en-tete Content-type pour le format HTML
  $headers .= 'To: '.$destinataire."\n"; // Mail de reponse
  $headers .= 'From:<'.$expediteur.'>'."\n"; // Expediteur

  //Structure du msg
  $message =  '<div style="width: 100%; text-align: center; font-weight: bold">'.

  '<br>'.'Nom : '.$nom.'<br>'.
  '<br>'.'Prénom : '.$prenom.'<br>'.
  '<br>'.'E-mail : '.$email.'</div>'.
  '<br>'.'Téléphone : '.$tel.'<br>'.
  '<br>'.'Adresse : '.$adresse.'<br>'.
  '<br>'.'Poste : '.$poste.'<br>'.
  '<br>'.'Status : '.$status.'<br>'.
  '<br>'.'message : '.$msg.'<br>'.
  '<br>'.'Fichier cv : '.$_FILES['file_cv'].'<br>'.
  '<br>'.'Fichier motiv : '.$_FILES['file_motiv'];
    
  if(mail($destinataire, $objet, $message, $headers))
  {
  header('Location: Redirection.html');
  }
  else // Non envoyé
  {
    echo '<script type="javascript">alert("Votre message n\'a pas pu être envoyé");</script>';
  }
?>