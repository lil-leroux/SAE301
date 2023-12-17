<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Mes Réservations</title>
    <!-- Vos liens CSS et autres -->
</head>
<body>
    <?php $this->load->view('header'); ?>

    <h1>Mes Réservations</h1>

    <!-- Formulaire pour envoyer les réservations -->
    <form action="<?php echo site_url('reservation/enregistrerReservation'); ?>" method="post">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?php echo base_url('img/Rectangle 367.png'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css'); ?>">
    <title>Mes Réservations</title>
</head>
<body>
    <?php $this->load->view('header');?>

    <h1>Mes Réservations</h1>
     <!-- Formulaire pour envoyer les réservations -->
     <?php if(isset($location_confirmee) && $location_confirmee): ?>
    <p>Location confirmée</p>
<?php else: ?>
    <form action="<?php echo site_url('MesReservations/enregistrerReservation'); ?>" method="post">

    <table border="1">
        <thead>
            <tr>
                <th>Type</th>
                <th>Description</th>
                <th>Marque</th>
                <th>Modèle</th>
                <th>Prix de Location</th>
                <th>État</th>
                <th>Date de début</th>
                <th>Date de fin</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Récupérer les données envoyées via POST
            $product_id = $_POST['product_id'];
            $startDate = $_POST['startDateHidden'];
            $endDate = $_POST['endDateHidden'];

            // Utilisez l'id pour récupérer les détails du produit depuis la base de données en utilisant le modèle Product_model
            $produit_details = $this->Product_model->getProduitById($product_id);

            // Vérifiez si les détails du produit existent
            if ($produit_details) {
            ?>
                <tr>
                    <td><?php echo $produit_details['type']; ?></td>
                    <td><?php echo $produit_details['description']; ?></td>
                    <td><?php echo $produit_details['marque']; ?></td>
                    <td><?php echo $produit_details['modele']; ?></td>
                    <td><?php echo $produit_details['prix_location']; ?> €</td>
                    <td><?php echo $produit_details['etat']; ?></td>
                    <td><?php echo $startDate; ?></td>
                    <td><?php echo $endDate; ?></td>
                </tr>
            <?php
            } else {
                // Affichez un message si le produit n'est pas trouvé
                echo "<tr><td colspan='8'>Pas de réservation.</td></tr>";
            }
            ?>
        </tbody>
    </table>

        <!-- Ajout du bouton "Confirmer" pour enregistrer les réservations -->
        <button type="submit">Confirmer</button>
    </form>

    <!-- Votre contenu HTML -->
    <!-- ... -->

    <?php $this->load->view('footer'); ?>
</body>
</html>