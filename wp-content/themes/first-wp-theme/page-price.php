<?php get_header() ?>

    <div id="big-picture">

        <h2>

            <div class="blue">Découvrez NOS</div>

            <div class="white">différents packs</div>

        </h2>

    </div>

    <div id="after-big-picture">

        <h3>Movaway vous propose 7 différents packs.</h3>

    </div>

    <section id="packs">

        <div class="col">

            <div class="left-sided pack">

                <div class="image-pack" id="person-behind-computer"></div>

                <div class="text-pack">

                    <h3 class="type-pack">PACK STAGE</h3>

                    <div id="prices">

                        <div id="first-price">

                            <span class="black bold">Moins de 3 mois:</span>

                            <span class="blue price">£399</span>

                        </div>

                        <div id="second-price">

                            <span class="black bold">Plus de 3 mois:</span>

                            <span class="blue price">£529</span>

                        </div>

                    </div>

                    <p class="description-pack">Movaway vous trouve un stage à Londres qui correspond à vos exigences.</p>

                </div>

            </div>

            <div class="right-sided pack">

                <div class="text-pack" id="pack-building-text-pack">

                    <h3 class="type-pack">PACK LOGEMENT*</h3>

                    <p class="description-pack">Movaway vous propose des logements

                        aux quatre coins de Londres. 

                    </p>

                    <p class="black bold required">

                        UNE SEMAINE DE LOYER *

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

                        <h3 class="type-pack">PACK JOB</h3>

                        <h3 class="type-price blue">£349</h3>

                        <p class="description-pack">  Movaway vous aide à trouver un job étudiant à Londres et vous garanti des entretiens. Nous offrons 40 heures de cours d’anglais pour tout candidat qui souscrit au pack job.</p>

                    </div>

                </div>

                <div class="right-sided pack">

                    <div class="text-pack" id="taxis-pack">

                        <h3 class="type-pack">PACK TAXI</h3>

                        <h3 class="type-price">Eurostar: £69</h3>

                        <h3 class="type-price">Aeroport: £99</h3>

                        <p class="description-pack">Notre chauffeur vient vous chercher a la gare ou aux différents aéroports puis vous emmène Jusqu’à votre logement.</p>

                    </div>

                    <div class="image-pack" id="taxi"></div>

                </div>

            </div>

        </div>

        <div class="col">

            <div class="left-sided pack">

                <div class="image-pack" id="english-pack"></div>

                <div class="text-pack" id="english-course">

                    <h3 class="type-pack">PACK COURS D’ANGLAIS</h3>

                    <h3 class="type-price">Frais de dossier<span class='blue'> £50</span></h3>

                    <p class="description-pack">Movaway vous propose des cours d’anglais dans les meilleures écoles londoniennes à des prix compétitifs. </p>

                    <div class="schedule">

                        <div class="column-schedule">

                            <p class="black bold">Sur une semaine : </p>

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

                            <p class="black bold">Sur deux semaines :</p>

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

                            <p class='description-pack'>Nous offrons 40 heures de cours d’anglais pour tout candidat qui souscrit au pack job.</p>

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

                        PACK WELCOME TO LONDON

                    </h3>

                    <h3 class="type-price blue">£99</h3>

                    <div class="description-pack">

                        - une carte sim

                        <br />

                        - un plan de Londres

                        <br />

                        - une carte de transport (Oyster Card)

                        <br />

                        - un adaptateur

                        <br />

                        - une aide pour ouvrir un compte bancaire

                        <br />

                        et pour obtenir un numéro de sécurité sociale (NIN)

                        <br />

                        - un certificat pour échanger vos euros aux meilleurs taux

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

                        KIT EMMÉNAGEMENT
                    </h3>

                    <h3 class="type-price blue">£99</h3>

                    <div class="description-pack">
                        Movaway vous FOURNIT :
                        <ul>
                            <li>Couette</li>
                            <li>housse de couette DRAP </li>
                       
                            <li>2 coussinS</li>
                            <li>2 housses de coussins</li>
                        </ul>
                    </div>                    
                </div>
                <div class="image-pack" id="bed"></div>
            </div>
        </div>
    </section>

    <div class="clear"></div>

    <a href="<?=get_site_url(); ?>/contact/"><div class="black-button">NOUS-CONTACTER</div></a>

    <div class="clear"></div>

    <div class="t-shirts-picture">

        <a href="<?=get_site_url(); ?>/we-care/"><img src="<?=get_template_directory_uri();?>/images/blue/we-care-plan.png"></a>

    </div>

    <?php get_footer('blue'); ?>