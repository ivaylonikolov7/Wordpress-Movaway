<?php

	function movaway_enqueue_scripts()

	{

		wp_enqueue_style('movaway-main-css', get_template_directory_uri().'/style.css');	

		wp_enqueue_script("movaway-jquery", get_template_directory_uri().'/javascript/jquery-1.12.0.min.js' );

		wp_enqueue_script("movaway-list-js",get_template_directory_uri().'/javascript/selectordie.js');



		if(is_home())

		{			

			wp_enqueue_style('movaway-index-css', get_template_directory_uri().'/stylesheets/index.css' );

			wp_enqueue_script("movaway-reserve-apartment",get_template_directory_uri().'/javascript/selectordie.min.js');

			wp_enqueue_style('movaway-flat-css', get_template_directory_uri().'/stylesheets/flats.css' );

			wp_enqueue_script('movaway-index', get_template_directory_uri().'/javascript/index.js');

		}				

		if(is_page('flat-list'))

		{			-

			wp_enqueue_style('movaway-list-flat', get_template_directory_uri().'/stylesheets/page-list.css' );

			wp_enqueue_style('movaway-list-select-or-die', get_template_directory_uri().'/stylesheets/selectordie.css' );

			wp_enqueue_style('movaway-list-select', get_template_directory_uri().'/stylesheets/select.css' );	

			wp_enqueue_script("movaway-page-select",get_template_directory_uri().'/javascript/myselect.js');

			wp_enqueue_script("movaway-page-javascript",get_template_directory_uri().'/javascript/flats-list.js');			

			wp_enqueue_script("movaway-reserve-apartment",get_template_directory_uri().'/javascript/selectordie.min.js');

			wp_enqueue_style('movaway-flat-css', get_template_directory_uri().'/stylesheets/flats.css' );

		}

		if(is_page('internships'))

		{

			wp_enqueue_style('movaway-blue-style', get_template_directory_uri().'/stylesheets/blue-style.css');

			wp_enqueue_style('movaway-list-select-or-die', get_template_directory_uri().'/stylesheets/selectordie.css' );

			wp_enqueue_style('movaway-internships', get_template_directory_uri().'/stylesheets/internships.css' );		

			wp_enqueue_script("movaway-select-or-die",get_template_directory_uri().'/javascript/selectordie.min.js'); 

			wp_enqueue_script('movaway-internships-select-js', get_template_directory_uri().'/javascript/myselect.js' );

			wp_enqueue_script('movaway-internships-js', get_template_directory_uri().'/javascript/internships.js', 'movaway-internships-select-js', '1.0', false);				

		}

		if(is_page('jobs'))

		{

			wp_enqueue_style('movaway-blue-style', get_template_directory_uri().'/stylesheets/blue-style.css');

			wp_enqueue_style('movaway-jobs', get_template_directory_uri().'/stylesheets/jobs.css');

		}

		if(is_page('price'))

		{

			wp_enqueue_style('movaway-blue-style', get_template_directory_uri().'/stylesheets/blue-style.css');

			wp_enqueue_style('movaway-price', get_template_directory_uri().'/stylesheets/price.css');

		}

		if(is_singular('flat'))

		{					   

		    wp_enqueue_style('movaway-list-select-or-die', get_template_directory_uri().'/stylesheets/selectordie.css' );		    

		    wp_enqueue_script("movaway-select-or-die",get_template_directory_uri().'/javascript/selectordie.min.js');

			wp_enqueue_style('movaway-list-select', get_template_directory_uri().'/stylesheets/select-reserve-apartment.css' );

			wp_enqueue_style('movaway-single-flat', get_template_directory_uri().'/stylesheets/page.css' );

			wp_enqueue_script("movaway-google-api", 'http://maps.googleapis.com/maps/api/js?sensor=false');

		    wp_enqueue_script('movaway-stripe', 'https://js.stripe.com/v2/' );	   		    

		    wp_enqueue_script("movaway-pay",get_template_directory_uri().'/javascript/pay-stripe.js', 'movaway-stripe', '1.0', false);

		    wp_enqueue_script("movaway-card-information",get_template_directory_uri().'/javascript/cardNumber.js');		    

		    wp_enqueue_script("movaway-select-or-die-flat-page",get_template_directory_uri().'/javascript/select-flat-page.js', 'movaway-select-or-die', '', false);

		    wp_enqueue_script("movaway-reserve-apartment",get_template_directory_uri().'/javascript/reserve-appartment.js','', false);

		    wp_enqueue_script("movaway-popup",get_template_directory_uri().'/javascript/popup.js');

		}

		if(is_singular('job'))

		{

			wp_enqueue_style('movaway-list-select-or-die', get_template_directory_uri().'/stylesheets/selectordie.css' );

			wp_enqueue_style('movaway-single-job', get_template_directory_uri().'/stylesheets/job.css' );

			wp_enqueue_style('movaway-single-job-blue', get_template_directory_uri().'/stylesheets/blue-style.css');				

			wp_enqueue_script('movaway-modal-job', get_template_directory_uri().'/javascript/modal-job.js',"movaway-jquery", '1.0' );

			

		}

		if(is_page('about-movaway'))

		{

			wp_enqueue_style('movaway-about', get_template_directory_uri().'/stylesheets/about.css' );

		}

		if(is_page('we-care'))

		{

			wp_enqueue_style('movaway-tshirt', get_template_directory_uri().'/stylesheets/tshirt.css' );	

		}

		if(is_page('faq'))

		{

			wp_enqueue_style('movaway-faq', get_template_directory_uri().'/stylesheets/faq.css');

		}

		if(is_page('contact'))

		{

			wp_enqueue_style('movaway-contact', get_template_directory_uri().'/stylesheets/contact.css');	

		}

		if(is_page('recruitment'))

		{

			wp_enqueue_style('movaway-blue-style', get_template_directory_uri().'/stylesheets/blue-style.css');

			wp_enqueue_style('movaway-recruitment', get_template_directory_uri().'/stylesheets/recruitment.css');

		}

		if(is_page('english-course'))

		{

			wp_enqueue_style('movaway-english-course', get_template_directory_uri().'/stylesheets/english-course.css');

		}

	}	

	function remove_admin_login_header() {

    remove_action('wp_head', '_admin_bar_bump_cb');

	}



	function my_custom_post_product() {

	  	$labels = array(

		    'name'               => 'Flats',

		    'singular_name'      => 'Flat',

		    'add_new'            => 'Add new flat',

		    'add_new_item'       => 'Add new flat',

		    'edit_item'          => 'Edit flat',

		    'new_item'           => 'New flat',

		    'all_items'          => 'All flats',

		    'view_item'          => 'View flat',

		    'search_items'       => 'Search Flats',

		    'not_found'          => 'No flats found',

		    'not_found_in_trash' => 'No flats found in the Trash', 

		    'parent_item_colon'  => '',

		    'menu_name'          => 'Flats'

  		);

	  $args = 

	  array(

		    'labels'        => $labels,

	    	'description'   => 'Holds our products and product specific data',

	    	'public'        => true,

	    	'menu_position' => 5,

	    	'supports'      => array( 'title' ),

	    	'has_archive'   => true,

	  	);

  		register_post_type( 'flat', $args ); 

	}

	function my_custom_job_product() {

	  	$labels = array(

		    'name'               => 'Jobs',

		    'singular_name'      => 'Job',

		    'add_new'            => 'Add new job',

		    'add_new_item'       => 'Add new job',

		    'edit_item'          => 'Edit job',

		    'new_item'           => 'New job',

		    'all_items'          => 'All jobs',

		    'view_item'          => 'View job',

		    'search_items'       => 'Search Jobs',

		    'not_found'          => 'No jobs found',

		    'not_found_in_trash' => 'No jobs found in the Trash', 

		    'parent_item_colon'  => '',

		    'menu_name'          => 'Jobs'

  		);

	  $args = 

	  array(

		    'labels'        => $labels,

	    	'description'   => 'Holds our products and product specific data',

	    	'public'        => true,

	    	'menu_position' => 5,

	    	'supports'      => array( 'title' ),

	    	'has_archive'   => true,

	  	);

  		register_post_type( 'job', $args ); 

	}

	function movaway_setup_menu()

	{

		add_theme_support('menus');

		register_nav_menu('primary', 'Main Navigation');

		register_nav_menu('footer', 'Footer Navigation');

		register_nav_menu('languages', 'Language Navigation' );
	}

	function filterstrpos($haystack,$needle)

	{		

		if(empty($needle))

		{

			return true;

		}

		else

		{

		

			return strpos(strtolower($haystack), strtolower($needle));

		}

	}

	function filterEqual($frontend, $backend)

	{

		if(empty($frontend))

		{

			return true;

		}

		else

		{

			return $frontend==$backend;

		}

	}

	function filter_logement()

	{		

		$neighbourhood = htmlspecialchars($_POST['neighbourhood']);

		$minRoom = htmlspecialchars($_POST['rooms']);

		$orderBy = htmlSpecialChars($_POST['orderBy']);

		$args = array(

	            'post_type'              => 'flat',	           

	            'meta_key' => 'weekly_rent',

	            'orderBy' => 'meta_value_num',

	            'order' => $orderBy

	            );

		$posts = get_posts($args);

        global $post;

        foreach ($posts as $post) : 

        	setup_postdata( $post );

        	if(filterstrpos(get_the_title(), $neighbourhood)==true && $minRoom >=  (int)get_field('duration')):        		

        ?>                             		

		    <a href='<?=get_permalink()?>'>

		        <div class="flat">	          

		           	<img src='<?=get_field('upload_image')["url"]?>'>

		            <div class="info-pre-line">

		                <div class="location"><?=the_title();?></div>

		            </div>

		            <hr />

		            <div class="legends first-column">

		                <div class="bed legend"><?=get_field('number_of_rooms');?></div>

		                <div class="calendar legend"><?=get_field('calendar');?></div>

		            </div>

		            <div class="legends second-column">

		                <div class="price legend"><?=get_field('weekly_rent');?></div>

		                <div class="time legend">MIN <?=get_field('duration');?> MOIS</div>

		            </div>

		    	</div>		

		    </a>    

	    <?php

	    endif;

    	endforeach;

    	wp_reset_postdata();

    	die();        

	}

	function filter_job()
	{				

		$args = array(

        'post_type'              => 'job',

        );               

        global $post;

        $posts = get_posts($args);      

        $i=1;        

        $results = array();

        $duration = $_POST['duration'];

		$stage = $_POST['stage'];

		$stage = str_replace('&amp;', '&', $stage);

        foreach($posts as $post) :         	

			setup_postdata($post);

			if(filterEqual($duration,get_field('duration_of_internship')) && filterEqual($stage, get_field('type_of_stage'))):

				$resultPost[] = get_permalink();

				$resultPost[] = get_the_title();

				$resultPost[] = get_field('date_of_depart');

				$resultPost[] = get_field('duration_of_internship');

				$resultPost[] = get_field('salary');

				$resultPost[] = get_field('type_of_stage');

				$resultPost[] = $stage;

        		$results[] = $resultPost;

    		endif;        		

        endforeach;                              	

            wp_send_json_success($results);

            wp_reset_postdata();

            die();

	}

	function home_page_menu_args( $args )
	{

		$args['show_home'] = true;

		return $args;
		
	}

	function movaway_text_domain_setup()
	{
	    load_theme_textdomain('movaway', get_template_directory() . '/languages');
	}

	add_filter( 'wp_page_menu_args', 'home_page_menu_args' );

	add_action( 'init', 'my_custom_job_product' );

	add_action( 'init', 'my_custom_post_product' );

	add_action('wp_ajax_filter_job', 'filter_job');

	add_action('wp_ajax_nopriv_filter_job', 'filter_job');

	add_action('wp_ajax_filter_logement', 'filter_logement');

	add_action('wp_ajax_nopriv_filter_logement', 'filter_logement');

	add_action('get_header', 'remove_admin_login_header');

	add_action('wp_enqueue_scripts', 'movaway_enqueue_scripts');

	add_action('after_setup_theme', 'movaway_setup_menu');

	add_filter('show_admin_bar', '__return_false');
	
	add_action('after_setup_theme', 'movaway_text_domain_setup');
?>