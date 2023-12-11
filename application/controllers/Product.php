<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Product_model'); // Charger le modèle Product_model
    }

    public function add() {
        // Charger la bibliothèque de formulaire (si ce n'est pas déjà fait)
        $this->load->helper('form');

        // Charger la bibliothèque de validation de formulaire
        $this->load->library('form_validation');

        // Règles de validation pour le formulaire d'ajout de produit
        $this->form_validation->set_rules('type', 'Type', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('marque', 'Marque', 'required');
        $this->form_validation->set_rules('modele', 'Modèle', 'required');
        $this->form_validation->set_rules('prix_location', 'Prix de Location', 'required|numeric');
        $this->form_validation->set_rules('etat', 'État', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Si la validation échoue, afficher la vue du formulaire d'ajout
            $this->load->view('product/add_product_form');
        } else {
            // Si la validation réussit, ajouter le produit et rediriger
            $this->Product_model->add_product();
            redirect('product/productlist'); // Rediriger vers la liste des produits (à créer)
        }
    }

    public function productlist() {
        $data['products'] = $this->Product_model->get_products();
        $this->load->view('product/productlist', $data);
    }

    public function boutique() {
        // Charger le modèle associé à la table 'produit'
        $this->load->model('Product_model');

        // Appel à la méthode du modèle pour récupérer tous les produits
        $data['produits'] = $this->Product_model->get_products();

        // Passer les données récupérées à la vue boutique
        $this->load->view('product/boutique', $data);
    }


    public function delete_product($product_id) {
        $this->Product_model->delete_product($product_id);
        redirect('product/productlist');
    }
    public function listproductonboutique() {
        $data['products'] = $this->Product_model->get_products();
        $this->load->model('Product_model', $data);
    }
    public function afficherProduit($id_produit) {
        // Charger le modèle associé à la table 'produit'
        $this->load->model('Product_model');

        // Appel à la méthode du modèle pour récupérer les détails du produit
        $data['produit'] = $this->Produit_model->getProduitById($id_produit);

        
    }

}
?>
