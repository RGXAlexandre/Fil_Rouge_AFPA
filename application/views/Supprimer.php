<!-- Ajout d'un affichage du produit détaillé, avant qu'un Admin supprime le produit de la BDD -->
<div class="row">
    <div class="col-12">
        <h1>Supprimer le produit</h1>
    </div>
    <form action="" class="col-12" enctype="multipart/form-data" method="POST">
        <div class="col-12">
            Libelle court : <input class="form-control" type="text" name="pro_libelle_court" placeholder="Entrez un libellé de produit" readonly>
        </div>
        <div class="col-12">
            Libelle long <input class="form-control" type="text" name="pro_libelle_long" placeholder="Entrez une description du produit" readonly>
        </div>
        <div class="col-12">
            Prix d'achat <input class="form-control" type="text" name="pro_prix_achat" placeholder="Entrez le prix d'achat" readonly>
        </div>

        <div class="col-12">
            <br>
            <button type="submit" class="btn btn-danger">Supprimer le produit</button>
            <input type = "button" class="btn btn-secondary" value = "Retour au produit"  onclick = "history.back()">
                        
        </div>

    </form>
</div>