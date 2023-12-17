<!-- application/views/register_view.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="icon" type="image/png" href="<?php echo base_url('img/Rectangle 367.png'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css'); ?>">
</head>

<body>
    <?php
    $this->load->view('header');
    ?>

    <section>
        <h2>Inscription</h2>
        <div class="container">
            <?php echo validation_errors(); ?>

            <?php echo form_open('authentification/process_registration'); ?>
            <label for="login">Login:</label>
            <input type="text" name="login" required>
            <br>
            <label for="nom">Nom:</label>
            <input type="text" name="nom" required>
            <br>

            <label for="prenom">Prenom:</label>
            <input type="text" name="prenom" required>
            <br>

            <label for="password">Password:</label>
            <input type="password" name="password" required>
            <br>

            <label for="email">Email:</label>
            <input type="email" name="email" required>
            <br>

            <label for="ddn">Date de naissance:</label>
            <input type="date" name="ddn" required>
            <br>




            <!-- Ajoutez d'autres champs de formulaire selon vos besoins -->

            <input type="submit" value="S'inscrire">
            <?php echo form_close(); ?>
            

        </div>
    </section>
    <?php
    $this->load->view('footer');
    ?>
</body>

</html>