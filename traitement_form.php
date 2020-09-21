<?php
    // S'il y des données de postées
    if ($_SERVER['REQUEST_METHOD']=='POST') {
     
      // Récupération des variables et sécurisation des données
      $nom = htmlentities($_POST['nom']); 
      $mail = htmlentities($_POST['email']);
      $message = htmlentities($_POST['message']);
     
      // Variables concernant l'email
     
      $destinataire = 'philippeamarger.pro@gmail.com';

      $contenu = '<html><body>';
      $contenu .= '<p>Tu as un nouveau message !</p>';
      $contenu .= '<p><strong>Nom</strong>: '.$nom.'</p>';
      $contenu .= '<p><strong>Email</strong>: '.$mail.'</p>';
      $contenu .= '<p><strong>Message</strong>: '.nl2br($message).'</p>';
      $contenu .= '</body></html>'; // Contenu du message de l'email (en XHTML)
     
      // email HTML
      $headers = 'MIME-Version: 1.0'."\r\n";
      $headers .= 'Content-type: text/html; charset=UTF-8'."\r\n";
     
      // Envoyer l'email
      mail($destinataire, $objet, $contenu, $headers); // Fonction principale qui envoi l'email
      header("location:contact.php?send=success");
    }
    ?>