<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Titre du site apparaissant dans l'onglet du navigateur -->
    <title>GreenVillage | Projet CDA </title>

    <!-- Icone de VillageGreen apparaissant dans l'onglet du navigateur -->
    <link rel="icon" type="image/png" href="/Fil_Rouge_AFPA/annexe/Charte/HEADER/logo village green.png" />

    <!-- Lien vers le CDN Boostrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- Feuille de style pour le Site -->
    <link rel="stylesheet" href="/Fil_Rouge_AFPA/assets/css/styleSite.css">

    <!-- Feuille de style pour le HeaderFooter -->
    <link rel="stylesheet" href="/Fil_Rouge_AFPA/assets/css/styleHeaderFooter.css">

    <!-- Feuille de style pour le delire Rodger Federer -->
    <link rel="stylesheet" href="/Fil_Rouge_AFPA/assets/css/federer.css">

</head>

<!-- Création d'un conteneur pour l'ensemble de la page, permettant d'appliquer un fond (Rayé noir) via "styleHeaderFooter.css"-->
<div class="container-fluid" id="container-bordure">

    <!-- Création d'un conteneur au centre de la page, permettant d'appliquer un fond (Uni "creme") via "styleHeaderFooter.css"-->
    <div class="container" id="container-centre">
        <!-- Création d'une ligne dans le conteneur -->
        <div class="row">
            <!-- Création d'une colonne largeur 2, qui va accueillir le logo -->
            <div class="col-2">
                <!-- Logo de VillageGreen, cliquable -->
                <a href="<?php echo site_url("Accueil/Acc"); ?>"><img src="/Fil_Rouge_AFPA/annexe/Charte/HEADER/logo village green.png" alt="Logo VillageGreen" id="LogoVillageGreen" class="superpose"></a>
            </div>

            <!-- Création d'une colonne largeur 10, qui va accueillir les Navbars -->
            <div class="col-10">
                <!-- 1ere Navbars empilés sur 3, couleurs de fond, justifier à droite -->
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
                                <!-- Positionnement de data-toggle="modal" et  data-target="#myModal"dans le lien pour creer le point de depart de la Modal -->
                                <a class="nav-link" href="" data-toggle="modal" data-target="#myModal">Espace Client</a>

                                <!-- Déclaration de la Modal -->
                                <div id="myModal" class="modal fade" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Contenu de la Modal-->
                                        <div class="modal-content">
                                            <!-- En-tete de la fenetre Modal -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Espace Client</h4>
                                            </div>
                                            <!-- Corps de la fenetre Modal. 1ere moitiée -->
                                            <div class="modal-body">
                                                <div class="popForm popLeft">
                                                    <span>Etes-vous déjà client chez nous ?</span>
                                                    <form action="" method="post" accept-charset="utf-8">

                                                        <div class="form-group">
                                                            <label for="user"></label>
                                                            <input type="email" class="form-control" id="email" name="email" placeholder="Adresse E-mail">
                                                            <label for="mdp"></label>
                                                            <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe">
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" name="rememberMe" id="rememberMe">
                                                                <label class="form-check-label" for="rememberMe">Rester connecté</label>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-success">Se connecter maintenant</button>
                                                        <br>
                                                        <a href="">Vous avez oublié votre mot de passe ?</a>

                                                    </form>
                                                </div>
                                                <hr>
                                                <!-- Corps de la fenetre. 2eme moitiée -->
                                                <div class="popForm popRight">
                                                    <span>Vous n'êtes pas client chez nous ?</span>
                                                    <br>
                                                    <br>

                                                    <p>En tant que client Village Green, vous pouvez suivre vos envois, lire des "tests produits" exclusifs, évaluer des produits, déposer des petites annonces, gérer vos chèques-cadeaux, devenir partenaire et bien plus encore.</p>

                                                    <a type="button" class="btn btn-success" href="<?php echo site_url("Formulaire/For"); ?>">S'inscrire</a>
                                                    <br>
                                                    <a href="<?php echo site_url("Apropos/Apr"); ?>">Plus d'informations</a>
                                                </div>
                                            </div>
                                            <!-- Pied de la fenetre Modal -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url("Panier/Pan"); ?>">Panier</a>
                            </li>
                            <!-- Positinnement d'un bouton cliquable en forme de panier, renvoyant sur controleur /Panier/Pan -->
                            <li>
                                <a href="<?= site_url("Panier/Pan"); ?>"><img src="/Fil_Rouge_AFPA/annexe/Charte/HEADER/picto_panier.png" alt="LogoPanier" id="LogoPanier" class="superpose"></a>
                            </li>

                        </ul>
                    </div>
                </nav>

                <!-- 2eme Navbars empilés sur 3, couleurs de fond, justifier à droite -->
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
                <!-- 3eme Navbars empilés sur 3, couleurs de fond, justifier à droite -->
                <nav class="navbar navbar-light navbar-expand-lg nav justify-content-end" style="background-color: #666666;">

                    <div class="collapse navbar-collapse nav justify-content-end" id="navbarNav">

                        <ul class="navbar-nav ">
                            <li class="nav-item">
                                <a class="nav-link" href="<?= site_url('Categories/Cat2/') . 1 ?>">Les vents <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= site_url('Categories/Cat2/') . 2 ?>">Les Guitares <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= site_url('Categories/Cat2/') . 3 ?>">Christian Clavier</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= site_url('Categories/Cat2/') . 4 ?>">Cordes frottées</a>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <hr>

        <body>