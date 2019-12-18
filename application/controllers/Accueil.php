<?php
class Accueil extends CI_controller {
    
    public function Acc () {

        $requete = $this->db->query("select * from rubrique where rub_id_1 is null");

        $data["liste"] = $requete->result();

        $this->load->view("header.php");
        $this->load->view("accueil.php", $data);
        $this->load->view("footer.php");
    }

    public function Perdu () {

        $this->load->view("header.php");
        $this->load->view("nelson.php");
        $this->load->view("footer.php");
    }
}
