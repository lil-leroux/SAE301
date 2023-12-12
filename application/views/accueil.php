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
    <div class="sectioncarou">
        <section carrousel>

            <input id="slide-0" name="carrousel" type="radio" checked />
            <div class="slide">
                <label for="slide-3" class="back">◀</label><img class="imagecarou" src="<?php echo base_url('img/Sport Fitness in Motion 1.png'); ?>" alt="Mon Image"></img>
                <div class="slide-content">
                    
                    
                </div>
                <label for="slide-1" class="forward">▶</label>
            </div>  

            <input id="slide-1" name="carrousel" type="radio" />
            <div class="slide">
                <label for="slide-0" class="back">◀</label>
                <div class="slide-content">
                    <h1>One</h1>
                </div>
                <label for="slide-2" class="forward">▶</label>
            </div>

            <input id="slide-2" name="carrousel" type="radio" />
            <div class="slide">
                <label for="slide-1" class="back">◀</label>
                <div class="slide-content">
                    <h1>Two</h1>
                </div>
                <label for="slide-3" class="forward">▶</label>
            </div>

            <input id="slide-3" name="carrousel" type="radio" />
            <div class="slide">
                <label for="slide-2" class="back">◀</label>
                <div class="slide-content">
                    <h1>Three</h1>
                </div>
                <label for="slide-0" class="forward">▶</label>
            </div>

        </section>
    </div>
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