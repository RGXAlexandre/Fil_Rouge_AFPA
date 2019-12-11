<h1>Contenu de Produit.php</h1>
<hr>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo site_url("Accueil/Acc"); ?>">Accueil</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url("Connexion/Con"); ?>">Connexion <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url("Panier/Pan"); ?>">Panier</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url("Produit/Pro"); ?>">Produit</a>
      </li>
    </ul>
  </div>
</nav>


<a href ="<?php echo site_url("Accueil/Acc"); ?>">Accueil</a>
    <a href ="<?php echo site_url("Connexion/Con"); ?>">Connexion</a>
    <a href ="<?php echo site_url("Panier/Pan"); ?>">Panier</a>