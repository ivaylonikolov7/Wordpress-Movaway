<?php

    get_header(); 

?>

<section id="big-picture">

    <h2>

        <div class="white">Découvrez</div>

        <div class="red">NOS LOGEMENTS</div>

    </h2>

</section>

<main>

    <div id="list-of-flats">

        <div id="filters">

            <div id="input-adress">

                <label for="adress">quartier</label>

                <input type="text" id="adress" placeholder="ENTREZ UN QUARTIER">

            </div>

            <div id="buttons">

                <div class="button" id='minimum-price'>LE MOINS CHER</div>

                <div class="button" id='maximum-price'>LE PLUS CHER</div>

                <select>

                    <option selected="selected">DISPONIBILITE</option>

                    <option>DE SUITE</option>

                    <option>DANS 1 MOIS</option>

                    <option>DANS 2 MOIS</option>

                    <option>DANS 3 MOIS</option>

                </select>

            </div>

        </div>

        <div class="clear"></div>

        <div id="apartments">

        <?php



            $args = array(

                'post_type'              => 'flat',

                'posts_per_page'         => 3,

                'order'                  => 'ASC',

                'order_by'               => 'date',

                'posts_per_page'         => 3

                );

            $the_query = new WP_Query($args);

            while($the_query->have_posts()) : $the_query->the_post();

        ?>

    <a href='<?=get_permalink()?>'>

        <div class="flat">

            <img src='<?=get_field('upload_image')["url"]?>'>

            

            <div class="info-pre-line">                

                <div class="location"><?=the_title()?></div>

            </div>

            <hr />

            <div class="legends first-column">

                <div class="bed legend"><?=get_field('number_of_rooms')?></div>

                <div class="calendar legend"><?=get_field('calendar')?></div>

            </div>

            <div class="legends second-column">

                <div class="price legend">£<?=get_field('weekly_rent')?></div>

                <div class="time legend"> MIN <?=get_field('duration')?> MOIS</div>

            </div>

        </div>

    </a>

    <?php

        endwhile;

    ?>

        </div>

    </div>

</main>

<div class="clear"></div>

<?php get_footer('red');; ?>