<?php
class Categories extends CI_controller {

    public function Cat () {
        
        $this->load->view("header.php");
        $this->load->view("categories.php");
        $this->load->view("footer.php");
    }
    public function Vents () {
        
        $this->load->view("header.php");
        $this->load->view("vents.php");
        $this->load->view("footer.php");
    }
    public function Cordes () {
        
        $this->load->view("header.php");
        $this->load->view("cordes.php");
        $this->load->view("footer.php");
    }
    public function Claviers () {
        
        $this->load->view("header.php");
        $this->load->view("claviers.php");
        $this->load->view("footer.php");
    }
}
?>
