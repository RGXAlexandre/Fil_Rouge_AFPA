<?php
class Site extends CI_controller {

    public function accueil () {
        
        $this->load->view("header.php");
        $this->load->view("accueil.php");
        $this->load->view("footer.php");
    }
}
