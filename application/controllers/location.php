<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Location_model'); // Charger le modèle Product_model
    }

    public function reserver() {
        // Récupérer les données envoyées par la requête AJAX
        $produitId = $this->input->post('produit_id');
        $utilisateurId = $this->input->post('utilisateur_id');
        $prixTotal = $this->input->post('prix_total');

        // Chargez le modèle 'Location_model' pour effectuer des opérations de base de données
        $this->load->model('Location_model');

        // Insérer ces données dans la table "location" via votre modèle
        $this->Location_model->ajouterLocation($produitId, $utilisateurId, $prixTotal);
        
        // Envoyer une réponse (peut être utilisée pour confirmer l'insertion)
        echo "Vous avez réservé votre article avec succès !";
    }

    public function listreservation() {
        $data['reservation'] = $this->Location_model->get_reservation();
        $this->load->model('Location_model', $data);
    }
}
?>
