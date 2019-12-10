<?php
class Accueil extends CI_controller {
    
    public function Acc () {

        $this->load->view("header.php");
        $this->load->view("accueil.php");
        $this->load->view("footer.php");
    }
}
