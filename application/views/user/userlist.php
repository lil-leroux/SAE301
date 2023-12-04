<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Utilisateurs</title>
</head>
<body>

<h2>Liste des Utilisateurs</h2>

<?php if (!empty($users)) { ?>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Login</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Date de Naissance</th>
                <th>Email</th>
                <th>Type d'Utilisateur</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) { ?>
                <tr>
                    <td><?php echo $user->id; ?></td>
                    <td><?php echo $user->login; ?></td>
                    <td><?php echo $user->nom; ?></td>
                    <td><?php echo $user->prenom; ?></td>
                    <td><?php echo $user->ddn; ?></td>
                    <td><?php echo $user->email; ?></td>
                    <td><?php echo $user->type_utilisateur; ?></td>
                    <td><a href="<?php echo base_url('index.php/user/delete_user/' . $user->id); ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')">
                    Supprimer</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
<?php } else { ?>
    <p>Aucun utilisateur trouvé.</p>
<?php } ?>

</body>
</html>
