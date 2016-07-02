<?php
  
// #################################################
// Reg. js / css
// #################################################

function venture_lite_customizer_scripts() {
    wp_register_script( 'venture_lite_customizer_scripts', get_template_directory_uri() . '/assets/js/customizer.js', array("jquery"), '', true  );
    wp_enqueue_script( 'venture_lite_customizer_scripts' );
}
add_action( 'customize_controls_enqueue_scripts', 'venture_lite_customizer_scripts' );

function venture_lite_customizer_styles() { ?>
	<style type="text/css">
	    .button-venture-lite-secondary{width: 80%!important;margin: 5px auto 5px auto!important; display: block!important; text-align: center!important;margin-top:15px!important;margin-bottom:15px!important;}
        .button-nimbus{background: #e92c6a!important; border-color:#e92c6a!important; -webkit-box-shadow: 0 1px 0 #e92c6a!important; box-shadow: 0 1px 0 #e92c6a!important; color: #fff!important; text-decoration: none!important; text-shadow: 0 -1px 1px #e92c6a,1px 0 1px #e92c6a,0 1px 1px #e92c6a,-1px 0 1px #e92c6a!important;width: 80%!important; margin: 5px auto 5px auto!important; display: block!important; text-align: center!important;margin-top:15px!important;margin-bottom:15px!important;}
        .venture-lite-hide{display:none!important;}
        #accordion-section-pro_features>h3.accordion-section-title:before,#accordion-section-slideshow-options>h3.accordion-section-title:before { content: "Pro"!important; position: relative!important; top: -1px!important; margin-left: 0px!important; padding: 3px 6px !important; line-height: 1.5 !important; font-size: 9px !important; color: #ffffff !important; background-color: #e92c6a!important; letter-spacing: 1px!important; text-transform: uppercase!important; -webkit-font-smoothing: subpixel-antialiased !important; }
	</style>
<?php }
add_action( 'customize_controls_print_styles', 'venture_lite_customizer_styles', 20 );


// #################################################
// Kirki
// #################################################


Kirki::add_config( 'venture-lite-config', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );


Kirki::add_section( 'pro_features', array(
    'title'          => __( 'Pro Features', 'venture-lite' ),
    'description'    => '',
    'panel'          => '', // Not typically needed.
    'priority'       => 1,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );


Kirki::add_field( 'venture-lite-config', array(
	'type'        => 'custom',
	'settings'    => 'venture_pro_options',
	'label'       => '',
	'section'     => 'pro_features',
	'default'     => '<h2>Venture Pro Benifits</h2>
                <p>A few of the many reasons to check out Venture Pro:</p>
                <ol>
                    <li><strong>Unlimited Support!</strong></li>
                    <li><strong>Drag & Drop Frontpage Row Ordering</strong></li>
                    <li><strong>Parallax Background Rows</strong></li>
                    <li><strong>Frontpage Slideshow</strong></li>
                    <li><strong>Image Logo Support</strong></li>
                    <li><strong>Color & Design Options</strong></li>
                    <li><strong>Typography Options</strong></li>
                    <li><strong>Contact Form Frontpage Row</strong></li>
                    <li><strong>Pro Theme Updates</strong></li>
                </ol>
                <a href="http://www.nimbusthemes.com/wordpress-themes/venture/" class="button button-primary button-nimbus" target="_blank">Get Venture Pro</a>',
	'priority'    => 10,
) );


Kirki::add_section( 'social', array(
    'title'          => __( 'Header Social Media', 'venture-lite' ),
    'description'    => '',
    'panel'          => '', 
    'priority'       => 1,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

Kirki::add_field( 'venture-lite-config', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'social-toggle',
	'label'       => __( 'Social Icons Status', 'venture-lite' ),
	'section'     => 'social',
	'default'     => '2',
	'priority'    => 1,
	'choices'     => array(
		'1'   => esc_attr__( 'Show', 'venture-lite' ),
		'2' => esc_attr__( 'Demo', 'venture-lite' ),
		'3'  => esc_attr__( 'Hide', 'venture-lite' ),
	),
) );

Kirki::add_field( 'venture-lite-config', array(
	'settings' => 'nimbus_facebook_url',
	'label'    => __( 'Facebook URL', 'venture-lite' ),
	'section'  => 'social',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
) );

Kirki::add_field( 'venture-lite-config', array(
	'settings' => 'nimbus_linkedin_url',
	'label'    => __( 'LinkedIn URL', 'venture-lite' ),
	'section'  => 'social',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
) );

Kirki::add_field( 'venture-lite-config', array(
	'settings' => 'nimbus_twitter_url',
	'label'    => __( 'Twitter URL', 'venture-lite' ),
	'section'  => 'social',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
) );

Kirki::add_field( 'venture-lite-config', array(
	'settings' => 'nimbus_youtube_url',
	'label'    => __( 'YouTube URL', 'venture-lite' ),
	'section'  => 'social',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
) );

Kirki::add_field( 'venture-lite-config', array(
	'settings' => 'nimbus_google_plus_url',
	'label'    => __( 'Google+ URL', 'venture-lite' ),
	'section'  => 'social',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
) );

Kirki::add_field( 'venture-lite-config', array(
	'settings' => 'nimbus_vimeo_url',
	'label'    => __( 'Vimeo URL', 'venture-lite' ),
	'section'  => 'social',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
) );

Kirki::add_field( 'venture-lite-config', array(
	'settings' => 'nimbus_flickr_url',
	'label'    => __( 'Flickr URL', 'venture-lite' ),
	'section'  => 'social',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
) );

Kirki::add_field( 'venture-lite-config', array(
	'settings' => 'nimbus_wpcom_url',
	'label'    => __( 'WordPress.com URL', 'venture-lite' ),
	'section'  => 'social',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
) );

Kirki::add_field( 'venture-lite-config', array(
	'settings' => 'nimbus_pinterest_url',
	'label'    => __( 'Pinterest URL', 'venture-lite' ),
	'section'  => 'social',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
) );

Kirki::add_field( 'venture-lite-config', array(
	'settings' => 'nimbus_instagram_url',
	'label'    => __( 'Instagram URL', 'venture-lite' ),
	'section'  => 'social',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
) );

Kirki::add_field( 'venture-lite-config', array(
	'settings' => 'nimbus_tumblr_url',
	'label'    => __( 'Tumblr URL', 'venture-lite' ),
	'section'  => 'social',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
) );

Kirki::add_field( 'venture-lite-config', array(
	'settings' => 'nimbus_mail_url',
	'label'    => __( 'Email Address', 'venture-lite' ),
	'section'  => 'social',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
) );


Kirki::add_field( 'venture-lite-config', array(
	'type'        => 'checkbox',
	'settings'    => 'nimbus_hide_rss_icon',
	'label'       => __( 'Hide RSS Icon', 'venture-lite' ),
	'section'     => 'social',
	'default'     => '0',
	'priority'    => 10,
) );



Kirki::add_panel( 'frontpage_banners', array(
    'priority'    => 2,
    'title'       => __( 'Frontpage Banner Section', 'venture-lite' ),
    'description' => '',
) );

Kirki::add_section( 'banner_select', array(
    'title'          => __( 'Banner/Slideshow Select', 'venture-lite' ),
    'description'    => '',
    'panel'          => 'frontpage_banners', 
    'priority'       => 1,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', 
) );

Kirki::add_field( 'venture-lite-config', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'fp-banner-toggle',
	'label'       => __( 'Frontpage Banner Status', 'venture-lite' ),
	'section'     => 'banner_select',
	'default'     => '2',
	'priority'    => 1,
	'choices'     => array(
		'1'   => esc_attr__( 'Banner', 'venture-lite' ),
		'2' => esc_attr__( 'Demo', 'venture-lite' ),
		'3'  => esc_attr__( 'Slideshow', 'venture-lite' ),
	),
) );


Kirki::add_section( 'banner_options', array(
    'title'          => __( 'Banner Options', 'venture-lite' ),
    'description'    => '',
    'panel'          => 'frontpage_banners',
    'priority'       => 5,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

Kirki::add_field( 'venture-lite-config', array(
	'settings' => 'fp-banner-slug',
	'label'    => __( 'Navigation Menu ID', 'venture-lite' ),
	'section'  => 'banner_options',
	'type'     => 'text',
	'priority' => 1,
	'default'  => 'home',
	'description'   => __( 'The frontpage section IDs (what shows up in the hover state and the address bar when clicked) have already been set to a default show in this field. If you would like to change the ID so that a different term comes up in the slug for that section (ie. http://example.com/#top instead of /#home), then change the term below for the corresponding section. You will also want to add the custom menu items in the Menus section of your dashboard (click "Links," then add the entire URL, such as http://example.com/#top). IMPORTANT: You must also add this term to the title field in the menu editor. If you do not see this field you may have to activate it by selecting the Screen Options tab in the top right of the page and then checking the Title Attribute box.', 'venture-lite' ),
) );

Kirki::add_field( 'venture-lite-config', array(
	'type'        => 'custom',
	'settings'    => 'fp-banner-background-note',
	'label'       => 'Banner Background Image',
	'section'     => 'banner_options',
	'default'     => __( 'You can populate the banner background as well as any transparent containers throughout your website via the WordPress Core - Background Image setting. Look for this setting in the left sidebar or on the customizer.', 'venture-lite' ),
	'priority'    => 10,
) );


Kirki::add_field( 'venture-lite-config', array(
	'settings' => 'fp-banner-title',
	'label'    => __( 'Banner - Main Title', 'venture-lite' ),
	'section'  => 'banner_options',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'description'   => __( 'This is the big text in the banner. Leave blank to hide.', 'venture-lite' ),
) );

Kirki::add_field( 'venture-lite-config', array(
	'settings' => 'fp-banner-sub-title',
	'label'    => __( 'Banner - Sub Title', 'venture-lite' ),
	'section'  => 'banner_options',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'description'   => __( 'This is the smaller text in the banner. Leave blank to hide.', 'venture-lite' ),
) );

Kirki::add_field( 'venture-lite-config', array(
	'settings' => 'fp-banner-button-text',
	'label'    => __( 'Banner - Button Text', 'venture-lite' ),
	'section'  => 'banner_options',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'description'   => __( 'This is the button in the banner. Leave blank to hide.', 'venture-lite' ),
) );

Kirki::add_field( 'venture-lite-config', array(
	'settings' => 'fp-banner-button-url',
	'label'    => __( 'Banner - Button Destination URL', 'venture-lite' ),
	'section'  => 'banner_options',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'description'   => __( 'This is the button link destination in the banner.', 'venture-lite' ),
) );

Kirki::add_section( 'slideshow-options', array(
    'title'          => __( 'Slideshow Options', 'venture-lite' ),
    'description'    => '',
    'panel'          => 'frontpage_banners', // Not typically needed.
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );


Kirki::add_field( 'venture-lite-config', array(
	'type'        => 'custom',
	'settings'    => 'slideshow-info',
	'label'       => 'Upgrade to Pro',
	'section'     => 'slideshow-options',
	'default'     => __( 'With the Pro version of this theme, you will have access to powerful text slideshow options.', 'venture-lite' ) . '<a href="http://www.nimbusthemes.com/wordpress-themes/venture/" class="button button-primary button-nimbus" target="_blank">Get Venture Pro</a>',
	'priority'    => 10,
) );

Kirki::add_section( 'fp-featured', array(
    'title'          => __( 'Frontpage Featured Section', 'venture-lite' ),
    'description'    => '',
    'panel'          => '', 
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

Kirki::add_field( 'venture-lite-config', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'fp-featured-toggle',
	'label'       => __( 'Frontpage Featured Status', 'venture-lite' ),
	'section'     => 'fp-featured',
	'default'     => '2',
	'priority'    => 1,
	'choices'     => array(
		'1'   => esc_attr__( 'Show', 'venture-lite' ),
		'2' => esc_attr__( 'Demo', 'venture-lite' ),
		'3'  => esc_attr__( 'Hide', 'venture-lite' ),
	),
) );

Kirki::add_field( 'venture-lite-config', array(
	'settings' => 'fp-featured-title',
	'label'    => __( 'Featured - Main Title', 'venture-lite' ),
	'section'  => 'fp-featured',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'description'   => __( 'This is the big text in the featured section. Leave blank to hide.', 'venture-lite' ),
) );

Kirki::add_field( 'venture-lite-config', array(
	'settings' => 'fp-featured-sub-title',
	'label'    => __( 'Featured - Sub Title', 'venture-lite' ),
	'section'  => 'fp-featured',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'description'   => __( 'This is the smaller text in the featured section. Leave blank to hide.', 'venture-lite' ),
) );

Kirki::add_field( 'venture-lite-config', array(
	'type'        => 'custom',
	'settings'    => 'featured-widget-note',
	'label'       => 'Populate Featured Content',
	'section'     => 'fp-featured',
	'default'     => __( 'To populate the featured content section, you will need to add featured content widgets to the Frontpage Featured widget area. Go to the Widgets section under Apperance in the left sidebar.', 'venture-lite' ),
	'priority'    => 10,
) );

Kirki::add_field( 'venture-lite-config', array(
	'settings' => 'fp-featured-slug',
	'label'    => __( 'Navigation Menu ID', 'venture-lite' ),
	'section'  => 'fp-featured',
	'type'     => 'text',
	'priority' => 10,
	'default'  => 'featured',
	'description'   => __( 'The frontpage section IDs (what shows up in the hover state and the address bar when clicked) have already been set to a default show in this field. If you would like to change the ID so that a different term comes up in the slug for that section (ie. http://example.com/#top instead of /#home), then change the term below for the corresponding section. You will also want to add the custom menu items in the Menus section of your dashboard (click "Links," then add the entire URL, such as http://example.com/#top). IMPORTANT: You must also add this term to the title field in the menu editor. If you do not see this field you may have to activate it by selecting the Screen Options tab in the top right of the page and then checking the Title Attribute box.', 'venture-lite' ),
) );

Kirki::add_section( 'fp-action1', array(
    'title'          => __( 'Frontpage Action Row #1', 'venture-lite' ),
    'description'    => '',
    'panel'          => '', 
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

Kirki::add_field( 'venture-lite-config', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'fp-action1-toggle',
	'label'       => __( 'Frontpage Action Row Status', 'venture-lite' ),
	'section'     => 'fp-action1',
	'default'     => '2',
	'priority'    => 1,
	'choices'     => array(
		'1'   => esc_attr__( 'Show', 'venture-lite' ),
		'2' => esc_attr__( 'Demo', 'venture-lite' ),
		'3'  => esc_attr__( 'Hide', 'venture-lite' ),
	),
) );

Kirki::add_field( 'venture-lite-config', array(
	'settings' => 'fp-action1-title',
	'label'    => __( 'Action Row #1 - Main Title', 'venture-lite' ),
	'section'  => 'fp-action1',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'description'   => __( 'This is the big text in the Action Row #1 section. Leave blank to hide.', 'venture-lite' ),
) );

Kirki::add_field( 'venture-lite-config', array(
	'settings' => 'fp-action1-sub-title',
	'label'    => __( 'Action Row #1 - Sub Title', 'venture-lite' ),
	'section'  => 'fp-action1',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'description'   => __( 'This is the smaller text in the Action Row #1 section. Leave blank to hide.', 'venture-lite' ),
) );

Kirki::add_field( 'venture-lite-config', array(
	'settings' => 'fp-action1-button-text',
	'label'    => __( 'Action Row #1 - Button Text', 'venture-lite' ),
	'section'  => 'fp-action1',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'description'   => __( 'This is the text in the button. Leave blank to hide.', 'venture-lite' ),
) );

Kirki::add_field( 'venture-lite-config', array(
	'settings' => 'fp-action1-button-url',
	'label'    => __( 'Action Row #1 - Button URL', 'venture-lite' ),
	'section'  => 'fp-action1',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'description'   => __( 'This is link destination for the button. Leave blank to hide.', 'venture-lite' ),
) );

Kirki::add_field( 'venture-lite-config', array(
	'settings' => 'fp-action1-slug',
	'label'    => __( 'Navigation Menu ID', 'venture-lite' ),
	'section'  => 'fp-action1',
	'type'     => 'text',
	'priority' => 10,
	'default'  => 'action1',
	'description'   => __( 'The frontpage section IDs (what shows up in the hover state and the address bar when clicked) have already been set to a default show in this field. If you would like to change the ID so that a different term comes up in the slug for that section (ie. http://example.com/#top instead of /#home), then change the term below for the corresponding section. You will also want to add the custom menu items in the Menus section of your dashboard (click "Links," then add the entire URL, such as http://example.com/#top). IMPORTANT: You must also add this term to the title field in the menu editor. If you do not see this field you may have to activate it by selecting the Screen Options tab in the top right of the page and then checking the Title Attribute box.', 'venture-lite' ),
) );





Kirki::add_section( 'fp-about', array(
    'title'          => __( 'Frontpage About Section', 'venture-lite' ),
    'description'    => '',
    'panel'          => '', 
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

Kirki::add_field( 'venture-lite-config', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'fp-about-toggle',
	'label'       => __( 'About Status', 'venture-lite' ),
	'section'     => 'fp-about',
	'default'     => '2',
	'priority'    => 1,
	'choices'     => array(
		'1'   => esc_attr__( 'Show', 'venture-lite' ),
		'2' => esc_attr__( 'Demo', 'venture-lite' ),
		'3'  => esc_attr__( 'Hide', 'venture-lite' ),
	),
) );

Kirki::add_field( 'venture-lite-config', array(
	'settings' => 'fp-about-title',
	'label'    => __( 'About - Main Title', 'venture-lite' ),
	'section'  => 'fp-about',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'description'   => __( 'This is the big text in the about section. Leave blank to hide.', 'venture-lite' ),
) );

Kirki::add_field( 'venture-lite-config', array(
	'settings' => 'fp-about-sub-title',
	'label'    => __( 'About - Sub Title', 'venture-lite' ),
	'section'  => 'fp-about',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'description'   => __( 'This is the smaller text in the about section. Leave blank to hide.', 'venture-lite' ),
) );

Kirki::add_field( 'venture-lite-config', array(
	'settings' => 'fp-about-description',
	'label'    => __( 'About - Description', 'venture-lite' ),
	'section'  => 'fp-about',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'description'   => __( 'This is the smallest text in the about section. Leave blank to hide.', 'venture-lite' ),
) );

Kirki::add_field( 'venture-lite-config', array(
	'type'        => 'custom',
	'settings'    => 'about-widget-note',
	'label'       => 'Populate About Content',
	'section'     => 'fp-about',
	'default'     => __( 'To populate the About content section, you will need to add About content widgets to the Frontpage About widget areas. Go to the Widgets section under Apperance in the left sidebar.', 'venture-lite' ),
	'priority'    => 10,
) );

Kirki::add_field( 'venture-lite-config', array(
	'settings' => 'fp-about-slug',
	'label'    => __( 'Navigation Menu ID', 'venture-lite' ),
	'section'  => 'fp-about',
	'type'     => 'text',
	'priority' => 10,
	'default'  => 'about',
	'description'   => __( 'The frontpage section IDs (what shows up in the hover state and the address bar when clicked) have already been set to a default show in this field. If you would like to change the ID so that a different term comes up in the slug for that section (ie. http://example.com/#top instead of /#home), then change the term below for the corresponding section. You will also want to add the custom menu items in the Menus section of your dashboard (click "Links," then add the entire URL, such as http://example.com/#top). IMPORTANT: You must also add this term to the title field in the menu editor. If you do not see this field you may have to activate it by selecting the Screen Options tab in the top right of the page and then checking the Title Attribute box.', 'venture-lite' ),
) );



Kirki::add_section( 'fp-action2', array(
    'title'          => __( 'Frontpage Action Row #2', 'venture-lite' ),
    'description'    => '',
    'panel'          => '', 
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

Kirki::add_field( 'venture-lite-config', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'fp-action2-toggle',
	'label'       => __( 'Frontpage Action Row #2 Status', 'venture-lite' ),
	'section'     => 'fp-action2',
	'default'     => '2',
	'priority'    => 1,
	'choices'     => array(
		'1'   => esc_attr__( 'Show', 'venture-lite' ),
		'2' => esc_attr__( 'Demo', 'venture-lite' ),
		'3'  => esc_attr__( 'Hide', 'venture-lite' ),
	),
) );

Kirki::add_field( 'venture-lite-config', array(
	'settings' => 'fp-action2-title',
	'label'    => __( 'Action Row #2 - Main Title', 'venture-lite' ),
	'section'  => 'fp-action2',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'description'   => __( 'This is the big text in the Action Row #2 section. Leave blank to hide.', 'venture-lite' ),
) );

Kirki::add_field( 'venture-lite-config', array(
	'settings' => 'fp-action2-button-text',
	'label'    => __( 'Action Row #2 - Button Text', 'venture-lite' ),
	'section'  => 'fp-action2',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'description'   => __( 'This is the text in the button. Leave blank to hide.', 'venture-lite' ),
) );

Kirki::add_field( 'venture-lite-config', array(
	'settings' => 'fp-action2-button-url',
	'label'    => __( 'Action Row #2 - Button URL', 'venture-lite' ),
	'section'  => 'fp-action2',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'description'   => __( 'This is link destination for the button. Leave blank to hide.', 'venture-lite' ),
) );

Kirki::add_field( 'venture-lite-config', array(
	'settings' => 'fp-action2-slug',
	'label'    => __( 'Navigation Menu ID', 'venture-lite' ),
	'section'  => 'fp-action2',
	'type'     => 'text',
	'priority' => 10,
	'default'  => 'action2',
	'description'   => __( 'The frontpage section IDs (what shows up in the hover state and the address bar when clicked) have already been set to a default show in this field. If you would like to change the ID so that a different term comes up in the slug for that section (ie. http://example.com/#top instead of /#home), then change the term below for the corresponding section. You will also want to add the custom menu items in the Menus section of your dashboard (click "Links," then add the entire URL, such as http://example.com/#top). IMPORTANT: You must also add this term to the title field in the menu editor. If you do not see this field you may have to activate it by selecting the Screen Options tab in the top right of the page and then checking the Title Attribute box.', 'venture-lite' ),
) );





Kirki::add_section( 'fp-team', array(
    'title'          => __( 'Frontpage Team Section', 'venture-lite' ),
    'description'    => '',
    'panel'          => '', 
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

Kirki::add_field( 'venture-lite-config', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'fp-team-toggle',
	'label'       => __( 'Team Status', 'venture-lite' ),
	'section'     => 'fp-team',
	'default'     => '2',
	'priority'    => 1,
	'choices'     => array(
		'1'   => esc_attr__( 'Show', 'venture-lite' ),
		'2' => esc_attr__( 'Demo', 'venture-lite' ),
		'3'  => esc_attr__( 'Hide', 'venture-lite' ),
	),
) );

Kirki::add_field( 'venture-lite-config', array(
	'settings' => 'fp-team-title',
	'label'    => __( 'Team - Main Title', 'venture-lite' ),
	'section'  => 'fp-team',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'description'   => __( 'This is the big text in the team section. Leave blank to hide.', 'venture-lite' ),
) );

Kirki::add_field( 'venture-lite-config', array(
	'settings' => 'fp-team-sub-title',
	'label'    => __( 'Team - Sub Title', 'venture-lite' ),
	'section'  => 'fp-team',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'description'   => __( 'This is the smaller text in the team section. Leave blank to hide.', 'venture-lite' ),
) );

Kirki::add_field( 'venture-lite-config', array(
	'type'        => 'custom',
	'settings'    => 'team-widget-note',
	'label'       => 'Populate Team Content',
	'section'     => 'fp-team',
	'default'     => __( 'To populate the Team content section, you will need to add About content widgets to the Frontpage Team widget areas. Go to the Widgets section under Apperance in the left sidebar.', 'venture-lite' ),
	'priority'    => 10,
) );

Kirki::add_field( 'venture-lite-config', array(
	'settings' => 'fp-team-slug',
	'label'    => __( 'Navigation Menu ID', 'venture-lite' ),
	'section'  => 'fp-team',
	'type'     => 'text',
	'priority' => 10,
	'default'  => 'team',
	'description'   => __( 'The frontpage section IDs (what shows up in the hover state and the address bar when clicked) have already been set to a default show in this field. If you would like to change the ID so that a different term comes up in the slug for that section (ie. http://example.com/#top instead of /#home), then change the term below for the corresponding section. You will also want to add the custom menu items in the Menus section of your dashboard (click "Links," then add the entire URL, such as http://example.com/#top). IMPORTANT: You must also add this term to the title field in the menu editor. If you do not see this field you may have to activate it by selecting the Screen Options tab in the top right of the page and then checking the Title Attribute box.', 'venture-lite' ),
) );




Kirki::add_section( 'fp-social', array(
    'title'          => __( 'Frontpage Social Media Section', 'venture-lite' ),
    'description'    => '',
    'panel'          => '', 
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

Kirki::add_field( 'venture-lite-config', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'fp-social-toggle',
	'label'       => __( 'Social Status', 'venture-lite' ),
	'section'     => 'fp-social',
	'default'     => '2',
	'priority'    => 1,
	'choices'     => array(
		'1'   => esc_attr__( 'Show', 'venture-lite' ),
		'2' => esc_attr__( 'Demo', 'venture-lite' ),
		'3'  => esc_attr__( 'Hide', 'venture-lite' ),
	),
) );

Kirki::add_field( 'venture-lite-config', array(
	'settings' => 'fp-social-title',
	'label'    => __( 'Social - Main Title', 'venture-lite' ),
	'section'  => 'fp-social',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'description'   => __( 'This is the big text in the social section. Leave blank to hide.', 'venture-lite' ),
) );

Kirki::add_field( 'venture-lite-config', array(
	'settings' => 'fp-social-sub-title',
	'label'    => __( 'Social - Sub Title', 'venture-lite' ),
	'section'  => 'fp-social',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'description'   => __( 'This is the smaller text in the social section. Leave blank to hide.', 'venture-lite' ),
) );

Kirki::add_field( 'venture-lite-config', array(
	'type'        => 'custom',
	'settings'    => 'social-widget-note',
	'label'       => __( 'Populate Social Meida Section Content', 'venture-lite' ),
	'section'     => 'fp-social',
	'default'     => __( 'To populate the Social Media section, you will need to add Social Meida widgets to the Social Media widget areas.  Go to the Widgets section under Apperance in the left sidebar.', 'venture-lite' ),
	'priority'    => 10,
) );

Kirki::add_field( 'venture-lite-config', array(
	'settings' => 'fp-social-slug',
	'label'    => __( 'Navigation Menu ID', 'venture-lite' ),
	'section'  => 'fp-social',
	'type'     => 'text',
	'priority' => 10,
	'default'  => 'social',
	'description'   => __( 'The frontpage section IDs (what shows up in the hover state and the address bar when clicked) have already been set to a default show in this field. If you would like to change the ID so that a different term comes up in the slug for that section (ie. http://example.com/#top instead of /#home), then change the term below for the corresponding section. You will also want to add the custom menu items in the Menus section of your dashboard (click "Links," then add the entire URL, such as http://example.com/#top). IMPORTANT: You must also add this term to the title field in the menu editor. If you do not see this field you may have to activate it by selecting the Screen Options tab in the top right of the page and then checking the Title Attribute box.', 'venture-lite' ),
) );


Kirki::add_section( 'fp-test', array(
    'title'          => __( 'Frontpage Testimonial Section', 'venture-lite' ),
    'description'    => '',
    'panel'          => '', 
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

Kirki::add_field( 'venture-lite-config', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'fp-test-toggle',
	'label'       => __( 'Testimonial Status', 'venture-lite' ),
	'section'     => 'fp-test',
	'default'     => '2',
	'priority'    => 1,
	'choices'     => array(
		'1'   => esc_attr__( 'Show', 'venture-lite' ),
		'2' => esc_attr__( 'Demo', 'venture-lite' ),
		'3'  => esc_attr__( 'Hide', 'venture-lite' ),
	),
) );

Kirki::add_field( 'venture-lite-config', array(
	'type'        => 'image',
	'settings'    => 'fp-test-image',
	'label'       => __( 'Testimonial Section Image', 'venture-lite' ),
	'description' => __( 'Upload an image of the individual being quoted in the testimonial. Ideally, this image should be 320x302px.', 'venture-lite' ),
	'help'        => '',
	'section'     => 'fp-test',
	'default'     => '',
	'priority'    => 10,
) );

Kirki::add_field( 'venture-lite-config', array(
	'settings' => 'fp-test-title',
	'label'    => __( 'Testimonial - Main Title', 'venture-lite' ),
	'section'  => 'fp-test',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'description'   => __( 'This is the big text in the testimonial section. Leave blank to hide.', 'venture-lite' ),
) );

Kirki::add_field( 'venture-lite-config', array(
	'type'     => 'textarea',
	'settings' => 'fp-test-description',
	'label'    => __( 'Testimonial', 'venture-lite' ),
	'section'  => 'fp-test',
	'default'  => '',
	'priority' => 10,
) );

Kirki::add_field( 'venture-lite-config', array(
	'settings' => 'fp-test-tag',
	'label'    => __( 'Testimonial - Name', 'venture-lite' ),
	'section'  => 'fp-test',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'description'   => __( 'This is the name under the testimonial section. Leave blank to hide.', 'venture-lite' ),
) );

Kirki::add_field( 'venture-lite-config', array(
	'settings' => 'fp-test-tag-url',
	'label'    => __( 'Testimonial - Website Link', 'venture-lite' ),
	'section'  => 'fp-test',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'description'   => __( 'This is the link applied to the name above.', 'venture-lite' ),
) );

Kirki::add_field( 'venture-lite-config', array(
	'settings' => 'fp-test-slug',
	'label'    => __( 'Navigation Menu ID', 'venture-lite' ),
	'section'  => 'fp-test',
	'type'     => 'text',
	'priority' => 10,
	'default'  => 'test',
	'description'   => __( 'The frontpage section IDs (what shows up in the hover state and the address bar when clicked) have already been set to a default show in this field. If you would like to change the ID so that a different term comes up in the slug for that section (ie. http://example.com/#top instead of /#home), then change the term below for the corresponding section. You will also want to add the custom menu items in the Menus section of your dashboard (click "Links," then add the entire URL, such as http://example.com/#top). IMPORTANT: You must also add this term to the title field in the menu editor. If you do not see this field you may have to activate it by selecting the Screen Options tab in the top right of the page and then checking the Title Attribute box.', 'venture-lite' ),
) );





Kirki::add_section( 'fp-news', array(
    'title'          => __( 'Frontpage News Section', 'venture-lite' ),
    'description'    => '',
    'panel'          => '', 
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

Kirki::add_field( 'venture-lite-config', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'fp-news-toggle',
	'label'       => __( 'News Row Status', 'venture-lite' ),
	'section'     => 'fp-news',
	'default'     => '2',
	'priority'    => 1,
	'choices'     => array(
		'1'   => esc_attr__( 'Show', 'venture-lite' ),
		'2'  => esc_attr__( 'Hide', 'venture-lite' ),
	),
) );

Kirki::add_field( 'venture-lite-config', array(
	'type'        => 'custom',
	'settings'    => 'news-note',
	'label'       => __( 'About News Section', 'venture-lite' ),
	'section'     => 'fp-news',
	'default'     => __( 'You can use this section as either a feed that displays 4 of your latest blog posts, or as your blog page itself (the # of posts specified in Settings > Reading > #2). If you want the Blog to be a separate page completely (and only show the first 4 posts on the frontpage feed), go to Settings > Reading and make sure Frontpage displays... A static page... and select the HOME page (and create a HOME page if you have not already). Then, create a BLOG page and set the BLOG page as the Posts page option in Settings > Reading. If you do not want the blog to be displayed separately, then set Frontpage displays... Your latest posts.', 'venture-lite' ),
	'priority'    => 10,
) );

Kirki::add_field( 'venture-lite-config', array(
	'settings' => 'fp-news-title',
	'label'    => __( 'News - Main Title', 'venture-lite' ),
	'section'  => 'fp-news',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'description'   => __( 'This is the big text in the news section. Leave blank to hide.', 'venture-lite' ),
) );

Kirki::add_field( 'venture-lite-config', array(
	'settings' => 'fp-news-sub-title',
	'label'    => __( 'News - Sub Title', 'venture-lite' ),
	'section'  => 'fp-news',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'description'   => __( 'This is the smaller text in the news section. Leave blank to hide.', 'venture-lite' ),
) );

Kirki::add_field( 'venture-lite-config', array(
	'settings' => 'fp-news-slug',
	'label'    => __( 'Navigation Menu ID', 'venture-lite' ),
	'section'  => 'fp-news',
	'type'     => 'text',
	'priority' => 10,
	'default'  => 'news',
	'description'   => __( 'The frontpage section IDs (what shows up in the hover state and the address bar when clicked) have already been set to a default show in this field. If you would like to change the ID so that a different term comes up in the slug for that section (ie. http://example.com/#top instead of /#home), then change the term below for the corresponding section. You will also want to add the custom menu items in the Menus section of your dashboard (click "Links," then add the entire URL, such as http://example.com/#top). IMPORTANT: You must also add this term to the title field in the menu editor. If you do not see this field you may have to activate it by selecting the Screen Options tab in the top right of the page and then checking the Title Attribute box.', 'venture-lite' ),
) );



Kirki::add_section( 'blog-settings', array(
    'title'          => __( 'Blog Settings', 'venture-lite' ),
    'description'    => '',
    'panel'          => '', 
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

Kirki::add_field( 'venture-lite-config', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'full-excerpt',
	'label'       => __( 'Choose Blog/Archive Display', 'venture-lite' ),
	'section'     => 'blog-settings',
	'default'     => '2',
	'priority'    => 1,
	'choices'     => array(
		'1'   => esc_attr__( 'Full', 'venture-lite' ),
		'2'  => esc_attr__( 'Excerpt', 'venture-lite' ),
	),
) );



// #################################################
// Get Options
// #################################################
    
function nimbus_get_option($optionID, $default_data = false) {
    if (get_theme_mod( $optionID )) {
        return get_theme_mod( $optionID );   
    } else {
        return NULL;
    }
}