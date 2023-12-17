<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?php echo base_url('img/Rectangle 367.png'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css'); ?>">
    <title>Ajouter un Produit</title>
</head>

<body>

    <?php

    $this->load->view('header');
    ?>
    <section>
        <h2>Ajouter un Produit</h2>
        <div class="container">
            <?php echo validation_errors(); ?>

            <?php echo form_open('product/add'); ?>

            <label for="type">Type:</label>
            <input type="text" name="type"><br>

            <label for="description">Description:</label>
            <input type="text" name="description"><br>

            <label for="marque">Marque:</label>
            <input type="text" name="marque"><br>

            <label for="modele">Modèle:</label>
            <input type="text" name="modele"><br>

            <label for="prix_location">Prix de Location:</label>
            <input type="text" name="prix_location"><br>

            <label for="etat">État:</label>
            <input type="text" name="etat"><br>

            <input type="submit" value="Ajouter">

            <?php echo form_close(); ?>
        </div>
    </section>
    <?php $this->load->view('footer'); ?>

</body>

</html>