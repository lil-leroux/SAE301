<!-- description.php -->

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
    $product_id= $_GET['id'];
    // Chargez la barre de navigation
    $this->load->view('header');
    ?>

    <section>
        <?php
        // Récupérer l'id du produit à partir des paramètres de requête
        $product_id = $this->input->get('id');

        // Utilisez l'id pour récupérer les détails du produit depuis la base de données en utilisant le modèle Product_model
        $produit_details = $this->Product_model->getProduitById($product_id);

        // Vérifiez si les détails du produit existent
        if ($produit_details) {
        ?>
            <h2>Description du Produit</h2>
            <div class="container">
        <h2><?php echo $produit['type']; ?></h2>
        <p><strong>Description:</strong> <?php echo $produit['description']; ?></p>
        <p><strong>Marque:</strong> <?php echo $produit['marque']; ?></p>
        <p><strong>Modèle:</strong> <?php echo $produit['modele']; ?></p>
        <p><strong>Prix de Location:</strong> <?php echo $produit['prix_location']; ?> €</p>
        <p><strong>État:</strong> <?php echo $produit['etat']; ?></p>
        <input type="text" name="daterange" value="" />
        
        <div class="form-group">
            <label for="startDate">Date de début</label>
            <input type="text" class="form-control" id="startDate" value="">
        </div>
        <div class="form-group">
            <label for="endDate">Date de fin</label>
            <input type="text" class="form-control" id="endDate" value="">
        </div>
        
        <!-- Affichage d'autres détails du produit selon les besoins -->
    </div>
        <?php
        } else {
            // Affichez un message si le produit n'est pas trouvé
            echo "<p>Produit non trouvé.</p>";
        }
        ?>
    </section>

    <?php
    // Chargez la barre de navigation
    $this->load->view('footer');
    ?>
<script>
$(function() {
    $('input[name="daterange"]').daterangepicker({}, function(start, end, label) {
        // Mettez à jour la valeur de #startDate avec la date de début
        $('#startDate').val(start.format('YYYY-MM-DD'));
        // Mettez à jour la valeur de #endDate avec la date de fin
        $('#endDate').val(end.format('YYYY-MM-DD'));

        // Affichez également dans la console pour vérification
        console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
    });
});
</script>
</body>

</html>
