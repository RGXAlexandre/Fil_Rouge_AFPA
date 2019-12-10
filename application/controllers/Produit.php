<?php
class Site extends CI_controller {

    public function produit () {
        
        $this->load->view("header.php");
        $this->load->view("produit.php");
        $this->load->view("footer.php");
    }
}
?>