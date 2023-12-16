<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?php echo base_url('img/Rectangle 367.png'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css'); ?>">
    <title>Tableau de bord administrateur</title>
</head>

<body>

    <?php
    $this->load->view('header');
    ?>

    <section>
        <h2>Tableau de bord administrateur</h2>



        <p>Bienvenue, administrateur !</p>
        <div class="info">
            <a class="bouton" href="<?php echo base_url('index.php/user/add'); ?>">Ajouter un utilisateur</a>
            <a class="bouton" href="<?php echo base_url('index.php/product/add'); ?>">Ajouter un produit</a>
            <a class="bouton" href="<?php echo base_url('index.php/login/welcome_view'); ?>">Quitter la page administrateur</a>
            <a class="bouton" href="<?php echo base_url('index.php/user/userlist'); ?>">Liste des Utilisateurs</a>
            <a class="bouton" href="<?php echo base_url('index.php/product/productlist'); ?>">Liste des Produits</a>
        </div>
       
    </section>


</body>
<?php $this->load->view('footer'); ?>

</html>