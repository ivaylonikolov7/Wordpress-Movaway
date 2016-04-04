<?php get_header() ?>
    <div id="big-picture">
        <h2>
            <div class="white">à la recherche</div>
            <div class="blue"> d’un job ?</div>
        </h2>
    </div>
    <section id="jobs">
        <div class="job-content">
            <div class="job-text">
                <div class="header-job">
                    <h3 class="job-number">1</h3>
                    <h3 class="job-title">vos entretiens
                        sont assurés
                    </h3>
                </div>
                <div class="clear"></div>
                <hr />
                <p class="question">Quoi de mieux pour s’améliorer en anglais que de décrocher un job à Londres ?</p>
                <p class="answer">Movaway vous offre une vraie expérience professionnelle au cœur de la capitale britannique ! Quel que soit votre parcours professionnel et vos compétences, nous vous assurons votre emploi avec nos entreprises partenaires et un suivi pendant votre séjour pour seulement £349.</p>
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
                        <h3 class="job-title">MOVAWAY ET SES PARTENAIRES</h3>
                    </div>
                    <div class="clear"></div>
                    <hr />
                    <p class="description-job">
                        Movaway entretient des relations de confiance avec ses partenaires pour vous garantir une expérience de qualité. Ceux-ci sont très variés : du restaurant gastronomique aux clubs prestigieux de Mayfair en passant par des boutiques trendy.
                    </p>
                    <p class="bonus">
                        De plus, environ 70 % des entreprises avec lesquelles nous travaillons sont dirigées par des directeurs francophones, ce qui facilite énormément les premiers entretiens.
                    </p>
                </div>
            </div>
        </div>
        <div class="job-content">
            <div class="job-text">
                <div class="header-job">
                    <h3 class="job-number">3</h3>
                    <h3 class="job-title">Découvrez les jobs
                        Movaway
                    </h3>
                </div>
                <div class="clear"></div>
                <hr />
                <ul class="information-jobs">
                    <li><span class="bold">Restauration</span> : serveur(se), commis serveur(se), cuisinier(e), commis de cuisine, barman.</li>
                    <li><span class="bold">Sandwicherie/Café</span> : sandwichs maker, vendeur(se), barista.</li>
                    <li><span class="bold">Hôtellerie</span>: réceptionniste, serveur.</li>
                    <li><span class='bold'>English: </span> Nous offrons 40 heures de cours d’anglais pour tout candidat qui souscrit au pack job.</li>
                    <li><span class="bold">Discothèques</span>: barman, chef d’équipe, organisateur d’évènement.</li>
                    <li><span class="bold">Vente en boutique</span>: vêtements, informatique, téléphonie.</li>
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