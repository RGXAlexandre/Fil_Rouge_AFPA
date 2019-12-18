<?php
class Connexion extends CI_controller
{

// Déclaration d'une méthode de Login (gérant un identifiant et d'un mot de passe), vers la librairie Basket.php, redirigeant vers l'accueil.
    public function Log()
    {
        if ($this->input->post()) {

            $e = $this->input->post("cli_mail");
            $p = $this->input->post("cli_password");

            if ($this->auth->login($e, $p, "client")) {
                redirect(site_url("Accueil/Acc"));
            } else {
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
