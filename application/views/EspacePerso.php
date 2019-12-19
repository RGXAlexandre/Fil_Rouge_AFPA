<!-- TODO A COMMENTER -->
<?php if ($this->auth->is_type('client')) : ?>
    <h2>Bonjour <?= $client->cli_prenom ?>, et bienvenue sur votre espace personnel.</h2>
    <hr>
    
    <strong>Vous trouverez ci-dessous votre historique de commande</strong>
    <hr>



    <table class="table table-bordered ">
        <thead>
            <tr>
                <th scope="col">Référence de la commande</th>
                <th scope="col">Date de la commande</th>
                <th scope="col">Etat de la commande</th>
                <th scope="col">Prix total de la commande</th>
                <th scope="col">Détails</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($commandes as $commande) : ?>
                <tr>

                    <td><?= $commande->com_id ?></td>
                    <td><?= $commande->com_date ?></td>
                    <td><?= $commande->com_etat ?></td>
                    <td><?= number_format($commande->com_total_HT * 1.20, 2, ',', ' ') ?> €</td>
                    <th scope="col"><a type="button" class="btn btn-info" href="<?php echo site_url("Panier/DetailsCommande/") . $commande->com_id; ?>">Détails</a></th>


                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>

<?php else : ?>
    <h2>Bonjour <?= $employé->emp_prenom ?>, et bienvenue sur votre espace Employé.</h2>
    <div>Vous trouverez ci-dessous votre historique de commande</div>



    
<?php endif; ?>






<hr>