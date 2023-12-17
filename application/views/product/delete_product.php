<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?php echo base_url('img/Rectangle 367.png'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css'); ?>">
    <title>Supprimer un Produit</title>
</head>

<body>

    <?php

    $this->load->view('header');
    ?>

    <h2>Supprimer un Produit</h2>

    <?php if (!empty($product)) { ?>
        <p>Voulez-vous vraiment supprimer le produit suivant :</p>
        <p>ID:
            <?php echo $product->id; ?>
        </p>
        <p>Type:
            <?php echo $product->type; ?>
        </p>
        <p>Description:
            <?php echo $product->description; ?>
        </p>
        <p>Marque:
            <?php echo $product->marque; ?>
        </p>
        <p>Modèle:
            <?php echo $product->modele; ?>
        </p>
        <p>Prix:
            <?php echo $product->prix_location; ?>
        </p>
        <p>Etat:
            <?php echo $product->etat; ?>
        </p>

        <?php echo form_open('product/delete_confirm/' . $product->id); ?>
        <input type="submit" value="Confirmer la suppression">
        <?php echo form_close(); ?>

        <p><a href="<?php echo base_url('product/productlist'); ?>">Annuler</a></p>
    <?php } else { ?>
        <p>Produit non trouvé.</p>
    <?php } ?>

    <?php $this->load->view('footer'); ?>

</body>

</html>