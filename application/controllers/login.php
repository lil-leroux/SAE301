<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('session');
        $this->load->library('form_validation');
    }

    public function index() {
        // Afficher le formulaire de connexion
        $this->load->view('login/login_form');
    }

    public function process_login() {
        // Règles de validation pour le formulaire de connexion
        $this->form_validation->set_rules('login', 'Login', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Si la validation échoue, réafficher le formulaire de connexion
            $this->load->view('login/login_form');
        } else {
            // Si la validation réussit, vérifier les informations d'identification
            $login = $this->input->post('login');
            $password = md5($this->input->post('password')); // Utilisez des méthodes de hachage sécurisées en production

            $user = $this->User_model->check_login($login, $password);

            if ($user) {
                // Informations d'identification correctes, connectez l'utilisateur
                $this->session->set_userdata('user_id', $user->id);
                // Vous pouvez ajouter d'autres données utilisateur à la session si nécessaire

                redirect('accueil'); // Rediriger vers la page d'accueil ou le tableau de bord
            } else {
                // Informations d'identification incorrectes, réafficher le formulaire de connexion avec un message d'erreur
                $data['error'] = 'Login ou mot de passe incorrect.';
                $this->load->view('login/login_form', $data);
            }
        }
    }

    public function logout() {
        // Déconnecter l'utilisateur en détruisant la session
        $this->session->sess_destroy();
        redirect('login'); // Rediriger vers la page de connexion
    }
}
?>
