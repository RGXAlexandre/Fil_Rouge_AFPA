<?php
class Site extends CI_controller {

    public function panier () {
        
        $this->load->view("header.php");
        $this->load->view("panier.php");
        $this->load->view("footer.php");
    }
}
?>