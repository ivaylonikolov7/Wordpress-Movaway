<?php get_header() ?>
    <div id="big-picture">
        <h2>                
            <div class="blue"><?php _e('Découvrez NOS', 'movaway') ?></div>            
            <div class="white"><?php _e('différents packs', 'movaway'); ?></div>        
        </h2>
    </div>
    <div id="after-big-picture">        
        <h3><?php _e('Movaway vous propose 7 différents packs.', 'movaway'); ?></h3>
    </div>
    <section id="packs">
        <div class="col">
            <div class="left-sided pack">
                <div class="image-pack" id="person-behind-computer"></div>
                <div class="text-pack">
                    <h3 class="type-pack"><?php _e('PACK STAGE', 'movaway'); ?></h3>
                    <div id="prices">
                        <div id="first-price">
                            <span class="black bold"><?php _e('Moins de 3 mois:', 'movaway'); ?></span>
                            <span class="blue price"><?php _e('£399', 'movaway'); ?></span>
                        </div>
                        <div id="second-price">
                            <span class="black bold"><?php _e('Plus de 3 mois:', 'movaway'); ?></span>
                            <span class="blue price">£529</span>
                        </div>
                    </div>
                    <p class="description-pack"><?php _e('Movaway vous trouve un stage à Londres qui correspond à vos exigences.', 'movaway'); ?></p>
                </div>
            </div>
            <div class="right-sided pack">
                <div class="text-pack" id="pack-building-text-pack">
                    <h3 class="type-pack"><?php _e('PACK LOGEMENT*', 'movaway'); ?></h3>
                    <p class="description-pack"><?php _e('Movaway vous propose des logements aux quatre coins de Londres.', 'movaway'); ?>
                    </p>
                    <p class="black bold required">
                        <?php _e('UNE SEMAINE DE LOYER *', 'movaway'); ?>
                    </p>
                </div>
                <div class="image-pack" id="building"></div>
            </div>
        </div>
        <div class="black-background">
            <div class="col">
                <div class="left-sided pack">
                    <div class="image-pack" id="people-chatting"></div>
                    <div class="text-pack">
                        <h3 class="type-pack">
                            <?php _e('PACK JOB', 'movaway'); ?>
                        </h3>
                        <h3 class="type-price blue">£349</h3>
                        <p class="description-pack">
                            <?php _e('Movaway vous aide à trouver un job étudiant à Londres et vous garanti des entretiens. Nous offrons 40 heures de cours d’anglais pour tout candidat qui souscrit au pack job.', 'movaway'); ?>
                        </p>
                    </div>
                </div>
                <div class="right-sided pack">
                    <div class="text-pack" id="taxis-pack">
                        <h3 class="type-pack"><?php _e('PACK TAXI', 'movaway'); ?></h3>
                        <h3 class="type-price">Eurostar: £69</h3>
                        <h3 class="type-price">Aeroport: £99</h3>
                        <p class="description-pack">
                            <?php _e('Notre chauffeur vient vous chercher a la gare ou aux différents aéroports puis vous emmène Jusqu’à votre logement.', 'movaway'); ?>
                        </p>
                    </div>
                    <div class="image-pack" id="taxi"></div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="left-sided pack">
                <div class="image-pack" id="english-pack"></div>
                <div class="text-pack" id="english-course">
                    <h3 class="type-pack">
                        <?php _e('PACK COURS D’ANGLAIS', 'movaway'); ?>
                    </h3>
                    <h3 class="type-price"><?php _e('Frais de dossier', 'movaway'); ?><span class='blue'> £50</span></h3>
                    <p class="description-pack"><?php _e('Movaway vous propose des cours d’anglais dans les meilleures écoles londoniennes à des prix compétitifs. ', 'movaway'); ?>
                    </p>
                    <div class="schedule">
                        <div class="column-schedule">
                            <p class="black bold"><?php _e('Sur une semaine : ', 'movaway'); ?></p>
                            <ul>
                                <li>
                                    <span class="gray">10h ></span> <span class="blue price">£50</span>
                                </li>
                                <li>
                                    <span class="gray">20h ></span><span class="blue price">£75</span>
                                </li>
                            </ul>
                        </div>
                        <div class="column-schedule">
                            <p class="black bold"><?php _e('Sur deux semaines :', 'movaway'); ?></p>
                            <ul>
                                <li>
                                    <span class="gray">14h ></span> <span class="blue price">£70</span>
                                </li>
                                <li>
                                    <span class="gray">20h ></span><span class="blue price">£90</span>
                                </li>
                                <li>
                                    <span class="gray">36h ></span><span class="blue price">£130</span>
                                </li>
                            </ul>
                            <p class='description-pack'>
                                <?php _e('Nous offrons 40 heures de cours d’anglais pour tout candidat qui souscrit au pack job.', 'movaway'); ?>
                            </p>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            
            <DIV CLASS='clear'></div>
            <div class="left-sided pack">
                <div class="image-pack" id="bus"></div>
                <div class="text-pack" id="text-welcome-pack">
                    <h3 class="type-pack">
                        <?php _e('PACK WELCOME TO LONDON', 'movaway'); ?>
                    </h3>
                    <h3 class="type-price blue">£99</h3>
                    <div class="description-pack">
                        <?php _e('- une carte sim', 'movaway'); ?>
                        <br />
                        <?php _e('- un plan de Londres', 'movaway'); ?>
                        <br />
                        <?php _e('- une carte de transport (Oyster Card)', 'movaway'); ?>
                        <br />
                        <?php _e('- un adaptateur', 'movaway'); ?>
                        <br />
                        <?php _e('- une aide pour ouvrir un compte bancaire', 'movaway'); ?>
                        <br />
                        <?php _e('et pour obtenir un numéro de sécurité sociale (NIN)', 'movaway'); ?>
                        <br />
                        <?php _e('- un certificat pour échanger vos euros aux meilleurs taux', 'movaway'); ?>
                        <br />
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="col">
            <div class="right-sided pack" id="bed-pack">                
                <div class="text-pack">
                    <h3 class="type-pack">
                        <?php _e('KIT EMMÉNAGEMENT', 'movaway'); ?>
                    </h3>
                    <h3 class="type-price blue">£99</h3>
                    <div class="description-pack">
                        <?php _e('Movaway vous FOURNIT :', 'movaway'); ?>
                        <ul>
                            <li><?php _e('Couette', 'movaway'); ?></li>
                            <li><?php _e('housse de couette DRAP ', 'movaway'); ?></li>
                       
                            <li><?php _e('2 coussins', 'movaway'); ?></li>
                            <li><?php _e('2 housses de coussins', 'movaway'); ?></li>
                        </ul>
                    </div>                    
                </div>
                <div class="image-pack" id="bed"></div>
            </div>
        </div>
    </section>
    <div class="clear"></div>
    <a href="<?=get_site_url(); ?>/contact/"><div class="black-button"><?php _e('NOUS-CONTACTER', 'movaway'); ?></div></a>
    <div class="clear"></div>
    <div class="t-shirts-picture">
        <a href="<?=get_site_url(); ?>/we-care/"><img src="<?=get_template_directory_uri();?>/images/blue/we-care-plan.png"></a>
    </div>
    <?php get_footer('blue'); ?>