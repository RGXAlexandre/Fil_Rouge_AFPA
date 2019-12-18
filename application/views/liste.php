<div class="row">
    <div class="col-12">
        <h2 style="float:left">Liste de nos produits</h2>

        <!-- Ajout d'un bouton pour permettre aux Admin du site d'ajouter un produit. -->
        <a href="<?= site_url('Produit/Ajo/') ?>" class="btn btn-warning" role="button" aria-pressed="true" style="float:right" class="cache">Ajouter un produit</a>
    </div>
</div>
<br>
<div class="row">
    <!-- création du foreach afin de récupérer toutes les lignes de la table produit et d'insérer les valeurs à chaque balise -->
    <?php foreach ($produits as $ligne) { ?>
        <div class="col-12 col-sm-6 col-lg-3">
            <!-- création d'une card (bootstrap) et on fixe les dimensions pour un meilleur affichage -->
            <div class="card MLD20" style="width: 18rem; height: 400px">
                <div class="card-header" style="height: 100px">
                    <h5 class="card-title text-center"><?= $ligne->pro_libelle_court ?></h5>
                </div>
                <!-- lien de l'image via base_url et le chemin du dossier -->
                <img class="card-img-top h155" src="<?= base_url("assets/images/") . $ligne->pro_photo ?>" alt="<?= $ligne->pro_photo ?>">
                <div class="card-body">
                    <?php if ($this->auth->is_logged()) : ?>
                        <p class="card-text">Prix : <?= number_format($ligne->pro_prix_achat * $client->cli_coefficient, 2, ',', ' ') ?> €</p>
                    <?php else : ?>
                        <p class="card-text">Prix : <?= number_format($ligne->pro_prix_achat * 3, 2, ',', ' ') ?> €</p>
                    <?php endif; ?>
                </div>
                <!--  lien pour accéder au détail d'un produit grâce à l'id du produit -->
                <div class="card-footer text-center">
                    <a href="<?= site_url('Produit/pro3/') . $ligne->pro_id ?>" class="btn btn-primary">Détails</a>
                </div>
            </div>
        </div>
        <br>
    <?php } ?>
</div>