<?php
class Apropos extends CI_controller {

    public function Apr () {
        
        $this->load->view("header.php");
        $this->load->view("Apropos.php");
        $this->load->view("footer.php");
    }
}
?>