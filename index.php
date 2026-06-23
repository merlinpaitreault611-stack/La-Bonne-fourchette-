<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>
<body>
<!-- Navbar -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-4">
  <div class="container">

    <!-- Logo -->
    <a class="navbar-brand" href="#">
      <img src="image/TLdDY.jpg" width="90">
    </a>

    <!-- Titre -->
    <span class="navbar-brand fs-3 fw-bold">
      La Sale Fourchette a Théo 
    </span>

    <!-- bouton -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- menu -->
    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav ms-auto fs-5">
        <li class="nav-item"><a class="nav-link" href="index.php">Accueil</a></li>
        <li class="nav-item"><a class="nav-link" href="la carte.php">La Carte </a></li>
        <li class="nav-item"><a class="nav-link" href="#">Réservation</a></li>
        <li class="nav-item"><a class="nav-link" href="connexions.php">Connexions</a><li>
      </ul>
    </div>

  </div>
</nav>

<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">

  <!-- indicateurs -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2"></button>
  </div>

  <!-- images -->
  <div class="carousel-inner">

    <div class="carousel-item active">
      <img src="image/tacos-01-optimized.png" class="d-block w-100" alt="image 1">
    </div>

    <div class="carousel-item">
      <img src="image/craiyon_145539_A_guy_wearing_a_diaper_eats_burgers_and_he_gets_fat_very_fast.png" class="d-block w-100" alt="image 2">
    </div>

    <div class="carousel-item">
      <img src="image/Heart-Attack-Grill1.jpg" class="d-block w-100" alt="image 3">
    </div>

  </div>

  <!-- boutons gauche / droite -->
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>

  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>

</div>
<div class="container my-5">
  <div class="p-4 bg-dark text-white rounded shadow">

    <h2 class="mb-3">La Sale Fourchette</h2>

    <p>
      Bienvenue à <strong>La Sale Fourchette</strong>, le restaurant où la gourmandise n’a aucune limite.
    </p>

    <p>
      Ici, on sert une cuisine généreuse, ultra réconfortante et totalement assumée :
      burgers dégoulinants, frites croustillantes, sauces maison riches et desserts gourmands.
    </p>

    <p>
      Pas de chichi, seulement du goût, du gras et du plaisir.
      Viens affamé, repars heureux.
    </p>

  </div>
</div>
    
   
    
    
    
    
    
    
    </header>
    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script> 
<footer class="footer">

  <section>
    <h4>Contact</h4>
    <ul>
      <li>39 Rue du Dr Babinski</li>
      <li>06 68 88 72 42</li>
      <li>salefourchette@gmail.com</li>
    </ul>
  </section>

  <section>
    <h4>Réseaux</h4>
    <nav>
      <a href="https://www.instagram.com">Instagram</a>
      <a href="https://www.facebook.com/?locale=fr_FR">Facebook</a>
      <a href="https://x.com/?lang=fr">Twitter</a>
    </nav>
  </section>

  <p class="copyright">
    © 2026 La sale Fourchette — Tous droits réservés
  </p>

</footer>

</body>
</html>



