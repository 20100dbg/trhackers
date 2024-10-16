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
    <p class="lead">Trouver le mot de passe demandé</p>

    <button class="btn btn-secondary" onclick="askpass();">Demander accès</button>
    <br>
    <br>
    
    <p>
      <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#indice2" aria-expanded="false" aria-controls="indice2">
        Indice 1
      </button>
    </p>
    <div class="collapse" id="indice2">
      <div class="card card-body">
        Il y a plusieurs façon de demander un mot de passe, certaines plus sécurisées que d'autres...
      </div>
    </div>
    <p>
      <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#indice3" aria-expanded="false" aria-controls="indice3">
        Indice 2
      </button>
    </p>
    <div class="collapse" id="indice3">
      <div class="card card-body">
        Et si le mot de passe était vérifié en local, dans le code source ?
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
        <a class="page-link" href="epreuve9.php">Précédent</a>
      </li>

      <li class="page-item">
        <a class="page-link" href="epreuve11.php">Suivant</a>
      </li>
    </ul>
  </nav>
</div>

<script src="js/jquery.slim.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

      





















  <script type="text/javascript">
  function askpass() {
    password = prompt("Password please ?");
    if (password != "trhackers{Weak_JS_Passw0rd}")
    {
      alert('Bad password !');
      //window.history.back();
    }
    else
    {
      alert('Good job !');
    }
  };
  </script>

    </body>
</html>
