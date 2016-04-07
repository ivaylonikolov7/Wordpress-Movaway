<?php get_header() ?>
    <div id="big-picture">
        <h2>
            <div class="white"><?php _e('à la recherche', 'movaway'); ?> </div>
            <div class="blue"><?php _e('d’un job ?', 'movaway') ?> </div>
        </h2>
    </div>
    <section id="jobs">
        <div class="job-content">
            <div class="job-text">
                <div class="header-job">
                    <h3 class="job-number">1</h3>
                    <h3 class="job-title"><?php _e('vos entretiens sont assurés', 'movaway') ?>
                    </h3>
                </div>
                <div class="clear"></div>
                <hr />
                <p class="question"> <?php _e('Quoi de mieux pour s’améliorer en anglais que de décrocher un job à Londres', 'movaway'); ?>?</p>                    
                <p class="answer">
                    <?php _e('Movaway vous offre une vraie expérience professionnelle au cœur de la capitale britannique !', 'movaway');
                    _e('Quel que soit votre parcours professionnel et vos compétences, nous vous assurons votre emploi avec nos entreprises partenaires et un suivi pendant votre séjour pour seulement £349.', 'movaway'); ?>
                </p>
            </div>
            <div class="job-image">
                <img src="<?=get_template_directory_uri();?>/images/blue/first-picture.png">
            </div>
        </div>
        <div class="clear"></div>
        <div class="blue-background">
            <div class="job-content">
                <div class="job-image">
                    <img src="<?=get_template_directory_uri();?>/images/blue/second-picture-jobs.png">
                </div>
                <div class="job-text">
                    <div class="header-job">
                        <h3 class="job-number">2</h3>
                        <h3 class="job-title"><?php _e('MOVAWAY ET SES PARTENAIRES', 'movaway'); ?></h3>
                    </div>
                    <div class="clear"></div>
                    <hr />
                    <p class="description-job">
                        <?php _e('Movaway entretient des relations de confiance avec ses partenaires pour vous garantir une expérience de qualité.', 'movaway');
                              _e('Ceux-ci sont très variés : du restaurant gastronomique aux clubs prestigieux de Mayfair en passant par des boutiques trendy.', 'movaway'); 
                        ?>
                    </p>
                    <p class="bonus">                        
                        <?php _e('De plus, environ 70% des entreprises avec lesquelles nous travaillons sont dirigées par des directeurs francophones,', 'movaway');                        
                        _e('ce qui facilite énormément les premiers entretiens.', 'movaway'); ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="job-content">
            <div class="job-text">
                <div class="header-job">
                    <h3 class="job-number">3</h3>
                    <h3 class="job-title">
                        <?php _e('Découvrez les jobs Movaway', 'movaway'); ?>                        
                    </h3>
                </div>
                <div class="clear"></div>
                <hr />

                <ul class="information-jobs">
                    <li><span class="bold"><?php _e('Restauration', 'movaway'); ?></span> : <?php _e('serveur(se), commis serveur(se), cuisinier(e), commis de cuisine, barman.', 'movaway'); ?></li>
                    <li><span class="bold"><?php _e('Sandwicherie/Café', 'movaway'); ?></span> : <?php _e('sandwichs maker, vendeur(se), barista.', 'movaway'); ?> </li>
                    <li><span class="bold"><?php _e('Hôtellerie', 'movaway'); ?></span>: <?php _e('réceptionniste, serveur.', 'movaway'); ?></li>
                    <li><span class='bold'><?php _e('English', 'movaway'); ?>: </span> <?php _e('Nous offrons 40 heures de cours d’anglais pour tout candidat qui souscrit au pack job.', 'movaway'); ?></li>
                    <li><span class="bold"><?php _e('Discothèques', 'movaway'); ?></span>: <?php _e('barman, chef d’équipe, organisateur d’évènement.', 'movaway'); ?></li>
                    <li><span class="bold"><?php _e('Vente en boutique', 'movaway'); ?></span>:<?php _e('vêtements, informatique, téléphonie.', 'movaway'); ?></li>
                </ul>
            </div>
            <div class="job-image">
                <img src="<?=get_template_directory_uri();?>/images/blue/third-picture-jobs.png">
            </div>
        </div>
        <div class="clear"></div>
    </section>
    <div class="clear"></div>
    <a href='<?=get_site_url(); ?>/contact'><div class="black-button">CONTACT: CONTACT@MOVAWAY.COM</div></a>
    <?php get_footer('blue'); ?>
</body>
</html>