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


<div class="container-fluid" id="container-bordure">

    <div class="container" id="container-centre">
        <div class="row">
            <div class="col-2">
                <!-- Logo de VillageGreen à integrer -->
                <a href="<?php echo site_url("Accueil/Acc"); ?>"><img src="/Fil_Rouge_AFPA/annexe/Charte/HEADER/logo village green.png" alt="Logo VillageGreen" id="LogoVillageGreen" class="superpose"></a>
            </div>

            <div class="col-10" >     
                <!-- Background en nuance de gris pour les 3 bandeaux -->
                <nav class="navbar navbar-light navbar-expand-lg nav justify-content-end" style="background-color: #d7d7d7;">


    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- <a class="navbar-brand" href="<?php echo site_url("Accueil/Acc"); ?>">Accueil</a> -->
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

        </ul>
    </div>
</nav>

<nav class="navbar navbar-light navbar-expand-lg nav justify-content-end" style="background-color: #666666;">
<!-- <a class="navbar-brand" href="<?php echo site_url("Accueil/Acc"); ?>">Accueil</a> -->
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

<nav class="navbar navbar-light navbar-expand-lg nav justify-content-end" style="background-color: #303030;">
<!-- <a class="navbar-brand" href="<?php echo site_url("Accueil/Acc"); ?>">Accueil</a> -->
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
    <br>
    <!-- Bandeau  contenant les liens vers Accueil, Connexion et Panier
    <a href ="<?php echo site_url("Accueil/Acc"); ?>">Accueil</a>
    <a href ="<?php echo site_url("Connexion/Con"); ?>">Connexion</a>
    <a href ="<?php echo site_url("Panier/Pan"); ?>">Panier</a>
    <br>
    Bandeau contenant un lien vers Produits, et des bouton sans lien vers Service, Aide et A propos
    <a href ="<?php echo site_url("Produit/Pro"); ?>">Produit</a>
    <a href="">Service</a>
    <a href="">A propos</a>
    <br>
    Bandeau contenant des liens vers les catégories d'instrument (voir BDD pour terme exact)
    <a href ="<?php echo site_url("Categories/www"); ?>">www</a>
    <a href ="<?php echo site_url("Categories/xxx"); ?>">xxx</a>
    <a href ="<?php echo site_url("Categories/yyy"); ?>">yyy</a>
    <a href ="<?php echo site_url("Categories/zzz"); ?>">zzz</a>
    <hr> -->

    <body>
    
