<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Boutique</title>
    <!-- Styles CSS, liens vers les fichiers CSS -->
</head>
<body>
    <h1>Boutique</h1>
   

    <div class="products-container">
        <?php foreach ($produits as $produit) { ?>
            <div class="product-card">
                <div class="card">
                    <!-- Structure pour chaque produit -->
                    <div class="bloc"></div>
                    <p>Nom: <?php echo $produit->type; ?> </p>
                    <p>Prix: <?php echo $produit->prix_location; ?> € </p>
                    <p>État: <?php echo $produit->etat; ?> </p>
                </div>
            </div>
        <?php } ?>
    </div>


    <!-- Autres éléments HTML, scripts JavaScript, etc. -->
</body>
</html>