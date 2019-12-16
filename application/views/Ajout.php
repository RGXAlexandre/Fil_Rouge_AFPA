<!-- Formulaire d'ajout d'un produit, controlé en Javascript -->
<!-- TODO A controler en JS par AR-->
<div class="row">
    <div class="col-12">
        <h1>Ajouter un produit</h1>
    </div>
    <?php echo validation_errors(); ?>
    <div>

    </div>
    <form action="<?= site_url('Produit/Ajo/') ?>" class="col-12" enctype="multipart/form-data" method="POST">
        <div class="col-12">
            Libelle court : <input class="form-control" type="text" name="pro_libelle_court" placeholder="Entrez un libellé de produit">
        </div>
        <div class="col-12">
            Libelle long <input class="form-control" type="text" name="pro_libelle_long" placeholder="Entrez une description du produit">
        </div>

        <!-- TODO arriver à choisir la rubrique qui personnalise le select sous rubrique... -->


        <div class="col-12">
            Sous-Rubrique <select class="form-control" name="pro_rub_id" size="1">
                <?php foreach ($rubriques as $rubrique) : ?>
                    <option value="<?= $rubrique->rub_id ?>"><?= $rubrique->rub_nom ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="col-12">
            Fournisseur <select class="form-control" name="pro_fou_id" size="1">
                <?php foreach ($fournisseurs as $fournisseur) : ?>
                    <option value="<?= $fournisseur->fou_id ?>"><?= $fournisseur->fou_nom ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="col-12">
            Prix d'achat <input class="form-control" type="text" name="pro_prix_achat" placeholder="Entrez le prix d'achat">
        </div>
        <div class="col-12">
            Photo du produit<input class="form-control" type="file" name="pro_photo">
        </div>
        <div class="col-12">
            <br>
            <button type="submit" class="btn btn-success">Ajouter le produit</button>
            <a href="<?= site_url('Produit/Pro/') ?>" class="btn btn-primary" role="button">Retour</a>
        </div>

    </form>
</div>