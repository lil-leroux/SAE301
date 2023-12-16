<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>
        <?php echo $content; ?> - CodeIgniter 3 Tutorial
    </title>
    <link rel="icon" type="image/png" href="<?php echo base_url('img/Rectangle 367.png'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css'); ?>">
    <title>Dicathlon</title>
</head>

<body>
    <?php
    // Chargez la barre de navigation
    $this->load->view('header');
    ?>
    <?php
    // Chargez la barre de navigation
    $this->load->view('carrousel');
    ?>
    <main>
        <section class="featured">
            <h2>Produit du moment</h2>
            <div class="product">
                <img src="velo.jpg" alt="Vélo VTT Randonnée">
                <h3>Vélo VTT Randonnée</h3>
                <p>ST 120 Noir Bleu 27,5"</p>
                <p class="price">19,99€/mois</p>
                <p class="eco">Dont 0,02€ d'éco-participation</p>
            </div>
        </section>
    </main>
    <?php
    // Chargez la barre de navigation
    $this->load->view('footer');
    ?>
    <script src="<?php echo base_url('js/main.js'); ?>"></script>

</body>

</html>