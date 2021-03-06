<?php
class Commander extends CI_controller
{

    public function Paiement()
    {

        // Protection de la page : accessible pour le groupe employé uniquement
        $this->auth->authorized(["client"], "accueil/Perdu");

        // requête pour récupérer toutes les informations du client
        $requete = $this->db->query("select * from client where cli_mail=?", array($this->auth->get_login()));
        $data["client"] = $requete->row();

        $this->form_validation->set_rules('com_livraison_rue', 'adresse',  'required|regex_match[/^[a-zA-Z0-9\'-àéèêâûùë ]{1,50}$/]');
        $this->form_validation->set_rules('com_livraison_code_postal', 'required|code postal',  'regex_match[/^[0-9]{5}$/]');
        $this->form_validation->set_rules('com_livraison_ville', 'ville',  'required|regex_match[/^[a-zA-Z0-9\'-àéèêâûùë ]{1,50}$/]');
        $this->form_validation->set_rules('com_livraison_pays', 'pays',  'required|regex_match[/^[a-zA-Z0-9\'-àéèêâûùë ]{1,50}$/]');
        $this->form_validation->set_rules('com_facture_rue', 'adresse',  'required|regex_match[/^[a-zA-Z0-9\'-àéèêâûùë ]{1,50}$/]');
        $this->form_validation->set_rules('com_facture_code_postal', 'required|code postal',  'regex_match[/^[0-9]{5}$/]');
        $this->form_validation->set_rules('com_facture_ville', 'ville',  'required|regex_match[/^[a-zA-Z0-9\'-àéèêâûùë ]{1,50}$/]');
        $this->form_validation->set_rules('com_facture_pays', 'pays',  'required|regex_match[/^[a-zA-Z0-9\'-àéèêâûùë ]{1,50}$/]');



        // if ($this->input->post() && $this->form_validation->run()) {
        if ($this->input->post()) {

            // permet l'affichage de toutes les tâches effectuées
            $this->output->enable_profiler(TRUE);

            // création d'un tableau avec tous les champs à insérer dans la table client 
            $commande = array(
                'com_livraison_rue' => htmlentities($this->input->post('com_livraison_rue')),
                'com_livraison_code_postal' => htmlentities($this->input->post('com_livraison_code_postal')),
                'com_livraison_ville' => htmlentities($this->input->post('com_livraison_ville')),
                'com_livraison_pays' => htmlentities($this->input->post('com_livraison_pays')),
                'com_facture_rue' => htmlentities($this->input->post('com_facture_rue')),
                'com_facture_code_postal' => htmlentities($this->input->post('com_facture_code_postal')),
                'com_facture_ville' => htmlentities($this->input->post('com_facture_ville')),
                'com_facture_pays' => htmlentities($this->input->post('com_facture_pays')),
                'com_date' => date('Y-m-d H:i:s'),
                'com_total_HT' => $this->basket->get_price_sum("pro_prix_achat") * $data['client']->cli_coefficient,
                'com_total_HT' => $this->basket->get_price_sum("pro_prix_achat") * $data['client']->cli_coefficient * 1.2,
                'com_etat' => "en préparation",
                'com_livraison_avancement' => "à livrer",
                // TODO: fixer le com_facture_numero 
                'com_facture_numero' => "37",
                'com_paiement_date' => date('Y-m-d H:i:s'),
                'com_facture_date' =>  date('Y-m-d H:i:s'),
                // attention à la syntaxe pour appeler une donnée récupéré en interne
                'com_cli_id' => $data['client']->cli_id,
            );

            // afin d'insérer une ligne dans la table disque et de récupérer l'id de l'insert on ouvre une transaction
            $this->db->trans_start();
            $this->db->insert("commande", $commande);
            $id = $this->db->insert_id();
            $panier_contenu = $this->basket->get_basket();
            foreach ($panier_contenu as $ligne) :
                $posseder = array(
                    'pos_pro_id' => $ligne["element"]["pro_id"],
                    'pos_com_id' => $id,
                    'pos_quantite_commandee' => $ligne["qty"],
                    'pos_prix_achat' => $ligne["element"]["pro_prix_achat"],
                    'pos_prix_vente' => $ligne["element"]["pro_prix_achat"]* $data['client']->cli_coefficient,
                    'pos_sous_total_HT' => $ligne["element"]["pro_prix_achat"]* $data['client']->cli_coefficient * $ligne["qty"],
                );
                $this->db->insert("posseder", $posseder);
            endforeach;
            $this->db->trans_complete();


            $this->basket->clean();
            redirect(site_url("Accueil/Acc"));
        } else {

            $this->load->view("header.php");
            $this->load->view("Paiement.php", $data);
            $this->load->view("footer.php");
        }

                 

    }
}
