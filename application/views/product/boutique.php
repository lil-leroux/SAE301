<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="<?php echo base_url('img/Rectangle 367.png'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/Styleboutique.css'); ?>">
    <title>Boutique</title>

</head>

<body>

    <?php
    // Chargez la barre de navigation
    $this->load->view('header');
    ?> <section>
        <h2>Boutique</h2>
        <div class="main">
            <div class="filtre-pc">
            </div>
            <div class="filtre-mobile"></div>
            <div class="products-container">
                <?php foreach ($produits as $produit) { ?>
                    <div class="product-card">
                        <!-- <img src="<?php echo base_url('img/couleur.png'); ?>" alt="" srcset=""> -->
                        <div class="border">
                            <div class="card">
                                <!-- Structure pour chaque produit -->
                                <div class="bloc">
                                    <p> <?php echo $produit->type; ?> </p>
                                    <p> <?php echo $produit->description; ?> </p>
                                </div>

                            </div>
                            <img style="image-produit" src="<?php echo base_url('img/velodemuscu.png'); ?>" alt="" srcset="">
                            <div class="fonction-card">
                                <!-- prix de la location -->
                                <p id="fonction-card-un"> <?php echo $produit->prix_location; ?>€/mois</p>
                                <!-- message de participation -->
                                <p id="fonction-card-deux">Dont 0.02€ d'éco-participation</p>
                                <!-- bouton d'achat -->
                                <a href="<?php echo base_url('index.php/product/description?add=' . $produit->id); ?>">

                                    <svg id="fonction-card-trois" width="120" height="129" viewBox="0 0 120 129" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g filter="url(#filter0_i_59_422)">
                                            <ellipse cx="43.5393" cy="44.041" rx="43.5393" ry="44.041" transform="matrix(0.730374 -0.683048 0.623898 0.781506 0.628906 59.9697)" fill="url(#paint0_linear_59_422)" />
                                        </g>
                                        <rect x="41.6289" y="47.6797" width="34.9736" height="32.4313" fill="url(#pattern0)" />
                                        <defs>
                                            <filter id="filter0_i_59_422" x="17.8789" y="19.1611" width="87.0547" height="94.9751" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                <feOffset dx="3" dy="4" />
                                                <feGaussianBlur stdDeviation="2" />
                                                <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
                                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                                <feBlend mode="normal" in2="shape" result="effect1_innerShadow_59_422" />
                                            </filter>
                                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                                <use xlink:href="#image0_59_422" transform="scale(0.00195312 0.00223524)" />
                                            </pattern>
                                            <linearGradient id="paint0_linear_59_422" x1="43.5393" y1="0" x2="43.5393" y2="88.082" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#D644C7" />
                                                <stop offset="0.67954" stop-color="#FF735D" />
                                            </linearGradient>
                                            <image id="image0_59_422" width="512" height="512" xlink:href="data:image/png;base64,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" />
                                        </defs>
                                    </svg>
                                </a>

                                <!-- les nombres d'étoiles pour les avis  -->
                                <img id="fonction-card-quatre" src="<?php echo base_url('img/avis.png'); ?>" alt="" srcset="">

                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <?php
    // Chargez la barre de navigation
    $this->load->view('footer');
    ?>

    <!-- Autres éléments HTML, scripts JavaScript, etc. -->
</body>

</html>