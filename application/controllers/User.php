<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function add()
    {

        $this->load->helper('form');

        $this->load->library('form_validation');

        $this->form_validation->set_rules('login', 'Login', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('nom', 'Nom', 'required');
        $this->form_validation->set_rules('prenom', 'Prénom', 'required');
        $this->form_validation->set_rules('ddn', 'Date de naissance', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('type_utilisateur', 'Type d\'utilisateur', 'required');

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('user/add_user_form');
        } else {

            $this->User_model->add_user();
            redirect('user/userlist');
        }
    }

    public function userlist()
    {
        $data['users'] = $this->User_model->get_users();
        $this->load->view('user/userlist', $data);
    }


    public function delete_user($user_id)
    {
        $this->User_model->delete_user($user_id);
        redirect('user/userlist');
    }


    public function updateUser()
    {

        $this->load->library('form_validation');

        $this->form_validation->set_rules('login', 'Login', 'required');
        $this->form_validation->set_rules('nouveau_nom', 'Nouveau Nom', 'required');
        $this->form_validation->set_rules('nouveau_prenom', 'Nouveau Prénom', 'required');
        $this->form_validation->set_rules('nouveau_mdp', 'Nouveau Mot de Passe', 'required');
        $this->form_validation->set_rules('nouvel_email', 'Nouvel Email', 'required');
        $this->form_validation->set_rules('nouvelle_ddn', 'Nouvelle Ddn', 'required');




        if ($this->form_validation->run() == FALSE) {

            $this->load->view('profil/update_user_view');
        } else {

            $login = $this->input->post('login');
            $nouveau_nom = $this->input->post('nouveau_nom');
            $nouveau_prenom = $this->input->post('nouveau_prenom');
            $nouvelle_ddn = $this->input->post('nouvelle_ddn');
            $nouvel_email = $this->input->post('nouvel_email');
            $nouveau_mdp = $this->input->post('nouveau_mdp');



            $result = $this->User_model->updateUser($login, $nouveau_nom, $nouveau_prenom, $nouvelle_ddn, $nouvel_email, $nouveau_mdp);


            if ($result) {

                redirect('success_page');
            } else {

                redirect('error_page');
            }
        }
    }

}

?>