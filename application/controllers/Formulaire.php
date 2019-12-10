<?php
class Site extends CI_controller {

    public function formulaire () {
        
        $this->load->view("header.php");
        $this->load->view("formulaire.php");
        $this->load->view("footer.php");
    }
}
?>    