<?php 
    get_header(); 
    require_once 'vendor/autoload.php';
    $mysqli = mysqli_connect('localhost', 'abcsigma_admin', 'proba123', 'abcsigma_wordpress');
    while( have_posts() ) : the_post();

    if ($_POST)
    {
        $name = htmlspecialchars($_POST['flat_name']);
        $email = htmlspecialchars($_POST['flat_email']);
        $telephone = htmlspecialchars($_POST['telephone']);
        $period = htmlspecialchars($_POST['period']);

        if($_POST['accept-terms-and-conditions'])
        {
            \Stripe\Stripe::setApiKey("sk_test_AfJ8SEOMIdRwjQo7dUOvsoS3");
            $error = '';
            $success = '';
            try 
            {
                if (!isset($_POST['stripeToken']))
                {
                    throw new Exception("The Stripe Token was not generated correctly");
                }
                
                //values of options                        
                preg_match_all("/[0-9]+/", get_field('weekly_rent'), $output_array);
                $weekly_rent = $output_array[0][0];
                $pack_welcome = ($_POST['pack-welcome']=='on') ? 99 : 0;
                $pack_taxi_eurostar = ($_POST['pack-taxi-eurostar']=='on') ? 69 : 0;
                $pack_taxi_aeroport = ($_POST['pack-taxi-aeroport']=='on') ? 99 : 0;
                $cheap_pack = ($_POST['pack-voyager-moins-cher']=='on') ? 99 : 0;
                $ammount = $pack_welcome + $pack_taxi_aeroport + $pack_taxi_eurostar + $cheap_pack + $weekly_rent;

                //option booleans
                $pack_welcome_boolean = ($pack_welcome == 99) ? 1:0;
                $pack_taxi_eurostar_boolean = ($pack_taxi_eurostar==69) ? 1:0;
                $pack_taxi_aeroport_boolean = ($pack_taxi_aeroport==99) ? 1:0;
                $cheap_pack_boolean  = ($_POST['pack-voyager-moins-cher']==99) ? 1:0;

                \Stripe\Charge::create(array("amount" => $ammount*100,            
                                            "currency" => "GBP",
                                            "card" => $_POST['stripeToken']));
                $success = 'Your payment was successful.';  
                $mysqli->query("INSERT INTO `wp_flats`(`name`, `email`, `telephone`, `period`, `packWelcomeToLondon`, `packTaxiEurostar`, `packTaxiEuroport`,  `moving`, `totalPaid`)
                 VALUES('$name', '$email', '$telephone', '$period', $pack_welcome_boolean, $pack_taxi_eurostar_boolean, $pack_taxi_aeroport_boolean, $cheap_pack_boolean, $ammount)");      
            }
            catch (Exception $e) 
            {
                $error = $e->getMessage();
                echo $error;
            }
        }
        else
        {
            echo '<script>Please accept terms and conditions</script>';
        }
    }
?>
    <div id="big-picture"></div>
    <section id="slider">
        <img class="big-slider" src="<?=get_field('upload_image')['url']?>">
        <div id="mini-slides">
            <img class="active-slide slider-image" src="<?=get_field('upload_image')['url']?>">
            <img class="slider-image" src="<?=get_field('image_2')['url']?>">
            <img class="slider-image" src="<?=get_field('image_3')['url']?>">
            <img class="slider-image" src="<?=get_field('image_4')['url'] ?>">
        </div>
    </section>
    <div class="clear"></div>
    <section id="descriptions">
        <div class="row">
            <div class="description">
                <div class="description-logo" id="details"></div>
                <h3>DETAILS</h3>
                <hr>
                <div class="legends">
                    <div class="legends-column">
                        <div class="bed legend"><?=get_field('number_of_rooms')?></div>
                        <div class="calendar legend"><?=get_field('calendar')?></div>
                        <div class="house legend">HOUSE</div>
                    </div>
                    <div class="legends-column">
                        <div class="price legend">£<?=get_field('weekly_rent')?></div>
                        <div class="time legend">MIN <?=get_field('duration')?> MOIS</div>
                        <div class="garden legend">GARDEN</div>
                    </div>
                </div>
            </div>
            <div class="description">
                <div class="description-logo" id="information-description"></div>
                <h3>DESCRIPTION</h3>
                <hr/>
                <p class="description-paragraph">
                    Duis pharetra libero sed nulla dictum, vitae condimentum leo maximus. Morbi tempus dictum arcu in vestibulum. Quisque dignissim ultricies felis sed hendrerit. Donec consectetur volutpat blandit. Class aptent taciti sociosqu ad litora torquent per conubia nostra.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="description">
                <div class="description-logo" id="emplacement"></div>
                <h3>EMPLACEMENT</h3>
                <hr/>                
                <div id="map">                    
                    <div id="map-canvas"></div>
                </div>                
                <?php echo "
                <script>
                        var myLatLng = new google.maps.LatLng(".get_field('placement')['lat'].",".get_field('placement')['lng'].");            
                        var myOptions = {zoom:9, center: myLatLng};
                        map = new google.maps.Map( document.getElementById( 'map-canvas' ), myOptions ),
                        marker = new google.maps.Marker( {position: myLatLng, map: map} );          
                        map.panTo( new google.maps.LatLng(".get_field('placement')['lat'].",".get_field('placement')['lng']."));                        
                        marker.setMap(map);      
                </script>"; 
                ?>
            </div>
            <div class="description">
                <div class="description-logo" id="logo-description"></div>
                <h3>DANS LE SECTEUR</h3>
                <HR />
                <div class="type-of-entertainment">
                <div class="legend-details" id="bars-legend"></div>
                    <div id="bars" class="entertainments-in-area">
                        <p class="header-in-the-area">Bars:</p>
                        <p class="details-in-the-area"><?=get_field('bars')?></p>
                    </div>
                </div>
                <div class="type-of-entertainment">
                    <div class="legend-details" id="restaurants-legend"></div>
                    <div id="restaurants" class="entertainments-in-area">
                        <p class="header-in-the-area">Restaurants:</p>
             -           <p class="details-in-the-area"><?=get_field('restaurants')?></p>
                    </div>
                </div>
                <div class="type-of-entertainment">
                    <div class="legend-details" id="events-legend"></div>
                    <div id="events" class="entertainments-in-area">
                        <p class="header-in-the-area">Evenements</p>
                        <p class="details-in-the-area"><?=get_field('events')?></p>
                    </div>
                </div>
                <div class="type-of-entertainment">
                    <div class="legend-details" id="parks-legend"></div>
                    <div id="parks" class="entertainments-in-area">
                        <p class="header-in-the-area">Parcs</p>
                        <p class="details-in-the-area"><?=get_field('parks')?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clear"></div>
    <section id="reserve-flat">
        <?php if(!$_POST['stripeToken']) : ?>
        <div id="phase-one">
            <div id="reserve-button">RESERVER CE LOGEMENT</div>
            <div class="help">DES QUESTIONS ? LOGEMENTS@MOVAWAY.COM OU RENDEZ-VOUS SUR LA <a href="<?=get_site_url()?>/faq/" target="_blank"><span class="underline bold">PAGE FAQ</span></a></div>
        </div>
        <div id="phase-two">
            <h3> RESERVER CE LOGEMENT </h3>
            <form method="post" action=''>
                <div class="register-column">
                    <label for="flat_name">nom complet</label>
                    <input type="text" name="flat_name">
                    <label for="flat_email">e-mail</label>
                    <input type="email" name="flat_email">
                    <label for="telephone">telephone</label>
                    <input type="text" name="telephone">
                    <label for="period">periode</label>                    
                    <select id='period' name='period'>
                        <option>3 MOIS</option>
                        <option>6 MOIS</option>
                        <option>9 MOIS</option>
                    </select>
                </div>
                <div class="register-column">
                    <label for="card">numero carte</label>
                    <input type="text" class="card-number">
                    <label for="expiration">expiration</label>
                    <div id="expiration-date">
                        <select id="month">
                            <option>January</option>
                            <option>February</option>
                            <option>March</option>
                            <option>April</option>
                            <option>May</option>
                            <option>June</option>
                            <option>July</option>
                            <option>August</option>
                            <option>September</option>
                            <option>October</option>
                            <option>November</option>
                            <option>December</option>
                        </select>
                        <select id="year">
                            <option>2016</option>
                            <option>2017</option>
                            <option>2018</option>
                            <option>2019</option>
                            <option>2020</option>
                            <option>2021</option>
                            <option>2022</option>
                            <option>2023</option>
                            <option>2024</option>
                            <option>2025</option>
                        </select>
                    </div>
                    <div class="clear"></div>
                    <label for="period">CODE de securite*</label>                    
                    <input type="number" class="card-cvc" maxlength="3">
                    <div id='errors'></div>
                </div>
                <div class="clear"></div>
                <div id="clauses">
                    <div class="checkbox-column">
                        <div class="clause">
                            <input type="checkbox" id="pack-welcome" name="pack-welcome">
                            <label for="pack-welcome">pack welcome to london: £99</label>
                        </div>
                        <div class="clause">
                            <div id="help-pack-welcome" class="pre-pop-up-help">QU'EST-CE QUE C'EST?</div>
                        </div>
                    </div>
                    <div class="checkbox-column">
                        <div class="clause">
                            <input type="checkbox" id="pack-taxi-eurostar" name="pack-taxi-eurostar">
                            <label for="pack-taxi-eurostar">Pack Taxi Eurostar: £69</label>
                        </div>
                        <div class="clause">
                            <input type="checkbox" id="pack-taxi-aeroport" name="pack-taxi-aeroport">
                            <label for="pack-taxi-aeroport">Pack Taxi Aeroport: £99</label>
                        </div>
                        <div class="clause">
                            <div id="taxis-modal" class="pre-pop-up-help">QU'EST-CE QUE C'EST?</div>
                        </div>
                    </div>
                    <div class="checkbox-column">
                        <div class="clause">
                            <input type="checkbox" name="pack-voyager-moins-cher" id="pack-voyager-moins-cher">
                            <label for="pack-voyager-moins-cher" id="pack-voyager-moins-cher">Kit emménagement: £99</label>
                        </div>
                        <div class="clause">
                            <div id="pack-staff" class="pre-pop-up-help">QU'EST-CE QUE C'EST?</div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <div id="accept-clauses">
                    <div class='total-price'> Total Price: 
                        £<span class="currency-ammount">
                            <?php
                                $_POST['weekly_rent'] = get_field('weekly_rent');
                                preg_match_all("/[0-9]+/", $_POST['weekly_rent'], $output_array);
                                echo $output_array[0][0];
                            ?>                            
                        </span>
                    </div>
                    <div class="right">
                        <div id="register-clause">
                            <input type="checkbox" name="accept-terms-and-conditions" id="accept-terms-and-conditions">
                            <label for="accept-terms-and-conditions">J'accepte <span class="toa">les termes et conditions</span></label>
                        </div>
                        <input type="submit" value="VALIDER" id="reserve">
                    </div>
                </div>
            </form>
        </div>
        <?php endif; ?>
        <?php if($_POST['stripeToken']) : ?>
        
        <div id="phase-three">
            <div id="tick"></div>
            <div id="phase-three-text">
                <h2>CONFIRMATION</h2>
                <div id="subtext-phase-three">
                    <h3>VOTRE Réservation a bien été prise en complet.</h3>
                    <p id="mini-text">un agent de l’équipe Movaway va prendre contact avec vous au plus vite.</p>
                </div>
            </div>
        </div>          
    <?php endif; ?>

    </section>    
    <div class="clear"></div>
    <div id="overlay">
        <div id="overlay-welcome-to-london" class="modal">
            <h3>PACK WELCOME TO LONDON</h3>
            <div class="description-deal">
                Movaway vous aide à vous installer à londres
                en vous proposant tous les outils nécessaires pour  seulement
            </div>
            <p class="price-offer red">£99</p>
            <div id="icons">
                <div class="icon-with-text">
                    <div class="icon" id="sim-icon"></div>
                    <p class="explain-icon">une carte sim</p>
                </div>
                <div class="icon-with-text">
                    <div class="icon" id="map-icon"></div>
                    <p class="explain-icon">un plan de Londres</p>
                </div>
                <div class="icon-with-text">
                    <div class="icon" id="no-park-icon"></div>
                    <p class="explain-icon">une carte de transport (Oyster Card)</p>
                </div>
                <div class="icon-with-text">
                    <div class="icon" id="ac-icon"></div>
                    <p class="explain-icon">un adaptateur</p>
                </div>
                <div class="icon-with-text">
                    <div class="icon" id="person-icon"></div>
                    <p class="explain-icon">un numéro de sécurité social(NIN)</p>
                </div>
                <div class="icon-with-text">
                    <div class="icon" id="get-money-icon"></div>
                    <p class="explain-icon"> un certificat pour échanger vos euros
                        aux meilleurs taux</p>
                </div>
                <div class="icon-with-text">
                    <div class="icon" id="contract-icon"></div>
                    <p class="explain-icon">une aide pour ouvrir un compte en banque</p>
                </div>
                <div class="clear"></div>
            </div></div>
        <div id="overlay-taxi" class="modal">
            <h3>PACK TAXI</h3>
            <div class="description-deal">
                Notre chauffeur vient vous chercher a la gare ou aux différents aéroports puis vous emmène jusqu’a votre logement.
            </div>
            <img src="<?= get_template_directory_uri(); ?>/images/red/aeroport-logo.png">
            <img src="<?= get_template_directory_uri(); ?>/images/red/train-logo.png">
        </div>
        <div id="overlay-pack-staff" class="modal">
            <h3 id="kit">KIT EMMENAGEMENT</h3>
            <div class="description-deal">
                Grâce au kit emménagement, Movaway vous fournit une couette, une housse de couette, un drap, deux coussins et deux housses de coussin
            </div>
            <img src="<?= get_template_directory_uri(); ?>/images/red/newkit.jpg">
        </div>
        <div id="terms-of-agreement" class="modal">
            <div class="long-text">

                1) La Réservation <br />
                <br />
                <br />

                Le client s’engage à fournir à son mandataire  des informations exactes et valides mentionnées dans le Formulaire de Mandat <br />

                de Recherche telles que <br />

                L’identité et le nombre d’arrivants <br />
 
                L’identité du garant <br />

                L’identité des personnes partageant la chambre <br />

                La date d’arrivée<br />

                La date de départ<br />

                La durée de votre séjour<br />

                Le type de logement réservé<br />

                Le budget (loyer du logement par personne et par semaine)<br />
                <br />
                <br />

                Afin de garantir la réservation du bien choisi, le client règlera au prestataire des arrhes comprenant nos frais d’agence, plus 5 <br />

                semaines de cautions qui sera verse directement au propriétaire. <br />

                Ces arrhes ne seront pas remboursables en cas d'annulation de votre séjour. <br />
                Les 4 premières semaines de loyer seront à payer au propriétaire à votre arrivée. Le règlement des arrhes se fera soit par <br />

                virement, soit par Paypal.<br />

                Après avoir eu connaissance du logement, vous disposerez d'un délai maximum de 72h pour régler ces arrhes afin de réserver <br />

                définitivement le logement auprès du propriétaire. <br />

                Si vous dépassez ce délai et que le logement n'est plus disponible, nous ne pourrons pas vous garantir de nouvelles <br />

                disponibilités conformes à votre demande, mais nous essayerons de vous faire une nouvelle proposition dès que des <br />

                logements seront disponibles. 
                <br />
                <br />
                <br />

                2) Nos engagements

                <br />
                <br />

                Tous les logements que nous vous proposons ont préalablement été sélectionnés par nos soins. <br />

                Movaway s’engage à vous faire, au minimum, trois proposition de logement conforme à votre demande. Le nombre de <br />

                propositions dépendra de nos disponibilités. <br />

                Nos frais d’agences sont d’une semaine de loyer.
                <br />

                1 <br />

                Le critère de la zone géographique ne sera respecté que si le budget alloué à un logement dans la zone choisie par le client est <br />

                conforme au prix affiché sur notre site internet pour cette même zone géographique (ex: Un logement dans la zone 1-2 est <br />

                20% à 30% plus cher qu'un même logement dans la zone 2-3). Si le budget alloué est inférieur, nous attribuerons <br />

                automatiquement au client une zone géographique qui correspond à son budget. En cas de surclassement au niveau de la <br />

                zone, aucun remboursement ne sera effectué (ex: Si vous effectuez une demande de logement dans la zone 2-3 et que l'on <br />

                vous trouve un logement en zone 1-2, conforme à votre budget, aucun remboursement ne sera effectué). <br />

                Le critère de budget ne sera respecté que si la durée de votre séjour est de minimum 3 mois. En dessous de cette durée, votre <br />

                budget devra s'adapter à nos disponibilités même si nous essayerons au maximum de le respecter. <br />

                Egalement, le critère de budget par personne (à plus ou moins 20 pounds près) ne pourra pas s'appliquer pour les départs <br />

                prévus entre le 15 Septembre et le 30 octobre, en raison de la rentrée académique et du manque de disponibilités pendant <br />

                cette période. Nous vous garantissons de respecter votre budget par personne (à plus ou moins50 pounds près) uniquement <br />

                pendant cette période. <br />

                Séjours courts termes (Moins de 13 semaines) et prix des logements :<br />

                Chambre simple = A partir de 200 pounds / semaine<br />

                Chambre double/Twin = A partir de 230 pounds / semaine<br />

                Studio simple = A partir de 320 pounds / semaine<br />

                Studio double = A partir de 380 pounds / semaine<br />

                <br />
                <br />

                En cas de non-disponibilité du type de logement que vous souhaitiez (Colocation, Studio), Movaway vous proposera un autre <br />

                type de logement parmi ceux disponibles. En cas d'acceptation de cette nouvelle proposition, aucun remboursement ne sera <br />

                effectué. En cas de refus de trois nouvelles propositions, Movaway s'engage à vous rembourser vos frais d’agence en faisant <br />

                une demande écrite, envoyée par lettre recommandée avec accusé de réception. <br />

                Si un client souhaite visiter les logements proposés et faire sa sélection lui-même auprès de nos agences partenaires, <br />

                Movaway ne pourra être tenu responsable du résultat de la recherche, et les frais d’agence ne seront pas remboursable. <br />

                En cas d'une ou plusieurs informations manquantes sur la recherche de logement, Movaway se réservera le droit d’interpréter <br />

                librement la ou les informations manquantes en sa qualité de spécialiste. <br />

                Dans le cas d'une indisponibilité du logement après avoir effectué la réservation définitive, Movaway s'engage à vous fournir <br />

                un logement de standing similaire dans la même zone géographique, et si possible dans le même quartier. <br />

                Movaway s’engage à vous suivre pendant la durée de votre recherche de logement jusqu’à votre prise en charge par le <br />

                propriétaire.<br />

                Movaway s’engage à vous envoyer dans les 8-10 jours avant votre départ un courriel comportant l’adresse de votre logement, <br />

                une description détaillée de celui-ci ainsi que toutes les informations nécessaires à votre départ. <br />

                Movaway s’engage à transmettre au propriétaire l’ensemble de vos coordonnées ainsi que votre date et heure d’arrivée. <br />

                Movaway s’engage à vous transmettre les coordonnées du propriétaire afin que vous puissiez, dès votre arrivée à Londres, <br />

                prendre contact avec lui. Il sera alors en mesure de prévoir votre prise en charge et de procéder à votre installation. <br />

                Movaway se décharge de toute responsabilité si vous décidez de changer de logement sur place. Le propriétaire sera dans ce <br />

                cas la, le seul garant de la location. <br />

                Movaway se réserve le droit d'annuler toute demande de logement sur un manque de disponibilités par le remboursement des <br />

                frais d’agence et caution, dès la connaissance de l'impossibilité de loger le client. <br />

                Movaway s’engage à vous aider dans la recherche d’un nouveau logement si celui pour lequel vous aviez contracté venait à <br />

                expiration. Cette aide, sans obligation de résultat, n’occasionnera aucun frais supplémentaire si elle apparaît dans les 3 mois <br />

                suivant la souscription. 
                <br />

                <br />
                <br />
                
                3) IMPORTANT <br />

                <br />
                <br />

                La société Movaway, intermédiaire à l’opération de location, n’intervient jamais ni dans la rédaction, ni dans la régularisation <br />

                du bail, avec le propriétaire ou l’agence anglaise partenaire. <br />

                Le bail régit les rapports entre le locataire et le propriétaire et demeure donc inopposable au prestataire. <br />

                La prestation sera réputée définitivement achevée à la signature du contrat de bail. <br />

                En cas de non respect du contrat de location et/ou en cas de détériorations du logement loué, le locataire sera responsable de <br />

                réparer les dommages causés au propriétaire et/ou à l'agence immobilière anglaise.<br />

                La responsabilité de Movaway ne pourra jamais être recherchée en cas de non-respect des termes du bail par l’une ou l’autre <br />

                des parties,  de dommages, retards, nuisances, quelles qu’elles soient, pouvant survenir dans le cadre de la formation, de <br />

                l’exécution ou à la suite de l’expiration du contrat de bail conclu entre le locataire et le propriétaire. <br />

                Le propriétaire est seul responsable de l’état du bien loué et le locataire seul responsable de l’état du bien lors de sa <br />

                restitution. <br />

                Le locataire fera son affaire de la restitution de la caution versée au propriétaire, à l’issue du bail et ce, sans recours contre le<br /> 

                prestataire. <br />

                Movaway ne pourra être tenu responsable en cas de retard sur les envois postaux, quelqu'il soit. <br />

                Attribution de compétence : Les parties décident de soumettre le présent contrat au droit anglais. En cas de litige, le tribunal <br />

                HM COURT de Londres sera seul compétent.<br />

                Location d’une chambre en colocation<br />

                A votre arrivée au Royaume-Uni, vous serez pris en charge par le propriétaire et il vous sera demandé de signer un contrat de <br />

                location (Tenancy Agreement). <br />

                Le contrat de location prévoit systématiquement le versement du premier mois de loyer de 4 semaines avant <br />

                l’emmenagement.<br />

                Le premier loyer devra être versée, en espèces (Livre Sterling) ou bien par virement 72h avant l’arrivée sur Londres sur le <br />

                compte de Movaway.<br />

                Il sera prévu que le propriétaire prend à sa charge la totalité des factures usuelles telles que l’électricité, l’eau, le gaz, taxe <br />

                d’habitation, internet. <br />

                Le locataire doit  respecter les lieux d’habitation privés et communs, ainsi que les biens meubles et immeubles qui s’y <br />

                trouvent. Leur non-respect engage personnellement le locataire. <br />

                A son départ, le locataire doit restituer les locaux dans un état identique à l'entrée dans les lieux.<br />

                Vous devrez obligatoirement disposer des justificatifs suivants, sans quoi vous ne pourrez pas intégrer les lieux : <br />

                - Une copie de votre pièce d’identité.<br />

                - Un justificatif de domicile.<br />

                Votre loyer se paye toutes les 4 semaines.<br />
            </div>
        </div>
    </div>
    <?php
        endwhile;
        get_footer('red');
    ?> 
</body>
</html>