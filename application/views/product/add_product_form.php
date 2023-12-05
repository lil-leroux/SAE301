<!-- product/add_product_form.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Produit</title>
</head>
<body>

<h2>Ajouter un Produit</h2>

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

</body>
</html>
