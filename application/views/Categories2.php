<div class="row">
    <div class="col-12">
        <h2>Sous rubrique</h2>
    </div>
</div>
<br>
<div class="row">
    <?php foreach ($sous_rubrique as $ligne) { ?>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card MLD20" style="width: 18rem; height: 450px">
                <div class="card-header">
                    <h5 class="card-title text-center"><?= $ligne->rub_nom ?></h5>
                </div>
                <img class="card-img-top h155" src="<?= base_url("assets/images/") . $ligne->rub_photo ?>" alt="<?= $ligne->rub_photo ?>">
                <div class="card-body overflow-ellipsis">
                    <p class="card-text"><?= $ligne->rub_libelle ?></p>
                </div>
                <div class="card-footer text-center">
                    <a href="<?= site_url('Produit/pro/') . $ligne->rub_id ?>" class="btn btn-primary">Détails</a>
                    <a href="<?= site_url('Categories/Cat/') ?>" class="btn btn-secondary">Retour</a>

                </div>
            </div>
        </div>
        <br>
    <?php } ?>
</div>