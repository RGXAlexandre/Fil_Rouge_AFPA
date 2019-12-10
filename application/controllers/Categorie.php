<?php
class Site extends CI_controller {

    public function categories () {
        
        $this->load->view("header.php");
        $this->load->view("categories.php");
        $this->load->view("footer.php");
    }
}
?>