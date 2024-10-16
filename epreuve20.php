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
    <p class="lead">Découvrez le mot de passe admin</p>
    <br>
      <?php
      $db = new PDO('mysql:host=localhost;dbname=trhackers', 'root','');
      $loggedIn = false;

      if (!empty($_GET['id']))
      {
        $sql = 'SELECT id, user, password FROM users WHERE id ='. $_GET['id'];

        try {
          $req = $db->query($sql);
        }
        catch( PDOException $e ) {
        }

        if (isset($_COOKIE['debug']) && $_COOKIE['debug'] == 3)
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
            echo 'ID : '. $data->id .'<br>';
            echo 'User : '. $data->user .'<br>';
          }
          else
          {
            echo 'ID user invalide';
          }
        }
        else
        {
          echo 'ID user invalide';
        }
    }
      ?>
      <br>
      <br>
      <button onclick="Debug();">Activer debug</button>

      <script type="text/javascript">
      function Debug() {
      document.cookie = "debug=3";
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
        Il s'agit d'un autre type d'injection SQL, ici nous pourrons extraire directement des informations
      </div>
    </div>
    <p>
      <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#indice3" aria-expanded="false" aria-controls="indice3">
        Indice 2
      </button>
    </p>
    <div class="collapse" id="indice3">
      <div class="card card-body">
        Pour extraire des informations, on pourrait utiliser le mot clé UNION
      </div>
    </div>
    <p>
      <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#indice4" aria-expanded="false" aria-controls="indice4">
        Indice 3
      </button>
    </p>
    <div class="collapse" id="indice4">
      <div class="card card-body">
        Information utile si le debug n'est pas activé : l'injection vise la table users, les champs qui nous intéressent sont user et password
      </div>
    </div>
    <p>
      <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#indice5" aria-expanded="false" aria-controls="indice5">
        Indice 4
      </button>
    </p>
    <div class="collapse" id="indice5">
      <div class="card card-body">
        Le mot clé UNION permet d'ajouter une requête (la notre, avec les informations qui nous intéresse) à la suite de la requête d'origine.<br>
        Attention il faut que les deux requêtes aient le même nombre de champs.<br>
        Pour trouver le nombre de champs, on peut utiliser ORDER BY x à la suite de la requête d'origine, avec un chiffre représentant le nombre de champs à la place du x<br>
        La requête ORDER BY x fonctionne dans que x n'est pas supérieur aux nombre de champ de la requête        
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
        <a class="page-link" href="epreuve19.php">Précédent</a>
      </li>

      <li class="page-item">
        <a class="page-link" href="fin.php">Suivant</a>
      </li>
    </ul>
  </nav>
</div>

<script src="js/jquery.slim.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
