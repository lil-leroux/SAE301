<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>
        <?php echo $content; ?> - CodeIgniter 3 Tutorial
    </title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css'); ?>">
    <title>Dicathlon</title>
</head>

<body>
    <header>
        <nav>
            <div ><img class="logo"src="<?php echo base_url('img/Rectangle 367.png'); ?>" alt="Mon Image">
            </div>
            <div class="search-bar">
                <input type="text" placeholder="Recherche...">
                <button>OK</button>
            </div>
            <div class="user-options">
                <img src="<?php echo base_url('img/mes réservations.png'); ?>" alt="Mon Image">
                <p>Mes reservations</p>
            </div>
            <div class="user-options">
                <img src="<?php echo base_url('img/connexion.png'); ?>" alt="Mon Image">
                <p>Connexion</p>
            </div>
        </nav>
    </header>
</body>

</html>
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
<footer>
    <p>&copy; 2023 O. Le Morvan - J. Flatres - L. Le Roux. Tous droits réservés.</p>
</footer>

<div id="global">
    <div id="entete">
        <h1> CodeIgniter 3 Tutorial </h1>
    </div><!-- # entete -->
    <div id="contenu">
        <?php $this->load->view($content); ?>
    </div><!-- # contenu -->
    <div id="pied">
        <strong>&copy;2021</strong>
    </div><!--#pied-->
</div><!--#global-->
</body>

</html>