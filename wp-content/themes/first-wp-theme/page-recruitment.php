<?php get_header() ?>
    <div id="big-picture">
        <h2>
            <div class="white">
                <?php _e('REJOIGNEZ L’EQUIPE', 'movaway'); ?>
            </div>
            <div class="blue">MOVAWAY</div>
        </h2>
    </div>
    <div id="after-big-picture">
        <img src="<?=get_template_directory_uri();?>/images/blue/recruitment-image.jpg">
    </div>
    <section id="content-recruitment">
        <h2><?php _e('MOVAWAY RECRUTE !', 'movaway'); ?></h2>
        <div class="p-content">
            <p class="content-p-recruitment">
                <span class="black">
                    <?php _e('Dynamique, enthousiaste et plein(e) d’envies?', 'movaway'); ?>
                </span> 
                <?php _e('Venez rejoindre l’équipe de Movaway ! Nous travaillons toujours dans la bonne humeur et affectionnons tout particulièrement l’esprit d’équipe. Notre objectif est simple : permettre aux jeunes étudiants français de réaliser l’expérience professionnelle qu’il leur faut dans la capitale anglaise !', 'movaway'); ?>
            </p>
            <p class="contact-us">
                <?php _e('Envoyez maintenant votre CV à l’adresse à', 'movaway'); ?> <span class="email">recrutement@movaway.com</span>
            </p>
        </div>
    </section>
    <?php get_footer('blue')?>