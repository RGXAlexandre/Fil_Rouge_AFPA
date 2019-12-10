<?php
class Accueil extends CI_Controller {
    

    public function Hello () {
        $this->load->view("header.php");
        $this->load->view("accueil.php");
        $this->load->view("footer.php");
    }
}
