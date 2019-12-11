<?php
class Aide extends CI_controller {
    
    public function Aid () {

        $this->load->view("header.php");
        $this->load->view("aide.php");
        $this->load->view("footer.php");
    }
}