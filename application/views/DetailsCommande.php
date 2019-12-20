<!-- Affichage du prenom du client, en utilisant le tableau associatif $client, venant du controleur Panier/DetailsCommande -->
<span>
    <strong><?= $client->cli_prenom ?>, voici le détail de votre commande.</strong>
    <a href="<?= site_url('Panier/EspacePerso') ?>" class="btn btn-secondary" role="button" aria-pressed="true" style="float:right" class="cache">Retour</a>
</span>

<hr>
<table class="table table-bordered ">
    <thead>
        <tr>
            <th scope="col">Référence commande</th>
            <th scope="col">Quantité</th>
            <th scope="col">Nom de l'article</th>
            <th scope="col">Prix unitaire</th>
            <th scope="col">Total HT</th>

        </tr>
    </thead>
    <tbody>
    
        <!-- Ouverture d'une boucle foreach pour parcourir le tableau associatif $ligne, venant du controleur Panier/DetailsCommande    -->
        <?php foreach ($lignes as $ligne) : ?>
            <tr>
                <td><?= $ligne->pos_com_id ?></td>
                <td><?= number_format($ligne->pos_quantite_commandee, 0) ?></td>
                <td><?= $ligne->pro_libelle_court ?></td>
                <td><?= $ligne->pos_prix_vente ?> €</td>
                <td><?= $ligne->pos_sous_total_HT ?> €</td>
            </tr>
        <?php endforeach; ?>

    </tbody>
</table>

<hr>