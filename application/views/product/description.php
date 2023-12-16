<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Détails du Produit</title>
    <!-- Styles CSS, liens vers les fichiers CSS -->
    <link rel="icon" type="image/png" href="<?php echo base_url('img/Rectangle 367.png'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/StyleDescrition.css'); ?>">
</head>
<body>
<?php $this->load->view('header');
    ?>
    <h1>Détails du Produit</h1>
    <div>
        <h2><?php echo $produit['type']; ?></h2>
        <p><strong>Description:</strong> <?php echo $produit['description']; ?></p>
        <p><strong>Marque:</strong> <?php echo $produit['marque']; ?></p>
        <p><strong>Modèle:</strong> <?php echo $produit['modele']; ?></p>
        <p><strong>Prix de Location:</strong> <?php echo $produit['prix_location']; ?> €</p>
        <p><strong>État:</strong> <?php echo $produit['etat']; ?></p>
        <!-- Affichage d'autres détails du produit selon les besoins -->
    </div>
    <!-- Autres éléments HTML, scripts JavaScript, etc. -->
    <?php $this->load->view('footer');?>
</body>
</html>