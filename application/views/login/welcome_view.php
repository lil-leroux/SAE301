<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue</title>
</head>
<body>

    <h2>Bienvenue, <?php echo $username; ?> !</h2>

    <a href="<?php echo base_url('index.php/login/logout'); ?>">Déconnexion</a>


</body>
</html>
