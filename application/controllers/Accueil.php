<?php
class Accueil extends CI_Controller {
    
    public function index()
    {
        echo "Hello";
    }

    public function hello () {
        echo "toto";
        $this->load->view("header.php");
        $this->load->view("accueil.php");
        $this->load->view("footer.php");
    }
}
