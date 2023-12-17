<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Location_model');
    }

    public function reserver()
    {

        $produitId = $this->input->post('produit_id');
        $utilisateurId = $this->input->post('utilisateur_id');
        $prixTotal = $this->input->post('prix_total');


        $this->load->model('Location_model');

        $this->Location_model->ajouterLocation($produitId, $utilisateurId, $prixTotal);


        echo "Vous avez réservé votre article avec succès !";
    }

    public function listreservation()
    {
        $data['reservation'] = $this->Location_model->get_reservation();
        $this->load->model('Location_model', $data);
    }
}
?>