<!-- application/views/delete_account_view.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?php echo base_url('img/Rectangle 367.png'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css'); ?>">
    <title>Confirmation de suppression de compte</title>
</head>
<body>
<?php

$this->load->view('header');
?>
<section>
    <div class="container">
    <h2>Confirmation de suppression de compte</h2>
    <p>Êtes-vous sûr de vouloir supprimer votre compte ?</p>
    <?php echo form_open('authentification/process_delete_account'); ?>
        <input type="submit" value="Confirmer la suppression du compte">
    <?php echo form_close(); ?>
    </div>
</section>
    <?php
$this->load->view('footer');
?>
</body>
</html>

