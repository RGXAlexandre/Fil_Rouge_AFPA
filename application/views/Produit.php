<?php foreach ($produits as $ligne) { ?>
    <div class="row">
        <div class="col-3">
            <img class="img-thumbnail" src="<?= base_url("assets/images/") . $ligne->pro_photo ?>">
        </div>
        <div class="col-9">
            <h4> <?= $ligne->pro_libelle_court ?></h4>
            <p><?= $ligne->pro_libelle_long ?></p>
            <!-- fonction 'number_format' (php) permet de reformater le prix -->
            <?php if ($this->auth->is_logged()) : ?>
                <p class="card-text">Prix : <?= number_format($ligne->pro_prix_achat * $client->cli_coefficient, 2, ',', ' ') ?> €</p>
            <?php else : ?>
                <p class="card-text">Prix : <?= number_format($ligne->pro_prix_achat * 3, 2, ',', ' ') ?> €</p>
            <?php endif; ?>
            <hr>


            <a href="<?= site_url('Panier/Ajout/') . $ligne->pro_id  ?>" class="btn btn-primary">Ajouter au panier </a>


            <!-- Ajout d'un bouton pour permettre au Clients du site de revenir au catalogue selon qu'ils viennent de la liste(1 produit) ou de la sous-rubrique (plusieurs produits) -->

            <?php if (count($produits) == 1) { ?>
                <a href="<?= site_url('Produit/Pro') ?>" class="btn btn-secondary">Retour </a>
            <?php } else { ?>
                <a href="<?= site_url('Categories/cat2/') . $ligne->rub_id_1 ?>" class="btn btn-secondary">Retour </a>
            <?php } ?>



            <!-- <p> <?= count($produits) ?> </p> -->

            <!-- Ajout d'un bouton pour permettre aux Admin du site de modifier le produit affiché -->
            <?php if ($this->auth->is_type('employé')) : ?>
                <a href="<?= site_url('Produit/Mod/') . $ligne->pro_id ?>" class="btn btn-warning" role="button" class="cache">Modifier </a>
            <?php endif; ?>

            <!-- Ajout d'un bouton pour permettre aux Admin du site de supprimer le produit affiché -->
            <?php if ($this->auth->is_type('employé')) : ?>
                <a href="<?= site_url('Produit/Sup/') . $ligne->pro_id ?>" class="btn btn-danger" class="cache"> Supprimer </a>
            <?php endif; ?>
            
        </div>
    </div>
    <br>

<?php } ?>

