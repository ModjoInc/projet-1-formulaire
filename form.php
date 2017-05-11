<!DOCTYPE HTML>
<html>

 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Résultats formulaire</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/png" href="favicon.png"/>
 </head>

 </head>

 <body>
  <header>
  </header>

    <section>
      <div class="well">


        <h1>Données du formulaire</h1>
        <p></p>
        <p><?php
          if (isset($_POST["submit"])) {
            $errors='';

                if ($_POST['nom'] != "") {
                $_POST['nom'] = trim(filter_var($_POST['nom'], FILTER_SANITIZE_STRING));
                if ($_POST['nom'] == "") {
                $errors .= 'Entrez votre nom.<br/><br/>';
                }
                } else {
                $errors .= 'Le nom est mal écrit.<br/>';
                }

              if ($_POST['prenom'] != "") {
                $_POST['prenom'] = trim(filter_var($_POST['prenom'], FILTER_SANITIZE_STRING));
                if ($_POST['prenom'] == "") {
                $errors .= 'Entrez votre prénom.<br/><br/>';
                }
                } else {
                $errors .= 'Le prénom est mal écrit.<br/>';
                }

              if ($_POST['problem'] != "") {
                $_POST['problem'] = trim(filter_var($_POST['problem'], FILTER_SANITIZE_STRING));
                if ($_POST['problem'] == "") {
                $errors .= 'Quel est votre problème?<br/><br/>';
                }
                } else {
                $errors .= 'Veuillez décrire le type de problème rencontré.<br/>';
                }


               if ($_POST['email'] != "") {
               $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
                  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $errors .= "$email n'est  <strong>pas</strong> un format valide.<br/><br/>";
                  }
                  } else {
                  $errors .= 'Veuillez écrire une adresse mail valide<br/>';
                }

             if ($_POST['message'] != "") {
               $_POST['message'] = trim(filter_var($_POST['message'], FILTER_SANITIZE_STRING));
             if ($_POST['message'] == "") {
               $errors .= 'Veuillez écrire un message décrivant votre problème.<br/>';
               }
               } else {
               $errors .= 'Veuillez décrire votre problème.<br/>';
             }

             /*if (!$errors) {
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
              }
            }*/


        echo "<br/>";
        echo("Votre nom est:" . " " . $_POST["nom"]);
        echo "<br/>";
        echo("Votre prénom est:" ." " . $_POST["prenom"]);
        echo "<br/>";
        echo("Votre Adresse Mail est:" ." " . $_POST["email"]);
        echo "<br/>";
        echo("Votre Sexe est:" ." " . $_POST["genre"]);
        echo "<br/>";
        echo("Vous résidez en:" ." " . $_POST["pays"]);
        echo "<br/>";
        echo("Vous nous contactez pour ce problème:" ." " . $_POST["problem"]);
        echo "<br/>";
        echo("Message :" ." " . $_POST["message"]);
        echo "<br/>";
         ?></p>
     </div>

    </section>
 </body>
</html>
