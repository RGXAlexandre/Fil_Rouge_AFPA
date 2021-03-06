<!-- Ajout d'un affichage du produit détaillé, avant qu'un Admin supprime le produit de la BDD -->
<div class="row">
    <div class="col-12">
        <h1>Modification du produit</h1>
    </div>

    <!-- On insère comme valeur par défaut les données récupérés dans le tableau produit -->
    <form action="<?= site_url('Produit/Mod/'). $produit->pro_id ?>" class="col-12" method="POST" enctype="multipart/form-data">
        <div class="col-12">
            Libelle court : <input class="form-control" type="text" name="pro_libelle_court" placeholder="Entrez un libellé de produit" value="<?= $produit->pro_libelle_court ?>">
        </div>
        <div class="col-12">
            Libelle long <input class="form-control" type="text" name="pro_libelle_long" placeholder="Entrez une description du produit" value="<?= $produit->pro_libelle_long ?>">
        </div>

        <!-- <div class="col-12">
            Rubrique <select class="form-control" name="pro_rub_id" size="1" value="<?= $produit->rub_nom ?>">
                <?php foreach ($rubriques as $rubrique) : ?>
                    <option <?= ($rubrique->rub_id == $produit->pro_rub_id) ? "selected" : "" ?> value="<?= $rubrique->rub_id ?>"><?= $rubrique->rub_nom ?></option>
                <?php endforeach; ?>
            </select>
        </div> -->



        <div class="col-12">
            Sous-Rubrique <select class="form-control" name="pro_rub_id" size="1" value="<?= $produit->fou_nom ?>">
                <?php foreach ($rubriques as $rubrique) : ?>
                    <option <?= ($rubrique->rub_id == $produit->pro_rub_id) ? "selected" : "" ?> value="<?= $rubrique->rub_id ?>"><?= $rubrique->rub_nom ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="col-12">
            Fournisseur <select class="form-control" name="pro_fou_id" size="1" value="<?= $produit->rub_nom ?>">
                <?php foreach ($fournisseurs as $fournisseur) : ?>
                    <option <?= ($fournisseur->fou_id == $produit->pro_fou_id) ? "selected" : "" ?> value="<?= $fournisseur->fou_id ?>"><?= $fournisseur->fou_nom ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="col-12">
            Prix d'achat <input class="form-control" type="text" name="pro_prix_achat" placeholder="Entrez le prix d'achat" value="<?= $produit->pro_prix_achat ?>">
        </div>
        <div class="col-12">
            Photo du produit<input class="form-control" type="file" name="pro_photo" value="<?= $produit->pro_photo ?>">
        </div>

        <hr>
        <button type="submit" class="btn btn-primary">Soumettre les modifications</button>
        <input type = "button" class="btn btn-secondary" value = "Retour aux details"  onclick = "history.back()">
        
    </form>
</div>