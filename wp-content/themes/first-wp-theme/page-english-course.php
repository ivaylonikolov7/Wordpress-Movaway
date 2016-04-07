<?php get_header() ?>
    <section id="big-picture">
        <h2>
            <div class="white"><?php _e('COURS', 'movaway') ?></div>
            <div class="red"><?php _e('D’ANGLAIS', 'movaway') ?></div>
        </h2>
    </section>
    <div id="after-big-picture">
        <img src="<?=get_template_directory_uri();?>/images/red/image-with-only-london-things.jpg">
    </div>
    <section id="text">
        <h2><?php _e('MOVAWAY VOUS PROPOSE  DES COURS D’ANGLAIS', 'movaway') ?></h2>
        <div id="subtext">
            <p class="black"><?php _e('Il est important d’améliorer votre anglais, pour que vous vous sentiez plus à l’aise lors d’un entretien et pour communiquer avec les personnes que vous allez rencontrer à Londres.', 'movaway') ?></p>
            <p class="gray distance">
                <?php 
                    _e('Nous travaillons avec des écoles qualifiées qui offrent des cours d’anglais à des prix compétitifs.Les professeurs sont là pour vous aider à faire des progrès rapides et vous donner l’attention dont vous avez besoin pour améliorer vos compétences linguistiques.', 'movaway');
                ?>
            </p>
            <p class="black distance">
                <?php 
                    _e('Chacune de nos écoles partenaires proposent des cours, allant du niveau débutant à professionnel et peut vous préparer aux examens officiels tels que IELTS, Cambridge, TOEIC, TOEFL… Ces écoles de langue sont accréditées par le British Council. Nous offrons 40 heures de cours d’anglais pour tout candidat qui souscrit au pack job.', 'movaway');
                 ?>                
            </p>
        </div>
        <div id="button">
            <a href='<?=get_site_url();?>/contact'><button><?php _e('NOUS CONTACTER', 'movaway') ?></button>
        </div>
    </section>
    <?php get_footer('red'); ?>