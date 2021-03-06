<?php 
    get_header();
    if(isset($_POST['send-cv']))
    {
        $mysqli = new mysqli('localhost', 'abcsigma_admin','proba123','abcsigma_wordpress') or die('ERROR');      
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $whereDidYouFindOut = $_POST['how-did-you-learn'];
        $telephone = $_POST['telephone'];
        $skype = $_POST['skype'];
        $email = $_POST['email'];
        $file = $_FILES['cv'];        
        $file_name = $file['name'];
        $file_tmp = $file['tmp_name'];
        $file_size = $file['size'];
        $file_error = $file['error'];
        $id = (int)get_the_id();
        $file_ext = explode('.', $file_name);        
        $file_ext= strtolower(end($file_ext));        
        $allowed = array('pdf', 'docx', 'doc');            
        if(in_array($file_ext, $allowed))
        {            
            if($file_error===0)
            {
                if($file_size<=20971520)
                {
                    $current_user = wp_get_current_user();
                    $current_username = $current_user->user_login;                    
                    $file_name_new = $current_username . '_' . get_the_title() . '_' . get_the_id() . '.' . $file_ext;
                    $file_destination = 'wp-content/uploads/cv/'.$file_name_new;                    
                    if(move_uploaded_file($file_tmp, $file_destination))
                    {                        
                        $mysqli -> query ("INSERT INTO `wp_candidates`
                        (`name`, `surname`, `email`, `telephone`,`skype`, `file_path`, `how_did_you_find_out`, `job_id`) 
                        VALUES ('$name', '$surname', '$email', '$telephone', '$skype', '$file_destination' ,'$whereDidYouFindOut', $id)");
                        mysqli_error($mysqli);
                    }   
                    else
                    {
                        $errors[] = 'Couldnt upload file';
                    }
                }
            }
        }
        else
        {
            $errors[]='Forbidden file type.';
        }            
    }
    while( have_posts() ) : the_post();      
    get_fields();
?>
    <div id="big-picture">
        <h2>
        <span class='white'><?=the_title()?></span>
        </h2>
    </div>
    <div id="after-big-picture">
        -
        <div id="job-logo"></div>
        <h3>
            <?php _e('A propos du stage', 'movaway'); ?>
        </h3>
        <div id="description-of-job">
            <div class="description-job-column right-align">
                <div class="type-internship">
                    <div class="type-of-stage key">
                        <?php _e('intitulé du stage', 'movaway'); ?>
                    </div>
                    <div class="type-of-stage value"><?= the_title(); ?></div>
                </div>
                <div class="type-internship">
                    <div class="what-you-will-do key"><?php _e('fonction', 'movaway'); ?></div>
                    <div class="what-you-will-do value"><?= get_field('function'); ?></div>
                </div>
                <div class="type-internship">
                    <div class="diploma key"><?php _e('diplôme', 'movaway'); ?></div>
                    <div class="diploma value">
                        <?=get_field('diploma')?>
                    </div>
                </div>
                <div class="type-internship">
                    <div class="skills key"><?php _e('compétences', 'movaway'); ?></div>
                    <div class="skill value"><?= get_field('skills'); ?></div>
                </div>
            </div>
            <div class="description-job-column left-align">
                <div class="type-internship">
                    <div class="salaire key"><?php _e('SALAIRE', 'movaway'); ?></div>
                    <div class="salaire value"><?= get_field('salary');?></div>
                </div>
                <div class="type-internship">   
                    <div class="date key"><?php _e('Date de départ', 'movaway'); ?></div>
                    <div class="date value">
                        <?= get_field('date_of_depart'); ?>
                    </div>
                </div>
                <div class="type-internship">
                    <div class="duration key"><?php _e('DUREE DU STAGE', 'movaway'); ?></div>
                    <div class="duration value"><?= get_field('duration_of_internship'); ?></div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <section id="information-about-job">
        <div id="more-information-about-job">
            <div class="column-more-information">
                <div class="group">
                    <div id="suitcase" class="logo"></div>
                    <h3>
                        <?php _e('VOTRE POSTE', 'movaway'); ?>
                    </h3>
                    <hr />
                    <p class="after-header-information">
                        <?=get_field('your_job');?>
                    </p>
                </div>
                <div class="group">
                    <div id="building" class="logo"></div>
                    <h3><?php _e('A PROPOS DE L’ENTREPRISE', 'movaway'); ?></h3>
                    <HR />
                    <P class="after-header-information">
                        <?=get_field('about_the_company');?>
                    </P>
                </div>
            </div>            
            <div class="column-more-information">
                <div class="group">
                    <div id="shield" class="logo"></div>
                    <h3><?php _e('VOS RESPONSABILITÉS', 'movaway'); ?></h3>
                    <hr />
                    <div class="after-header-information">
                        <?=get_field('your_responsibilities'); ?>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="group">
                    <div id="settings" class="logo"></div>
                    <h3><?php _e('COMMENT CA MARCHE', 'movaway'); ?></h3>
                    <hr />
                    <div class="after-header-information">
                        <div class="sub-group">
                            <div class="pre-text-icon" id="phone"></div>
                            <p class="after-icon-text">
                                <span class="number-after-header"><?php _e('1. POSTULER', 'movaway'); ?></span>
                                <span class="after-number">
                                    <?=get_field('apply')?>
                                </span>
                            </p>
                        </div>
                        <div class="sub-group">
                            <div class="pre-text-icon" id="handshake"></div>
                            <p class="after-icon-text">
                                <span class="number-after-header"><?php _e('2. ENTRETIEN', 'movaway'); ?></span>
                                <span class="after-number"><?=get_field('interview')?></span>
                            </p>
                        </div>
                        <div class="sub-group">
                            <div class="pre-text-icon" id="airplane"></div>
                            <p class="after-icon-text">
                                <span class="number-after-header"><?php _e('3. BIENVENUE', 'movaway'); ?></span>
                                <span class="after-number"><?=get_field('arrival');?></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>        
        <div id="print" onClick="window.print()"></div>    
        <div id="post-button-cv">
            <span class="post-cv"><?php _e('postuler', 'movaway'); ?></span>
        </div>
        <div class="clear"></div>
        <div id="social-medias-blue">
            <a href='http://www.facebook.com/sharer.php?u=<?=get_permalink( $post->ID );?>' target="_blank"><div id='facebook' class="social-media-icon" ></div></a>
            <a href='https://twitter.com/share?url=<?=get_permalink( $post->ID );?>;text=Look at this job!' target="_blank"><div id="twitter" class="social-media-icon" ></div></a>
            <a href='https://plus.google.com/share?url=<?=get_permalink( $post->ID );?>' target="_blank"><div id="googleplus" class="social-media-icon" ></div></a>
            <a href='mailto:?Subject=Job at Movaway;Body=This job at Movaway looks good <?=get_permalink($post->ID);?>'target="_blank"><div id="message" class="social-media-icon" ></div></a>
        </div>
    </section>
    <div id="modal-overlay">
        <div id="modal-open">
            <img src="<?=get_template_directory_uri();?>/images/blue/movaway-logo.png" width="100px">
            <h2><?php _e('POSTULER POUR CE STAGE', 'movaway'); ?></h2>
            <div class="clear"></div>
            <form method='post' enctype="multipart/form-data">
                <table>
                    <tr>
                        <td>
                            <label for="name"><?php _e('NOM', 'movaway'); ?></label>
                        </td>
                        <td>
                            <input type="text" id="name" name="name">
                        </td>
                        <td>
                            <label for="surname" name=""><?php _e('PRENOM', 'movaway'); ?></label>
                        </td>
                        <td>
                            <input type="text" id="surname" name="surname">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="email">EMAIL</label>
                        </td>
                        <td>
                            <input type="text" id="email" name="email">
                        </td>
                        <td>
                            <label for="telephone">TELEPHONE</label>
                        </td>
                        <td>
                            <input type="text" id="telephone" name="telephone">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="skype">SKYPE</label>
                        </td>
                        <td>
                            <input type="text" id="skype" name="skype">
                        </td>
                        <td colspan="2">
                            <label for="how-did-you-learn"><?php _e('COMMENT AVEZ-VOUS CONNU MOVAWAY :', 'movaway'); ?></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="cv" id="cv">
                                CV*
                            </label>
                        </td>
                        <td>
                            <input type="file" id="cv" name="cv">
                        </td>
                        <td colspan="2">
                            <select id="how-did-you-learn" name="how-did-you-learn">
                                <option>FACEBOOK</option>
                                <option>TWITTER</option>
                                <option>GOOGLE</option>
                                <option><?php _e('PRESSE', 'movaway'); ?></option>
                                <option><?php _e('AFFICHE', 'movaway'); ?></option>
                                <option><?php _e('AMI', 'movaway'); ?></option>
                                <option><?php _e('AUTRE', 'movaway'); ?></option>                                
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="2">                            
                        </td>
                        <td colspan="2">
                            <button id="send-cv" name='send-cv'><?php _e('JE POSTULE', 'movaway'); ?></button>
                        </td>
                    </tr>
                </table>
            </form>        
        </div>
    </div>
    <?php
        endwhile;
        get_footer('blue');
     ?>
    <script>
        $('#how-did-you-learn').selectOrDie();
    </script>
</body>
</html>