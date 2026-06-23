<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="la carte.css">

  <title>Menu - La Sale Fourchette</title>
</head>

<body class="bg-dark">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-4">
  <div class="container">

    <!-- Logo -->
    <a class="navbar-brand" href="#">
      <img src="image/TLdDY.jpg" width="90">
    </a>

    <!-- Titre -->
    <span class="navbar-brand fs-3 fw-bold">
      La Sale Fourchette
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

  <div class="container my-5">
    <h2 class="text-center mb-4 text-white"> Notre Carte</h2>

    <div class="row g-4">

      <!-- MENU 1 -->
      <div class="col-md-4">
        <div class="card bg-secondary text-white h-100 shadow">
          <div class="card-body">
            <h5 class="card-title">Menu Burger Classique</h5>
            <p>🍔 Burger maison<br>🍟 Frites cheddar<br>🥤 Boisson au choix</p>
            <h6>10 €</h6>
          </div>
        </div>
      </div>

      <!-- MENU 2 -->
      <div class="col-md-4">
        <div class="card bg-secondary text-white h-100 shadow">
          <div class="card-body">
            <h5 class="card-title">Menu Tacos XXL</h5>
            <p>🌯 Tacos 1 kg<br>🧀 Fromage<br>🥤 Boisson</p>
            <h6>30 €</h6>
          </div>
        </div>
      </div>

      <!-- MENU 3 -->
      <div class="col-md-4">
        <div class="card bg-secondary text-white h-100 shadow">
          <div class="card-body">
            <h5 class="card-title">Burger Carnivore XL</h5>
            <p>🍔 Steak x2<br>🧀 Cheddar<br>🥓 Bacon<br>🍟 Frites</p>
            <h6>20 €</h6>
          </div>
        </div>
      </div>
      <!-- MENU 4 -->
<div class="col-md-4">
  <div class="card bg-secondary text-white h-100 shadow">
    <div class="card-body">
      <h5 class="card-title">Menu Triple Bacon XXL</h5>
      <p>
        🍔 Triple steak<br>
        🥓 Bacon croustillant x3<br>
        🧀 Cheddar fondant<br>
        🍟 Frites cheddar bacon<br>
        🥤 Boisson au choix
      </p>
      <h6>16 €</h6>
    </div>
  </div>
</div>

<!-- MENU 5 -->
<div class="col-md-4">
  <div class="card bg-secondary text-white h-100 shadow">
    <div class="card-body">
      <h5 class="card-title">Menu Chicken Madness</h5>
      <p>
        🍗 Poulet pané XXL<br>
        🍔 Burger poulet crispy<br>
        🧀 Sauce fromagère<br>
        🍟 Frites double portion<br>
        🥤 Boisson au choix
      </p>
      <h6>14 €</h6>
    </div>
  </div>
</div>

<!-- MENU 6 -->
<div class="col-md-4">
  <div class="card bg-secondary text-white h-100 shadow">
    <div class="card-body">
      <h5 class="card-title">Menu Ultra Fat Stack</h5>
      <p>
        🍔 Double burger + steak XL<br>
        🧀 Triple cheddar<br>
        🥓 Bacon + sauce maison<br>
        🍟 Frites cheddar bacon<br>
        🍰 Dessert inclus<br>
        🥤 Boisson au choix
      </p>
      <h6>18 €</h6>
    </div>
  </div>
</div>

    </div>
  </div>
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
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>