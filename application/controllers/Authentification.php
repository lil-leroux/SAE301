<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Authentification extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');

    }

    public function register()
    {

        $this->load->view('register_view');
    }


    public function process_registration()
    {

        $this->form_validation->set_rules('login', 'Login', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('nom', 'Nom', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('ddn', 'Date de naissance', 'required|callback_check_majeur');
        $this->form_validation->set_message('check_majeur', 'Vous devez être majeur pour créer un compte.');




        if ($this->form_validation->run() === FALSE) {

            $this->load->view('register_view');
        } else {

            $data = array(
                'login' => $this->input->post('login'),
                'password' => md5($this->input->post('password')),
                'nom' => $this->input->post('nom'),
                'prenom' => $this->input->post('prenom'),
                'ddn' => $this->input->post('ddn'),
                'email' => $this->input->post('email'),
                'type_utilisateur' => 'client'
            );


            $is_majeur = $this->check_majeur($this->input->post('ddn'));

            if (!$is_majeur) {

                $data['error_message'] = 'Vous devez être majeur pour créer un compte.';
                $this->load->view('register_view', $data);
            } else {

                $this->User_model->insert_user($data);

                redirect('login');
            }
        }
    }

    public function check_majeur($date_naissance)
    {

        $date_naissance_timestamp = strtotime($date_naissance);
        $majorite_timestamp = strtotime('-18 years');

        return ($date_naissance_timestamp <= $majorite_timestamp);
    }


    public function delete_account()
    {


        $this->load->view('delete_account_view');
    }

    public function process_delete_account()
    {


        $user_id = $this->session->userdata('user_id');


        $is_deleted = $this->User_model->delete_user($user_id);

        if ($is_deleted) {

            $this->session->sess_destroy();


            redirect('login');
        } else {

            echo "La suppression du compte a échoué.";
        }
    }


}
