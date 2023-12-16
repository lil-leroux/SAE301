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
<section>
<h2>Liste des Produits</h2>
<div class="container">
<?php if (!empty($products)) { ?>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Type</th>
                <th>Description</th>
                <th>Marque</th>
                <th>Modèle</th>
                <th>Prix de Location</th>
                <th>État</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product) { ?>
                <tr>
                    <td><?php echo $product->id; ?></td>
                    <td><?php echo $product->type; ?></td>
                    <td><?php echo $product->description; ?></td>
                    <td><?php echo $product->marque; ?></td>
                    <td><?php echo $product->modele; ?></td>
                    <td><?php echo $product->prix_location; ?></td>
                    <td><?php echo $product->etat; ?></td>
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
</div>
</section>
<?php $this->load->view('footer'); ?>
</body>
</html>
