<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css'); ?>">
    <link rel="icon" type="image/png" href="<?php echo base_url('img/Rectangle 367.png'); ?>" />
</head>

<body>
    <?php

    $this->load->view('header');
    ?>
    <section class="connexion">
        <h2>Modification de vos informations</h2>
        <div class="container">
            <?php echo validation_errors(); ?>

            <?php echo form_open('user/updateUser'); ?>

            <label for="login">Login:</label>
            <input type="text" name="login" value="<?php echo set_value('login'); ?>" required>
            <br>

            <label for="nouveau_nom">Nouveau Nom:</label>
            <input type="text" name="nouveau_nom" value="<?php echo set_value('nouveau_nom'); ?>" required>
            <br>

            <label for="nouveau_prenom">Nouveau Prénom:</label>
            <input type="text" name="nouveau_prenom" value="<?php echo set_value('nouveau_prenom'); ?>" required>
            <br>

            <label for="nouvelle_ddn">Nouvelle date de naissance:</label>
            <input type="date" name="nouvelle_ddn" value="<?php echo set_value('nouvelle_ddn'); ?>" required>
            <br>

            <label for="nouvel_email">Nouvel email:</label>
            <input type="email" name="nouvel_email" value="<?php echo set_value('nouvel_email'); ?>" required>
            <br>

            <label for="nouveau_mdp">Nouveau mot de passe:</label>
            <input type="password" name="nouveau_mdp" value="<?php echo set_value('nouveau_mdp'); ?>" required>
            <br>


            <input type="submit" value="Update User">

            <?php echo form_close(); ?>
        </div>
    </section>
    <?php

    $this->load->view('footer');
    ?>
</body>

</html>