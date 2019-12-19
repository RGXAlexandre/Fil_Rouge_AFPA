<!-- TODO: A COMMENTER -->
<?php
class Categories extends CI_controller {

    public function Cat () {
        
        $requete = $this->db->query("select * from rubrique where rub_id_1 is null");

        $data["liste"] = $requete->result();

        $this->load->view("header.php");
        $this->load->view("categories.php", $data);
        $this->load->view("footer.php");
    }
    public function Cat2 ($id) {
        
  
        $requete = $this->db->query("select * from rubrique where rub_id = ?", array($id));

        $data["rubrique"] = $requete->result();


        $requete = $this->db->query("select * from rubrique where rub_id_1 = ?", array($id));

        $data["sous_rubrique"] = $requete->result();



        $this->load->view("header.php");
        // $this->load->view("categories.php", $data);
        $this->load->view("categories2.php", $data);
        $this->load->view("footer.php");
    }
    
}
?>
