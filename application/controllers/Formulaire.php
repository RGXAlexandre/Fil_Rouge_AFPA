<?php
class Formulaire extends CI_controller {

    public function For () {
        
        $this->load->view("header.php");
        $this->load->view("formulaire.php");
        $this->load->view("footer.php");
    }
}
?>    