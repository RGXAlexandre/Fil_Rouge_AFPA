<h2>Bonjour <?= $client->cli_prenom ?>, et bienvenue sur votre espace personnel.</h2>
<div>Vous trouverez ci-dessous votre détail de commande.</div>

<table class="table table-bordered ">
    <thead>
        <tr>
            <th scope="col">Référence commande</th>
            <th scope="col">Quantité</th>
            <th scope="col">Nom de l'article</th>
            <th scope="col">Prix unitaire</th>
            <th scope="col">Prix HT</th>

        </tr>
    </thead>
    <tbody>
        <?php foreach ($lignes as $ligne) : ?>
            <tr>
                <td><?= $ligne->pos_com_id ?></td>
                <td><?= number_format($ligne->pos_quantite_commandee, 0) ?></td>
                <td><?= $ligne->pro_libelle_court ?></td>
                <td><?= $ligne->pos_prix_vente ?></td>
                <td><?= $ligne->pos_sous_total_HT ?> €</td>

                <!-- <td><?= number_format($commande->com_total_HT * 1.20, 2, ',', ' ') ?> €</td> -->
                <!-- <th scope="col"><a type="button" class="btn btn-info" href="<?php echo site_url("Panier/DetailsCommande/") . $commande->com_id; ?>">Détails</a></th> -->


            </tr>
        <?php endforeach; ?>

    </tbody>
</table>

<hr>