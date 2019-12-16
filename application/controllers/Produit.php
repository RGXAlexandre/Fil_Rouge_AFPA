<?php
class Produit extends CI_controller {

    public function Pro () {

        $requete = $this->db->query("select * from produit");

        $data["produits"] = $requete->result();

        // $requete = $this->db->query("select rub_id_1 from rubrique where rub_id = ?", array($id));

        // $data["rubrique"] = $requete->row();




        
        $this->load->view("header.php");
        $this->load->view("liste.php", $data);
        $this->load->view("footer.php");
    }
    public function Pro2 ($id) {

        $requete = $this->db->query("select * from produit where pro_rub_id = ?", array($id));

        $data["produits"] = $requete->result();
        
        $this->load->view("header.php");
        $this->load->view("produit.php", $data);
        $this->load->view("footer.php");
    }

    public function Pro3 ($id) {

        $requete = $this->db->query("select * from produit where pro_id = ?", array($id));

        $data["produits"] = $requete->result();
        $this->load->view("header.php");
        $this->load->view("produit.php", $data);
        $this->load->view("footer.php");
    }

    public function Ajo () {
        
        // requete SQL pour les selects des rubriques et fournisseurs existants dans la vue

        $requete = $this->db->query("select * from rubrique where rub_id_1 is not null");
        $data["rubriques"] = $requete->result();


        $requete = $this->db->query("select * from fournisseur");
        $data["fournisseurs"] = $requete->result();

        //  mise en place des controles des champs avec set_rules('nom du champ','nom pour l'affichage de l'erreur','conditions de vérification')
        //  penser à bien télécharger la librairies 'form_validation' et le helper 'form'
        $this->form_validation->set_rules('pro_libelle_court', 'nom produit',  'required|regex_match[/^[a-zA-Z0-9\'-àéèêâûùë ]{1,60}$/]');
        $this->form_validation->set_rules('pro_libelle_long', 'description produit',  'regex_match[/^[a-zA-Z0-9\'-àéèêâûùë ]{1,300}$/]');
        $this->form_validation->set_rules('pro_prix_achat', 'prix d\'achat produit',  'required|regex_match[/^[0-9]{1,5}[,.]{0,1}[0-9]{0,2}$/]');


        // if ($this->input->post()) {
            if ($this->input->post() && $this->form_validation->run()) {

            // permet l'affichage de toutes les tâches effectuées
            $this->output->enable_profiler(TRUE);

            // récupère sous forme de tableau le post du formulaire
            $tab = $this->input->post();

            // afin d'insérer une ligne dans la table disque et de récupérer l'id de l'insert on ouvre une transaction
            $this->db->trans_start();
            $this->db->insert("produit", $tab);
            $id = $this->db->insert_id();
            $this->db->trans_complete();

            // On créé un tableau de configuration pour l'upload
            $config['upload_path'] = './assets/images/'; // chemin où sera stocké le fichier
            $config['allowed_types'] = 'gif|jpg|png'; // Types autorisés (ici pour des images)
            // $config['max_size']             = 100; // gestion taille max du fichier
            // $config['max_width']            = 1024; // gestion des dimensions max de la photo
            // $config['max_height']           = 768;

            // On initialise la config 
            $this->upload->initialize($config);

            // La méthode do_upload() effectue les validations sur l'attribut HTML 'name' ('fichier' dans notre formulaire) et si OK renomme et déplace le fichier tel que configuré
            if ($this->upload->do_upload("pro_photo")) {

                // stocke sous forme de tableau toutes les données du fichier téléchargé
                $res = $this->upload->data();

                // commande pour renommer le chemin et le fichier avec extension : rename ('chemin existant','chemin futur')
                rename($res["full_path"], $res["file_path"] ."produit". $id . $res["file_ext"]);

                //equivalent requête mysql avec codeigniter : UPDATE `produit` SET `pro_photo` = '"produit".$id.$res["file_ext"]' WHERE `pro_id` = $id
                $this->db->set('pro_photo', "produit".$id . $res["file_ext"]);
                $this->db->where('pro_id', $id);
                $this->db->update('produit');
            }
            redirect(site_url("Produit/Pro"));
        } else {
        $this->load->view("header.php");
        $this->load->view("Ajout.php", $data);
        $this->load->view("footer.php");
        }
    }

    public function Mod ($id) {

        $requete = $this->db->query("select * from produit join rubrique ON pro_rub_id=rub_id join fournisseur ON pro_fou_id=fou_id where pro_id=?", array($id));
        $data["produit"] = $requete->row();

        $requete = $this->db->query("select * from rubrique where rub_id_1 is not null");
        $data["rubriques"] = $requete->result();

        $requete = $this->db->query("select * from fournisseur");
        $data["fournisseurs"] = $requete->result();

//  mise en place des controles des champs avec set_rules('nom du champ','nom pour l'affichage de l'erreur','conditions de vérification')
        //  penser à bien télécharger la librairies 'form_validation' et le helper 'form'
        $this->form_validation->set_rules('pro_libelle_court', 'nom produit',  'required|regex_match[/^[a-zA-Z0-9\'-àéèêâûùë ]{1,60}$/]');
        $this->form_validation->set_rules('pro_libelle_long', 'description produit',  'regex_match[/^[a-zA-Z0-9\'-àéèêâûùë ]{1,300}$/]');
        $this->form_validation->set_rules('pro_prix_achat', 'prix d\'achat produit',  'required|regex_match[/^[0-9]{1,5}[,.]{0,1}[0-9]{0,2}$/]');


        // if ($this->input->post()) {
            if ($this->input->post() && $this->form_validation->run()) {

            // permet l'affichage de toutes les tâches effectuées
            $this->output->enable_profiler(TRUE);

            // récupère sous forme de tableau le post du formulaire
            $tab = $this->input->post();

            $this->db->update("produit", $tab, "pro_id=$id");


            // On créé un tableau de configuration pour l'upload
            $config['upload_path'] = './assets/images/'; // chemin où sera stocké le fichier
            $config['allowed_types'] = 'gif|jpg|png'; // Types autorisés (ici pour des images)
            // $config['max_size']             = 100; // gestion taille max du fichier
            // $config['max_width']            = 1024; // gestion des dimensions max de la photo
            // $config['max_height']           = 768;

            // On initialise la config 
            $this->upload->initialize($config);

            // La méthode do_upload() effectue les validations sur l'attribut HTML 'name' ('fichier' dans notre formulaire) et si OK renomme et déplace le fichier tel que configuré
            if ($this->upload->do_upload("pro_photo")) {

                // stocke sous forme de tableau toutes les données du fichier téléchargé
                $res = $this->upload->data();

                // commande pour renommer le chemin et le fichier avec extension : rename ('chemin existant','chemin futur')
                rename($res["full_path"], $res["file_path"] ."produit". $id . $res["file_ext"]);

                //equivalent requête mysql avec codeigniter : UPDATE `produit` SET `pro_photo` = '"produit".$id.$res["file_ext"]' WHERE `pro_id` = $id
                $this->db->set('pro_photo', "produit".$id . $res["file_ext"]);
                $this->db->where('pro_id', $id);
                $this->db->update('produit');
            }
            redirect(site_url("Produit/Pro"));
        } else {

        $this->load->view("header.php");
        $this->load->view("Modifier.php", $data);
        $this->load->view("footer.php");
        }
    }

    public function Sup ($id) {

        $requete = $this->db->query("select * from produit join rubrique ON pro_rub_id=rub_id join fournisseur ON pro_fou_id=fou_id where pro_id=?", array($id));
        $data["produit"] = $requete->row();

        if ($this->input->post()) {

            $this->output->enable_profiler(TRUE);

            $id = $this->input->post();

            $this->db->delete("produit", $id);

            redirect(site_url("Produit/Pro"));
        } else {

        $this->load->view("header.php");
        $this->load->view("Supprimer.php",$data);
        $this->load->view("footer.php");
        }
    }

}
