<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Support technique HP</title>
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
      <link rel="shortcut icon" type="image/png" href="favicon.png"/>
  </head>

  <body>

      <header>
        <h1>Bienvenue Ô client-sama</h1>
      </header>

    <section>

      <div class="subheader">
        <h2>Complètez ces quelques infos pour commencer</h2>
      </div>

      <form class="well form-horizontal" action="lib/form.php" method="POST" id="form_contact" data-toggle="validator">
        <fieldset>

          <div class="form-group">
            <label class="col-md-4 control-label" >Nom</label>
             <div class="col-md-5 inputGroupContainer">
               <div class="input-group">
                 <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                 <input  name="nom" placeholder="Nom" class="form-control" type="text" required>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label" >Prénom</label>
              <div class="col-md-5 inputGroupContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input name="prenom" placeholder="Prénom" class="form-control" type="text" required>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">E-Mail</label>
              <div class="col-md-5 inputGroupContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                  <input name="email" placeholder="E-Mail Address" class="form-control" type="text" required>
              </div>
            </div>
          </div>

          <div class="form-group">
              <label class="col-md-4 control-label">Sexe</label>
                <div class="col-md-5">
                  <div class="radio">
                      <label>
                          <input type="radio" name="genre" value="femme" /> Femme
                      </label>
                  </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="genre" value="homme" /> Homme
                        </label>
                    </div>
                  <div class="radio">
                      <label>
                          <input type="radio" name="genre" value="X" /> X
                      </label>
                  </div>
              </div>
          </div>

          <div class="form-group">
              <label class="col-md-4 control-label">Quel est votre problème ?</label>
                <div class="col-md-5">

                  <div class="checkbox">
                      <label>
                          <input type="checkbox" name="problem" value="commande" /> C'est ma commande
                      </label>
                  </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="problem" value="produit" /> C'est mon produit
                        </label>
                    </div>

                  <div class="checkbox">
                      <label>
                          <input type="checkbox" name="problem" value="livraison" /> C'est ma livraison
                      </label>
                  </div>
              </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Pays</label>
              <div class="col-md-5 selectContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                    <select name="pays" class="form-control selectpicker" >
                      <option value=" " >Sélectionner votre pays</option>
                      <option>Belgique</option>
                      <option>France</option>
                      <option>Pays-bas</option>
                      <option>Espagne</option>
                      <option>Angleterre</option>
                      <option >Italie</option>
                    </select>
                </div>
             </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Message</label>
              <div class="col-md-5 inputGroupContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                    <textarea class="form-control" name="message" placeholder="Décrivez ici votre problème" required>
                    </textarea>
                </div>
              </div>
          </div>

          <div class="alert alert-success" role="alert" id="success_message">tout est OK!
            <i class="glyphicon glyphicon-thumbs-up"></i>
              Merci de nous avoir contacté, nous vous répondrons le plus rapidement possible.
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label"></label>
              <div class="col-md-4">
                <button type="submit" name="submit" class="btn btn-warning" >Par ici la solution! <span class="glyphicon glyphicon-send"></span></button>
              </div>
          </div>

        </fieldset>

      </form>

    </section>

      <footer>
        <figure><img src="img/hackers-poulette-logo.png" alt="logo Hackers Poulette" />
          <figcaption>Hackers Poulette since 2017</figcaption>
        </figure>
      </footer>


      <!--jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>
      <script src="js/index.js"></script>
      <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
      <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
      <script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>

  </body>
</html>
