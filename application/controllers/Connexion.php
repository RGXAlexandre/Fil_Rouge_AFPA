<?php
class Site extends CI_controller {

    public function connexion () {
        
        $this->load->view("header.php");
        $this->load->view("connexion.php");
        $this->load->view("footer.php");
    }
}
?>