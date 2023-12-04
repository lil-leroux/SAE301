<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un utilisateur</title>
</head>
<body>

<h2>Ajouter un utilisateur</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('user/add'); ?>

    <label for="login">Login:</label>
    <input type="text" name="login"><br>

    <label for="password">Password:</label>
    <input type="password" name="password"><br>

    <label for="nom">Nom:</label>
    <input type="text" name="nom"><br>

    <label for="prenom">Prénom:</label>
    <input type="text" name="prenom"><br>

    <label for="ddn">Date de naissance:</label>
    <input type="date" name="ddn"><br>

    <label for="email">Email:</label>
    <input type="email" name="email"><br>

    <label for="type_utilisateur">Type d'utilisateur:</label>
    <input type="text" name="type_utilisateur"><br>

    <input type="submit" value="Ajouter">

<?php echo form_close(); ?>

</body>
</html>
