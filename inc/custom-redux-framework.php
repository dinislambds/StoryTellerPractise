<?php

    /**
     * ReduxFramework Barebones Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "storyteller_options";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'StoryTeller Options', 'redux-framework-demo' ),
        'page_title'           => __( 'StoryTeller Options', 'redux-framework-demo' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => false,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '_options',
        // Page slug used to denote the panel
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!

        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        //'compiler'             => true,

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'light',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    // ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
    $args['admin_bar_links'][] = array(
        'id'    => 'redux-docs',
        'href'  => 'http://docs.reduxframework.com/',
        'title' => __( 'Documentation', 'redux-framework-demo' ),
    );

    $args['admin_bar_links'][] = array(
        //'id'    => 'redux-support',
        'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',
        'title' => __( 'Support', 'redux-framework-demo' ),
    );

    $args['admin_bar_links'][] = array(
        'id'    => 'redux-extensions',
        'href'  => 'reduxframework.com/extensions',
        'title' => __( 'Extensions', 'redux-framework-demo' ),
    );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
        'title' => 'Visit us on GitHub',
        'icon'  => 'el el-github'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://twitter.com/reduxframework',
        'title' => 'Follow us on Twitter',
        'icon'  => 'el el-twitter'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://www.linkedin.com/company/redux-framework',
        'title' => 'Find us on LinkedIn',
        'icon'  => 'el el-linkedin'
    );

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( __( '<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'redux-framework-demo' ), $v );
    } else {
        $args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'redux-framework-demo' );
    }

    // Add content after the form.
    $args['footer_text'] = __( '<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'redux-framework-demo' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */

    // -> START Basic Fields
    /*Redux::setSection( $opt_name, array(
        'title'  => __( 'Basic Field', 'redux-framework-demo' ),
        'id'     => 'basic',
        'desc'   => __( 'Basic field with no subsections.', 'redux-framework-demo' ),
        'icon'   => 'el el-home',
        'fields' => array(
            array(
                'id'       => 'opt-text',
                'type'     => 'text',
                'title'    => __( 'Example Text', 'redux-framework-demo' ),
                'desc'     => __( 'Example description.', 'redux-framework-demo' ),
                'subtitle' => __( 'Example subtitle.', 'redux-framework-demo' ),
                'hint'     => array(
                    'content' => 'This is a <b>hint</b> tool-tip for the text field.<br/><br/>Add any HTML based text you like here.',
                )
            )
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title' => __( 'Basic Fields', 'redux-framework-demo' ),
        'id'    => 'basic',
        'desc'  => __( 'Basic fields as subsections.', 'redux-framework-demo' ),
        'icon'  => 'el el-home'
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Text', 'redux-framework-demo' ),
        'desc'       => __( 'For full documentation on this field, visit: ', 'redux-framework-demo' ) . '<a href="//docs.reduxframework.com/core/fields/text/" target="_blank">//docs.reduxframework.com/core/fields/text/</a>',
        'id'         => 'opt-text-subsection',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'text-example',
                'type'     => 'text',
                'title'    => __( 'Text Field', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
                'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                'default'  => 'Default Text',
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Text Area', 'redux-framework-demo' ),
        'desc'       => __( 'For full documentation on this field, visit: ', 'redux-framework-demo' ) . '<a href="//docs.reduxframework.com/core/fields/textarea/" target="_blank">//docs.reduxframework.com/core/fields/textarea/</a>',
        'id'         => 'opt-textarea-subsection',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'textarea-example',
                'type'     => 'textarea',
                'title'    => __( 'Text Area Field', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
                'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                'default'  => 'Default Text',
            ),
        )
    ) );
*/
    /*
     * <--- END SECTIONS
     */





    /****************************Layout Home*************************/
 Redux::setSection( $opt_name, array(
        'title' => __( 'StoryTeller Layout', 'redux-framework-demo' ),
        'id'    => 'story-opt',
        'desc'  => __( 'Select your storyteller layout options.', 'redux-framework-demo' ),
        'icon'  => 'el el-twitter'
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Select Layout', 'redux-framework-demo' ),       
        'id'         => 'storyteller_layout',
        'subsection' => true,
        'fields'     => array(
             array(
                'id'       => 'opt-homepage-layout',
                'type'     => 'sorter',
                'title'    => 'Layout Manager Advanced',
                'subtitle' => 'You can add multiple drop areas or columns.',
                'compiler' => 'true',
                'options'  => array(
                    'enabled'  => array(
                        'about'             => 'About',
                        'services'          => 'Services',
                        'blog'              => 'Blog',
                        'clients'           => 'Clients',
                        'events'            => 'Events',
                        'facts'             => 'Facts',
                        'portfolio'         => 'Portfolio',
                        'team'              => 'Team',
                        'testimonials'      => 'Testimonials',
                        'twitter'           => 'Twitter',
                    ),
                    'disabled' => array(),
                    
                ),
                
            ),
        )
    ) );






    /****************************About Sections*************************/
 Redux::setSection( $opt_name, array(
        'title' => __( 'Abou Sections', 'redux-framework-demo' ),
        'id'    => 'about-opt',
        'desc'  => __( 'Select your storyteller layout options.', 'redux-framework-demo' ),
        'icon'  => 'el el-facebook'
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'About Content', 'redux-framework-demo' ),       
        'id'         => 'storyteller_about',
        'subsection' => true,
        'fields'     => array(

             array(
                'id'       => 'about_icon',
                'type'     => 'text',
                'title'    => __( 'About Icon', 'redux-framework-demo' ),
                'default'   => 'youtube',
                'desc'     => __( 'Please type about icon font-awesome class name.', 'redux-framework-demo' ),
            ),

              array(
                'id'       => 'about_description_content',
                'type'     => 'editor',
                'title'    => 'Type your about content.',
                'default'   => '<h2>Who & Why</h2>
                        <p> The gentlemen who rented the room would sometimes take their evening meal at home in the living room that was used by everyone, and so the door to this room was often kept closed in the evening. But Gregor found it easy to give up having the door open, he had, after all, often failed to make use of it when it was open and, without the family having noticed it, lain in his room in its darkest corner. One time, though, the charwoman left the door. </p>',
                
                'args'          => array(
                    'wpautop'      => false,
                    'teeny'         => false,

                    ),
                
            ),
            
        )
    ) );




    /****************************Services Sections*************************/
 Redux::setSection( $opt_name, array(
        'title' => __( 'Services Options', 'redux-framework-demo' ),
        'id'    => 'services-opt',
        'desc'  => __( 'Select your storyteller layout options.', 'redux-framework-demo' ),
        'icon'  => 'el el-facebook'
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Service Section', 'redux-framework-demo' ),       
        'id'         => 'storyteller_service',
        'subsection' => true,
        'fields'     => array(

             array(
                'id'          => 'opt-slides',
                'type'        => 'slides',
                'title'       => __( 'Slides Options', 'redux-framework-demo' ),
                'subtitle'    => __( 'Unlimited slides with drag and drop sortings.', 'redux-framework-demo' ),
                'desc'        => __( 'This field will store all slides values into a multidimensional array to use into a foreach loop.', 'redux-framework-demo' ),
                'placeholder' => array(
                    'title'       => __( 'This is a services title', 'redux-framework-demo' ),
                    'description' => __( 'Type your Services description Here', 'redux-framework-demo' ),
                    'url'         => __( 'Type your service icon font-awesome class name ', 'redux-framework-demo' ),
                ),
            ),



              
        )
    ) );





    /****************************Client Sections*************************/
 Redux::setSection( $opt_name, array(
        'title' => __( 'Clients Options', 'redux-framework-demo' ),
        'id'    => 'clients-opt',
        'desc'  => __( 'Select your storyteller layout options.', 'redux-framework-demo' ),
        'icon'  => 'el el-facebook'
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Service Section', 'redux-framework-demo' ),       
        'id'         => 'storyteller_client',
        'subsection' => true,
        'fields'     => array(

             array(
                'id'          => 'client-slides',
                'type'        => 'slides',
                'title'       => __( 'Clients Section', 'redux-framework-demo' ),
                'subtitle'    => __( 'Upload your client image', 'redux-framework-demo' ),                
                'placeholder' => array(
                    'title'       => __( 'This is a title', 'redux-framework-demo' ),
                    'description' => __( 'Type your description Here', 'redux-framework-demo' ),
                    'url'         => __( 'url type ', 'redux-framework-demo' ),
                ),
            ),



              
        )
    ) );







    /****************************Facts Sections*************************/
 Redux::setSection( $opt_name, array(
        'title' => __( 'Facts Options', 'redux-framework-demo' ),
        'id'    => 'facts-opt',
        'desc'  => __( 'Select your storyteller facts options.', 'redux-framework-demo' ),
        'icon'  => 'el el-twitter'
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Facts Section', 'redux-framework-demo' ),       
        'id'         => 'storyteller_facts',
        'subsection' => true,
        'fields'     => array(
            array(
            'id'       => 'facts_color',
            'type'     => 'color',
            'title'    => __('Facts Background Color', 'redux-framework-demo'),             
            'default'  => 'red',
            'validate' => 'color',
        ),


        array(
            'id'       => 'facts_opacity',
            'type'     => 'select',
            'title'    => __('Select Fact Opacity ', 'redux-framework-demo'),             
            'options'  => array(
                '0.1' => '0.1',
                '0.2' => '0.2',
                '0.3' => '0.3',
                '0.4' => '0.4',
                '0.5' => '0.5',
                '0.6' => '0.6',
            ),
            'default'  => '0.3',
        ),


             array(
                'id'          => 'facts-slides',
                'type'        => 'slides',
                'title'       => __( 'facts Section', 'redux-framework-demo' ),                
                'placeholder' => array(
                    'title'       => __( 'Type facts count', 'redux-framework-demo' ),
                    'description' => __( 'Type your project description', 'redux-framework-demo' ),
                    'url'         => __( 'url type flase ', 'redux-framework-demo' ),
                ),
            ),



              
        )
    ) );





