<?php


function gr_customize_register( $wp_customize ) {

    // Create our panels
    //panel gr_header
    $wp_customize->add_panel( 'gr_header', array( 
        'title'          => __('Theme Settings', 'gremza22'),
        'description'    => __('Things on header', 'gremza22'),
          'priority'          => 1, 
    ) );
     $wp_customize->add_section( 'gr_logo' , array(
        'title'             => __('Header costumizer', 'gremza22'),
        'priority'          => 1, 
        'panel'             => 'gr_header',
    ) );
     $wp_customize->add_setting( 'gr_logo' , array(
        'type'          => 'theme_mod', 
        'transport'     => 'refresh',
    ) );
 
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'gr_logo_control', array(
        'label'      => __('Logo', 'gremza22'), 
        'section'    => 'gr_logo',
        'settings'   => 'gr_logo',
        'priority'   => 1,
        'type'       => 'image',
    ) ));
     $wp_customize->add_setting( 'gr_logo_width_settings' , array(
        'type'          => 'theme_mod', 
        'transport'     => 'refresh',
    ) );
    
$wp_customize->add_control( 'gr_logo_width_settings', array(
  'type' => 'text',
  'section' => 'gr_logo', // Add a default or your own section
  'label' => __( 'Logo Width in px' ),
  'description' => __( 'No px needed to be add at the end. Expamle 100' ),
) );


//social links
//fb
$wp_customize->add_section( 'gr_social' , array(
        'title'             => __('Social links', 'gremza22'),
        'priority'          => 12, 
        'panel'             => 'gr_header',
    ) );  
$wp_customize->add_setting( 'gr_social_fb_settings' , array(
        'type'          => 'theme_mod', 
        'transport'     => 'refresh',
        'default' => '',
    ) );     
	
$wp_customize->add_control( 'gr_social_fb_settings', array(
  'type' => 'text',
  'section' => 'gr_social', // Add a default or your own section
  'label' => __( 'Instagram link' ),
    'settings' => 'gr_social_fb_settings'
) );

//ig
$wp_customize->add_section( 'gr_social' , array(
        'title'             => __('Social links', 'gremza22'),
        'priority'          => 13, 
        'panel'             => 'gr_header',
    ) );  
$wp_customize->add_setting( 'gr_social_ig_settings' , array(
        'type'          => 'theme_mod', 
        'transport'     => 'refresh',
        'default' => '',
    ) );     
$wp_customize->add_control( 'gr_social_ig_settings', array(
  'type' => 'text',
  'section' => 'gr_social', // Add a default or your own section
  'label' => __( 'Facebook link' ),
    'settings' => 'gr_social_ig_settings'
) );



//yt
$wp_customize->add_section( 'gr_social' , array(
        'title'             => __('Social links', 'gremza22'),
        'priority'          => 14, 
        'panel'             => 'gr_header',
    ) );  
$wp_customize->add_setting( 'gr_social_yt_settings' , array(
        'type'          => 'theme_mod', 
        'transport'     => 'refresh',
        'default' => '',
    ) );     
$wp_customize->add_control( 'gr_social_yt_settings', array(
  'type' => 'text',
  'section' => 'gr_social', // Add a default or your own section
  'label' => __( 'Youtube link' ),
    'settings' => 'gr_social_yt_settings'
) );

     $wp_customize->add_setting( 'gr_headerright_settings' , array(
        'type'          => 'theme_mod', 
        'transport'     => 'refresh',
         'priority'          => 2, 
    ) );

	
	
	
    $wp_customize->add_control( 'gr_headerright_settings', array(
      'type' => 'text',
      'section' => 'gr_logo', // Add a default or your own section
      'label' => __( 'Header Right Margin Top' ),
      'description' => __( 'No px needed, exmaple value: 35 or 50' ),
    ) );
	
	
	
      $wp_customize->add_setting( 'gr_body_background_settings' , array(
        'type'          => 'theme_mod', 
        'transport'     => 'refresh',
    ) );
    
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gr_body_background_settings', array(
        'label' => 'Body Background',
        'section' => 'gr_colors',
        'settings' => 'gr_body_background_settings'
 
    )));
    $wp_customize->add_setting( 'gr_header_background_settings' , array(
        'type'          => 'theme_mod', 
        'transport'     => 'refresh',
    ) );
    
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gr_header_background_settings', array(
        'label' => 'header Background Color',
        'section' => 'gr_logo',
        'settings' => 'gr_header_background_settings'
 
    )));
        $wp_customize->add_setting( 'gr_toggle_settings' , array(
        'type'          => 'theme_mod', 
        'transport'     => 'refresh',
    ) );
    
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gr_toggle_settings', array(
        'label' => 'Color of toggle menu (hamburger)',
        'section' => 'gr_logo',
        'settings' => 'gr_toggle_settings'
 
    )));
	    $wp_customize->add_setting( 'gr_menu_color_setting' , array(
        'type'          => 'theme_mod', 
        'transport'     => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gr_menu_color_setting', array(
        'label' => 'Menu Color',
        'section' => 'gr_logo',
        'settings' => 'gr_menu_color_setting'
 
    )));
 
    $wp_customize->add_setting( 'gr_body_color_setting' , array(
        'type'          => 'theme_mod', 
        'transport'     => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gr_body_color_setting', array(
        'label' => 'Body text  color  ',
        'section' => 'gr_colors',
        'settings' => 'gr_body_color_setting'
 
    )));
 
  $wp_customize->add_setting( 'gr_header_mode_settings' , array(
        'type'          => 'theme_mod', 
        'transport'     => 'refresh',
    ) );
    
$wp_customize->add_control( 'gr_header_mode_settings', array(
	'label'      => __('Navigation Options', 'gremza22'),
	'section'    => 'gr_logo',
	'settings'   => 'gr_header_mode_settings',
	'type'       => 'select',
        'choices'    => array( 
          '1' => __('Menu right', 'gremza22'),
          '2' => __('Full length menu', 'gremza22'),
          '3' => __('Trasparent Header', 'gremza22'),
          
          
        ),
) );

 
    $wp_customize->add_setting( 'gr_menu_color_setting' , array(
        'type'          => 'theme_mod', 
        'transport'     => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gr_menu_color_setting', array(
        'label' => 'Menu Color',
        'section' => 'gr_logo',
        'settings' => 'gr_menu_color_setting'
 
    )));
 

    $wp_customize->add_setting( 'gr_submenu_setting' , array(
        'type'          => 'theme_mod', 
        'transport'     => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gr_submenu_setting', array(
        'label' => 'Submenu Background Color',
        'section' => 'gr_logo',
        'settings' => 'gr_submenu_setting'
 
    )));
 


    $wp_customize->add_setting( 'gr_menu_sub_color_setting' , array(
        'type'          => 'theme_mod', 
        'transport'     => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gr_menu_sub_color_setting', array(
        'label' => 'Submenu   Color',
        'section' => 'gr_logo',
        'settings' => 'gr_menu_sub_color_setting'
 
    )));
 
    
    $wp_customize->add_setting( 'gr_menu_active_setting' , array(
        'type'          => 'theme_mod', 
        'transport'     => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gr_menu_active_setting', array(
        'label' => 'Active Menu Color',
        'section' => 'gr_logo',
        'settings' => 'gr_menu_active_setting'
 
    )));
    
//content

$wp_customize->add_setting( 'gr_font_content_select_settings' , array(
    'type'          => 'theme_mod', 
    'transport'     => 'refresh',
) );

$wp_customize->add_control( 'gr_font_content_select_settings', array(
'label'      => __('Font Contnet Selector', 'gremza22'),
'section'    => 'gr_logo',
'settings'   => 'gr_font_content_select_settings',
'type'       => 'select',
    'choices'    => array( 
      'Raleway' => __('Raleway', 'gremza22'),
      'Monda' => __('Monda', 'gremza22'),
      'Anton' => __('Anton', 'gremza22'),
      'Staatliches' => __('Staatliches', 'gremza22'),
      'Kalam' => __('Kalam', 'gremza22'),
      'Merienda' => __('Merienda', 'gremza22'),
      'Mukta' => __('Mukta', 'gremza22'),
      'Roboto' => __('Roboto', 'gremza22'),
     'Bebas Neue'=> __('Bebas Neue', 'gremza22'),
      'Montserrat'=> __('Montserrat', 'gremza22'),
    ),
) );

$wp_customize->add_setting( 'gr_font_content_weight_settings' , array(
    'type'          => 'theme_mod', 
    'transport'     => 'refresh',
) );

$wp_customize->add_control( 'gr_font_content_weight_settings', array(
'label'      => __('Font Content Weight', 'gremza22'),
'section'    => 'gr_logo',
'settings'   => 'gr_font_content_weight_settings',
'type'       => 'select',
    'choices'    => array( 
      'normal' => __('Normal', 'gremza22'),
      'Bold' => __('bold', 'gremza22'),
      'lighter' => __('Lighter', 'gremza22'),
      '100' => __('100', 'gremza22'),
      '200' => __('200', 'gremza22'),
      '400' => __('400', 'gremza22'),
      '800' => __('800', 'gremza22'),
     
      
    ),
) );

$wp_customize->add_setting( 'gr_font_content_size_settings' , array(
    'type'          => 'theme_mod', 
    'transport'     => 'refresh',
) );

$wp_customize->add_control( 'gr_font_content_size_settings', array(
'type' => 'text',
'section' => 'gr_logo', // Add a default or your own section
'label' => __( 'Font Size' ),
'description' => __( 'font must be in number expamle 12' ),
) );




//menuja
 $wp_customize->add_setting( 'gr_font_select_settings' , array(
        'type'          => 'theme_mod', 
        'transport'     => 'refresh',
    ) );
    
$wp_customize->add_control( 'gr_font_select_control', array(
	'label'      => __('Menu Font Selector', 'gremza22'),
	'section'    => 'gr_logo',
	'settings'   => 'gr_font_select_settings',
	'type'       => 'select',
        'choices'    => array( 
          'Raleway' => __('Raleway', 'gremza22'),
          'Monda' => __('Monda', 'gremza22'),
          'Anton' => __('Anton', 'gremza22'),
          'Staatliches' => __('Staatliches', 'gremza22'),
          'Kalam' => __('Kalam', 'gremza22'),
          'Merienda' => __('Merienda', 'gremza22'),
          'Mukta' => __('Mukta', 'gremza22'),
		  'Roboto' => __('Roboto', 'gremza22'),
         'Bebas Neue'=> __('Bebas Neue', 'gremza22'),
          'Montserrat'=> __('Montserrat', 'gremza22'),
        ),
) );


 $wp_customize->add_setting( 'gr_font_weight_settings' , array(
        'type'          => 'theme_mod', 
        'transport'     => 'refresh',
    ) );
    
$wp_customize->add_control( 'gr_font_weight_settings', array(
	'label'      => __('Font Weight', 'gremza22'),
	'section'    => 'gr_logo',
	'settings'   => 'gr_font_weight_settings',
	'type'       => 'select',
        'choices'    => array( 
          'normal' => __('Normal', 'gremza22'),
          'Bold' => __('bold', 'gremza22'),
          'lighter' => __('Lighter', 'gremza22'),
          '100' => __('100', 'gremza22'),
          '200' => __('200', 'gremza22'),
          '400' => __('400', 'gremza22'),
          '800' => __('800', 'gremza22'),
         
          
        ),
) );

 $wp_customize->add_setting( 'gr_font_size_settings' , array(
        'type'          => 'theme_mod', 
        'transport'     => 'refresh',
    ) );
    
$wp_customize->add_control( 'gr_font_size_settings', array(
  'type' => 'text',
  'section' => 'gr_logo', // Add a default or your own section
  'label' => __( 'Font Size' ),
  'description' => __( 'font must be in number expamle 12' ),
) );






//H1 fonts settings

$wp_customize->add_section( 'gr_fonts' , array(
        'title'             => __('Font and text', 'gremza22'),
        'priority'          => 1, 
        'panel'             => 'gr_header',
    ) );

//h1
 $wp_customize->add_setting( 'gr_h1_select_settings' , array(
        'type'          => 'theme_mod', 
        'transport'     => 'refresh',
    ) );
    
$wp_customize->add_control( 'gr_h1_select_control', array(
	'label'      => __('Font H1 Selector', 'gremza22'),
	'section'    => 'gr_fonts',
	'settings'   => 'gr_h1_select_settings',
	'type'       => 'select',
        'choices'    => array( 
          'Raleway' => __('Raleway', 'gremza22'),
          'Monda' => __('Monda', 'gremza22'),
          'Anton' => __('Anton', 'gremza22'),
          'Staatliches' => __('Staatliches', 'gremza22'),
          'Kalam' => __('Kalam', 'gremza22'),
          'Merienda' => __('Merienda', 'gremza22'),
          'Anton' => __('Anton', 'gremza22'),
          'Bebas Neue'=> __('Bebas', 'gremza22'),
          'Montserrat'=> __('Montserrat', 'gremza22'),
        ),
) );


 $wp_customize->add_setting( 'gr_h1_weight_settings' , array(
        'type'          => 'theme_mod', 
        'transport'     => 'refresh',
    ) );
    
$wp_customize->add_control( 'gr_h1_weight_settings', array(
	'label'      => __('Font H1 Weight', 'gremza22'),
	'section'    => 'gr_fonts',
	'settings'   => 'gr_h1_weight_settings',
	'type'       => 'select',
        'choices'    => array( 
          'normal' => __('Normal', 'gremza22'),
          'Bold' => __('bold', 'gremza22'),
          'lighter' => __('Lighter', 'gremza22'),
          '100' => __('100', 'gremza22'),
          '200' => __('200', 'gremza22'),
          '400' => __('400', 'gremza22'),
          '800' => __('800', 'gremza22'),
         
          
        ),
) );

 $wp_customize->add_setting( 'gr_h1_size_settings' , array(
        'type'          => 'theme_mod', 
        'transport'     => 'refresh',
    ) );
    
$wp_customize->add_control( 'gr_h1_size_settings', array(
  'type' => 'text',
  'section' => 'gr_fonts', // Add a default or your own section
  'label' => __( 'H1 Font Size' ),
  'description' => __( 'font must be in number expamle 12' ),
) );


//h2

 $wp_customize->add_setting( 'gr_h2_select_settings' , array(
        'type'          => 'theme_mod', 
        'transport'     => 'refresh',
    ) );
    
$wp_customize->add_control( 'gr_h2_select_control', array(
	'label'      => __('Font H2 Selector', 'gremza22'),
	'section'    => 'gr_fonts',
	'settings'   => 'gr_h2_select_settings',
	'type'       => 'select',
        'choices'    => array( 
          'Raleway' => __('Raleway', 'gremza22'),
          'Monda' => __('Monda', 'gremza22'),
          'Anton' => __('Anton', 'gremza22'),
          'Staatliches' => __('Staatliches', 'gremza22'),
          'Kalam' => __('Kalam', 'gremza22'),
          'Merienda' => __('Merienda', 'gremza22'),
          'Anton' => __('Anton', 'gremza22'),
          'Bebas Neue'=> __('Bebas', 'gremza22'),
          'Montserrat'=> __('Montserrat', 'gremza22'),
        ),
) );


 $wp_customize->add_setting( 'gr_h2_weight_settings' , array(
        'type'          => 'theme_mod', 
        'transport'     => 'refresh',
    ) );
    
$wp_customize->add_control( 'gr_h2_weight_settings', array(
	'label'      => __('Font H2 Weight', 'gremza22'),
	'section'    => 'gr_fonts',
	'settings'   => 'gr_h2_weight_settings',
	'type'       => 'select',
        'choices'    => array( 
          'normal' => __('Normal', 'gremza22'),
          'Bold' => __('bold', 'gremza22'),
          'lighter' => __('Lighter', 'gremza22'),
          '100' => __('100', 'gremza22'),
          '200' => __('200', 'gremza22'),
          '400' => __('400', 'gremza22'),
          '800' => __('800', 'gremza22'),
         
          
        ),
) );

 $wp_customize->add_setting( 'gr_h2_size_settings' , array(
        'type'          => 'theme_mod', 
        'transport'     => 'refresh',
    ) );
    
$wp_customize->add_control( 'gr_h2_size_settings', array(
  'type' => 'text',
  'section' => 'gr_fonts', // Add a default or your own section
  'label' => __( 'H2 Font Size' ),
  'description' => __( 'font must be in number expamle 12' ),
) );


//h3

 $wp_customize->add_setting( 'gr_h3_select_settings' , array(
        'type'          => 'theme_mod', 
        'transport'     => 'refresh',
    ) );
    
$wp_customize->add_control( 'gr_h3_select_control', array(
	'label'      => __('Font H3 Selector', 'gremza22'),
	'section'    => 'gr_fonts',
	'settings'   => 'gr_h3_select_settings',
	'type'       => 'select',
        'choices'    => array( 
          'Raleway' => __('Raleway', 'gremza22'),
          'Monda' => __('Monda', 'gremza22'),
          'Anton' => __('Anton', 'gremza22'),
          'Staatliches' => __('Staatliches', 'gremza22'),
          'Kalam' => __('Kalam', 'gremza22'),
          'Merienda' => __('Merienda', 'gremza22'),
          'Anton' => __('Anton', 'gremza22'),
          'Bebas Neue'=> __('Bebas', 'gremza22'),
          'Montserrat'=> __('Montserrat', 'gremza22'),
        ),
) );


 $wp_customize->add_setting( 'gr_h3_weight_settings' , array(
        'type'          => 'theme_mod', 
        'transport'     => 'refresh',
    ) );
    
$wp_customize->add_control( 'gr_h3_weight_settings', array(
	'label'      => __('Font H3 Weight', 'gremza22'),
	'section'    => 'gr_fonts',
	'settings'   => 'gr_h3_weight_settings',
	'type'       => 'select',
        'choices'    => array( 
          'normal' => __('Normal', 'gremza22'),
          'Bold' => __('bold', 'gremza22'),
          'lighter' => __('Lighter', 'gremza22'),
          '100' => __('100', 'gremza22'),
          '200' => __('200', 'gremza22'),
          '400' => __('400', 'gremza22'),
          '800' => __('800', 'gremza22'),
         
          
        ),
) );

 $wp_customize->add_setting( 'gr_h3_size_settings' , array(
        'type'          => 'theme_mod', 
        'transport'     => 'refresh',
    ) );
    
$wp_customize->add_control( 'gr_h3_size_settings', array(
  'type' => 'text',
  'section' => 'gr_fonts', // Add a default or your own section
  'label' => __( 'H3 Font Size' ),
  'description' => __( 'font must be in number expamle 12' ),
) );


//colors

$wp_customize->add_section( 'gr_colors' , array(
        'title'             => __('Colors', 'gremza22'),
        'priority'          => 1, 
        'panel'             => 'gr_header',
    ) );



 $wp_customize->add_setting( 'gr_a_color_settings' , array(
        'type'          => 'theme_mod', 
        'transport'     => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gr_a_color_settings', array(
        'label' => 'Links color',
        'section' => 'gr_colors',
        'settings' => 'gr_a_color_settings'
 
    )));
 

//socials
   
    $wp_customize->add_setting( 'gr_social_color_settings' , array(
        'type'          => 'theme_mod', 
        'transport'     => 'refresh',
    ) );


   $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gr_social_color', array(
        'label' => 'Social links color',
        'section' => 'gr_colors',
        'settings' => 'gr_social_color_settings'
 
    )));




 $wp_customize->add_setting( 'gr_top_color_settings' , array(
        'type'          => 'theme_mod', 
        'transport'     => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gr_top_color_settings', array(
        'label' => 'Top Color Text',
        'section' => 'gr_colors',
        'settings' => 'gr_top_color_settings'
 
    )));
 $wp_customize->add_setting( 'gr_top_bg_settings' , array(
        'type'          => 'theme_mod', 
        'transport'     => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gr_top_bg_settings', array(
        'label' => 'Top Background  ',
        'section' => 'gr_colors',
        'settings' => 'gr_top_bg_settings'
 
    )));

  //social svg dimessions
  
  
 $wp_customize->add_setting( 'gr_social_width_height_settings' , array(
        'type'          => 'theme_mod', 
        'transport'     => 'refresh',
    ) );
    
$wp_customize->add_control( 'gr_social_width_height_settings', array(
  'type' => 'text',
  'section' => 'gr_fonts', // Add a default or your own section
  'label' => __( 'Size in px ' ),
  'description' => __( 'Size is in pixel, there is no need to add px at the end. ex 30' ),
) );
 



























    }
    add_action( 'customize_register', 'gr_customize_register' );
?>