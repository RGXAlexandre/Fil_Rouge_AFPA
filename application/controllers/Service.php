<?php
class Service extends CI_controller {
    
    public function Ser () {

        $this->load->view("header.php");
        $this->load->view("service.php");
        $this->load->view("footer.php");
    }
}