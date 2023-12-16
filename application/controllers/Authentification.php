<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentification extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');

    }

    public function register() {
        // Charger la vue d'inscription
        $this->load->view('register_view');
    }

    public function process_registration() {
        // Valider le formulaire
        $this->form_validation->set_rules('login', 'Login', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('nom', 'Nom', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('ddn', 'Ddn', 'required');



        // Ajoutez d'autres règles de validation ici selon vos besoins

        if ($this->form_validation->run() === FALSE) {
            // Si la validation échoue, réaffichez le formulaire avec des erreurs
            $this->load->view('register_view');
        } else {
            // Récupérer les données du formulaire
            $data = array(
                'login' => $this->input->post('login'),
                'password' => md5($this->input->post('password')), // Utilisez un hachage sécurisé
                'nom' => $this->input->post('nom'),
                'prenom' => $this->input->post('prenom'),
                'ddn' => $this->input->post('ddn'),
                'email' => $this->input->post('email'),
                'type_utilisateur' => 'client' // Par défaut, le type d'utilisateur est "client"
            );

            // Insérer l'utilisateur dans la base de données
            $this->User_model->insert_user($data);

            // Rediriger vers une page de confirmation ou une autre page appropriée
            redirect('login');
        }
    }

    public function delete_account() {
    
        // Charger la vue de confirmation de suppression de compte
        $this->load->view('delete_account_view');
    }
    
    public function process_delete_account() {
    
        // Récupérer l'ID de l'utilisateur à partir de la session
        $user_id = $this->session->userdata('user_id');
    
        // Supprimer l'utilisateur de la base de données en utilisant le modèle
        $is_deleted = $this->User_model->delete_user($user_id);
    
        if ($is_deleted) {
            // Déconnecter l'utilisateur
            $this->session->sess_destroy();
    
            // Rediriger vers une page de confirmation ou la page d'accueil par exemple
            redirect('login');
        } else {
            // Gérer le cas où la suppression a échoué
            echo "La suppression du compte a échoué.";
        }
    }
    
    
}
