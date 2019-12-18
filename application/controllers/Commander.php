<?php
class Commander extends CI_controller {

    public function Paiement () {

        // requête pour récupérer toutes les informations du client
        // TODO: récupérer l'id de l'utilisateur connecté 
        $requete = $this->db->query("select * from client where cli_id=1");

        $data["client"] = $requete->row();
        
        $this->load->view("header.php");
        $this->load->view("Paiement.php", $data);
        $this->load->view("footer.php");            

    }
}