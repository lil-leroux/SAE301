<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function add_product() {
        $data = array(
            'type' => $this->input->post('type'),
            'description' => $this->input->post('description'),
            'marque' => $this->input->post('marque'),
            'modele' => $this->input->post('modele'),
            'prix_location' => $this->input->post('prix_location'),
            'etat' => $this->input->post('etat')
        );

        return $this->db->insert('produit', $data);
    }

    public function get_products() {
        $query = $this->db->get('produit');
        return $query->result();
    }

    public function delete_product($product_id) {
        $this->db->where('id', $product_id);
        return $this->db->delete('produit');
    } 

    
    
    public function getProduitById($product_id) {
        // Récupérer les détails du produit depuis la base de données
        $this->db->where('id', $product_id);
        $query = $this->db->get('produit');

        // Retourner les données du produit sous forme de tableau associatif
        return $query->row_array();
    }


}
?>
