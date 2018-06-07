<?php
    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }


    // This is your option name where all the Redux data is stored.
    $opt_name = "redux_demo";

    // This line is only for altering the demo. Can be easily removed.
    $opt_name = apply_filters( 'redux_demo/opt_name', $opt_name );

    /*
     *
     * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
     *
     */

    $sampleHTML = '';
    if ( file_exists( dirname( __FILE__ ) . '/info-html.html' ) ) {
        Redux_Functions::initWpFilesystem();

        global $wp_filesystem;

        $sampleHTML = $wp_filesystem->get_contents( dirname( __FILE__ ) . '/info-html.html' );
    }

    // Background Patterns Reader
    $sample_patterns_path = ReduxFramework::$_dir . '../sample/patterns/';
    $sample_patterns_url  = ReduxFramework::$_url . '../sample/patterns/';
    $sample_patterns      = array();
    
    if ( is_dir( $sample_patterns_path ) ) {

        if ( $sample_patterns_dir = opendir( $sample_patterns_path ) ) {
            $sample_patterns = array();

            while ( ( $sample_patterns_file = readdir( $sample_patterns_dir ) ) !== false ) {

                if ( stristr( $sample_patterns_file, '.png' ) !== false || stristr( $sample_patterns_file, '.jpg' ) !== false ) {
                    $name              = explode( '.', $sample_patterns_file );
                    $name              = str_replace( '.' . end( $name ), '', $sample_patterns_file );
                    $sample_patterns[] = array(
                        'alt' => $name,
                        'img' => $sample_patterns_url . $sample_patterns_file
                    );
                }
            }
        }
    }

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
        'menu_title'           => __( 'Moregeek Theme Options', 'redux-framework-demo' ),
        'page_title'           => __( 'Moregeek Theme Options', 'redux-framework-demo' ),
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
        'page_slug'            => '',
        // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => false,
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

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'red',
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
    // 
        
       Redux::setSection( $opt_name, array(
        'title'            => 'Homepage Fields',
        'id'               => 'basic',
        'desc'             => 'Homepage Fields',
        'icon'             => 'el el-home'
    ) );

       Redux::setSection( $opt_name, array(
            'title' => 'Header Section',
            'icon' => 'el el-align-left',
            'subsection'       => true,
            'fields' => array(
                array(
                    'title' => 'Logo Uploader',
                    'subtitle' => 'Upload Your Logo Here',
                    'type' => 'media',
                    'id' => 'logo',
                    'compiler' => true,
                    'default' => array(
                        'url' => get_template_directory_uri().'/images/logo-small.png'
                    )
                ),

                array(
                    'title' => 'Hero area Logo Uploader',
                    'subtitle' => 'Upload Your Big Logo Here',
                    'type' => 'media',
                    'id' => 'big-logo',
                    'compiler' => true,
                    'default' => array(
                        'url' => get_template_directory_uri().'/images/logo-big.png'
                    )
                ),

                array(
                    'title' => 'Hero Are Text',
                    'sub-title' => 'add your title here',
                    'type' => 'text',
                    'id' => 'hero-text',
                    'default' => 'A world-class group of mobile game talent.'
                ),

                array(
                    'title' => 'Hero Are Button One',
                    'type' => 'text',
                    'id' => 'hero-btn-one',
                    'default' => 'Work with us',
                ),

                array(
                    'title' => 'Hero Are Button One URL/Link',
                    'type' => 'text',
                    'id' => 'hero-btn-one-link',
                    'default' => 'https://www.google.com/',
                ),

                array(
                    'title' => 'Hero Are Button Two',
                    'type' => 'text',
                    'id' => 'hero-btn-two',
                    'default' => 'Playe Our Game',
                ),

                array(
                    'title' => 'Hero Are Button Two URL/Link',
                    'type' => 'text',
                    'id' => 'hero-btn-two-link',
                    'default' => 'https://www.google.com/',
                ),
                
            )
        )
    );

    Redux::setSection( $opt_name, array(
            'title' => 'About Section',
            'icon' => 'el el-align-left',
            'subsection'       => true,
            'fields' => array(
                array(
                    'title' => 'Section Title',
                    'sub-title' => 'add your title here',
                    'type' => 'text',
                    'id' => 'about-title',
                    'default' => 'About Us'
                ),

                array(
                    'title' => 'Section description',
                    'sub-title' => 'add your description here',
                    'type' => 'text',
                    'id' => 'about-desc',
                    'default' => 'Headquarter in the port city of Kaohsiung, Taiwan, Moregeek has built a reputation for creating exceptional quality games on time and on budget'
                ), 

                array(
                    'title' => 'Add Your Button',
                    'type' => 'text',
                    'id' => 'about-btn',
                    'default' => 'Learn More',
                ),

                array(
                    'title' => 'Add Your Button URL / Link',
                    'type' => 'text',
                    'id' => 'about-btn-link',
                    'default' => 'https://www.google.com',
                ),

                array(
                    'title' => 'Right Side Image',
                    'subtitle' => 'Upload Your Right side image Here',
                    'type' => 'media',
                    'id' => 'about-img',
                    'compiler' => true,
                    'default' => array(
                        'url' => get_template_directory_uri().'/images/about-img.png'
                    )
                ),
            )
        )
    );

    Redux::setSection( $opt_name, array(
            'title' => 'Download Section',
            'subsection'       => true,
            'icon' => 'el el-align-left',
            'fields' => array(
                array(
                    'title' => 'Section Title',
                    'sub-title' => 'add your title here',
                    'type' => 'text',
                    'id' => 'download-title',
                    'default' => 'Omega Force'
                ),

                array(
                    'title' => 'Section description',
                    'sub-title' => 'add your description here',
                    'type' => 'text',
                    'id' => 'download-desc',
                    'default' => 'Summon creatures, cast spells, and duel players around the world in real time multilayer.'
                ), 

                array(
                    'title' => 'Add Your Button',
                    'type' => 'text',
                    'id' => 'download-btn',
                    'default' => 'Download',
                ),

                array(
                    'title' => 'Add Your Button URL / Link',
                    'type' => 'text',
                    'id' => 'download-btn-link',
                    'default' => 'https://www.google.com',
                ),
            )
        )
    );

    Redux::setSection( $opt_name, array(
            'title' => 'Slider Section',
            'subsection'       => true,
            'icon' => 'el el-align-left',
            'fields' => array(
                array(
                    'title' => 'Add Your Section Title',
                    'sub-title' => 'add your title here',
                    'type' => 'text',
                    'id' => 'slider-title',
                    'default' => 'More of our games'
                ),
            )
        )
    );
    
    Redux::setSection( $opt_name, array(
            'title' => 'News Section',
            'subsection'       => true,
            'icon' => 'el el-align-left',
            'fields' => array(
                array(
                    'title' => 'Add Your Section Title',
                    'sub-title' => 'add your title here',
                    'type' => 'text',
                    'id' => 'news-title',
                    'default' => 'MOREGEEK News'
                ),

                array(
                    'title' => 'Add Your Button',
                    'type' => 'text',
                    'id' => 'news-btn',
                    'default' => 'Older Entry',
                ),

                array(
                    'title' => 'Add Your Button URL / Link',
                    'type' => 'text',
                    'id' => 'news-btn-link',
                    'default' => 'https://www.google.com',
                ),
            )
        )
    );


    Redux::setSection( $opt_name, array(
            'title' => 'Contact Section',
            'subsection'       => true,
            'icon' => 'el el-align-left',
            'fields' => array(
                array(
                    'title' => 'Add Your Section Title',
                    'sub-title' => 'add your title here',
                    'type' => 'text',
                    'id' => 'contact-title',
                    'default' => 'Contact Us'
                ),

                array(
                    'title' => 'Contact Left Image',
                    'subtitle' => 'Upload Your left side image Here',
                    'type' => 'media',
                    'id' => 'contact-img',
                    'compiler' => true,
                    'default' => array(
                        'url' => get_template_directory_uri().'/images/cu_icon.png'
                    )
                ),

                 array(
                    'title' => 'Add Your Small Section Title',
                    'sub-title' => 'add your title here',
                    'type' => 'text',
                    'id' => 'contact-sm-title',
                    'default' => 'Head Office'
                ), 

                 array(
                    'title' => 'Add Your Address',
                    'type' => 'text',
                    'id' => 'address',
                    'default' => '6F-17, No.12, Fuxing 4th Rd., Qianzhen Dist., Kaohsiung City 806, Taiwan (R.O.C)'
                ),
                 
                array(
                    'title' => 'Add Your Telephone',
                    'type' => 'text',
                    'id' => 'telephone',
                    'default' => '+886-7-331-8132'
                ),

                array(
                    'title' => 'Add Your Fax',
                    'type' => 'text',
                    'id' => 'fax',
                    'default' => '+886-7-334-2610'
                ),

                array(
                    'title' => 'Add Your Email',
                    'type' => 'text',
                    'id' => 'mail',
                    'default' => 'bd@moregeek.com'
                ),

                array(
                    'title' => 'Add Your company Email',
                    'type' => 'text',
                    'id' => 'company-mail',
                    'default' => 'monster@moregeek.com'
                ),
            )
        )
    );

     Redux::setSection( $opt_name, array(
            'title' => 'Footer Section',
            'subsection'       => true,
            'icon' => 'el el-align-left',
            'fields' => array(
                 array(
                    'title' => 'Add Your Facebook URL / Link',
                    'type' => 'text',
                    'id' => 'fb-link',
                    'default' => 'https://www.google.com',
                ),

                array(
                    'title' => 'Add Your Twitter URL / Link',
                    'type' => 'text',
                    'id' => 'tw-link',
                    'default' => 'https://www.google.com',
                ),

                array(
                    'title' => 'Add Your Youtube URL / Link',
                    'type' => 'text',
                    'id' => 'feed-link',
                    'default' => 'https://www.google.com',
                ),

                array(
                    'title' => 'Add Your Youtube URL / Link',
                    'type' => 'text',
                    'id' => 'you-link',
                    'default' => 'https://www.google.com',
                ),

                array(
                    'title' => 'Add Your Privacy Policy Page URL / Link',
                    'type' => 'text',
                    'id' => 'privacy-link',
                    'default' => 'https://www.google.com',
                ),

                array(
                    'title' => 'Add Your Term and Condition Page URL / Link',
                    'type' => 'text',
                    'id' => 'term-link',
                    'default' => 'https://www.google.com',
                ),

                array(
                    'title' => 'Add Your Footer Copyright',
                    'type' => 'editor',
                    'id' => 'copyright',
                    'default' => '2009-2017 Moregeek Entertainment Ltd'
                ),
            )
        )
    );

    Redux::setSection( $opt_name, array(
        'title'            => 'Game Page Fields',
        'id'               => 'about',
        'desc'             => 'about Fields',
        'icon'             => 'el el-idea-alt'
    ) );

    Redux::setSection( $opt_name, array(
            'title' => 'Game Page Header',
            'subsection' => true,
            'icon' => 'el el-align-left',
            'fields' => array(
                    array(
                        'title' => 'Your Game Page Title',
                        'sub-title' => 'add your title here',
                        'type' => 'text',
                        'id' => 'game-title',
                        'default' => 'Moregeek Games'
                    ),

                    array(
                        'title' => 'Your Game Page Sub-Title',
                        'sub-title' => 'add your sub-title here',
                        'type' => 'text',
                        'id' => 'game-p',
                        'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit molestias minus'
                    ),

                    array(
                        'title' => 'Your Game Page Button',
                        'type' => 'text',
                        'id' => 'game-btn',
                        'default' => 'See All the Game'
                    ),

                    array(
                        'title' => 'Your Game Page Button link / URL',
                        'type' => 'text',
                        'id' => 'game-btn-link',
                        'default' => 'https://www.google.com'
                    ),
                )
            )
        );

    Redux::setSection( $opt_name, array(
            'title' => 'Game one',
            'subsection' => true,
            'icon' => 'el el-align-left',
            'fields' => array(
                    array(
                        'title' => 'Your Game one Title',
                        'sub-title' => 'add your Game one title here',
                        'type' => 'text',
                        'id' => 'game-one-title',
                        'default' => 'OMEGA FORCE'
                    ),

                    array(
                        'title' => 'Your Game one Sub-Title',
                        'sub-title' => 'add your sub-title here',
                        'type' => 'text',
                        'id' => 'game-one-p',
                        'default' => 'Orbit Legends – Clash of Summoners is a beautiful and epic game that lets you take on the role of a monster-summoning young man or woman.'
                    ),

                    array(
                        'title' => 'Your Game one Button',
                        'type' => 'text',
                        'id' => 'game-one-btn',
                        'default' => 'Website'
                    ),

                    array(
                        'title' => 'Your Game one Button link / URL',
                        'type' => 'text',
                        'id' => 'game-one-btn-link',
                        'default' => 'https://www.google.com'
                    ),

                     array(
                        'title' => 'Game One Image',
                        'type' => 'media',
                        'id' => 'game-one-img',
                        'compiler' => true,
                        'default' => array(
                            'url' => get_template_directory_uri().'/images/game-img-1.png'
                        )
                    ),
                )
            )
        );    

        Redux::setSection( $opt_name, array(
            'title' => 'Game two',
            'subsection' => true,
            'icon' => 'el el-align-left',
            'fields' => array(
                    array(
                        'title' => 'Your Game two Title',
                        'sub-title' => 'add your Game two title here',
                        'type' => 'text',
                        'id' => 'game-two-title',
                        'default' => 'LEAGUE TWILIGHT'
                    ),

                    array(
                        'title' => 'Your Game two Sub-Title',
                        'sub-title' => 'add your sub-title here',
                        'type' => 'text',
                        'id' => 'game-two-p',
                        'default' => 'Orbit Legends – Clash of Summoners is a beautiful and epic game that lets you take on the role of a monster-summoning young man or woman.'
                    ),

                    array(
                        'title' => 'Your Game two Button',
                        'type' => 'text',
                        'id' => 'game-two-btn',
                        'default' => 'Website'
                    ),

                    array(
                        'title' => 'Your Game two Button link / URL',
                        'type' => 'text',
                        'id' => 'game-two-btn-link',
                        'default' => 'https://www.google.com'
                    ),

                     array(
                        'title' => 'Game two Image',
                        'type' => 'media',
                        'id' => 'game-two-img',
                        'compiler' => true,
                        'default' => array(
                            'url' => get_template_directory_uri().'/images/game-img-2.png'
                        )
                    ),
                )
            )
        );

        Redux::setSection( $opt_name, array(
            'title' => 'Game three',
            'subsection' => true,
            'icon' => 'el el-align-left',
            'fields' => array(
                    array(
                        'title' => 'Your Game three Title',
                        'sub-title' => 'add your Game three title here',
                        'type' => 'text',
                        'id' => 'game-three-title',
                        'default' => 'LEAGUE TWILIGHT'
                    ),

                    array(
                        'title' => 'Your Game three Sub-Title',
                        'sub-title' => 'add your sub-title here',
                        'type' => 'text',
                        'id' => 'game-three-p',
                        'default' => 'Orbit Legends – Clash of Summoners is a beautiful and epic game that lets you take on the role of a monster-summoning young man or woman.'
                    ),

                    array(
                        'title' => 'Your Game three Button',
                        'type' => 'text',
                        'id' => 'game-three-btn',
                        'default' => 'Website'
                    ),

                    array(
                        'title' => 'Your Game three Button link / URL',
                        'type' => 'text',
                        'id' => 'game-three-btn-link',
                        'default' => 'https://www.google.com'
                    ),

                     array(
                        'title' => 'Game three Image',
                        'type' => 'media',
                        'id' => 'game-three-img',
                        'compiler' => true,
                        'default' => array(
                            'url' => get_template_directory_uri().'/images/game-img-3.png'
                        )
                    ),
                )
            )
        ); 

        Redux::setSection( $opt_name, array(
            'title' => 'Game four',
            'subsection' => true,
            'icon' => 'el el-align-left',
            'fields' => array(
                    array(
                        'title' => 'Your Game four Title',
                        'sub-title' => 'add your Game four title here',
                        'type' => 'text',
                        'id' => 'game-four-title',
                        'default' => 'LEAGUE TWILIGHT'
                    ),

                    array(
                        'title' => 'Your Game four Sub-Title',
                        'sub-title' => 'add your sub-title here',
                        'type' => 'text',
                        'id' => 'game-four-p',
                        'default' => 'Orbit Legends – Clash of Summoners is a beautiful and epic game that lets you take on the role of a monster-summoning young man or woman.'
                    ),

                    array(
                        'title' => 'Your Game four Button',
                        'type' => 'text',
                        'id' => 'game-four-btn',
                        'default' => 'Website'
                    ),

                    array(
                        'title' => 'Your Game four Button link / URL',
                        'type' => 'text',
                        'id' => 'game-four-btn-link',
                        'default' => 'https://www.google.com'
                    ),

                     array(
                        'title' => 'Game four Image',
                        'type' => 'media',
                        'id' => 'game-four-img',
                        'compiler' => true,
                        'default' => array(
                            'url' => get_template_directory_uri().'/images/game-img-2.png'
                        )
                    ),
                )
            )
        );
        
        Redux::setSection( $opt_name, array(
            'title' => 'Footer',
            'subsection' => true,
            'icon' => 'el el-align-left',
            'fields' => array(
                     array(
                        'title' => 'Footer Image',
                        'type' => 'media',
                        'id' => 'game-footer-img',
                        'compiler' => true,
                        'default' => array(
                            'url' => get_template_directory_uri().'/images/game-footer.png'
                        )
                    ),
                )
            )
        );


         Redux::setSection( $opt_name, array(
            'title'            => 'Contact Page',
            'id'               => 'contact',
            'desc'             => 'contact Fields',
            'icon'             => 'el el-map-marker',
            'fields' => array(
                    array(
                        'title' => 'Your Contact Title',
                        'sub-title' => 'add your Contact title here',
                        'type' => 'text',
                        'id' => 'contact-title',
                        'default' => 'CONTACT US'
                    ),

                    array(
                        'title' => 'Your Support Title',
                        'sub-title' => 'add your Support title here',
                        'type' => 'text',
                        'id' => 'support-title',
                        'default' => 'FIND SUPPORT FOR'
                    ),

                    array(
                        'title' => 'Your Support sub-title',
                        'type' => 'text',
                        'id' => 'support-p',
                        'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae molestias minus, ut commodi quas. Harum, minima, odio veniam accusamus'
                    ),

                    array(
                        'title' => 'Support Game One Image',
                        'type' => 'media',
                        'id' => 'support-game-img',
                        'compiler' => true,
                        'default' => array(
                            'url' => get_template_directory_uri().'/images/support-img-1.png'
                        )
                    ),

                     array(
                        'title' => 'Support Game One Button Text',
                        'type' => 'text',
                        'id' => 'support-one-btn',
                        'default' => 'omega force'
                    ),

                     array(
                        'title' => 'Support Game One Button URL / Link',
                        'type' => 'text',
                        'id' => 'support-one-btn-link',
                        'default' => 'https://www.google.com'
                    ),

                     array(
                        'title' => 'Support Game two Image',
                        'type' => 'media',
                        'id' => 'support-game-two-img',
                        'compiler' => true,
                        'default' => array(
                            'url' => get_template_directory_uri().'/images/support-img-2.png'
                        )
                    ),

                     array(
                        'title' => 'Support Game two Button Text',
                        'type' => 'text',
                        'id' => 'support-two-btn',
                        'default' => 'omega force'
                    ),

                     array(
                        'title' => 'Support Game two Button URL / Link',
                        'type' => 'text',
                        'id' => 'support-two-btn-link',
                        'default' => 'https://www.google.com'
                    ),
                    
                    array(
                        'title' => 'Contact Form Title',
                        'type' => 'text',
                        'id' => 'form-title',
                        'default' => 'Please leave your information, we will contact you immediately.'
                    ),

                    array(
                        'title' => 'footer Image',
                        'type' => 'media',
                        'id' => 'support-footer-img',
                        'compiler' => true,
                        'default' => array(
                            'url' => get_template_directory_uri().'/images/contact-form.png'
                        )
                    ),
                )

            ) 
        );

       
    Redux::setSection( $opt_name, array(
        'title'            => 'About Us Page',
        'id'               => 'about-us',
        'desc'             => 'about-us Fields',
        'icon'             => 'el el-idea-alt'
    ) );

    Redux::setSection( $opt_name, array(
            'title' => 'About US Header',
            'subsection' => true,
            'icon' => 'el el-align-left',
            'fields' => array(
                     array(
                        'title' => 'Abous Us Title',
                        'type' => 'text',
                        'id' => 'about-us-title',
                        'default' => 'OREM IPSUM DOLOR AMET LOREM'
                    ),

                    array(
                        'title' => 'Abous Us Button Text',
                        'type' => 'text',
                        'id' => 'about-us-btn',
                        'default' => 'Read How it all Begain'
                    ),

                )
            )
        );

    Redux::setSection( $opt_name, array(
            'title' => 'Counter Section',
            'subsection' => true,
            'icon' => 'el el-align-left',
            'fields' => array(
                     array(
                        'title' => 'Counter Main Title',
                        'type' => 'text',
                        'id' => 'counter-title',
                        'default' => 'MoreGeek'
                    ),

                    array(
                        'title' => 'Counter Paragraph',
                        'type' => 'editor',
                        'id' => 'counter-p',
                        'default' => 'MOREGEEK has developed its own suit of game operating tools and made them available to many of its clients. In addition, MOREGEEk has oversaw the development of several full SKU and nurtured their development from conception until post-launch support.'
                    ),

                )
            )
        );

    Redux::setSection( $opt_name, array(
            'title' => 'Our Story',
            'subsection' => true,
            'icon' => 'el el-align-left',
            'fields' => array(
                    array(
                        'title' => 'Your Story Title',
                        'type' => 'text',
                        'id' => 'story-title',
                        'default' => 'OUR STORY'
                    ),

                    array(
                        'title' => 'Your Your Story Paragraph',
                        'type' => 'text',
                        'id' => 'story-p',
                        'default' => 'Over 6 Years Of Industry Experience'
                    ),

                     array(
                        'title' => 'Story Image',
                        'type' => 'media',
                        'id' => 'story-img',
                        'compiler' => true,
                        'default' => array(
                            'url' => get_template_directory_uri().'/images/our-story-bottom-img.png'
                        )
                    ),
                )
            )
        );
    
    Redux::setSection( $opt_name, array(
            'title' => 'Summary Overview',
            'subsection' => true,
            'icon' => 'el el-align-left',
            'fields' => array(
                    array(
                        'title' => 'Your Summary Title',
                        'type' => 'text',
                        'id' => 'summary-title',
                        'default' => 'Summery Overview'
                    ),

                     array(
                        'title' => 'Summery Image One',
                        'type' => 'media',
                        'id' => 'sm-one',
                        'compiler' => true,
                        'default' => array(
                            'url' => get_template_directory_uri().'/images/summery-img-2.png'
                        )
                    ),

                     array(
                        'title' => 'Summery Image two',
                        'type' => 'media',
                        'id' => 'sm-two',
                        'compiler' => true,
                        'default' => array(
                            'url' => get_template_directory_uri().'/images/summery-img-3.png'
                        )
                    ),

                    array(
                        'title' => 'Summery Image three',
                        'type' => 'media',
                        'id' => 'sm-three',
                        'compiler' => true,
                        'default' => array(
                            'url' => get_template_directory_uri().'/images/summery-img-1.png'
                        )
                    ),

                    array(
                        'title' => 'Summery Image four',
                        'type' => 'media',
                        'id' => 'sm-four',
                        'compiler' => true,
                        'default' => array(
                            'url' => get_template_directory_uri().'/images/summery-img-4.png'
                        )
                    ),

                    array(
                        'title' => 'Summery Image five',
                        'type' => 'media',
                        'id' => 'sm-five',
                        'compiler' => true,
                        'default' => array(
                            'url' => get_template_directory_uri().'/images/summery-img-5.png'
                        )
                    ),
                )
            )
        );

    

     Redux::setSection( $opt_name, array(
            'title' => 'About Slider',
            'subsection' => true,
            'icon' => 'el el-align-left',
            'fields' => array(
                    array(
                        'title' => 'Your Slider Title',
                        'type' => 'text',
                        'id' => 'ab-slider-title',
                        'default' => 'CO-DEVELOPMENT'
                    ),

                    array(
                        'title' => 'Your Slider Paragraph',
                        'type' => 'text',
                        'id' => 'ab-slider-p',
                        'default' => 'Lorem Ipsum Dolor Modot Udelmu'
                    ),
                )
            )
        );

        Redux::setSection( $opt_name, array(
            'title' => '2 Game section',
            'subsection' => true,
            'icon' => 'el el-align-left',
            'fields' => array(

                 array(
                        'title' => 'Your Section Title',
                        'type' => 'text',
                        'id' => 'section-title',
                        'default' => 'CO-DEVELOPMENT'
                    ),

                    array(
                        'title' => 'Your Section Paragraph',
                        'type' => 'text',
                        'id' => 'section-p',
                        'default' => 'Lorem Ipsum Dolor Modot Udelmu'
                    ),
                    array(
                        'title' => 'Game One Title',
                        'type' => 'text',
                        'id' => 'go-title',
                        'default' => 'HEROES OF INFINITY'
                    ),

                    array(
                        'title' => 'Game One Paragraph',
                        'type' => 'editor',
                        'id' => 'go-p',
                        'default' => '- Realtime miniaturised MOBA style PvP, PPvE battle with other players.
                            - RPG-based Combat-Loot-Upgrade loop.'
                    ),

                    array(
                        'title' => 'Game One Button URL / Link',
                        'type' => 'text',
                        'id' => 'go-btn-link',
                        'default' => 'https://www.google.com'
                    ),

                     array(
                        'title' => 'Game one image',
                        'type' => 'media',
                        'id' => 'go-img',
                        'compiler' => true,
                        'default' => array(
                            'url' => get_template_directory_uri().'/images/co-publishing-img-1.png'
                        )
                    ),


                     array(
                        'title' => 'Game two Title',
                        'type' => 'text',
                        'id' => 'g2-title',
                        'default' => 'HEROES OF INFINITY'
                    ),

                    array(
                        'title' => 'Game Two Paragraph',
                        'type' => 'editor',
                        'id' => 'g2-p',
                        'default' => '- Realtime miniaturised MOBA style PvP, PPvE battle with other players.
                            - RPG-based Combat-Loot-Upgrade loop.'
                    ),

                    array(
                        'title' => 'Game two Button URL / Link',
                        'type' => 'text',
                        'id' => 'g2-btn-link',
                        'default' => 'https://www.google.com'
                    ),

                     array(
                        'title' => 'Game two image',
                        'type' => 'media',
                        'id' => 'g2-img',
                        'compiler' => true,
                        'default' => array(
                            'url' => get_template_directory_uri().'/images/co-publishing-img-2.png'
                        )
                    ), 

                )
            )
        );

        Redux::setSection( $opt_name, array(
            'title' => 'Work with us',
            'subsection' => true,
            'icon' => 'el el-align-left',
            'fields' => array(
                    array(
                        'title' => 'Your Title',
                        'type' => 'text',
                        'id' => 'work-title',
                        'default' => 'Work With Us'
                    ),

                    array(
                        'title' => 'Your Paragraph',
                        'type' => 'text',
                        'id' => 'work-p',
                        'default' => 'Exceptional Professionalism'
                    ),

                    array(
                        'title' => 'Work with Content One',
                        'type' => 'text',
                        'id' => 'work-one',
                        'default' => 'Delivery of quality cost-effectively in a highly professional manner.'
                    ),array(
                        'title' => 'Work with Content two',
                        'type' => 'text',
                        'id' => 'work-two',
                        'default' => 'Delivery of quality cost-effectively in a highly professional manner.'
                    ),array(
                        'title' => 'Work with Content three',
                        'type' => 'text',
                        'id' => 'work-three',
                        'default' => 'Delivery of quality cost-effectively in a highly professional manner.'
                    ),array(
                        'title' => 'Work with Content four',
                        'type' => 'text',
                        'id' => 'work-four',
                        'default' => 'Delivery of quality cost-effectively in a highly professional manner.'
                    ),
                )
            )
        );

        Redux::setSection( $opt_name, array(
            'title' => 'Get In Touch',
            'subsection' => true,
            'icon' => 'el el-align-left',
            'fields' => array(
                    array(
                        'title' => 'Your Title',
                        'type' => 'text',
                        'id' => 'touch-title',
                        'default' => 'START A NEW GAME DEVELOPMENT PROJECT?'
                    ),

                    array(
                        'title' => 'Get In Touch URL / Link',
                        'type' => 'text',
                        'id' => 'touch-link',
                        'default' => 'https://www.google.com'
                    ),

                    array(
                        'title' => 'Get In Touch image',
                        'type' => 'media',
                        'id' => 'touch-img',
                        'compiler' => true,
                        'default' => array(
                            'url' => get_template_directory_uri().'/images/about-icon.png'
                        )
                    ),
                )
            )
        );


    /*
     *
     * YOU MUST PREFIX THE FUNCTIONS BELOW AND ACTION FUNCTION CALLS OR ANY OTHER CONFIG MAY OVERRIDE YOUR CODE.
     *
     */

    /*
    *
    * --> Action hook examples
    *
    */

    // If Redux is running as a plugin, this will remove the demo notice and links
    //add_action( 'redux/loaded', 'remove_demo' );

    // Function to test the compiler hook and demo CSS output.
    // Above 10 is a priority, but 2 in necessary to include the dynamically generated CSS to be sent to the function.
    //add_filter('redux/options/' . $opt_name . '/compiler', 'compiler_action', 10, 3);

    // Change the arguments after they've been declared, but before the panel is created
    //add_filter('redux/options/' . $opt_name . '/args', 'change_arguments' );

    // Change the default value of a field after it's been set, but before it's been useds
    //add_filter('redux/options/' . $opt_name . '/defaults', 'change_defaults' );

    // Dynamically add a section. Can be also used to modify sections/fields
    //add_filter('redux/options/' . $opt_name . '/sections', 'dynamic_section');

    /**
     * This is a test function that will let you see when the compiler hook occurs.
     * It only runs if a field    set with compiler=>true is changed.
     * */
    if ( ! function_exists( 'compiler_action' ) ) {
        function compiler_action( $options, $css, $changed_values ) {
            echo '<h1>The compiler hook has run!</h1>';
            echo "<pre>";
            print_r( $changed_values ); // Values that have changed since the last save
            echo "</pre>";
            //print_r($options); //Option values
            //print_r($css); // Compiler selector CSS values  compiler => array( CSS SELECTORS )
        }
    }

    /**
     * Custom function for the callback validation referenced above
     * */
    if ( ! function_exists( 'redux_validate_callback_function' ) ) {
        function redux_validate_callback_function( $field, $value, $existing_value ) {
            $error   = false;
            $warning = false;

            //do your validation
            if ( $value == 1 ) {
                $error = true;
                $value = $existing_value;
            } elseif ( $value == 2 ) {
                $warning = true;
                $value   = $existing_value;
            }

            $return['value'] = $value;

            if ( $error == true ) {
                $field['msg']    = 'your custom error message';
                $return['error'] = $field;
            }

            if ( $warning == true ) {
                $field['msg']      = 'your custom warning message';
                $return['warning'] = $field;
            }

            return $return;
        }
    }

    /**
     * Custom function for the callback referenced above
     */
    if ( ! function_exists( 'redux_my_custom_field' ) ) {
        function redux_my_custom_field( $field, $value ) {
            print_r( $field );
            echo '<br/>';
            print_r( $value );
        }
    }

    /**
     * Custom function for filtering the sections array. Good for child themes to override or add to the sections.
     * Simply include this function in the child themes functions.php file.
     * NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
     * so you must use get_template_directory_uri() if you want to use any of the built in icons
     * */
    if ( ! function_exists( 'dynamic_section' ) ) {
        function dynamic_section( $sections ) {
            //$sections = array();
            $sections[] = array(
                'title'  => __( 'Section via hook', 'redux-framework-demo' ),
                'desc'   => __( '<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'redux-framework-demo' ),
                'icon'   => 'el el-paper-clip',
                // Leave this as a blank section, no options just some intro text set above.
                'fields' => array()
            );

            return $sections;
        }
    }

    /**
     * Filter hook for filtering the args. Good for child themes to override or add to the args array. Can also be used in other functions.
     * */
    if ( ! function_exists( 'change_arguments' ) ) {
        function change_arguments( $args ) {
            //$args['dev_mode'] = true;

            return $args;
        }
    }

    /**
     * Filter hook for filtering the default value of any given field. Very useful in development mode.
     * */
    if ( ! function_exists( 'change_defaults' ) ) {
        function change_defaults( $defaults ) {
            $defaults['str_replace'] = 'Testing filter hook!';

            return $defaults;
        }
    }

    /**
     * Removes the demo link and the notice of integrated demo from the redux-framework plugin
     */
    if ( ! function_exists( 'remove_demo' ) ) {
        function remove_demo() {
            // Used to hide the demo mode link from the plugin page. Only used when Redux is a plugin.
            if ( class_exists( 'ReduxFrameworkPlugin' ) ) {
                remove_filter( 'plugin_row_meta', array(
                    ReduxFrameworkPlugin::instance(),
                    'plugin_metalinks'
                ), null, 2 );

                // Used to hide the activation notice informing users of the demo panel. Only used when Redux is a plugin.
                remove_action( 'admin_notices', array( ReduxFrameworkPlugin::instance(), 'admin_notices' ) );
            }
        }
    }

