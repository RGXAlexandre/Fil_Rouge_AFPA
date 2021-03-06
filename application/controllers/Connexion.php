<?php
class Connexion extends CI_controller
{

// Déclaration d'une méthode de Login (gérant un identifiant et d'un mot de passe), vers la librairie Basket.php, redirigeant vers l'accueil.
// Mise en place d'une boucle pour le test de la table client er de la table employé, sion redirection vers une page d'échec.
    public function Log()
    {
        if ($this->input->post()) {

            $ec = $this->input->post("cli_mail");
            $pc = $this->input->post("cli_password");
            $ee = $this->input->post("cli_mail");
            $pe = $this->input->post("cli_password");

            if ($this->auth->login($ec, $pc, "client")) {
                redirect(site_url("Accueil/Acc"));
            } 
            else if ($this->auth->login($ee, $pe, "employé")){
                redirect(site_url("Accueil/Acc"));
            }
            else {
                redirect(site_url("Accueil/Perdu"));
            }
        }
    }

// Déclaration d'une méthode de Logout, avec redirection vers l'accueil.
    public function Logout()
    {
        $this->auth->logout();
        redirect(site_url("Accueil/acc"));
    }
}
