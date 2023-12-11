<?php
class Dicathlon extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('base_dicathlon');
    }
    public function index()
    {
        $data['userlist'] = $this->base_dicathlon->get_utilisateur();
        $data['title'] = 'userlist';
        $data['content'] = 'userlist';
        $this->load->vars($data);
        $this->load->view('accueil');
    }
}
