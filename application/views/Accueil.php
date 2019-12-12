
<h1>Contenu de Accueil.php</h1>
<hr>
<!-- Mise en place des images promotions  -->

<div class="row">
    <div class="col-12 col-xl-9">
        <img src="/Fil_Rouge_AFPA/assets/images/pub guitare.png" alt="pub guitare en promo" id="img1">
    </div>
    <div class="col-xl-3">
        <img src="/Fil_Rouge_AFPA/assets/images/banniere droite prix.png" alt="bandeau droite prix livraison" id="img2">
    </div>
</div>
<br>
<div class="row">
    <div class="col-12">
        <img src="/Fil_Rouge_AFPA/assets/images/banniere centre 4 pictos.png" alt="bandeau paiement en ligne" width="100%" height="auto">
    </div>
</div>

<div class="row">
    <div class="col-12">
        <h2>Nos catégories</h2>
    </div>
    <br>
    <div class="row">
    <?php foreach ($liste as $ligne) { ?>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card MLD20" style="width: 18rem; height: 450px">
                    <div class="card-header text-center">
                        <h5 class="card-title"><?= $ligne->rub_nom ?></h5>
                    </div>
                    
                    <img class="card-img-top h155" src="<?= base_url("assets/images/") . $ligne->rub_photo ?>" alt="<?= $ligne->rub_photo ?>">
                    <div class="card-body">
                        <p class="card-text"><?= $ligne->rub_libelle ?></p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="<?= site_url('Categories/Cat2/') . $ligne->rub_id ?>" class="btn btn-primary">Détails</a>
                    </div>
                </div>
            </div>
            <br>
        <?php } ?>
        <br>
    </div>


</div>