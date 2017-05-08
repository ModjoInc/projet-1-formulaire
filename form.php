<!DOCTYPE HTML>
<html>

 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Résultats formulaire</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
 </head>

 </head>

 <body>
  <header>
  </header>

    <section>
      <div class="well">
        <h1>Données du formulaire</h1>
        <p><?php
        $user_nom = $_POST['nom'];
        $user_prenom = $_POST['prenom'];
        $mail = $_POST["email"];
        $genre = $_POST["genre"];
        $pays = $_POST["pays"];
        $problem = $_POST["problem"];
        $mess = $_POST["message"];
        ?></p>
        <p><?php
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
