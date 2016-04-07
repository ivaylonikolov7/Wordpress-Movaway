<?php get_header() ?>
<section id="big-picture">
    <h2>
        <div class="white"><?php _e('A PROPOS DE', 'movaway') ?></div>
        <div class="red">MOVAWAY</div>
    </h2>
</section>
<div id="after-big-picture">
    <img src="<?=get_template_directory_uri();?>/images/red/picture-about-movaway.png">
</div>

<section id="information-about-movaway">
    <h2>
        <?php _e('QUI SOMMES-NOUS ?', 'movaway') ?>
    </h2>
    <div id="sub-text">
        <p class="gray distance">
            <span class="black"><?php _e('Créée en 2012', 'movaway') ?></span>, 
            <?php _e('l’agence de placement Movaway, est basée à Londres. Son but est d’aider les jeunes français à s’expatrier facilement à Londres en leur proposant des stages, jobs et logements.  Son but est d’aider les jeunes français à s’expatrier à Londres facilement en leur proposant des stages, des logements et des jobs étudiants.', 'movaway') ?>
        </p>
        <p class="gray distance">
            <?php _e('De nos jours, une expérience professionnelle à l’étranger, et qui plus est dans l’un des poumons de l’économie européenne, est très valorisée et même parfois indispensable pour entrer sur le marché du travail. C’est pour cette raison que Movaway s’efforce d’apporter son aide aux étudiants français pour leur permettre d’acquérir une expérience extraordinaire afin de faire un pas en avant vers la réussite.', 'movaway') ?>
        </p>
        <p class="gray distance">
            <?php _e('Néanmoins, le côté professionnel de cette expérience ne suffit pas, et Movaway est là pour s’assurer que ses clients passent un agréable séjour à Londres en leur proposant des logements de qualité et même de quoi bien commencer sa vie londonienne grâce à son Pack ', 'movaway') ?>
            <span class="black">« Welcome to London »</span>.
        </p>
        <p class="red bigger distance">
            <?php _e('Ainsi, Movaway aspire à rendre les choses plus faciles, agréables et moins stressantes pour les étudiants français qui décident de se lancer à la conquête de Londres !', 'movaway') ?>
        </p>
    </div>
</section>
<?php get_footer('red'); ?>