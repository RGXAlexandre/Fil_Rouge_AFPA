<?php
class Categorie extends CI_controller {

    public function Cat () {
        
        $this->load->view("header.php");
        $this->load->view("categories.php");
        $this->load->view("footer.php");
    }
}
?>