<?php
	/**
	 * Welcome Page Initiation
	*/

	get_template_part('/inc/welcome/welcome');

	/** Plugins **/
	$th_plugins = array(
		// *** Companion Plugins
		'companion_plugins' => array(

		),

		//Displays on Required Plugins tab
		'req_plugins' => array(

			// Free Plugins
			'free_plug' => array(

				'accesspress-social-icons' => array(
					'slug' => 'accesspress-social-icons',
					'filename' => 'accesspress-social-icons.php',
					'class' => 'APS_Class'
				),

				'accesspress-social-share' => array(
					'slug' => 'accesspress-social-share',
					'filename' => 'accesspress-social-share.php',
					'class' => 'APSS_Class'
				),

				'accesspress-twitter-feed' => array(
					'slug' => 'accesspress-twitter-feed',
					'filename' => 'accesspress-twitter-feed.php',
					'class' => 'APTF_Class'
				),

				'ultimate-form-builder-lite' => array(
					'slug' => 'ultimate-form-builder-lite',
					'filename' => 'ultimate-form-builder-lite.php',
					'class' => 'UFBL_Class'
				),
			),
			'pro_plug' => array(

			),
		),

		// *** Displays on Import Demo section
		'required_plugins' => array(
			'access-demo-importer' => array(
					'slug' 		=> 'access-demo-importer',
					'name' 		=> esc_html__('Access Demo Importer', 'ripple'),
					'filename' 	=>'access-demo-importer.php',
					'host_type' => 'wordpress', // Use either bundled, remote, wordpress
					'class' 	=> 'Access_Demo_Importer',
					'info' 		=> esc_html__('Access Demo Importer adds the feature to Import the Demo Conent with a single click.', 'ripple'),
			),
		

		),

		// *** Recommended Plugins
		'recommended_plugins' => array(
			// Free Plugins
			'free_plugins' => array(
				
			),

			// Pro Plugins
			'pro_plugins' => array(
			
			)
		),
	);

	$strings = array(
		// Welcome Page General Texts
		'welcome_menu_text' => esc_html__( 'Ripple Welcome', 'ripple' ),
		'theme_short_description' => esc_html__( 'Ripple is a versatile one page WordPress theme for creating beautiful One Page websites. This theme comes with powerful customizer based options allowing you to build the wonderful websites in no time. Ripple is flexible, lightweight and it comes with a clean and flat design. It is not only limited to one page websites, You may also build website for any type of niche - Corporate, Agency, Portfolio etc to name some. The theme contains a beautiful filter based portfolio sections, Attractive call to action and many more. You may find the demo for Ripple theme here https://demo.accesspressthemes.com/ripple/.', 'ripple' ),

		// Plugin Action Texts
		'install_n_activate' 	=> esc_html__('Install and Activate', 'ripple'),
		'deactivate' 			=> esc_html__('Deactivate', 'ripple'),
		'activate' 				=> esc_html__('Activate', 'ripple'),

		// Getting Started Section
		'doc_heading' 		=> esc_html__('Step 1 - Documentation', 'ripple'),
		'doc_description' 	=> esc_html__('Read the Documentation and follow the instructions to manage the site , it helps you to set up the theme more easily and quickly. The Documentation is very easy with its pictorial  and well managed listed instructions. ', 'ripple'),
		'doc_link'			=> 'https://doc.accesspressthemes.com/ripple',
		'doc_read_now' 		=> esc_html__( 'Read Now', 'ripple' ),
		'cus_heading' 		=> esc_html__('Step 2 - Customizer Panel', 'ripple'),
		'cus_read_now' 		=> esc_html__( 'Go to Customizer Panels', 'ripple' ),

		// Recommended Plugins Section
		'pro_plugin_title' 			=> esc_html__( 'Premium Plugins', 'ripple' ),
		'free_plugin_title' 		=> esc_html__( 'Free Plugins', 'ripple' ),


		// Demo Actions
		'activate_btn' 		=> esc_html__('Activate', 'ripple'),
		'installed_btn' 	=> esc_html__('Activated', 'ripple'),
		'demo_installing' 	=> esc_html__('Installing Demo', 'ripple'),
		'demo_installed' 	=> esc_html__('Demo Installed', 'ripple'),
		'demo_confirm' 		=> esc_html__('Are you sure to import demo content ?', 'ripple'),

		// Actions Required
		'req_plugin_info' => esc_html__('All these required plugins will be installed and activated while importing demo. Or you can choose to install and activate them manually. If you\'re not importing any of the demos, you must install and activate these plugins manually.', 'ripple' ),
		'req_plugins_installed' => esc_html__( 'All Recommended action has been successfully completed.', 'ripple' ),
		'customize_theme_btn' 	=> esc_html__( 'Customize Theme', 'ripple' ),
		'pro_plugin_title' 			=> esc_html__( 'Premium Plugins', 'ripple' ),
		'free_plugin_title' 		=> esc_html__( 'Free Plugins', 'ripple' ),
	);

	/**
	 * Initiating Welcome Page
	*/
	$my_theme_wc_page = new Ripple_Welcome( $th_plugins, $strings );