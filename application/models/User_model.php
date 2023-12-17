<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();

    }

    public function add_user()
    {
        $data = array(
            'login' => $this->input->post('login'),
            'password' => md5($this->input->post('password')),
            'nom' => $this->input->post('nom'),
            'prenom' => $this->input->post('prenom'),
            'ddn' => $this->input->post('ddn'),
            'email' => $this->input->post('email'),
            'type_utilisateur' => $this->input->post('type_utilisateur')
        );

        $this->db->insert('utilisateur', $data);
    }

    public function get_users()
    {

        $query = $this->db->get('utilisateur');
        return $query->result();
    }

    public function delete_user($user_id)
    {
        $this->db->where('id', $user_id);

        $this->db->delete('utilisateur');
        return $this->db->affected_rows() > 0;
    }



    public function check_login($login, $password)
    {

        $query = $this->db->get_where('utilisateur', array('login' => $login, 'password' => $password));
        return $query->row();
    }

    public function get_user_type($user_id)
    {
        $query = $this->db->select('type_utilisateur')->get_where('utilisateur', array('id' => $user_id));
        $result = $query->row();
        return ($result) ? $result->type_utilisateur : null;
    }

    public function is_admin($user_id)
    {
        $this->db->select('type_utilisateur');
        $this->db->where('id', $user_id);
        $query = $this->db->get('utilisateur');

        if ($query->num_rows() > 0) {
            $user = $query->row();
            return $user->type_utilisateur === 'admin';
        }

        return false;
    }

    public function updateUser($login, $nouveau_nom, $nouveau_prenom, $nouvelle_ddn, $nouvel_email, $nouveau_mdp)
    {
        $data = array(
            'nom' => $nouveau_nom,
            'prenom' => $nouveau_prenom,
            'ddn' => $nouvelle_ddn,
            'email' => $nouvel_email,
            'password' => $nouveau_mdp
        );

        $this->db->where('login', $login);
        $this->db->update('utilisateur', $data);

        return $this->db->affected_rows() > 0;
    }

    public function insert_user($data)
    {

        $this->db->insert('utilisateur', $data);
    }


}
?>