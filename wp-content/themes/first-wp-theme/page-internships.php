<?php get_header(); ?>

<section id="big-picture">
    <h2>
        <div class="blue">
            <?php _e('Découvrez', 'movaway'); ?>
        </div>
        <div class="white">
            <?php _e('NOS STAGES', 'movaway') ?>        
        </div>
    </h2>
    <div id="scroll"></div>
</section>     
<section id="after-big-picture">
    <div id="left-filter">
        <label id="label-type-of-intern" for="type-of-intern"><?php _e('TYPE DE STAGE', 'movaway'); ?></label>
        <select id="type-of-intern" name="type-of-intern">
            <option> <?php _e('Commerce & Vente', 'movaway'); ?></option>
            <option> <?php _e('ADMINISTRATION & SECRÉTARIAT', 'movaway'); ?></option>
            <option> <?php _e('LOGISTIQUE & SUPPLY CHAIN', 'movaway'); ?></option>                
            <option> <?php _e('DROIT', 'movaway'); ?></option>
            <option> <?php _e('MANAGEMENT & RH', 'movaway'); ?></option>
            <option> <?php _e('FINANCE & COMPTABILITÉ', 'movaway'); ?></option>
            <option> <?php _e('MARKETING & COMMUNICATION', 'movaway'); ?></option>
            <option> <?php _e('ARTS & DESIGN', 'movaway'); ?></option>
        </select>
    </div>
    <div id="right-filter">
        <label id="label-duration" for="duration-of-intern"><?php _e('Durée', 'movaway'); ?></label>
        <select id="duration-of-intern" name="duration-of-intern">
            <option><?php _e('3 MOIS', 'movaway'); ?></option>
            <option><?php _e('6 MOIS', 'movaway'); ?></option>
            <option><?php _e('9 MOIS', 'movaway'); ?></option>
        </select>
    </div>
    <div class="clear"></div>
    <hr />
    <p class="results">
        <?php 
            $args = array(
            'post_type'              => 'job',
            'posts_per_page'         => 3,
            'order'                  => 'ASC',
            'order_by'               => 'date',
            'posts_per_page'         => 3
            );
            $the_query = new WP_Query($args);
            echo $the_query -> post_count . ' RESULTATS';
        ?>            
    </p>
</section>

<div class="clear"></div>

<section id="jobs">
    <?php
        $i=1;
        while($the_query->have_posts()) : $the_query->the_post();
    ?>
        <a href= '<?=get_permalink();?>'>
            <div class="job <?php echo $i%2==0 ? 'left' : 'right' ?>">
                <div class="job-icon <?=makeItClass(get_field('type_of_stage')); ?>"></div>
                <div class="job-title">
                    <h3><?=the_title()?></h3>
                </div>
                <div class="clear"></div>
                <div class="announced-at">
                    <?php _e('Début de stage le', 'movaway'); ?> <span class="blue"><?=get_field('date_de_demarrage_du_stage');?></span>
                </div>
                <div class="jobs-column-detail-and-hashtag">
                    <div class="hashtags jobs-description-column">
                        <div class="hashtag">#INTERVIEWTRAINING</div>
                        <div class="hashtag">#ACOMODATION</div>                    
                    </div>
                    <div class="duration-and-price jobs-description-column">
                        <div class="duration"><?=get_field('duration_of_internship')?>    </div>
                        <div class="price"><?=get_field('salary')?></div>
                    </div>            
                    <div class="clear"></div>
                </div>
            </div>
        </a>
    <?php                        
            $i++;
        endwhile;
    ?>
</section>

<div class="clear"></div>

<?php get_footer('blue');?>