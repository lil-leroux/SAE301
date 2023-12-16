<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrousel</title>
</head>

<body>
    <div class="sectioncarou">
        <section carrousel>

            <input id="slide-0" name="carrousel" type="radio" checked />
            <div class="slide">
                <label for="slide-3" class="back">◀</label><a href="<?php echo base_url('index.php/product/boutique'); ?>"><img class="imagecarou" src="<?php echo base_url('img/Frame 1 (1).png'); ?>" alt="Mon Image"></img></a>
                <div class="slide-content">


                </div>
                <label for="slide-1" class="forward">▶</label>
            </div>

            <input id="slide-1" name="carrousel" type="radio" />
            <div class="slide">
                <label for="slide-0" class="back">◀</label><a href="<?php echo base_url('index.php/product/boutique'); ?>"><img class="imagecarou" src="<?php echo base_url('img/Frame 1 (2).png'); ?>" alt="Mon Image"></img></a>
                <div class="slide-content">

                </div>
                <label for="slide-2" class="forward">▶</label>
            </div>

            <input id="slide-2" name="carrousel" type="radio" />
            <div class="slide">
                <label for="slide-1" class="back">◀</label><a href="<?php echo base_url('index.php/product/boutique'); ?>"><img class="imagecarou" src="<?php echo base_url('img/Frame 1 (3).png'); ?>" alt="Mon Image"></img></a>
                <div class="slide-content">

                </div>
                <label for="slide-3" class="forward">▶</label>
            </div>

        </section>
    </div>
</body>

</html>