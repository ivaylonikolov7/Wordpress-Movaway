<section id="they-trust-us">
    <div id="content">
<h2>
<div class="blue"><?php _e('ILS NOUS FONT', 'movaway') ?></div>
<div class="white"><?php _e('CONFIANCE', 'movaway') ?></div>        
</h2>
<div id="supporters">
    <div class="supporter">
	    <?php
	         echo '<img src="'.get_template_directory_uri().'/images/red/logo-nike.png">';
	 	?>
    </div>
	<div class="supporter">
	    <?php
	        echo '<img src="'.get_template_directory_uri().'/images/red/logo-holiday.png">';
	    ?>
	</div>
	<div class="supporter">
	    <?php
	        echo '<img src="'.get_template_directory_uri().'/images/red/logo-bentley.png">';
	    ?>
	</div>
	<div class="supporter">
		<?php
		    echo '<img src="'.get_template_directory_uri().'/images/red/logo-warner-bros.png">';
		?>
	</div>
</div>        
<div class="clear"></div>
    <div id="pictures">
        <a href="https://www.instagram.com/movaway/" target="_blank">
            <?php
             	echo "<img src='".get_template_directory_uri()."/images/red/instagram-1.png'". 'class="picture">';
	        ?>
        </a>
        <a href="https://www.instagram.com/movaway/" target="_blank">
	    <?php
    	     echo "<img src='".get_template_directory_uri()."/images/red/instagram-2.png'". 'class="picture">';
	     ?>
         </a>
         <a href="https://www.instagram.com/movaway/" target="_blank">
         <?php
	          echo "<img src='".get_template_directory_uri()."/images/red/instagram-3.png'". 'class="picture">';
          ?>
          </a>
          <a href="https://www.instagram.com/movaway/" target="_blank">
 	       	<?php                     
	            echo "<img src='".get_template_directory_uri()."/images/red/instagram-4.png'". 'class="picture">';
            ?> 
          </a> 
     </div>
 </div>
</section>
<footer>  
	<div id="footer-content"> 
		<h2>LIVE YOUR LONDON DREAM</h2>
		<?php            
			wp_nav_menu(array('menu' => 'footer'));        
		?>
		<div class="clear"></div>
		<div id="socialmedias"> 
			<div class="social-media">   
				<a href="http://facebook.com/movaway" target="_blank"> 
				<?php                     
				echo '<img src="'.get_template_directory_uri().'/images/red/logo-fb.png">'; 
				?>
				<div class="social-media-info"> 
					<div class="social-media-name">    
						FACEBOOK
					</div>  
					<div class="social-media-username"></div>
				</div>
				</a>
			</div>
			<div class="social-media">
				<a href="http://twitter.com/movaway" target="_blank">
					<?php
				    	echo '<img src="'.get_template_directory_uri().'/images/red/logo-twitter.png">';                    
			    	?>
					<div class="social-media-info">
						<div class="social-media-name">
							<div class="social-media-name">TWITTER</div>
							<div class="social-media-username"></div>
						</div>
					</div>
				</a>
			</div>
			<div class="social-media">
				<a href="https://www.linkedin.com/company/5081316?trk=tyah&trkInfo=clickedVertical%3Acompany%2CentityType%3AentityHistoryName%2CclickedEntityId%3Acompany_company_company_5081316%2Cidx%3A3" target="_blank">
					<?php
						echo '<img src="'.get_template_directory_uri().'/images/red/linkedin-logo.png">';
					?>
					<div class="social-media-info">
						<div class="social-media-name"> 
							<div class="social-media-name">LINKEDIN</div>
							<div class="social-media-username"></div>
						</div>
					</div>
				</a>
			</div>
		</div>    
	</div>
</footer>
</body>
</html>