<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?php echo base_url('img/Rectangle 367.png'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css'); ?>">
    <title>Erreur d'autorisation</title>
</head>
<body>

<?php 

$this->load->view('header');
 ?>

    <h2 style="color: red;">Erreur d'autorisation</h2>
    

    <a href="<?php echo base_url('index.php/login/welcome_view'); ?>">Retour à l'accueil</a>

    <?php $this->load->view('footer'); ?>
</body>
</html>