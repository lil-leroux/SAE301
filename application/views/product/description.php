<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="<?php echo base_url('img/Rectangle 367.png'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css'); ?>">
    <!-- date pop up  -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <title>Description du Produit</title>
</head>

<body>

    <?php
    $product_id = $_GET['id'];

    $this->load->view('header');
    ?>

    <section>
        <?php

        $product_id = $this->input->get('id');

        $produit_details = $this->Product_model->getProduitById($product_id);


        if ($produit_details) {
            ?>
            <h2>Description du Produit</h2>
            <div class="container">
                <h2>
                    <?php echo $produit['type']; ?>
                </h2>
                <p><strong>Description:</strong>
                    <?php echo $produit['description']; ?>
                </p>
                <p><strong>Marque:</strong>
                    <?php echo $produit['marque']; ?>
                </p>
                <p><strong>Modèle:</strong>
                    <?php echo $produit['modele']; ?>
                </p>
                <p><strong>Prix de Location:</strong>
                    <?php echo $produit['prix_location']; ?> €
                </p>
                <p><strong>État:</strong>
                    <?php echo $produit['etat']; ?>
                </p>
                <input type="text" name="daterange" value="" />

            </div>
            <?php
        } else {

            echo "<p>Produit non trouvé.</p>";
        }
        ?>
    </section>

    <?php

    $this->load->view('footer');
    ?>
    <script>
        $(function () {
            $('input[name="daterange"]').daterangepicker({
                opens: 'left'
            }, function (start, end, label) {
                console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
            });
        });
    </script>
</body>

</html>