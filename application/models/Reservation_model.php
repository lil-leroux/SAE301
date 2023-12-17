<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservation_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Une fonction pour insérer une nouvelle réservation dans la base de données
    public function insertReservation($data) {
        $this->db->insert('reservations', $data);
        return $this->db->insert_id(); // Retourne l'ID de la réservation nouvellement insérée
    }

    public function enregistrerReservation($data) {
        // Insérer les données dans la table 'location' de la base de données
        $this->db->insert('location', $data);
        return $this->db->insert_id(); // Retourne l'ID de la nouvelle réservation si nécessaire
    }
}
?>