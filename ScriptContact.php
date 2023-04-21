<?php
    $destinataire = 'atelierfrancais.pro@gmail.com';
    // Pour les champs $expediteur / $copie / $destinataire, séparer par une virgule s'il y a plusieurs adresses
    $expediteur = $_POST['email'];

    $objet = $_POST['objet'];

    $headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME
    $headers .= 'Content-type: text/html; charset=ISO-8859-1'."\n"; // l'en-tete Content-type pour le format HTML
    $headers .= 'To: '.$destinataire."\n"; // Mail de reponse
    $headers .= 'From:<'.$expediteur.'>'."\n"; // Expediteur

    $message =  '<div style="width: 100%; text-align: center; font-weight: bold">'.
    '<br>'.'Email : '.$_POST['email'].'<br>'.
    '<br>'.'Message : '.$_POST['message'].'<br>'.
    '<br>'.'Téléphone : '.$_POST['tel'].'</div>';

    if(mail($destinataire, $objet, $message, $headers))
    {
        header('Location: Redirection.html');
    }
    else // Non envoyé
    {
        echo '<script type="javascript">alert("Votre message n\'a pas pu être envoyé");</script>';
    }
    
?>