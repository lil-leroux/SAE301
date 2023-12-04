<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer un Utilisateur</title>
</head>
<body>

<h2>Supprimer un Utilisateur</h2>

<?php if (!empty($user)) { ?>
    <p>Voulez-vous vraiment supprimer l'utilisateur suivant :</p>
    <p>ID: <?php echo $user->id; ?></p>
    <p>Login: <?php echo $user->login; ?></p>
    <p>Nom: <?php echo $user->nom; ?></p>
    <p>Prénom: <?php echo $user->prenom; ?></p>
    <p>Date de Naissance: <?php echo $user->ddn; ?></p>
    <p>Email: <?php echo $user->email; ?></p>
    <p>Type d'Utilisateur: <?php echo $user->type_utilisateur; ?></p>

    <?php echo form_open('user/delete_confirm/' . $user->id); ?>
        <input type="submit" value="Confirmer la suppression">
    <?php echo form_close(); ?>

    <p><a href="<?php echo base_url('user/userlist'); ?>">Annuler</a></p>
<?php } else { ?>
    <p>Utilisateur non trouvé.</p>
<?php } ?>

</body>
</html>
