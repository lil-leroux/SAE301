<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservation extends CI_Controller {

    public function reserverLoc() {
        $data['product_id'] = $this->input->post('product_id');
        $data['startDateHidden'] = $this->input->post('startDateHidden');
        $data['endDateHidden'] = $this->input->post('endDateHidden');
        
        // Charger la vue Mes Réservations et envoyer les données récupérées
        $this->load->view('location/mes_reservation', $data);
    }
    
    public function confirmerLocation() {
        // Récupérer les données envoyées via POST
        $product_id = $this->input->post('product_id');
        $startDate = $this->input->post('startDateHidden');
        $endDate = $this->input->post('endDateHidden');
        // D'autres données à récupérer

        // Enregistrement des données dans la base de données (utilisez votre modèle)
        $this->load->model('Reservation_model');

        // Préparez les données à enregistrer
        $data = array(
            'utilisateur_id' => $utilisateur_id,
            'produit_id' => $product_id,
            'prix_total' => $prix_location,
            'date_retour_effective' => $endDate,
            'date_retour_prevue' => $endDate,
            'date_debut' => $startDate
            // Ajoutez d'autres champs nécessaires
        );

        // Enregistrement dans la base de données
        $this->Reservation_model->enregistrerReservation($data);

        // Mise à jour de la vue Mes Réservations
        $data['location_confirmee'] = true; // Indicateur de confirmation de location

        // Rechargez la vue Mes Réservations avec un message de confirmation ou autre
        $this->load->view('location/mes_reservation', $data);
    }
}
?>