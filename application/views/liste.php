<div class="row">
    <div class="col-12">
        <h2 style="float:left">Liste de nos produits</h2>

        <!-- Ajout d'un bouton pour permettre aux Admin du site d'ajouter un produit. -->
        <a href="<?= site_url('Produit/Ajo/') ?>" class="btn btn-warning" role="button" aria-pressed="true" style="float:right" class="cache">Ajouter un produit</a>
    </div>
</div>
<br>
<div class="row">
    <?php foreach ($produits as $ligne) { ?>
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="card MLD20" style="width: 18rem; height: 400px">
                <div class="card-header" style="height: 100px">
                    <h5 class="card-title text-center"><?= $ligne->pro_libelle_court ?></h5>
                </div>
                <img class="card-img-top h155" src="<?= base_url("assets/images/") . $ligne->pro_photo ?>" alt="<?= $ligne->pro_photo ?>">
                <div class="card-body">
                    <p class="card-text">Prix : <?= number_format($ligne->pro_prix_achat, 2, ',', ' ') ?> €</p>
                </div>
                <div class="card-footer text-center">
                    <a href="<?= site_url('Produit/pro3/') . $ligne->pro_id ?>" class="btn btn-primary">Détails</a>
                </div>
            </div>
        </div>
        <br>
    <?php } ?>
</div>