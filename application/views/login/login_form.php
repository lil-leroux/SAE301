<!-- Login Form View (application/views/login/login_form.php) -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css'); ?>">
    <link rel="icon" type="image/png" href="<?php echo base_url('img/Rectangle 367.png'); ?>" />


</head>

<body>
    <?php
    // Chargez la barre de navigation
    $this->load->view('header');
    ?>

    <section class="connexion">
        <h2>Connexion</h2>
        <div class="container">





            <?php echo validation_errors(); ?>

            <?php if (isset($error)) { ?>
                <p style="color: red;"><?php echo $error; ?></p>
            <?php } ?>

            <?php echo form_open('login/process_login'); ?>
            <div class="formulaire">
                <label for="login">Login:</label>
                <input type="text" name="login"><br>

                <label for="password">Password:</label>
                <input type="password" name="password"><br>
            </div>
            <input type="submit" value="Se connecter">

            <?php echo form_close(); ?>
        </div>
    </section>
    <?php
    // Chargez la barre de navigation
    $this->load->view('footer');
    ?>
</body>

</html>