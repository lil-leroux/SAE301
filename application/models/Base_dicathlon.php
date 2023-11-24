<?php
class Base_dicathlon extends CI_Model{
public function __construct(){
parent::__construct();
$this->load->database();
}

public function get_utilisateur(){
    $query=$this->db->get('utilisateur');
    return $query->result_array();
    }
    
}
?>