<?php

    get_header()

?>

<div id="container">

    <section id="big-picture">

 <!--       
        <video autoplay="true" preload="auto" loop="loop" muted="muted">

            <source src='<?=get_template_directory_uri()?>/video/background.mov'></source>

        </video>
!-->

        <div class="big">

                <h2 class="black">

                    ENVIE DE 1234

                </h2>

                <h2 class="black">

                    VOUS INSTALLER               

                </h2>

                <h2 class="red">

                    à LONDRES ?

                </h2>

            </div>

            <div id="centered-information-text-with-numbers">

                <div class="left-number-with-text">

                    <p class="number-red">

                        <?php 

                            $args = array(

                            'post_type'              => 'job',           

                            );

                            

                            $the_query = new WP_Query($args);

                            echo $the_query->post_count;

                        ?>

                    </p>

                    <p class="text-of-number-red">

                        STAGES DISPONIBLES SUR LONDRES

                    </p>

                </div>



                <div class="right-number-with-text">

                    <p class="text-of-number-blue">

                        LOGEMENTS DISPONIBLES SUR LONDRES

                    </p>

                    <p class="number-blue">

                        <?php 

                        $args = array(

                            'post_type'              => 'flat',           

                            );

                            

                            $the_query = new WP_Query($args);

                            echo $the_query->post_count;

                        ?>

                    </p>

                </div>

            </div>

            <div class="clear"></div>

            <div id="buttons">

                <div id="left-button" class="button">

                    <a href='<?=get_site_url();?>/internships/?>'><span>VOIR NOS stages</span></a>

                </div>

                <div id="right-button" class="button">

                    <a href='<?=get_site_url();?>/flat-list/?>'><span>VOIR NOS LOGEMENTS</span></a>

                </div>

            </div>

            <div class="clear"></div>

            <div id="scroll-down"></div>

    </section>

</div>

<section id="services">

    <div id="columns">

        <div class="column">

            <div class="icon" id="atlas"></div>

            <h3>numéro 1</h3>

            <hr />

            <p class="description">

                movaway est l’agence de placement leader pour les jeunes français à londres.

            </p>

        </div>

        <div class="column">

            <div class="icon" id="hitler-hand"></div>

            <h3>

                quantité / qualité

            </h3>

            <hr />

            <p class="description">

                nous avons une gamme de logements plus grande et de meilleure qualité que n’importe quelle autre agence de placement.

            </p>

        </div>

        <div class="column">
        
            <div class="icon" id="euro"></div>

            <h3>

                pas de surprises

            </h3>

            <hr />

            <p class="description">

                aucun paiement n’est demandé tant que la convention de stage n’est pas remplie.

            </p>

        </div>

    </div>

</section>

<section id="urban">

    <div id="right-side-urban">

        <h2>à la recherche  d’un  <span class="red">stage</span> ?</h2>

        <div id="table">

            <div class="row">

                <div id="commercevente" class="table-cell">

                    commerce

                    & vente

                </div>

                <div id="administration" class="table-cell">

                    Administration

                    & Secrétariat

                </div>

                <div id="logistique" class="table-cell">

                    Logistique

                    & Supply chain

                </div>

                <div id="dridit" class="table-cell">DROIT</div>

            </div>

            <div class="row">

                <div id="management" class="table-cell">

                    Management

                    & RH

                </div>

                <div id="finance" class="table-cell">

                    Finance

                    & Comptabilité

                </div>

                <div id="marketing" class="table-cell">

                    Marketing

                    & Communication

                </div>

                <div id="art" class="table-cell">

                    ARTS & DESIGN

                </div>

            </div>

            <a href='<?=get_site_url();?>/internships/'>

                <div class="black-button">

                    <span>découvrir nos stages</span>

                </div>

            </a>

        </div>

    </div>

</section>

<section id="flats">

    <h2>

        <div class="black">Découvrez</div>

        <div class="white">nos LOGEMENTS</div>

    </h2>

    <div id="apartments">

        <?php



            $args = array(

                'post_type'              => 'flat',

                'posts_per_page'         => 3,

                'order'                  => 'ASC',

                'order_by'               => 'date',                

                );

            $the_query = new WP_Query($args);

            while($the_query->have_posts()) : $the_query->the_post();

        ?>

        <?='<a href='.get_permalink().">"?>

            <div class="flat">

                <?php 

                    echo "<img src='".get_field('upload_image')["url"]."'>";

                ?>

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

                    <div class="time legend"><?=get_field('minimum_maximum_duration')?> MIN MOIS</div>

                </div>

            </div>

        </a>

        <?php

            endwhile;

        ?>

    </div>

</section>

<div class="clear"></div>

<section id="testimonials">

    <h2>

        <div class='black'>VOS meilleurs</div>

        <div class="red"> Témoignages</div>

    </h2>

    <div id="testimonials-grouped">

        <div class="testimonial">

            <div class="testimonial-picture">

                <?php 

                    echo '<img src="'.get_template_directory_uri().'/images/red/picture-1.png">'; 

                ?>

            </div>

            <div class="testimonial-user">

                <div class="title-testimonial red">Charlotte,</div>

                <div class="profession">STAGIAIRE en communication</div>

            </div>

            <hr >

            <p class="testimonial-description">

                Ne trouvant pas de stage en marketing communication par mes propres moyens, je suis passée par l’agence Movaway. Tout a été très rapide puisqu’en deux semaines j’avais mon stage (Avec conventions) et mon logement selon mes critères. Mon stage s’est déroulé dans une startup londonienne, j’ai donc eu beaucoup de responsabilités. Dans ma colocation nous étions 5 : 3 français et 2 australiens. Je remercie l’agence pour cette inoubliable expérience.

            </p>

        </div>

        <div class="testimonial">

            <div class="testimonial-picture">

                <?php 

                    echo '<img src="'.get_template_directory_uri().'/images/red/photo-2.png">';

                ?>

            </div>

            <div class="testimonial-user">

                <div class="title-testimonial red">mélanie,</div>

                <div class="profession">stagiaire dans la finance</div>

            </div>

            <hr >

            <p class="testimonial-description">

                Ma cousine était passée par cette agence l’année dernière et en était très satisfaite. N’ayant pas un très bon niveau d’anglais j’ai décidé de suivre son exemple. Le responsable m’a assuré qu’il me trouverait un stage dans les délais et respectant mes attentes. C’est exactement ce qu’il a fait, j’ai effectué mon stage dans une entreprise de finance, certains de mes collègues étaient français ce qui m’a rassuré au début.

            </p>

        </div>

        <div class="testimonial">

            <div class="testimonial-picture">

                <?php 

                echo '<img src="'.get_template_directory_uri().'/images/red/photo-3.png">'; 

                ?>

            </div>

            <div class="testimonial-user">

                <div class="title-testimonial red">FABIEN,</div>

                <div class="profession">barman a fulham</div>

            </div>

            <hr >

            <p class="testimonial-description">

                J’ai toujours voulu vivre à Londres mais je n’ai jamais osé me lancer. Quand un ami m’a parlé de Movaway, je me suis dit que c’était l’occasion alors je les ai contacté. Comme j’étais barman à Paris, ils m’ont trouvé 3 entretiens avec des bars que je suis venu faire sur place, et je ne suis jamais reparti puisque je suis actuellement barman à Fulham, et j’habite dans le même quartier car Movaway m’a trouvé une chambre pas loin. Le bon plan quoi !

            </p>

        </div>

    </div>

</section>

<div class="clear"></div>

<?php

get_footer('red');

?>