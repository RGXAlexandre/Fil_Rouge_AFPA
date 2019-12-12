<h1>Contenu de Produit.php</h1>
<hr>

<!-- <div class="row">
    <div class="col-12">
        <h2>Details du produit sélectionné</h2>
    </div>
</div> -->
<?php foreach ($produits as $ligne) { ?>
    <div class="row">
        <div class="col-3">
            <img class="img-thumbnail" src="<?= base_url("assets/images/") . $ligne->pro_photo ?>">
        </div>
        <div class="col-9">
            <h4> <?= $ligne->pro_libelle_court ?></h4>
            <p><?= $ligne->pro_libelle_long ?></p>
            <p>Prix : <?= number_format($ligne->pro_prix_achat, 2,',',' ')?> €</p>
            <hr>
            <a href="#" class="btn btn-primary">Ajouter au panier</a>
            <!-- <a href="<?= site_url('Catégories/Cat2/') . $rubrique[0] ?>" class="btn btn-secondary">Retour</a> -->
        </div>
    </div>
    <br>

<?php } ?>