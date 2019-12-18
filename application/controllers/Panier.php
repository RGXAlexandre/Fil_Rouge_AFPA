<?php
class Panier extends CI_controller {

    

    public function Ajout ($id) {

        
        $produit = $this->db->query("select * from produit where pro_id=?", $id)->row();
        
        $data = [
            "pro_id" => $produit->pro_id,
            "pro_libelle_court" => $produit->pro_libelle_court,
            "pro_libelle_long" => $produit->pro_libelle_long,
            "pro_prix_achat" => $produit->pro_prix_achat,
            "pro_photo" => $produit->pro_photo,
        ];

        $this->basket->add($data);

        
        redirect(site_url("Panier/Pan"));


             

    }

    public function AjoutUn ($id) {

        
        $produit = $this->db->query("select * from produit where pro_id=?", $id)->row();

        $data = [
            "pro_id" => $produit->pro_id,
            "pro_libelle_court" => $produit->pro_libelle_court,
            "pro_libelle_long" => $produit->pro_libelle_long,
            "pro_prix_achat" => $produit->pro_prix_achat,
            "pro_photo" => $produit->pro_photo,
        ];

        $this->basket->add($data);

        redirect(site_url("Panier/Pan"));

    }

    public function RetraitUn ($id) {

                
        foreach ($this->basket->get_basket() as $value) {
            if ($value["element"]["pro_id"] == $id) {
                $this->basket->edit_quantity($value["element"],$value["qty"]-1);
            }
        }


        redirect(site_url("Panier/Pan"));

    }


    public function Pan () {

        $requete = $this->db->query("select * from client where cli_mail=?",array($this->auth->get_login()));
        $data["client"] = $requete->row();



        $data["panier"] = $this->basket->get_basket();


        $this->load->view("header.php");
        $this->load->view("Panier.php", $data);
        $this->load->view("footer.php");

    }

    public function Supprimer () {

        $this->basket->clean();

        $data["panier"] = $this->basket->get_basket();

        $this->load->view("header.php");
        $this->load->view("Panier.php", $data);
        $this->load->view("footer.php");

    }

    public function SupprimerLigne ($id) {

        $requete = $this->db->query("select * from produit where pro_id=?", array($id));
        $data = $requete->row_array();


        $this->basket->remove($data);

        redirect(site_url("Panier/Pan"));

    }

    
    public function ValiderPanier () {

        $data["panier"] = $this->basket->get_basket();


        $this->load->view("header.php");
        $this->load->view("Panier.php", $data);
        $this->load->view("footer.php");

    }


}
?>