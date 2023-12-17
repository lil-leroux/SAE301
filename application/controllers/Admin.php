<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('session');
    }

    public function admin_dashboard()
    {

        if (!$this->session->userdata('user_id')) {

            redirect('login');
        }


        $user_type = $this->User_model->get_user_type($this->session->userdata('user_id'));

        if ($user_type === 'admin') {

            $this->load->view('admin/dashboard');
        } else {

            show_error('Accès non autorisé', 403);
        }
    }


    public function dashboard()
    {
        if (!$this->session->userdata('user_id') || !$this->User_model->is_admin($this->session->userdata('user_id'))) {

            redirect('login/non_autorise');
            $this->load->view('login/non_autorise');
        }

        $this->load->view('admin/dashboard');
    }





}
