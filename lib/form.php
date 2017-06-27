<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST["submit"])) {

  //methode sanitization
    $options = array(
      'nom' => FILTER_SANITIZE_STRING,
      'prenom' => FILTER_SANITIZE_STRING,
      'problem'=> FILTER_SANITIZE_STRING,
      'email' => FILTER_SANITIZE_EMAIL,
      'message' => FILTER_SANITIZE_STRING);

      $result = filter_input_array(INPUT_POST, $options);

      if ($result != null AND $result!= FALSE){
           $message3 = "Tous les champs ont été nettoyés !";
        }  else  {
           $message3 =  "Un champs est vide ou n'est pas correct!";
        }

    //methode validation
    $errors='';

      if ($_POST['nom'] != "") {
      $_POST['nom'] = trim($_POST['nom']);
      if ($_POST['nom'] == "") {
      $errors .= 'Entrez votre nom.<br/><br/>';
      }
      } else {
      $errors .= 'Le nom est mal écrit.<br/>';
      }

    if ($_POST['prenom'] != "") {
      $_POST['prenom'] = trim($_POST['prenom']);
      if ($_POST['prenom'] == "") {
      $errors .= 'Entrez votre prénom.<br/><br/>';
      }
      } else {
      $errors .= 'Le prénom est mal écrit.<br/>';
      }

    if ($_POST['problem'] != "") {
      $_POST['problem'] = trim($_POST['problem']);
      if ($_POST['problem'] == "") {
      $errors .= 'Quel est votre problème?<br/><br/>';
      }
      } else {
      $errors .= 'Veuillez décrire le type de problème rencontré.<br/>';
      }


    if ($_POST['email'] != "") {
     $email = trim($_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors .= $email . "n'est  <strong>pas</strong> un format valide.<br/><br/>";
        }
        } else {
        $errors .= 'Veuillez écrire une adresse mail valide<br/>';
      }

    if ($_POST['message'] != "") {
       $_POST['message'] = trim($_POST['message']);
    if ($_POST['message'] == "") {
       $errors .= 'Veuillez écrire un message décrivant votre problème.<br/>';
       }
       } else {
       $errors .= 'Veuillez décrire votre problème.<br/>';
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
        $message2 =  'Votre mail a bien été envoyé au support technique';
      } else {
        $message2 = 'erreur lors de l\'envoi';
      }
}

?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Envoi du formulaire</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link rel="shortcut icon" type="/image/png" href="../favicon.png"/>
  </head>
  <body>
    <header class="subheader">
      <h2>Merci!</h2>
    </header>

    <section>
      <div class="col-md well">
      <?php
      if ($errors) {
        echo $errors . '<br />';
      } else {
        echo $message3 . '<br />';
        echo $message2 . '<br />';
      }
       ?>
     </div>
    </section>
  </body>
</html>
