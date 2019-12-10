<?php
class Panier extends CI_controller {

    public function Pan () {
        
        $this->load->view("header.php");
        $this->load->view("panier.php");
        $this->load->view("footer.php");
    }
}
?>