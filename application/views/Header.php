<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GreenVillage, le projet CDA de Matthieu et Alexandre</title>

    <!-- Lien vers le CDN Boostrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- Feuille de style pour le Site -->
    <link rel="stylesheet" href="/Fil_Rouge_AFPA/assets/css/styleSite.css">
    <!-- Feuille de style pour le HeaderFooter -->
    <link rel="stylesheet" href="/Fil_Rouge_AFPA/assets/css/styleHeaderFooter.css">

</head>

<!-- Création d'un conteneur pour l'ensemble de la page, permettant d'appliquer un fond -->
<div class="container-fluid" id="container-bordure">

    <!-- Création d'un conteneur au centre de la page, permettant d'appliquer un fond -->
    <div class="container" id="container-centre">
        <div class="row">
            <div class="col-2">
                <!-- Logo de VillageGreen, cliquable -->
                <a href="<?php echo site_url("Accueil/Acc"); ?>"><img src="/Fil_Rouge_AFPA/annexe/Charte/HEADER/logo village green.png" alt="Logo VillageGreen" id="LogoVillageGreen" class="superpose"></a>
            </div>

            <div class="col-10">
                <!-- 3 Navbars empilés, couleurs de fond, justifier à droite -->
                <nav class="navbar navbar-light navbar-expand-lg nav justify-content-end" style="background-color: #e7e7e7;">


                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse nav justify-content-end" id="navbarNav">

                        <ul class="navbar-nav ">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url("Accueil/Acc"); ?>">Accueil <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url("Connexion/Con"); ?>">Connexion <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url("Panier/Pan"); ?>">Panier</a>
                            </li>
                            <li>
                                <a href="<?= site_url("Panier/Pan"); ?>"><img src="/Fil_Rouge_AFPA/annexe/Charte/HEADER/picto_panier.png" alt="LogoPanier" id="LogoPanier" class="superpose"></a>
                            </li>

                        </ul>
                    </div>
                </nav>

                <nav class="navbar navbar-light navbar-expand-lg nav justify-content-end" style="background-color: #d7d7d7;">

                    <div class="collapse navbar-collapse nav justify-content-end" id="navbarNav">

                        <ul class="navbar-nav ">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url("Produit/Pro"); ?>">Produits<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url("Service/Ser"); ?>">Service <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url("Aide/Aid"); ?>">Aide</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url("Apropos/Apr"); ?>">A propos</a>
                            </li>

                        </ul>
                    </div>
                </nav>

                <nav class="navbar navbar-light navbar-expand-lg nav justify-content-end" style="background-color: #666666;">

                    <div class="collapse navbar-collapse nav justify-content-end" id="navbarNav">

                        <ul class="navbar-nav ">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url("Cat/Vents"); ?>">Instru. à vent <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url("Cat/Cordes"); ?>">Intru. à cordes <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url("Cat/Claviers"); ?>">Clavier</a>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <hr>

        <body>