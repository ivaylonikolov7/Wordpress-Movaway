<?php get_header() ?>
    <div id="big-picture">
        <h2>
            <div class="white">
                <?php _e('TOUTES LES RESPONSES', 'movaway'); ?>                            
            </div>
            <div class="red">
                <?php _e('A VOS QUESTIONS', 'movaway'); ?></div>
        </h2>
    </div>
    <section id="all-faqs">
        <div id="stages">
            <h2><?php _e('Stages', 'movaway') ?></h2>
            <div id="questions">
                <div class="question-and-answer">
                    <h3 class="question">
                        <?php _e("Dois-je payer des frais d&#8217;inscription ?", 'movaway'); ?>
                        
                    </h3>
                    <p class="answer">
                        <?php _e("Non. Movaway reste gratuit jusqu&#8217;au moment où vous aurez trouvé et accepté le stage qui vous convient.", 'movaway'); ?>
                        
                    </p>
                </div>
                <div class="question-and-answer">
                    <h3 class="question">
                        
                        <?php _e('Comment postuler pour un stage ?', 'movaway'); ?>
                    </h3>
                    <p class="answer">
                        
                        <?php _e('Visitez la rubrique &#8220;Nos Stages&#8220; et suivez la procédure qui vous permettra de choisir la meilleure opportunité parmi nos offres disponibles.', 'movaway'); ?>
                    </p>
                </div>
                <div class="question-and-answer">
                    <h3 class="question">
                        <?php _e('Comment suivre ma requête de stage ?', 'movaway'); ?>
                        
                    </h3>
                    <p class="answer">
                        <?php _e("Notre équipe est à votre disposition et vous tiendra régulièrement informé de l&#8217;évolution de votre demande.", 'movaway'); ?>                        
                    </p>
                </div>
                <div class="question-and-answer">
                    <h3 class="question">
                        
                        <?php _e("Mon stage est-il officialisé par un contrat ?", 'movaway'); ?>
                    </h3>
                    <p class="answer">
                        <?php _e('Bien évidemment. Toutes les offres de stage Movaway sont sous contrat.', 'movaway'); ?>
                        
                    </p>
                </div>
                <div class="question-and-answer">
                    <h3 class="question">
                        <?php _e('Est-il possible de soliciter vos services à plusieurs reprises ?', 'movaway'); ?>
                        
                    </h3>
                    <p class="answer">
                        <?php _e('Oui.', 'movaway'); ?>                
                    </p>
                </div>
            </div>
            <div id="images-about-questions">
                <img src="<?=get_template_directory_uri();?>/images/red/picture-1-faq.png">
            </div>
        </div>
        <div class="clear"></div>
        <div id="jobs">
            <div class="jobs-column">
                <img src="<?=get_template_directory_uri();?>/images/red/jobs-picture.png">
            </div>
            <div class="jobs-column">
                <h2>JOBS</h2>
                <div id="jobs-question-and-answer">
                    <div class="job-question-and-answer">
                        <h3 class="job-question">
                            <?php _e("Comment Movaway peut m&#8217;aider à trouver un job ?", 'movaway'); ?>
                        </h3>
                        <div class="job-answer">
                            <?php _e('Movaway vous trouve rapidement des entretiens avec des restaurants, bars, boutiques à réaliser sur place à Londres.', 'movaway'); ?>
                        </div>
                    </div>
                    <div class="job-question-and-answer">
                        <h3 class="job-question">
                            <?php _e("Comment profiter de l&#8217;offre de job de Movaway ?", 'movaway'); ?>
                        </h3>
                        <div class="job-answer">
                            <?php _e("C&#8217;est très simple, il suffit de contacter Movaway par email à contact@movaway.com en envoyant votre CV. Vous aurez alors un rendez-vous  avec un membre de l&#8217;équipe qui proposera ensuite des entretiens avec nos entreprises partenaires sur place.", 'movaway'); ?>
                        </div>
                    </div>
                    <div class="job-question-and-answer">
                        <h3 class="job-question"><?php _e('Quel type de postes propose Movaway ?', 'movaway'); ?></h3>
                        <div class="job-answer">
                            <?php _e("Il s&#8217;agit de jobs étudiants, c&#8217;est-à-dire principalement en tant que serveur, barman, réceptionniste, etc.", 'movaway'); ?>
                        </div>
                    </div>
                    <div class="job-question-and-answer">
                        <h3 class="job-question"><?php _e('Les jobs sont-ils à temps complet ou à temps partiel ?', 'movaway'); ?></h3>
                        <div class="job-answer">
                            <?php _e('Les jobs proposés sont adaptés à vos besoins : Movaway vous trouvera donc des jobs à temps complet ou à temps partiel selon vos envies.', 'movaway'); ?>                            
                        </div>
                    </div>
                    <div class="job-question-and-answer">
                        <h3 class="job-question"><?php _e('A quel moment dois-je régler les frais ?', 'movaway'); ?></h3>
                        <div class="job-answer">
                            <?php _e('Pour les jobs, les frais sont à régler avant de passer vos entretiens.', 'movaway'); ?>
                        </div>
                    </div>
                    <div class="job-question-and-answer">                        
                        <h3 class="job-question"><?php _e('Comment me préparer pour les entretiens ?', 'movaway'); ?></h3>
                        <div class="job-answer">
                            <?php _e('Movaway peut, si vous le souhaitez, vous donner des conseils et même vous donner des séances de coaching pour les entretiens.', 'movaway'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div id="logement">
            <div class="logement-column">
                <h2><?php _e('LOGEMENTS', 'movaway'); ?></h2>
                <div id="logements-question-and-answers">
                    <div class="question-and-answer-logement">
                        <div class="logement-question"><?php _e('Comment réserver une chambre ?', 'movaway'); ?></div>
                        <div class="logement-answer">
                            <?php _e("C&#8217;est très simple, il suffit de vous rendre sur la page consacrée aux logements, puis de cliquer sur le logement qui vous intéresse, et enfin, en bas de la page, vous trouverez un bandeau qui vous permet de réserver directement en ligne.", 'movaway'); ?>
                        </div>
                    </div>
                    <div class="question-and-answer-logement">
                        <div class="logement-question">
                            <?php _e('Pourquoi réserver une chambre ?', 'movaway'); ?>
                        </div>
                        <div class="logement-answer">
                            <?php _e("Il est préférable de réserver une chambre pour être sûr d'avoir un endroit où vivre dès votre arrivée. Les logements londoniens trouvent preneur très rapidement, il vaut donc mieux prendre les devants.", 'movaway'); ?>
                        </div>
                    </div>
                    <div class="question-and-answer-logement">
                        <div class="logement-question">
                            <?php _e("Est-il possible de visiter la chambre avant/après l&#8217;avoir réservé ?", 'movaway'); ?>
                        </div>
                        <div class="logement-answer">
                            <?php _e('Si vous êtes déjà sur place, il est possible de visiter la chambre à tout moment en prenant rendez-vous auparavant.', 'movaway'); ?>
                        </div>
                    </div>
                    <div class="question-and-answer-logement">
                        <div class="logement-question"><?php _e("Quels sont les frais de réservation d&#8217;une chambre ?", 'movaway'); ?></div>
                        <div class="logement-answer">
                            <?php _e("Les frais de réservation d&#8217une chambre équivalent à une semaine de loyer.", 'movaway'); ?>
                        </div>
                    </div>
                    <div class="question-and-answer-logement">
                        <div class="logement-question"><?php _e('Quels types de logements propose Movaway?', 'movaway'); ?></div>
                        <div class="logement-answer">                    
                            <?php _e('Movaway propose des chambres situées aux quatre coins de Londres', 'movaway'); ?>
                        </div>
                    </div>
                    <div class="question-and-answer-logement">
                        <div class="logement-question"><?php _e("A quel genre de colocataires puis-je m'attendre ?", 'movaway'); ?></div>
                        <div class="logement-answer">
                            <?php _e('Les locataires de ces logements sont tous des étudiants ou jeunes actifs de différentes nationalités.', 'movaway'); ?>
                        </div>
                    </div>
                    <div class="question-and-answer-logement">
                        <div class="logement-question"><?php _e("Qu&#8217est-ce que comprend le loyer ?", 'movaway'); ?></div>
                        <div class="logement-answer">
                            <?php _e("Le loyer comprend l&#8217électricité, le gaz, l&#8217eau, la taxe d&#8217habitation et internet.", 'movaway'); ?>
                        </div>
                    </div>
                    <div class="question-and-answer-logement">
                        <div class="logement-question"><?php _e('Les logements sont-ils meublés et équipés ?', 'movaway'); ?></div>
                        <div class="logement-answer">
                            <?php _e('Oui, les logements sont totalement meublés et équipés.', 'movaway'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="logement-column">
                <img src="<?=get_template_directory_uri();?>/images/red/picture-logement.png">
            </div>
        </div>
    </section>
    <div class="clear"></div>
    <?php get_footer('red');