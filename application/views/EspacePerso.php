<h2>Bonjour <?=$client->cli_prenom ?>, et bienvenue sur votre espace personnel.</h2>
<div>Vous trouverez ci-dessous votre historique de commande</div>

<hr>



<?php  
$requete1 = $this->db->query("select * from commande natural join client WHERE cli_mail=?",array($this->auth->get_login()));
$data["client"] = $requete1->row();

// var_dump($data);

$requete2 = $this->db->query("select * from posseder join produit on pos_pro_id=pro_id where pos_com_id=?", array($data["client"]->com_id));
$data["ligne"] = $requete2->result();

var_dump($data);

?>

<hr>


