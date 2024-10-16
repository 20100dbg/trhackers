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
    <p class="lead">Ce fichier est une capture du traffic réseau</p>
    <p class="lead">Si quelqu'un s'est connecté pour télécharger des fichiers, on devrait le voir</p>

    <a class="btn btn-primary" href="fichiers/reseau1.pcapng" _target="blank">Télécharger le fichier</a>

    <br>
    <br>
    <p>
      <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#indice1" aria-expanded="false" aria-controls="indice1">
        Outils utiles
      </button>
    </p>
    <div class="collapse" id="indice1">
      <div class="card card-body">
        Wireshark
      </div>
    </div>
    <p>
      <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#indice2" aria-expanded="false" aria-controls="indice2">
        Indice 1
      </button>
    </p>
    <div class="collapse" id="indice2">
      <div class="card card-body">
        Le protocole FTP (File Transfer Protocol) est utile pour transférer des fichiers. Bien sûr un utilisateur doit se connecter pour accéder à ce service.
      </div>
    </div>
    <p>
      <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#indice3" aria-expanded="false" aria-controls="indice3">
        Indice 2
      </button>
    </p>
    <div class="collapse" id="indice3">
      <div class="card card-body">
        Ce protocole n'est pas chiffré, si un utilisateur se connecte on pourra observer ses logins        
      </div>
    </div>
    <p>
      <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#indice4" aria-expanded="false" aria-controls="indice4">
        Indice 3
      </button>
    </p>
    <div class="collapse" id="indice4">
      <div class="card card-body">
        Chercher la request "PASS"
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
        <a class="page-link" href="epreuve7.php">Précédent</a>
      </li>

      <li class="page-item">
        <a class="page-link" href="epreuve9.php">Suivant</a>
      </li>
    </ul>
  </nav>
</div>

<script src="js/jquery.slim.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
