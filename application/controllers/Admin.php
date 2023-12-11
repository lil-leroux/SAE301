<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('session');
    }

    public function admin_dashboard() {
        // Vérifier si l'utilisateur est connecté
        if (!$this->session->userdata('user_id')) {
            // Si l'utilisateur n'est pas connecté, rediriger vers la page de connexion
            redirect('login');
        }

        // Récupérer le type d'utilisateur depuis la session
        $user_type = $this->User_model->get_user_type($this->session->userdata('user_id'));

        // Vérifier si l'utilisateur est un administrateur
        if ($user_type === 'admin') {
            // Autorisé pour les administrateurs, afficher la page d'administration
            $this->load->view('admin/dashboard');
        } else {
            // Non autorisé pour d'autres types d'utilisateurs
            show_error('Accès non autorisé', 403);
        }
    }


    public function dashboard() {
        // Vérifiez si l'utilisateur est connecté en tant qu'administrateur
        if (!$this->session->userdata('user_id') || !$this->User_model->is_admin($this->session->userdata('user_id'))) {
            // Si l'utilisateur n'est pas un administrateur, redirigez-le vers la page de connexion
            redirect('login/non_autorise');
            $this->load->view('login/non_autorise');
        }

        // Chargez la vue du tableau de bord administrateur
        $this->load->view('admin/dashboard');
    }


    


}
