<h1>A propos de GreenVillage</h1>

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad hic doloremque, dicta voluptatibus libero consequatur possimus, veniam provident ex sequi sint et quas quasi qui nobis accusamus, dignissimos repellat porro!
Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda impedit libero omnis earum ut ducimus enim, autem, quos soluta aperiam, adipisci sed iusto fugit id. Expedita est incidunt corrupti numquam.
Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos nisi impedit corrupti quibusdam eligendi! A labore ipsam laboriosam error illum id dolor pariatur aperiam at! Repellat suscipit modi deleniti. Sint.
<hr>
<?php $this->auth->get_type(); ?>

<?php if ($this->auth->is_type('employé')) : ?>

<a href="<?= site_url('Produit/Ajo/') ?>" class="btn btn-warning" role="button" aria-pressed="true" style="float:right" class="cache">Ajouter un produit</a>
 
<?php else : ?>

<div>Gné</div>

<?php endif; ?>

<hr>