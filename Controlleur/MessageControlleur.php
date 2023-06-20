<?php
require_once("../PHPMailer/PHPMailer/src/PHPMailer.php");
require_once("../PHPMailer/PHPMailer/src/SMTP.php");
require_once("../PHPMailer/PHPMailer/src/Exception.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

    function sendEmail($from_email,$from_name,$subject, $message ,$add_name, $add_email) {
       $mail = new PHPMailer(true);
 
       try {
          // Paramètres d'envoi d'email
          $mail->isSMTP();
          $mail->Host = 'smtp.gmail.com';
          $mail->SMTPAuth = true;
          $mail->Username = $from_email;
          $mail->Password = '';
          $mail->SMTPSecure = 'tls';
          $mail->Port = 587;
 
          // Récupère les données du modèle
          //$to = 'solomampion.odil13@gmail.com';
          //$subject = 'Essaie code PHP';
          //$message = 'Le code est reussi';
          //m.achatetstock@bionexx.com
          //'mmppuxmkliwhibwc'
 
          // Définit les paramètres d'email
          $mail->setFrom($from_email,$from_name);
          $mail->addAddress($add_email, $add_name);
          $mail->isHTML(true);
          $mail->Subject = $subject;
          $mail->Body = $message;
          $mail->setLanguage('fr', '/optional/path/to/language/directory/');
 
          // Envoie l'email
          if(!$mail->send()){
          echo 'L\'email a été envoyé.';
          return false;
          }
          else{
            return true;
          }
       } catch (Exception $e) {
          // Gère les erreurs
          echo 'Le message n\'a pas pu être envoyé. Erreur: ', $mail->ErrorInfo;
       }
    }
       if(sendEmail($_POST['email'],$_POST['name'],$_POST['subject'],$_POST['message'],$_POST['nom'],$_POST['destinataire'])){
        echo "ok";
       }
       else{
        echo "une erreur s'est produit";
       }
    
?>
