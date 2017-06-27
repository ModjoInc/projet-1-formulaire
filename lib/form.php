<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST["submit"])) {
  //methode sanitization alternative
    $options = array(
      'nom' => FILTER_SANITIZE_STRING,
      'prenom' => FILTER_SANITIZE_STRING,
      'problem'=> FILTER_SANITIZE_STRING,
      'email' => FILTER_SANITIZE_EMAIL,
      'message' => FILTER_SANITIZE_STRING);

      $result = filter_input_array(INPUT_POST, $options);
      $errors=0;
      if ($result != null AND $result != FALSE){
           echo "Tous les champs ont été nettoyés !";
        }  else  {
           echo "Un champs est vide ou n'est pas correct!";
           $errors++;
        }

    if (!$errors) {
       $to = $_POST["email"];
       $subject = 'Mail pour le support technique';
       $headers = 'Mime-Version: 1.0'."\r\n";
       $headers .= 'Content-type: text/html; charset=utf-8'."\r\n";
       $headers .= "\r\n";
       $message  = 'De: ' . $_POST["nom"] . $_POST["prenom"] . "<br />";
       $message .= 'Email: ' . $_POST["email"] . "<br />";
       $message .= 'Type de problème: ' . $_POST["problem"] . "<br />";
       $message .= "Message:<br />" . $_POST["message"] . "<br />";
       $envoi = mail($to, $subject, $message, $headers);
        } else {
        echo '<div style="color: red">' . $errors . '<br/></div>';
      }

    if ($envoi) {
        echo 'Votre mail a bien été envoyé au support technique';
      } else {
        echo 'erreur lors de l\'envoi';
        echo $errors;
      }
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
