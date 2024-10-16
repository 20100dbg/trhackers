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
    <p class="lead">Décrypter ceci :</p>
    <p class="lead">bd1a0707667ce6524d1bdc9d8430e440</p>

    <?php
      if (isset($_POST['password']) == 'admin')
      {
        echo 'Bravo, le flag est <b>trhackers{Weak_Passwords_Gets_Cracked}</b><br>';
      }
    ?>

    <form action="" method="POST">
      <input type="text" name="password" placeholder="Entrer le résultat ici">
      <input type="submit" name="">
    </form>
    <br>
    <br>
    <p>
      <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#indice1" aria-expanded="false" aria-controls="indice1">
        Outils utiles
      </button>
    </p>
    <div class="collapse" id="indice1">
      <div class="card card-body">
        Google
      </div>
    </div>
    <p>
      <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#indice2" aria-expanded="false" aria-controls="indice2">
        Indice 1
      </button>
    </p>
    <div class="collapse" id="indice2">
      <div class="card card-body">
        Ce n'est pas vraiment un chiffrement, mais un "hash"
      </div>
    </div>
    <p>
      <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#indice3" aria-expanded="false" aria-controls="indice3">
        Indice 2
      </button>
    </p>
    <div class="collapse" id="indice3">
      <div class="card card-body">
        C'est un hash au format MD5
      </div>
    </div>
    <p>
      <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#indice4" aria-expanded="false" aria-controls="indice4">
        Indice 3
      </button>
    </p>
    <div class="collapse" id="indice4">
      <div class="card card-body">
        Des sites donnent la correspondance des hash/mots de passes les plus courants
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
        <a class="page-link" href="epreuve11.php">Précédent</a>
      </li>

      <li class="page-item">
        <a class="page-link" href="epreuve13.php">Suivant</a>
      </li>
    </ul>
  </nav>
</div>

<script src="js/jquery.slim.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
