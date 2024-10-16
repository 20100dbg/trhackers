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
    <p class="lead">Cette page sert juste à vérifier si pour un ID donné, une session est associée ou non en base. Comment ça pourrait mal tourner ?</p>

    <?php
    $db = new PDO('mysql:host=localhost;dbname=trhackers', 'root','');
    $loggedIn = false;

    if (!empty($_GET['id']))
    {
      $sql = 'SELECT id, user, code FROM sessions WHERE id ='. $_GET['id'];
      
      try {
        $req = $db->query($sql);
      }
      catch( PDOException $e ) {
      }

      if (isset($_COOKIE['debug']) && $_COOKIE['debug'] == 2)
      {
        echo 'Requête SQL : <b>' . $sql . '</b><br><br>';
        echo 'Erreur SQL : <b>' . $db->errorInfo()[2] . '</b><br><br>';
      }

      if (isset($req))
      {
        $req->setFetchMode(PDO::FETCH_OBJ);
        $data = $req->fetch();
        
        if ($data)
        {
          echo 'Session '. $data->user .' existante';
        }
        else
        {
          echo 'ID session invalide';
        }
      }
      else
      {
        echo 'ID session invalide';
      }
    }
    else
    {
      echo 'ID session invalide';
    }
    ?>
    <br>
    <br>
    <button onclick="Debug();">Activer debug</button>

    <script type="text/javascript">
    function Debug() {
    document.cookie = "debug=2";
    alert('Debug activé, relancer la requête');
    }
    </script>

    <br>
    <br>
    <p>
      <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#indice1" aria-expanded="false" aria-controls="indice1">
        Outils utiles
      </button>
    </p>
    <div class="collapse" id="indice1">
      <div class="card card-body">
        Firefox, script python
      </div>
    </div>
    <p>
      <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#indice2" aria-expanded="false" aria-controls="indice2">
        Indice 1
      </button>
    </p>
    <div class="collapse" id="indice2">
      <div class="card card-body">
        Il s'agit d'un autre type d'injection SQL, c'est une blind injection. 
      </div>
    </div>
    <p>
      <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#indice3" aria-expanded="false" aria-controls="indice3">
        Indice 2
      </button>
    </p>
    <div class="collapse" id="indice3">
      <div class="card card-body">
        Il ne s'agit pas d'un bypass et nous ne pouvons pas extraire directement des données.
        Nous ne pouvons avoir en retour qu'un booléen, vrai ou faux.
      </div>
    </div>
    <p>
      <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#indice4" aria-expanded="false" aria-controls="indice4">
        Indice 3
      </button>
    </p>
    <div class="collapse" id="indice4">
      <div class="card card-body">
        On créant les bonnes requêtes, on peut extraire des informations, par exemple "est-ce que le premier caractères du mot de passe est a ?", puis b, puis c.
        Et recommencer avec chaque caractère
      </div>
    </div>
    <p>
      <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#indice5" aria-expanded="false" aria-controls="indice5">
        Indice 4
      </button>
    </p>
    <div class="collapse" id="indice5">
      <div class="card card-body">
        Un script qui permet d'exploiter cette faille est disponible <a href="fichiers/exploit.py">ici</a>
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
        <a class="page-link" href="epreuve17.php">Précédent</a>
      </li>

      <li class="page-item">
        <a class="page-link" href="epreuve19.php">Suivant</a>
      </li>
    </ul>
  </nav>
</div>

<script src="js/jquery.slim.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
