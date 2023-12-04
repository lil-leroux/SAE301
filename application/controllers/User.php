<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model'); // Charger le modèle User_model
    }

    public function add() {
        // Charger la bibliothèque de formulaire (si ce n'est pas déjà fait)
        $this->load->helper('form');

        // Charger la bibliothèque de validation de formulaire
        $this->load->library('form_validation');

        // Règles de validation pour le formulaire d'ajout d'utilisateur
        $this->form_validation->set_rules('login', 'Login', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('nom', 'Nom', 'required');
        $this->form_validation->set_rules('prenom', 'Prénom', 'required');
        $this->form_validation->set_rules('ddn', 'Date de naissance', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('type_utilisateur', 'Type d\'utilisateur', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Si la validation échoue, afficher la vue du formulaire d'ajout
            $this->load->view('user/add_user_form');
        } else {
            // Si la validation réussit, ajouter l'utilisateur et rediriger
            $this->User_model->add_user();
            redirect('user/userlist'); // Rediriger vers la liste des utilisateurs (à créer)
        }
    }

    public function userlist() {
        $data['users'] = $this->User_model->get_users();
        $this->load->view('user/userlist', $data);
    }
    

    public function delete_user($user_id) {
        $this->User_model->delete_user($user_id);
        redirect('user/userlist');
    }
}
?>
