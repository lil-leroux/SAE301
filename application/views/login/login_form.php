<!-- Login Form View (application/views/login/login_form.php) -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>

<h2>Connexion</h2>

<?php echo validation_errors(); ?>

<?php if (isset($error)) { ?>
    <p style="color: red;"><?php echo $error; ?></p>
<?php } ?>

<?php echo form_open('login/process_login'); ?>

    <label for="login">Login:</label>
    <input type="text" name="login"><br>

    <label for="password">Password:</label>
    <input type="password" name="password"><br>

    <input type="submit" value="Se connecter">

<?php echo form_close(); ?>

</body>
</html>
