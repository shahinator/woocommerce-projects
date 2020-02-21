<?php


add_action( 'teadokanpluginactivator_register', 'teadokan_register_required_plugins' );

function teadokan_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(
		array(
		'name'               => esc_html__('Teadokan Core', 'teadokan'), 
		'slug'               => 'teadokan_core', 
		'source'             => TEADOKAN_THEMEROOT . '/inc/plugins/teadokan_core.zip', 
		'required'           => true, 
		'force_activation'   => false, 
		'force_deactivation' => false,            
		),
		array(
			'name'      => 'Unyson',
			'slug'      => 'unyson',
			'required'  => true,            
            'external_url' => '', // If set, overrides default API URL and points to an external URL
		),
		array(
			'name'      => 'Contact Form',
			'slug'      => 'contact-form-7',
			'required'  => true,            
            'external_url' => '', // If set, overrides default API URL and points to an external URL
		),
		array(
            'name' => esc_html__('Woocommerce', 'teadokan'), // The plugin name
            'slug' => 'woocommerce', // The plugin slug (typically the folder name)            
            'required' => true, // If false, the plugin is only 'recommended' instead of required
            'force_activation' => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url' => '', // If set, overrides default API URL and points to an external URL
        ),
        array(
            'name' => esc_html__('Redux Framework', 'teadokan'), // The plugin name
            'slug' => 'redux-framework', // The plugin slug (typically the folder name)
            'required' => true, // If false, the plugin is only 'recommended' instead of required            
            'force_activation' => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url' => '', // If set, overrides default API URL and points to an external URL
        ),
        array(
            'name' => esc_html__('Meta Box CMB2', 'teadokan'), // The plugin name
            'slug' => 'cmb2', // The plugin slug (typically the folder name)
            'required' => true, // If false, the plugin is only 'recommended' instead of required            
            'force_activation' => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url' => '', // If set, overrides default API URL and points to an external URL
        ), 
        array(
            'name' => esc_html__('YITH WooCommerce Wishlist', 'teadokan'), // The plugin name
            'slug' => 'yith-woocommerce-wishlist', // The plugin slug (typically the folder name)            
            'required' => false, // If false, the plugin is only 'recommended' instead of required
            'force_activation' => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url' => '', // If set, overrides default API URL and points to an external URL
        ),
        array(
            'name' => esc_html__('YITH WooCommerce Compare', 'teadokan'), // The plugin name
            'slug' => 'yith-woocommerce-compare', // The plugin slug (typically the folder name)            
            'required' => false, // If false, the plugin is only 'recommended' instead of required
            'force_activation' => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url' => '', // If set, overrides default API URL and points to an external URL
		),
		array(
            'name' => esc_html__('MailChimp for WordPress', 'teadokan'), // The plugin name
            'slug' => 'mailchimp-for-wp', // The plugin slug (typically the folder name)
            'required' => true, // If false, the plugin is only 'recommended' instead of required            
            'force_activation' => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url' => '', // If set, overrides default API URL and points to an external URL
		),
				
	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

		
		'strings'      => array(
			'page_title'                      => esc_html__( 'Install Required Plugins', 'teadokan' ),
			'menu_title'                      => esc_html__( 'Install Plugins', 'teadokan' ),
			'installing'                      => esc_html__( 'Installing Plugin: %s', 'teadokan' ), // %s = plugin name.
			'oops'                            => esc_html__( 'Something went wrong with the plugin API.', 'teadokan' ),
			'notice_can_install_required'     => _n_noop(
				'This theme requires the following plugin: %1$s.',
				'This theme requires the following plugins: %1$s.',
				'teadokan'
			), // %1$s = plugin name(s).
			'notice_can_install_recommended'  => _n_noop(
				'This theme recommends the following plugin: %1$s.',
				'This theme recommends the following plugins: %1$s.',
				'teadokan'
			), // %1$s = plugin name(s).
			'notice_cannot_install'           => _n_noop(
				'Sorry, but you do not have the correct permissions to install the %1$s plugin.',
				'Sorry, but you do not have the correct permissions to install the %1$s plugins.',
				'teadokan'
			), // %1$s = plugin name(s).
			'notice_ask_to_update'            => _n_noop(
				'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
				'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
				'teadokan'
			), // %1$s = plugin name(s).
			'notice_ask_to_update_maybe'      => _n_noop(
				'There is an update available for: %1$s.',
				'There are updates available for the following plugins: %1$s.',
				'teadokan'
			), // %1$s = plugin name(s).
			'notice_cannot_update'            => _n_noop(
				'Sorry, but you do not have the correct permissions to update the %1$s plugin.',
				'Sorry, but you do not have the correct permissions to update the %1$s plugins.',
				'teadokan'
			), // %1$s = plugin name(s).
			'notice_can_activate_required'    => _n_noop(
				'The following required plugin is currently inactive: %1$s.',
				'The following required plugins are currently inactive: %1$s.',
				'teadokan'
			), // %1$s = plugin name(s).
			'notice_can_activate_recommended' => _n_noop(
				'The following recommended plugin is currently inactive: %1$s.',
				'The following recommended plugins are currently inactive: %1$s.',
				'teadokan'
			), // %1$s = plugin name(s).
			'notice_cannot_activate'          => _n_noop(
				'Sorry, but you do not have the correct permissions to activate the %1$s plugin.',
				'Sorry, but you do not have the correct permissions to activate the %1$s plugins.',
				'teadokan'
			), // %1$s = plugin name(s).
			'install_link'                    => _n_noop(
				'Begin installing plugin',
				'Begin installing plugins',
				'teadokan'
			),
			'update_link' 					  => _n_noop(
				'Begin updating plugin',
				'Begin updating plugins',
				'teadokan'
			),
			'activate_link'                   => _n_noop(
				'Begin activating plugin',
				'Begin activating plugins',
				'teadokan'
			),
			'return'                          => esc_html__( 'Return to Required Plugins Installer', 'teadokan' ),
			'plugin_activated'                => esc_html__( 'Plugin activated successfully.', 'teadokan' ),
			'activated_successfully'          => esc_html__( 'The following plugin was activated successfully:', 'teadokan' ),
			'plugin_already_active'           => esc_html__( 'No action taken. Plugin %1$s was already active.', 'teadokan' ),  // %1$s = plugin name(s).
			'plugin_needs_higher_version'     => esc_html__( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'teadokan' ),  // %1$s = plugin name(s).
			'complete'                        => esc_html__( 'All plugins installed and activated successfully. %1$s', 'teadokan' ), // %s = dashboard link.
			'contact_admin'                   => esc_html__( 'Please contact the administrator of this site for help.', 'teadokan' ),

			'nag_type'                        => 'updated', // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
		),
		
	);

	teadokanpluginactivator( $plugins, $config );
}
