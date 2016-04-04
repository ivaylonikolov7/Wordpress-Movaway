<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>T-shirts</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="stylesheets/tshirt.css" type="text/css">
</head>
<body>
    <?php require('header.php') ?>
    <section id="big-picture">
        <h2>
            <div class="white">T-Shirt Movaway</div>
            <div class="red">Help Plan</div>
        </h2>
    </section>
    <section id="after-big-picture">
        <div id="shirt-girl"><img src="<?=get_template_directory_uri();?>/images/red/tshirt-girl.jpg"></div>
    </section>
    <section id="we-care">
        <h2>WE CARE ♥</h2>
        <div id="why-we-care">
            <p class="black" >Chez Movaway nous sommes concernés par les plus démunis, c’est pour cela que nous avons créé le Movaway Help Plan.</p>
            <p class="gray tshirt-paragraph">Chaque vendredi après-midi, toute l’équipe de Movaway arpente les rues londoniennes afin d’offrir un repas à ceux qui ne peuvent se le payer. Pour chaque T-shirt acheté, nous versons l’intégralité des profits à ceux qui sont dans le besoin.</p>
            <p class="black tshirt-paragraph">tailles disponibles: S,M,L,XL</p>
            <p class="real-red tshirt-paragraph">Pour toute commande contactez nous sur: wecare@movaway.com</p>
        </div>
        <div id="shirt-without-girl">
            <img src="<?= get_template_directory_uri() ?>/images/red/tshirt-without-girl.jpg">
        </div>
    </section>
    <?php require('footer-red.php') ?>
</body>
</html>