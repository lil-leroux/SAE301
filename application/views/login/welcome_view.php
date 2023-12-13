<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?php echo base_url('img/Rectangle 367.png'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css'); ?>">
    <title>Bienvenue</title>
</head>
<body>

<?php 

$this->load->view('header');
 ?>

    <h2>Bienvenue, <?php echo $username; ?> !</h2>

    <a href="<?php echo base_url('index.php/admin/dashboard'); ?>">Admin</a>


    <a href="<?php echo base_url('index.php/login/logout'); ?>">Déconnexion</a>

    <a href="<?php echo base_url('index.php/user/updateUser'); ?>">Profil</a>

    <?php $this->load->view('footer'); ?>


</body>
</html>
