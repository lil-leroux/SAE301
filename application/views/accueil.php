<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>
        <?php echo $content; ?> - CodeIgniter 3 Tutorial
    </title>
    <link rel="icon" type="image/png" href="<?php echo base_url('img/Rectangle 367.png'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css'); ?>">
    <title>Dicathlon</title>
</head>

<body>
    <?php

    $this->load->view('header');
    ?>
    <?php

    $this->load->view('carrousel');
    ?>
    <main>
        <section class="featured">
            <h2>Produit du moment</h2>

        </section>
    </main>
    <?php

    $this->load->view('footer');
    ?>
    <script src="<?php echo base_url('js/main.js'); ?>"></script>

</body>

</html>