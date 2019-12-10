<?php
class Produit extends CI_controller {

    public function Pro () {
        
        $this->load->view("header.php");
        $this->load->view("produit.php");
        $this->load->view("footer.php");
    }
}
?>