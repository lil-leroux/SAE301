<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_reservation() {
        $query = $this->db->get('location');
        return $query->result();
    }

    public function delete_reservation($produit_id) {
        $this->db->where('id', $produit_id);
        return $this->db->delete('location');
    } 
}
?>
