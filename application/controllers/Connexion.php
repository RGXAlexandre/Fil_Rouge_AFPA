<?php
class Connexion extends CI_controller {

    public function Con () {
        
        $this->load->view("header.php");
        $this->load->view("connexion.php");
        $this->load->view("footer.php");
    }
}
?>