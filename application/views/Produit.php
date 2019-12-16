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

            <!-- Ajout d'un bouton pour permettre au Clients du site de revenir au catalogue -->
            <input type = "button" class="btn btn-secondary" value = "Retour au catalogue"  onclick = "history.back()">

            <!-- Ajout d'un bouton pour permettre aux Admin du site de modifier le produit affiché -->
            <a href="<?= site_url('Produit/Mod/') . $ligne->pro_id ?>" class="btn btn-warning" role="button" class="cache">Modifier </a>

            <!-- Ajout d'un bouton pour permettre aux Admin du site de supprimer le produit affiché -->
            <a href="<?= site_url('Produit/Sup/'). $ligne->pro_id?>" class="btn btn-danger" class="cache" > Supprimer </a>
        </div>
    </div>
    <br>

<?php } ?>