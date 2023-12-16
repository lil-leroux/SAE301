<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <footer>
        <div class="footer_ligne1">
            <div class="footer_col1">
                <a href="<?php echo base_url('index.php'); ?>"><img class="footer_logo" src="<?php echo base_url('img/decathlon-1-logo 3.png'); ?>"></a>
                <div class="footer_texteimp">+33 06 06 06 06 </div>
                <div class="footer_texteimp">support@Dicathlon.fr</div>
            </div>

            <div class="footer_col1">
                <div class="footer_titre footer_align">Lien rapide</div>
                <div class="footer_align"><a class="lien_footer" href="<?php echo base_url('index.php'); ?>">Acceuil</a></div>
                <div class="footer_align"><a class="lien_footer" href="<?php echo base_url('index.php/product/boutique'); ?>">Boutique</a></div>
            </div>

            <div class="footer_col1">
                <div class="footer_titre footer_align footer_none">.</div>
                <div class="footer_align"><a class="lien_footer" href="<?php echo base_url('index.php'); ?>">Mes reservations</a></div>
                <div class="footer_align"><a class="lien_footer" href="<?php echo base_url('index.php/login'); ?>">Connexion</a></div>
                <div class="footer_align"><a class="lien_footer" href="<?php echo base_url('index.php/authentification/register'); ?>">Inscription</a></div>
            </div>

            <div class="footer_col1">
                <div class="footer_titre footer_align">Notre Newsletter</div>
                <div class="footer_align footer_news">
                    <div>
                        <input class="footer_email" id="example" type="email" name="text" placeholder="e-mail">
                    </div>
                    <div>
                        <input class="footer_envoyer" src="<?php echo base_url('img/fleche-droite'); ?>" type="image" value="">
                    </div>
                </div>
            </div>
        </div>

        <div class="footer_lignecourte"></div>

        <div class="footer_ligne2">
            <div class="footer_res footer_gauche">
                <div class="footer_cercle"><img src="<?php echo base_url('img/facebook.svg'); ?>" alt=""></div>
                <div class="footer_cercle footer_logo_milieu"><img src="<?php echo base_url('img/ic Linkedin.svg'); ?>" alt=""></div>
                <div class="footer_cercle"><img src="<?php echo base_url('img/ic Twitter.svg'); ?>" alt=""></div>
            </div>

            <div class="footer_milieu">
                <div>Réalisé par</div>
            </div>

            <div class="footer_droite">
                <div>© 2023 Joan Flatres & Lilian Le Roux & Owen Le Morvan
                    <br>
                    All rights reserved
                </div>
            </div>
        </div>

    </footer>

</body>

</html>