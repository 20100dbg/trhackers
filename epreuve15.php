<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Epreuves Tr'hackers</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>


<main role="main" class="container">

  <div class="starter-template">
    <br>
    <p class="lead">Le flag sera révélé après connexion avec ce formulaire</p>

    <br>
    <?php
    $db = new PDO('mysql:host=localhost;dbname=trhackers', 'root','');
    $loggedIn = false;

    if (sizeof($_POST) > 0)
    {
      if (!empty($_POST['user']) && !empty($_POST['password']))
      {
        $sql = "SELECT id, user, password  FROM users
            WHERE user = '". $_POST['user'] ."' AND password = '". $_POST['password'] ."' ";

        try {
          $req = $db->query($sql);
        }
        catch( PDOException $e ) {
        }

        if (isset($_COOKIE['debug']) && $_COOKIE['debug'] == 1)
        {
          echo 'Requête SQL : <b>' . $sql . '</b><br><br>';
          echo 'Erreur SQL : <b>' . $db->errorInfo()[2] . '</b><br><br>';
        }
        
        if (isset($req))
        {
          $req->setFetchMode(PDO::FETCH_OBJ);
          $data = $req->fetch();
          
          if ($data && $data->id > 0)
          {
            echo 'Bienvenue ' . $_POST['user'] . '<br>';
            if ($data->id == 2)
            {
              echo 'Bravo, le flag est : <b>trhackers{SQLI_Byp4ss_log1N}</b><br>';
            }

            $loggedIn = true;
          }
          else
            echo '<b>Echec de la connexion</b><br><br>';
        }
        else
          echo '<b>Echec de la connexion</b><br><br>';
      }
      else
        echo '<b>pseudo/password vide</b><br><br>';
    }


    if (!$loggedIn)
    {
      ?>
      <form action="" method="POST">
      Utilisateur : <input type="text" name="user"><br />
      Mot de passe : <input type="text" name="password"><br />
      <input class="btn btn-secondary" type="submit" value="Connexion">
      </form>

      <br><br>
      <button class="btn btn-secondary" onclick="Debug();">Activer debug</button>

      <script type="text/javascript">
      function Debug() {
        document.cookie = "debug=1";
        alert('Debug activé, relancer la requête');
      }
      </script>
      <?php
    }
    ?>

    <br>
    <br>
    <p>
      <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#indice1" aria-expanded="false" aria-controls="indice1">
        Outils utiles
      </button>
    </p>
    <div class="collapse" id="indice1">
      <div class="card card-body">
        Firefox, Chrome, etc
      </div>
    </div>
    <p>
      <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#indice2" aria-expanded="false" aria-controls="indice2">
        Indice 1
      </button>
    </p>
    <div class="collapse" id="indice2">
      <div class="card card-body">
        Le but n'est pas de deviner ou bruteforcer, mais de bypasser ce formulaire
      </div>
    </div>
    <p>
      <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#indice3" aria-expanded="false" aria-controls="indice3">
        Indice 2
      </button>
    </p>
    <div class="collapse" id="indice3">
      <div class="card card-body">
        Vous avez entendu parlé d'injection SQL ?
      </div>
    </div>
    <p>
      <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#indice4" aria-expanded="false" aria-controls="indice4">
        Indice 3
      </button>
    </p>
    <div class="collapse" id="indice4">
      <div class="card card-body">
        Essayer d'envoyer des caractères spéciaux qui "coupent" les chaînes de caractères, comme ' ou "
      </div>
    </div>
    <p>
      <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#indice5" aria-expanded="false" aria-controls="indice5">
        Indice 4
      </button>
    </p>
    <div class="collapse" id="indice5">
      <div class="card card-body">
        On peut aussi commenter, donc ignorer, la fin d'une requête avec -- -<br>
        En activant le debug on visualise mieux la requête finale
      </div>
    </div>


  </div>


</main>


<br>
<br>
<br>

<div class="fixed-bottom mx-auto" style="width: 200px;">
  <nav aria-label="...">
    <ul class="pagination">
      <li class="page-item">
        <a class="page-link" href="epreuve14.php">Précédent</a>
      </li>

      <li class="page-item">
        <a class="page-link" href="epreuve16.php">Suivant</a>
      </li>
    </ul>
  </nav>
</div>

<script src="js/jquery.slim.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
