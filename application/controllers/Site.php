<?php
class Site extends CI_controller {

    public function accueil () {
        // TODO:  coder cett fonction
        $this->load->view("header.php");
        $this->load->view("accueil.php");
        $this->load->view("footer.php");
    }

    public function categories () {
        // TODO:  coder cett fonction
        $this->load->view("header.php");
        $this->load->view("categories.php");
        $this->load->view("footer.php");
    }


    public function produit () {
        // TODO:  coder cett fonction
        $this->load->view("header.php");
        $this->load->view("produit.php");
        $this->load->view("footer.php");
    }

    public function connexion () {
        // TODO:  coder cett fonction
        $this->load->view("header.php");
        $this->load->view("connexion.php");
        $this->load->view("footer.php");
    }

    public function formulaire () {
        // TODO:  coder cett fonction
        $this->load->view("header.php");
        $this->load->view("formulaire.php");
        $this->load->view("footer.php");
    }

    public function panier () {
        // TODO:  coder cett fonction
        $this->load->view("header.php");
        $this->load->view("panier.php");
        $this->load->view("footer.php");
    }
}


