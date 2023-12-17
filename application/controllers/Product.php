<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Product_model');
    }

    public function add()
    {

        $this->load->helper('form');

        $this->load->library('form_validation');


        $this->form_validation->set_rules('type', 'Type', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('marque', 'Marque', 'required');
        $this->form_validation->set_rules('modele', 'Modèle', 'required');
        $this->form_validation->set_rules('prix_location', 'Prix de Location', 'required|numeric');
        $this->form_validation->set_rules('etat', 'État', 'required');

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('product/add_product_form');
        } else {

            $this->Product_model->add_product();
            redirect('product/productlist');
        }
    }

    public function productlist()
    {
        $data['products'] = $this->Product_model->get_products();
        $this->load->view('product/productlist', $data);
    }

    public function boutique()
    {

        $this->load->model('Product_model');


        $data['produits'] = $this->Product_model->get_products();


        $this->load->view('product/boutique', $data);
    }


    public function delete_product($product_id)
    {
        $this->Product_model->delete_product($product_id);
        redirect('product/productlist');
    }
    public function listproductonboutique()
    {
        $data['products'] = $this->Product_model->get_products();
        $this->load->model('Product_model', $data);
    }

    public function afficherProduit()
    {

        $product_id = $this->input->get('id');


        $this->load->model('Product_model');


        $data['produit'] = $this->Product_model->getProduitById($product_id);


        $this->load->view('product/description', $data);
    }

    public function afficherProduitPage()
    {
        $this->afficherProduit();
    }

}
?>