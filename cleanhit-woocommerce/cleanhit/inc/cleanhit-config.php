<?php
/*
  ReduxFramework Sample Config File
  For full documentation, please visit: https://docs.reduxframework.com
*/

if (!class_exists('Cleanhit_Theme_Config')) {

    class Cleanhit_Theme_Config {

        public $args        = array();
        public $sections    = array();
        public $theme;
        public $ReduxFramework;

        public function __construct() {

            if (!class_exists('ReduxFramework')) {
                return;
            }

            // This is needed. Bah WordPress bugs.  ;)
            if (  true == Redux_Helpers::isTheme(__FILE__) ) {
                $this->initSettings();
            } else {
                add_action('plugins_loaded', array($this, 'initSettings'), 10);
            }

        }

        public function initSettings() {

            // Just for demo purposes. Not needed per say.
            $this->theme = wp_get_theme();

            // Set the default arguments
            $this->setArguments();

            // Set a few help tabs so you can see how it's done
            $this->setHelpTabs();

            // Create the sections and fields
            $this->setSections();

            if (!isset($this->args['opt_name'])) { // No errors please
                return;
            }

            $this->ReduxFramework = new ReduxFramework($this->sections, $this->args);
        }

        /*

          This is a test function that will let you see when the compiler hook occurs.
          It only runs if a field	set with compiler=>true is changed.

        */
        function compiler_action($options, $css, $changed_values) {
            echo '<h1>The compiler hook has run!</h1>';
            echo "<pre>";
            print_r($changed_values); // Values that have changed since the last save
            echo "</pre>";
        }

        /*

          Custom function for filtering the sections array. Good for child themes to override or add to the sections.
          Simply include this function in the child themes functions.php file.

          NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
          so you must use get_template_directory_uri() if you want to use any of the built in icons

        */
        function dynamic_section($sections) {
            //$sections = array();
            $sections[] = array(
                'title' => esc_html__('Section via hook', 'cleanhit'),
                'desc' => esc_html__('<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'cleanhit'),
                'icon' => 'el-icon-paper-clip',
                // Leave this as a blank section, no options just some intro text set above.
                'fields' => array()
            );

            return $sections;
        }

        /*

          Filter hook for filtering the args. Good for child themes to override or add to the args array. Can also be used in other functions.

        */
        function change_arguments($args) {
            return $args;
        }

        /*

          Filter hook for filtering the default value of any given field. Very useful in development mode.

        */
        function change_defaults($defaults) {
            $defaults['str_replace'] = 'Testing filter hook!';

            return $defaults;
        }

       public function setSections() {

            /*
              Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
            */
            // Background Patterns Reader
            $sample_patterns_path   = ReduxFramework::$_dir . '../sample/patterns/';
            $sample_patterns_url    = ReduxFramework::$_url . '../sample/patterns/';
            $sample_patterns        = array();

            if (is_dir($sample_patterns_path)) :

                if ($sample_patterns_dir = opendir($sample_patterns_path)) :
                    $sample_patterns = array();

                    while (( $sample_patterns_file = readdir($sample_patterns_dir) ) !== false) {

                        if (stristr($sample_patterns_file, '.png') !== false || stristr($sample_patterns_file, '.jpg') !== false) {
                            $name = explode('.', $sample_patterns_file);
                            $name = str_replace('.' . end($name), '', $sample_patterns_file);
                            $sample_patterns[]  = array('alt' => $name, 'img' => $sample_patterns_url . $sample_patterns_file);
                        }
                    }
                endif;
            endif;

            ob_start();

            $ct             = wp_get_theme();
            $this->theme    = $ct;
            $item_name      = $this->theme->get('Name');
            $tags           = $this->theme->Tags;
            $screenshot     = $this->theme->get_screenshot();
            $class          = $screenshot ? 'has-screenshot' : '';

            $customize_title = sprintf(esc_html__('Customize &#8220;%s&#8221;', 'cleanhit'), $this->theme->display('Name'));
            
            ?>
            <div id="current-theme" class="<?php echo esc_attr($class); ?>">
            <?php if ($screenshot) : ?>
                <?php if (current_user_can('edit_theme_options')) : ?>
                        <a href="<?php echo wp_customize_url(); ?>" class="load-customize hide-if-no-customize" title="<?php echo esc_attr($customize_title); ?>">
                            <img src="<?php echo esc_url($screenshot); ?>" alt="<?php esc_attr_e('Current theme preview', 'cleanhit'); ?>" />
                        </a>
                <?php endif; ?>
                    <img class="hide-if-customize" src="<?php echo esc_url($screenshot); ?>" alt="<?php esc_attr_e('Current theme preview', 'cleanhit'); ?>" />
                <?php endif; ?>

                <h4><?php echo esc_attr($this->theme->display('Name')); ?></h4>

                <div>
                    <ul class="theme-info">
                        <li><?php printf(esc_html__('By %s', 'cleanhit'), $this->theme->display('Author')); ?></li>
                        <li><?php printf(esc_html__('Version %s', 'cleanhit'), $this->theme->display('Version')); ?></li>
                        <li><?php echo '<strong>' . esc_html__('Tags', 'cleanhit') . ':</strong> '; ?><?php printf($this->theme->display('Tags')); ?></li>
                    </ul>
                    <p class="theme-description"><?php echo esc_attr($this->theme->display('Description')); ?></p>
                </div>
            </div>

            <?php
            $item_info = ob_get_contents();

            ob_end_clean();
	
		// General
		$this->sections[] = array(
			'title'     => esc_html__('General', 'cleanhit'),
			'desc'      => esc_html__('General theme options', 'cleanhit'),
			'icon'      => 'el-icon-cog',
			'fields'    => array(
				array(
					'id' => 'cleanhit_logo_main',
					'type' => 'media',
					'url' => true,
					'compiler' => 'true',
					'desc' => esc_html__('Basic media uploader with disabled URL input field.', 'cleanhit'),
					'subtitle' => esc_html__('Add/Upload logo using the WordPress native uploader', 'cleanhit'),
					'title' => esc_html__('Site Logo', 'cleanhit'),
					'default' => array(
						'url' => CLEANHIT_IMAGES . '/logo.png',
					),
				),
				array(
					// Social Enable/Disable
					'id' 					=> 'cleanhit_social_enable' ,
					'type' 					=> 'switch' ,
					'title' 				=> esc_html__( 'Social Media Enable/Disable' , 'cleanhit' ) ,
					'default' 				=> false ,
				),
				array(
					'id' =>'cleanhit_facebook',
					'type' => 'text',
					'title' => esc_html__('Facebook URL', 'cleanhit'),
					'default' => '#'
				),
				array(
					'id' =>'cleanhit_twitter',
					'type' => 'text',
					'title' => esc_html__('Twitter URL', 'cleanhit'),
					'default' => '#'
				),
				array(
					'id' =>'cleanhit_linkedin',
					'type' => 'text',
					'title' => esc_html__('Linkedin URL', 'cleanhit'),
					'default' => '#'
				),
				array(
					'id' =>'cleanhit_google_plus',
					'type' => 'text',
					'title' => esc_html__('Google Plus URL', 'cleanhit'),
					'default' => '#'
				),
				array(
					'id' =>'cleanhit_instagram',
					'type' => 'text',
					'title' => esc_html__('Instagram URL', 'cleanhit'),
					'default' => '#'
				),
			),
		);
	
		// Background
		$this->sections[] = array(
			'title'     => esc_html__('Background', 'cleanhit'),
			'desc'      => esc_html__('Use this section to upload background images, select background color', 'cleanhit'),
			'icon'      => 'el-icon-picture',
			'fields'    => array(
				
				array(
					'id'        => 'background_opt',
					'type'      => 'background',
					'output'    => array('body'),
					'title'     => esc_html__('Body Background', 'cleanhit'),
					'subtitle'  => esc_html__('Body background with image, color.', 'cleanhit'),
					'default'  => array(
						'background-color' => '#FFFFFF',
					)
				),
			),
		);
		
		// Colors
		$this->sections[] = array(
			'title'     => esc_html__('Colors', 'cleanhit'),
			'desc'      => esc_html__('Color options', 'cleanhit'),
			'icon'      => 'el-icon-tint',
			'fields'    => array(	
				array(
					'id'        => 'body_color',
					'type'      => 'color',
					'output'    => array('body'),
					'title'     => esc_html__('Body Font Color', 'cleanhit'),
					'subtitle'  => esc_html__('Pick a color for body font color (default: #363636).', 'cleanhit'),
					'transparent' => false,
					'default'  => '#363636',
					'validate' => 'color',
				),
				array(
					'id'        => 'heading_color',
					'type'      => 'color',
					'output'    => array('.section-title-area h2.single-author-post .media .media-body h4.media-heading'),
					'title'     => esc_html__('Heading Color', 'cleanhit'),
					'subtitle'  => esc_html__('Pick a color for heading font color (default: #000000).', 'cleanhit'),
					'transparent' => false,
					'default'  => '#000000',
					'validate' => 'color',
				),	
				array(
					'id'        => 'primary_color',
					'type'      => 'color',
					'output'    => array('.widget_search .search-form label:after,.single-blog-post .post-info ul li i'),
					'title'     => esc_html__('Primary Color', 'cleanhit'),
					'subtitle'  => esc_html__('Pick a color for all colorable text, link and icon. (default: #ffb600).', 'cleanhit'),
					'transparent' => false,
					'default'  => '#ffb600',
					'validate' => 'color',
				),
				array(
					'id'        => 'primary_hover',
					'type'      => 'color',
					'output'    => array('.header-area .main-menu-area ul#nav li.current a,.header-area .main-menu-area ul#nav li:hover a'),
					'title'     => esc_html__('Primary Hover Color', 'cleanhit'),
					'subtitle'  => esc_html__('Pick a hover color for all hoverable text, link, menu and icon. (default: #ffb600).', 'cleanhit'),
					'transparent' => false,
					'default'  => '#ffb600', 
					'validate' => 'color',
				),
				array( 
					'id'       => 'menu_primary_border',
					'type'     => 'border',
					'title'    => esc_html__('Menu border', 'cleanhit'),
					'output'   => array('.header-area .main-menu-area ul#nav li:hover a,.header-area .main-menu-area ul#nav li.current a'),
					'desc'     => esc_html__('Pick a color for Menu border Bottom (default: #ffb600).', 'cleanhit'),
					'default'  => array(
						'border-color'  => '#ffb600', 
						'border-style'  => 'solid', 
						'border-top'    => '0', 
						'border-right'  => '0', 
						'border-bottom' => '1px', 
						'border-left'   => '0'
					)
				),				
				array( 
					'id'       => 'primary_border',
					'type'     => 'border',
					'title'    => esc_html__('Primary border', 'cleanhit'),
					'output'   => array('.single-blog .image .blog-overley:hover'),
					'desc'     => esc_html__('Pick a color for border (default: #ffb600).', 'cleanhit'),
					'default'  => array(
						'border-color'  => '#ffb600', 
						'border-style'  => 'solid', 
						'border-top'    => '1px', 
						'border-right'  => '1px', 
						'border-bottom' => '1px', 
						'border-left'   => '1px'
					)
				),
				array(         
					'id'       => 'button_color',
					'type'     => 'color',
					'output'    => array('.classes-content .button a'),
					'title'     => esc_html__('Button Color', 'cleanhit'),
					'subtitle'  => esc_html__('Pick a color for Button.', 'cleanhit'),
					'default'  => false,
					'transparent' => false,
					'validate' => 'color',
				),	
				array(         
					'id'       => 'button_background',
					'type'     => 'background',
					'output'	=> '.comments-area .comment-list li.comment article.comment .comment-info .reply a,.comments-area .comment-respond .comment-form #submit, input[type="submit"], botton',
					'title'    => __('Button and Others Background', 'cleanhit'),
					'desc'     => __('Button and others background with image and color.', 'cleanhit'),
					'default'  => array(
						'background-color' => '#ffb600',
					)
				),	
				array(         
					'id'       => 'hover_background',
					'type'     => 'background',
					'output'	=> '.comments-area .comment-respond .comment-form #submit:hover',
					'title'    => __('All Hover Background', 'cleanhit'),
					'desc'     => __('Change all hover background with image and color.', 'cleanhit'),
					'default'  => array(
						'background-color' => '#ffb600',
					)
				),			
			),
		);

		//Fonts
		$this->sections[] = array(
			'title'     => esc_html__('Fonts', 'cleanhit'),
			'desc'      => esc_html__('Fonts options', 'cleanhit'),
			'icon'      => 'el-icon-font',
			'fields'    => array(
				array(
					'id'            => 'bodyfont',
					'type'          => 'typography',
					'title'         => esc_html__('Body font', 'cleanhit'),
					'compiler'      => true,  // Use if you want to hook in your own CSS compiler
					'google'        => false,    // Disable google fonts. Won't work if you haven't defined your google api key
					'font-backup'   => false,    // Select a backup non-google font in addition to a google font
					'font-style'    => true, // Includes font-style and weight. Can use font-style or font-weight to declare
					'subsets'       => false, // Only appears if google is true and subsets not set to false
					'text-align'   => true,
					'font-size'     => true,
					'line-height'   => true,
					'word-spacing'  => true,  // Defaults to false
					'letter-spacing'=> true,  // Defaults to false
					'color'         => false,
					'preview'       => false, // Disable the previewer
					'all_styles'    => true,    // Enable all Google Font style/weight variations to be added to the page
					'output'        => array('body'), // An array of CSS selectors to apply this font style to dynamically
					'compiler'      => array('h2.site-description-compiler'), // An array of CSS selectors to apply this font style to dynamically
					'units'         => 'px', // Defaults to px
					'subtitle'      => esc_html__('Main body font.', 'cleanhit'),
					'default'       => array(
						'font-family'=> 'Open Sans',
						'color'         => '#111111',
						'google'        => true,
						'font-size'     => '14px',
						'font-weight'   => '400',
						'line-height'   => '28px'
					),
				),
				array(
					'id'            => 'headingfont',
					'type'          => 'typography',
					'title'         => esc_html__('Heading font', 'cleanhit'),
					'compiler'      => true,  // Use if you want to hook in your own CSS compiler
					'google'        => true,    // Disable google fonts. Won't work if you haven't defined your google api key
					'font-backup'   => false,    // Select a backup non-google font in addition to a google font
					'font-style'    => false, // Includes font-style and weight. Can use font-style or font-weight to declare
					'subsets'       => false, // Only appears if google is true and subsets not set to false
					'font-size'     => false,
					'line-height'   => false,
					'text-align'   => false,
					'word-spacing'  => true,  // Defaults to false
					'letter-spacing'=> true,  // Defaults to false
					'color'         => false,
					'preview'       => false, // Disable the previewer
					'all_styles'    => true,    // Enable all Google Font style/weight variations to be added to the page
					'output'        => array('h1, h2, h3, h4, h5, h6'), // An array of CSS selectors to apply this font style to dynamically
					'compiler'      => array('h2.site-description-compiler'), // An array of CSS selectors to apply this font style to dynamically
					'units'         => 'px', // Defaults to px
					'subtitle'      => esc_html__('Heading font.', 'cleanhit'),
					'default'       => array(
						'font-weight'    => '600',
						'font-family'   => 'Poppins',
						'color'        => '#222222',
						'font-weight'        => '700',
						'line-height'        => '28px',
						'margin-top'        => '0',
						'margin-bottom'        => '20px',
						'padding'        => '0px',
						'text-transform'        => 'uppercase',
						'google'        => true,
					),
				),				
			),
		);
		//Header
		$this->sections[] = array(
			'title'     => esc_html__('Header', 'cleanhit'),
			'desc'      => esc_html__('Header options', 'cleanhit'),
			'icon'      => 'el-icon-tasks',
			'fields'    => array(				
				array(
					// Loader Enable/Disable
					'id' 					=> 'cleanhit_loader' ,
					'type' 					=> 'switch' ,
					'title' 				=> esc_html__( 'Loader Enable/Disable' , 'cleanhit' ) ,
					'default' 				=> false ,
				),
				array(
					// Minicart Enable/Disable
					'id' 					=> 'cleanhit_minicart' ,
					'type' 					=> 'switch' ,
					'title' 				=> esc_html__( 'Minicart Enable/Disable' , 'cleanhit' ) ,
					'default' 				=> false ,
				),
				array(
					// Header top Enable/Disable
					'id' 					=> 'cleanhit_header_topbar' ,
					'type' 					=> 'switch' ,
					'title' 				=> esc_html__( 'Header Top Bar Enable/Disable' , 'cleanhit' ) ,
					'default' 				=> false ,
				),
				array(
					// Header Middle info Enable/Disable
					'id' 					=> 'cleanhit_header_middle' ,
					'type' 					=> 'switch' ,
					'title' 				=> esc_html__( 'Header Middle Bar Enable/Disable' , 'cleanhit' ) ,
					'default' 				=> false ,
				),				
				
				array(
					'id' =>'cleanhit_header_middle_phone',
					'type' => 'text',
					'title' => esc_html__('Phone Number', 'cleanhit'),
					'default' => '+0011-01020304'
				),
				array(
					'id' =>'cleanhit_header_middle_email',
					'type' => 'text',
					'title' => esc_html__('Email Address', 'cleanhit'),
					'default' => 'yourmail@gmail.com'
				),
				
				array(
					'id' =>'cleanhit_header_middle_location',
					'type' => 'text',
					'title' => esc_html__('Location', 'cleanhit'),
					'default' => '2/12, Green Road, USA'
				),
				array(
					'id' =>'cleanhit_header_middle_book_now',
					'type' => 'text',
					'title' => esc_html__('Blook Now URL', 'cleanhit'),
					'default' => '#'
				),
				//header style setting
				array(
					'id'       => 'cleanhit_header_type',
					'type'     => 'image_select',
					'title'    => esc_html__( 'Site Header', 'cleanhit' ),
					'subtitle' => esc_html__( 'Select which type of header you want to show', 'cleanhit' ),
					'default'     => 'header_1',
					'options' => array(
						'header_1' => array(
							'alt'   => 'Header Style One',
							'img'   => CLEANHIT_IMAGES.'/admin/header_1.png'
						), 
						'header_2' => array(
							'alt'   => 'Header Style Two',
							'img'   => CLEANHIT_IMAGES.'/admin/header_2.png'
						)	
					)
				),
			),
		);		
		//Footer
		$this->sections[] = array(
			'title'     => esc_html__('Footer', 'cleanhit'),
			'desc'      => esc_html__('Footer options', 'cleanhit'),
			'icon'      => 'el-icon-cog',
			'fields'    => array(
				array(
					'id' => 'cleanhit_footer_background',
					'type' => 'media',
					'url' => true,
					'compiler' => 'true',
					'desc' => esc_html__('Basic media uploader with disabled URL input field.', 'cleanhit'),
					'subtitle' => esc_html__('Add/Upload Footer Background Image using the WordPress native uploader', 'cleanhit'),
					'title' => esc_html__('Footer Background Image', 'cleanhit'),
					'default' => array(
						'url' => CLEANHIT_IMAGES . '/footer-bg.png',
					),
				),
				array(
					// Footer Top Area Enable/Disable
					'id' 					=> 'cleanhit_toparea_enable' ,
					'type' 					=> 'switch' ,
					'title' 				=> esc_html__( 'Footer Top Area Enable/Disable' , 'cleanhit' ) ,
					'default' 				=> false ,
				),
				array(
					// Footer Middle Area Enable/Disable
					'id' 					=> 'cleanhit_middle_enable' ,
					'type' 					=> 'switch' ,
					'title' 				=> esc_html__( 'Footer Middle Area Enable/Disable' , 'cleanhit' ) ,
					'default' 				=> false ,
				),
				array(
					'id'      	=> 'cleanhit_copyright',
					'type'    	=> 'editor',
					'title'   	=> esc_html__('Copyright information', 'cleanhit'),
					'subtitle'	=> esc_html__('HTML tags allowed: a, br, em, strong', 'cleanhit'),
					'default'	=> esc_html__('Copyright &copy; 2019' , 'cleanhit'). " <a href=".esc_url('irstheme.com', 'cleanhit')." target='_blank'>".esc_html__('IRSTheme' , 'cleanhit')."</a> ".esc_html__('Designed by IRSTheme . All Rights Reserved.' , 'cleanhit'),
					'args' 		=> array(
						'teeny'            => true,
						'textarea_rows'    => 5,
						'media_buttons'	=> false,
					)
				),
			),
		);	
		
		// Blog options
		$this->sections[] = array(
			'title'     => esc_html__('Blog', 'cleanhit'),
			'desc'      => esc_html__('Use this section to select options for blog', 'cleanhit'),
			'icon'      => 'el-icon-file',
			'fields'    => array(
				array(
					'id' => 'cleanhit_blog_bg',
					'type' => 'media',
					'url' => true,
					'compiler' => 'true',
					'desc' => esc_html__('Blog Page Header Background.', 'cleanhit'),
					'subtitle' => esc_html__('Add/Upload Blog Page Header Background', 'cleanhit'),
					'title' => esc_html__('Blog Background', 'cleanhit'),
					'default' => array(
						'url' => CLEANHIT_IMAGES . '/banner.jpg',
					),
				),
				array(
					'id'        => 'cleanhit_blog_header_text',
					'type'      => 'text',
					'title'     => esc_html__('Blog header text', 'cleanhit'),
					'default'   => esc_html__('Latest Blog', 'cleanhit')
				),
				array(
					'id'        => 'cleanhit_blog_header_details',
					'type'      => 'text',
					'title'     => esc_html__('Single Blog header text', 'cleanhit'),
					'default'   => esc_html__('Blog Details', 'cleanhit')
				),
				array(
					// Blog Full Content Enable/Disable
					'id' 					=> 'cleanhit_full_content_enable' ,
					'type' 					=> 'switch' ,
					'title' 				=> esc_html__( 'Blog Full Content Enable/Disable' , 'cleanhit' ) ,
					'default' 				=> false ,
				),

			),
		);
		


		// Error Page Options
		$this->sections[] = array(
			'title'     => esc_html__('Error Page', 'cleanhit'),
			'desc'      => esc_html__('Use this section to select options for 404', 'cleanhit'),
			'icon'      => 'el el-error',
			'fields'    => array(
				array(
					'id' => 'cleanhit_404_bg',
					'type' => 'media',
					'url' => true,
					'compiler' => 'true',
					'desc' => esc_html__('Blog Page Header Background.', 'cleanhit'),
					'subtitle' => esc_html__('Add/Upload Blog Page Header Background', 'cleanhit'),
					'title' => esc_html__('Blog Background', 'cleanhit'),
					'default' => array(
						'url' => CLEANHIT_IMAGES . '/error_bg.jpg',
					),
				),
				array(
					'id'        => 'cleanhit_error_header_text',
					'type'      => 'text',
					'title'     => esc_html__('Error header text', 'cleanhit'),
					'default'   => esc_html__('OOPS!', 'cleanhit')
				),
				array(
					'id'        => 'cleanhit_error_subheader',
					'type'      => 'text',
					'title'     => esc_html__('Error Page Sub Header text', 'cleanhit'),
					'default'   => esc_html__('404 - PAGE NOT FOUND', 'cleanhit')
				)

			),
		);



		// Custom CSS
        $this->sections[] = array(
			'title'     => esc_html__('Custom CSS', 'cleanhit'),
			'desc'      => esc_html__('Add your Custom CSS code', 'cleanhit'),
			'icon'      => 'el-icon-pencil',
			'fields'    => array(
				array(
					'id'       => 'custom_css',
					'type'     => 'ace_editor',
					'title'    => esc_html__('CSS Code', 'cleanhit'),
					'subtitle' => esc_html__('Paste your CSS code here.', 'cleanhit'),
					'mode'     => 'css',
					'theme'    => 'monokai', //chrome
					'default'  => ""
				),
			),
        );	
		
		// Less Compiler
		$this->sections[] = array(
			'title'     => esc_html__('Less Compiler', 'cleanhit'),
			'desc'      => esc_html__('Turn on this option to apply all theme options. Turn of when you have finished changing theme options and your site is ready.', 'cleanhit'),
			'icon'      => 'el-icon-wrench',
			'fields'    => array(
				array(
					'id'        => 'enable_less',
					'type'      => 'switch',
					'title'     => esc_html__('Enable Less Compiler', 'cleanhit'),
					'default'   => true,
				),
			),
		);
			
            $theme_info  = '<div class="redux-framework-section-desc">';
            $theme_info .= '<p class="redux-framework-theme-data description theme-uri">' . esc_html__('<strong>Theme URL:</strong> ', 'cleanhit') . '<a href="' . $this->theme->get('ThemeURI') . '" target="_blank">' . $this->theme->get('ThemeURI') . '</a></p>';
            $theme_info .= '<p class="redux-framework-theme-data description theme-author">' . esc_html__('<strong>Author:</strong> ', 'cleanhit') . $this->theme->get('Author') . '</p>';
            $theme_info .= '<p class="redux-framework-theme-data description theme-version">' . esc_html__('<strong>Version:</strong> ', 'cleanhit') . $this->theme->get('Version') . '</p>';
            $theme_info .= '<p class="redux-framework-theme-data description theme-description">' . $this->theme->get('Description') . '</p>';
            $tabs = $this->theme->get('Tags');
            if (!empty($tabs)) {
                $theme_info .= '<p class="redux-framework-theme-data description theme-tags">' . esc_html__('<strong>Tags:</strong> ', 'cleanhit') . implode(', ', $tabs) . '</p>';
            }
            $theme_info .= '</div>';

            $this->sections[] = array(
                'title'     => esc_html__('Import / Export', 'cleanhit'),
                'desc'      => esc_html__('Import and Export your Redux Framework settings from file, text or URL.', 'cleanhit'),
                'icon'      => 'el-icon-refresh',
                'fields'    => array(
                    array(
                        'id'            => 'opt-import-export',
                        'type'          => 'import_export',
                        'title'         => 'Import Export',
                        'subtitle'      => 'Save and restore your Redux options',
                        'full_width'    => false,
                    ),
                ),
            );

            $this->sections[] = array(
                'icon'      => 'el-icon-info-sign',
                'title'     => esc_html__('Theme Information', 'cleanhit'),
				'icon'      => 'el-icon-website',
                'fields'    => array(
                    array(
                        'id'        => 'opt-raw-info',
                        'type'      => 'raw',
                        'content'   => $item_info,
                    )
                ),
            );
        }

        public function setHelpTabs() {

            // Custom page help tabs, displayed using the help API. Tabs are shown in order of definition.
            $this->args['help_tabs'][] = array(
                'id'        => 'redux-help-tab-1',
                'title'     => esc_html__('Theme Information 1', 'cleanhit'),
                'content'   => esc_html__('<p>This is the tab content, HTML is allowed.</p>', 'cleanhit')
            );

            $this->args['help_tabs'][] = array(
                'id'        => 'redux-help-tab-2',
                'title'     => esc_html__('Theme Information 2', 'cleanhit'),
                'content'   => esc_html__('<p>This is the tab content, HTML is allowed.</p>', 'cleanhit')
            );

            // Set the help sidebar
            $this->args['help_sidebar'] = esc_html__('<p>This is the sidebar content, HTML is allowed.</p>', 'cleanhit');
        }

        /*

          All the possible arguments for Redux.
          For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments

        */
        public function setArguments() {

            $theme = wp_get_theme(); // For use with some settings. Not necessary.

            $this->args = array(
                // TYPICAL -> Change these values as you need/desire
                'opt_name'          => 'cleanhit_opt',            // This is where your data is stored in the database and also becomes your global variable name.
                'display_name'      => $theme->get('Name'),     // Name that appears at the top of your panel
                'display_version'   => $theme->get('Version'),  // Version that appears at the top of your panel
                'menu_type'         => 'menu',                  //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
                'allow_sub_menu'    => true,                    // Show the sections below the admin menu item or not
                'menu_title'        => esc_html__('Theme Options', 'cleanhit'),
                'page_title'        => esc_html__('Theme Options', 'cleanhit'),
                
                // You will need to generate a Google API key to use this feature.
                // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
                'google_api_key' => '', // Must be defined to add google fonts to the typography module
                
                'async_typography'  => true,                    // Use a asynchronous font on the front end or font string
                //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
                'admin_bar'         => true,                    // Show the panel pages on the admin bar
                'global_variable'   => '',                      // Set a different name for your global variable other than the opt_name
                'dev_mode'          => false,                    // Show the time the page took to load, etc
                'customizer'        => true,                    // Enable basic customizer support
                //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
                //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

                // OPTIONAL -> Give you extra features
                'page_priority'     => null,                    // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
                'page_parent'       => 'themes.php',            // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
                'page_permissions'  => 'manage_options',        // Permissions needed to access the options panel.
                'menu_icon'         => '',                      // Specify a custom URL to an icon
                'last_tab'          => '',                      // Force your panel to always open to a specific tab (by id)
                'page_icon'         => 'icon-themes',           // Icon displayed in the admin panel next to your menu_title
                'page_slug'         => '_options',              // Page slug used to denote the panel
                'save_defaults'     => true,                    // On load save the defaults to DB before user clicks save or not
                'default_show'      => false,                   // If true, shows the default value next to each field that is not the default value.
                'default_mark'      => '',                      // What to print by the field's title if the value shown is default. Suggested: *
                'show_import_export' => true,                   // Shows the Import/Export panel when not used as a field.
                
                // CAREFUL -> These options are for advanced use only
                'transient_time'    => 60 * MINUTE_IN_SECONDS,
                'output'            => true,                    // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
                'output_tag'        => true,                    // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
                // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.
                
                // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
                'database'              => '', // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
                'system_info'           => false, // REMOVE

                // HINTS
                'hints' => array(
                    'icon'          => 'icon-question-sign',
                    'icon_position' => 'right',
                    'icon_color'    => 'lightgray',
                    'icon_size'     => 'normal',
                    'tip_style'     => array(
                        'color'         => 'light',
                        'shadow'        => true,
                        'rounded'       => false,
                        'style'         => '',
                    ),
                    'tip_position'  => array(
                        'my' => 'top left',
                        'at' => 'bottom right',
                    ),
                    'tip_effect'    => array(
                        'show'          => array(
                            'effect'        => 'slide',
                            'duration'      => '500',
                            'event'         => 'mouseover',
                        ),
                        'hide'      => array(
                            'effect'    => 'slide',
                            'duration'  => '500',
                            'event'     => 'click mouseleave',
                        ),
                    ),
                )
            );


            // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
            $this->args['share_icons'][] = array(
                'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
                'title' => 'Visit us on GitHub',
                'icon'  => 'el-icon-github'
                //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
            );
            $this->args['share_icons'][] = array(
                'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
                'title' => 'Like us on Facebook',
                'icon'  => 'el-icon-facebook'
            );
            $this->args['share_icons'][] = array(
                'url'   => 'http://twitter.com/reduxframework',
                'title' => 'Follow us on Twitter',
                'icon'  => 'el-icon-twitter'
            );
            $this->args['share_icons'][] = array(
                'url'   => 'http://www.linkedin.com/company/redux-framework',
                'title' => 'Find us on LinkedIn',
                'icon'  => 'el-icon-linkedin'
            );

            // Panel Intro text -> before the form
            if (!isset($this->args['global_variable']) || $this->args['global_variable'] !== false) {
                if (!empty($this->args['global_variable'])) {
                    $v = $this->args['global_variable'];
                } else {
                    $v = str_replace('-', '_', $this->args['opt_name']);
                }
            } else {}
        }
    }
    global $reduxConfig;
    $reduxConfig = new Cleanhit_Theme_Config();
}

/*
  Custom function for the callback referenced above
 */
if (!function_exists('redux_my_custom_field')):
    function redux_my_custom_field($field, $value) {
        print_r($field);
        echo '<br/>';
        print_r($value);
    }
endif;

/*
  Custom function for the callback validation referenced above
*/
if (!function_exists('redux_validate_callback_function')):
    function redux_validate_callback_function($field, $value, $existing_value) {
        $error = false;
        $value = 'just testing';
        $return['value'] = $value;
        if ($error == true) {
            $return['error'] = $field;
        }
        return $return;
    }
endif;
