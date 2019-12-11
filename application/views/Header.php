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
    <link rel="stylesheet" href="/Fil_Rouge_AFPA/assets/css/styleSite.css.css">
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
                <img src="/Fil_Rouge_AFPA/annexe/Charte/HEADER/3 bandes.png" alt="image 3 bandes grise" id="BandesHeader" class="superpose" width="100%" height="100%";>
            </div>
        </div>
    <br>
    <!-- Bandeau  contenant les liens vers Accueil, Connexion et Panier -->
    <a href ="<?php echo site_url("Accueil/Acc"); ?>">Accueil</a>
    <a href ="<?php echo site_url("Connexion/Con"); ?>">Connexion</a>
    <a href ="<?php echo site_url("Panier/Pan"); ?>">Panier</a>
    <br>
    <!-- Bandeau contenant un lien vers Produits, et des bouton sans lien vers Service, Aide et A propos -->
    <a href ="<?php echo site_url("Produit/Pro"); ?>">Produit</a>
    <a href="">Service</a>
    <a href="">A propos</a>
    <br>
    <!-- Bandeau contenant des liens vers les catégories d'instrument (voir BDD pour terme exact) -->
    <a href ="<?php echo site_url("Categories/Vents"); ?>">Instruments à vent</a>
    <a href ="<?php echo site_url("Categories/Cordes"); ?>">Instruments à cordes frottées</a>
    <a href ="<?php echo site_url("Categories/Claviers"); ?>">Les claviers</a>
    <hr>

    <body>
    
