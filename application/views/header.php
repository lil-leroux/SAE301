<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<header>
    <nav>
        <a href="<?php echo base_url('index.php/'); ?>"><img class="logo" src="<?php echo base_url('img/Rectangle 367.png'); ?>" alt="Mon Image"></a>
        
        <div class="search-bar">
            <input type="text" placeholder="Recherche...">
            <button>OK</button>
        </div>
        <a class="user-options" href="<?php echo base_url('index.php/product/boutique'); ?>">
            <img src="<?php echo base_url('img/boutique.png'); ?>" alt="Mon Image">
            Boutiques
        </a>
        <a class="user-options" href="<?php echo base_url('index.php'); ?>">
            <img src="<?php echo base_url('img/mes réservations.png'); ?>" alt="Mon Image">
            Mes reservations
        </a>
        <a class="user-options" class="connexion" href="<?php echo base_url('index.php/login'); ?>">
            <img src="<?php echo base_url('img/connexion.png'); ?>" alt="Mon Image">
            Connexion
        </a>
<<<<<<< HEAD

    
        <a href="<?php echo base_url('index.php/login/welcome_view'); ?>">Mon compte</a>
      

=======
        <a class="user-options" class="inscription" href="<?php echo base_url('index.php/login'); ?>">
            <img src="<?php echo base_url('img/inscription.png'); ?>" alt="Mon Image">
            Inscription
        </a>
>>>>>>> 0168cc4eec748501ca20d74de614f1f4d8f36382
    </nav>
</header>
</body>
</html>