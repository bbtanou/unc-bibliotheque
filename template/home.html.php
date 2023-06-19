<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Bibliotheque</title>
</head>
<body class="container-fluid ">
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand">Bibliotheque</a>
        <form class="form-inline">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <button class="btn btn-info">Se deconnecter</button>
      </nav>

      <div class="row d-flex justify-content-center">
        <ul class="nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link active" href="index.php?page=Accueil">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=Abonnement">Abonnement</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=Catégorie">Catégorie</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="index.php?page=Livres">Livres</a>
            </li>
          </ul>
      </div>


</body>
</html>