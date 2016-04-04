<?php get_header() ?>
<div id="big-picture">
    <h2>
        <div class="white">LIVE YOUR</div>
        <div class="red">LONDON DREAM</div>
    </h2>
    <div id="white-scroll"></div>
</div>

<section id="contact">
    <p id="text-before-form">N’hésitez pas à nous contacter pour toute informations relatives à la recherche de Job / Stage ou Logement.</p>
    <div id="form-contact">
        <hr />
        <div class="form-column">
            <div class="form-row">
                <div class="label">
                    <label for="name">Nom *</label>
                </div>
                <input type="text" id="name">
            </div>
            <div class="form-row">
                <div class="label">
                    <label for="email">Email *</label>
                </div>
                <input type="text" id="name">
            </div>
            <div class="form-row">
                <div class="label">
                    <label for="skype">Skype</label>
                </div>
                <input type="text" id="skype">
            </div>
            <div id="required-text-form">
                Les champs marqués d'une* sont obligatoires
            </div>
            <div id="movaway-cotact-types">
                <h3>MOVAWAY</h3>
                <div class="movaway-contact-column">
                    <p id="meetings">French Meetings Ltd t/a Movaway</p>
                    <p id="adress">145 - 157 St John Street</p>
                    <p id="subadress">EC1V 4PW</p>
                </div>
                <div class="movaway-contact-column">
                    <p id="mail"> Mail : contact@movaway.com</p>
                    <p id="tel">Tel : +44 7857278662</p>
                </div>
                <div class="movaway-contact-column">
                    <p id="skype">Skype : Movaway</p>
                </div>
            </div>
            <div class="clear"></div>
            <div id="social-medias">
                <a href="https://www.facebook.com/Movaway">
                    <img src="<?=get_template_directory_uri();?>/images/red/fb-white-logo.png">
                </a>
                <a href="https://twitter.com/movaway">
                    <img src="<?=get_template_directory_uri();?>/images/red/twitter-white-logo.png">
                </a>
                <a href="http://movaway.tumblr.com/">
                    <img src="<?=get_template_directory_uri();?>/images/red/tumblr-logo.png" width="51px" height="51px">
                </a>
                <a href="https://www.linkedin.com/company/5081316?trk=tyah&trkInfo=tarId%3A1396104190563%2Ctas%3Amovaway%2Cidx%3A1-1-1">
                    <img src="<?=get_template_directory_uri();?>/images/red/linkedin-white-logo.png">
                </a>
                <a href="https://www.instagram.com/movaway/">
                    <img src="<?=get_template_directory_uri();?>/images/red/instagram-white-logo.png">
                </a>
                <a href="https://vimeo.com/user16862534">
                    <img src="<?=get_template_directory_uri();?>/images/red/vimeo-white-logo.png">
                </a>
            </div>
        </div>
        <div class="form-column">
            <div class="form-row">
                <div class="label">
                    <label for="prenom">PRENOM * </label>
                </div>
                <input type="text" id="prenom">
            </div>
            <div class="form-row">
                <div class="label" style="float:left;">
                    <label for="message">MESSAGE *</label>
                </div>
                <textarea id="message"></textarea>
                <div class="clear"></div>
                <div id="form-button">NOUS CONTACTER</div>
            </div>
        </div>
        <div class="clear"></div>
        <hr>
    </div>
</section>
<section id="map">
    <div id="map">
        <img src="<?=get_template_directory_uri();?>/images/red/whole-map-london.png" id="map">
    </div>
</section>
<?php require('footer-red.php') ?>
</body>
</html>