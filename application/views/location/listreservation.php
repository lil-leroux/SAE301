<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?php echo base_url('img/Rectangle 367.png'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css'); ?>">
    <title>Liste des Produits</title>
</head>
<body>


<?php 

$this->load->view('header');
 ?>

<h2>Liste des réservation</h2>

<?php if (!empty($reservations)) { ?>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Date de début</th>
                <th>date de retour prevue</th>
                <th>date retour effective</th>
                <th>prix totale</th>
                <th>utilisateur id</th>
                <th>produit id</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($reservations as $reservation) { ?>
                <tr>
                    <td><?php echo $reservation->id; ?></td>
                    <td><?php echo $reservation->date_debut; ?></td>
                    <td><?php echo $reservation->date_retour_prevue; ?></td>
                    <td><?php echo $reservation->date_retour_effective; ?></td>
                    <td><?php echo $reservation->prix_total; ?></td>
                    <td><?php echo $reservation->utilisateur_id; ?></td>
                    <td><?php echo $reservation->produit_id; ?></td>
                    <td>
                        <td><a href="<?php echo base_url('index.php/product/delete_product/' . $product->id); ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce produit ?')">
                    Supprimer</a></td>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
<?php } else { ?>
    <p>Aucun produit trouvé.</p>
<?php } ?>

<?php $this->load->view('footer'); ?>
</body>
</html>
