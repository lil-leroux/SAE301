<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('session');
        $this->load->library('form_validation');
    }

    public function index()
    {
        if ($this->session->userdata('user_id')) {

            $data['welcome_message'] = 'Bienvenue, ' . $this->session->userdata('username') . ' !';
            $this->load->view('login/welcome_view', $data);
        } else {

            $this->load->view('login/login_form');
        }
    }

    public function welcome_view()
    {

        if ($this->session->userdata('user_id')) {

            $data['username'] = $this->session->userdata('username');


            $this->load->view('login/welcome_view', $data);
        } else {

            redirect('login');
        }
    }


    public function non_autorise()
    {

        if ($this->session->userdata('user_id')) {

            $data['username'] = $this->session->userdata('username');


            $this->load->view('login/non_autorise', $data);
        } else {

            redirect('login');
        }
    }





    public function process_login()
    {

        $this->form_validation->set_rules('login', 'Login', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('login/login_form');
        } else {

            $login = $this->input->post('login');
            $password = md5($this->input->post('password'));

            $user = $this->User_model->check_login($login, $password);

            if ($user) {

                $this->session->set_userdata('user_id', $user->id);
                $this->session->set_userdata('username', $user->nom);


                redirect('login/welcome_view');
            } else {

                $data['error'] = 'Login ou mot de passe incorrect.';
                $this->load->view('login/login_form', $data);
            }


        }
    }

    public function logout()
    {

        $this->session->sess_destroy();
        redirect('login');
    }

}
?>