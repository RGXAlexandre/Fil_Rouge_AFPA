<div class="row">
    <div class="col-12 col-md-9 col-lg-10">
        <?php if (count($panier) != 0) { ?>
            <h1 style="text-align: left">Contenu de votre Panier</h1>
        <?php } else { ?>
            <h1 style="text-align: left">Votre panier est vide <span style='font-size:50px;'>&#128532;</span> </h1>
        <?php } ?>
    </div>
    <div class="col-12 col-md-3 col-lg-2">
        <?php if (count($panier) != 0) { ?>
            <a href="<?= site_url('Panier/Supprimer') ?>" style="text-align: right" class="btn btn-outline-secondary">Vider Panier</a>
        <?php } ?>
    </div>
</div>
<hr>

<br>


<?php foreach ($panier as $ligne) : ?>
    <div class="row">
        <div class="col-3">
            <img class="img-thumbnail img-panier" src="<?= base_url("assets/images/") . $ligne["element"]["pro_photo"] ?>">
        </div>
        <div class="col-9">
            <div class="row">
                <div class="col-10">
                    <h3> <?= $ligne["element"]["pro_libelle_court"] ?></h3>
                </div>
                <div class="col-2">
                    <a href="<?= site_url('Panier/SupprimerLigne/') . $ligne["element"]["pro_id"]  ?>" class="btn btn-outline-secondary" class="cache"> x </a>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-10">
                    <h6> <?= $ligne["element"]["pro_libelle_long"] ?></h6>
                </div>
            </div>
            <br>


            <div class="row">
                <div class="col-4">
                    <?php if ($this->auth->is_logged()) : ?>
                        <p class="card-text">Prix unitaire HT : <?= number_format($ligne["element"]["pro_prix_achat"] * $client->cli_coefficient, 2, ',', ' ') ?> €</p>
                    <?php else : ?>
                        <p class="card-text">Prix unitaire HT : <?= number_format($ligne["element"]["pro_prix_achat"] * 3, 2, ',', ' ') ?> €</p>
                    <?php endif; ?>
                </div>
                <div class="col-4">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="<?= site_url('Panier/RetraitUn/') . $ligne["element"]["pro_id"]  ?>" class="btn btn-secondary">-</a>
                        <button type="button" class="btn btn-light" disabled><?= $ligne["qty"] ?></button>
                        <a href="<?= site_url('Panier/AjoutUn/') . $ligne["element"]["pro_id"]  ?>" class="btn btn-secondary">+</a>
                    </div>
                </div>
                <div class="col-4">

                    <?php if ($this->auth->is_logged()) : ?>
                        <p class="card-text">Sous-total ligne HT : <?= number_format($ligne["element"]["pro_prix_achat"] * $client->cli_coefficient * $ligne["qty"], 2, ',', ' ') ?> €</p>
                    <?php else : ?>
                        <p class="card-text">Sous-total ligne HT : <?= number_format($ligne["element"]["pro_prix_achat"] * 3 * $ligne["qty"], 2, ',', ' ') ?> €</p>
                    <?php endif; ?>
                </div>
            </div>


        </div>
    </div>
    <br>
<?php endforeach; ?>
<div class="row">
    <div class="col-12">
        <?php if ($this->basket->get_price_sum("pro_prix_achat") > 0) { ?>
            <?php if ($this->auth->is_logged()) : ?>
                <h5 class="text-right">Sous-total ligne HT : <?= number_format($this->basket->get_price_sum("pro_prix_achat") * $client->cli_coefficient, 2, ',', ' ') ?> €</h5>
                <h5 class="text-right">TVA (20%) : <?= number_format($this->basket->get_price_sum("pro_prix_achat") * $client->cli_coefficient * 0.2, 2, ',', ' ') ?> €</h5>
                <h4 class="text-right">Total ligne TTC : <?= number_format($this->basket->get_price_sum("pro_prix_achat") * $client->cli_coefficient*1.2, 2, ',', ' ') ?> €</h4>
            <?php else : ?>
                <h5 class="text-right">Sous-total ligne HT : <?= number_format($this->basket->get_price_sum("pro_prix_achat") * 3, 2, ',', ' ') ?> €</h5>
                <h5 class="text-right">TVA (20%) : <?= number_format($this->basket->get_price_sum("pro_prix_achat") * 0.6, 2, ',', ' ') ?> €</h5>
                <h4 class="text-right">Total ligne TTC : <?= number_format($this->basket->get_price_sum("pro_prix_achat") * 3.6, 2, ',', ' ') ?> €</h4>
            <?php endif; ?> 
        <?php } ?>
    </div>
    <div class="col-12 text-center">
        <a href="<?= site_url('Commander/Paiement/') ?>" class="btn btn-success btn-lg text-center"> Validez votre commande</a>
    </div>
</div>
<br>