<?php
class Produit extends CI_controller {

    public function Pro () {

        $requete = $this->db->query("select * from produit");

        $data["produits"] = $requete->result();

        // $requete = $this->db->query("select rub_id_1 from rubrique where rub_id = ?", array($id));

        // $data["rubrique"] = $requete->row();




        
        $this->load->view("header.php");
        $this->load->view("liste.php", $data);
        $this->load->view("footer.php");
    }
    public function Pro2 ($id) {

        $requete = $this->db->query("select * from produit where pro_rub_id = ?", array($id));

        $data["produits"] = $requete->result();
        
        $this->load->view("header.php");
        $this->load->view("produit.php", $data);
        $this->load->view("footer.php");
    }

    public function Pro3 ($id) {

        $requete = $this->db->query("select * from produit where pro_id = ?", array($id));

        $data["produits"] = $requete->result();
        $this->load->view("header.php");
        $this->load->view("produit.php", $data);
        $this->load->view("footer.php");
    }

}
?>