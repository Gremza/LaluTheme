<?php
require_once dirname( __FILE__ ) . '/fonts.php';

// Load Google Fonts
if (!empty($fonts_to_load)) {
    $fonts_combined = implode('&family=', $fonts_to_load);
    echo '<link href="https://fonts.googleapis.com/css2?family=' . $fonts_combined . '&display=swap" rel="stylesheet">';
}
?>



<style>
	body{
    background:<?php echo get_theme_mod( 'gr_body_background_settings', '#000' ); ?> !important; 
    color:<?php echo get_theme_mod( 'gr_body_color_setting', '#fff' ); ?>;
    font-family:<?php echo $fh5; ?>, sans-serif !important; 
    font-size:<?php echo get_theme_mod( 'gr_font_content_size_settings', '16' ); ?>px !important; 
    font-weight:<?php echo get_theme_mod( 'gr_font_content_weight_settings', '400' ); ?> !important;
} 
#logo img {
   
	    width:<?php  echo  get_theme_mod( 'gr_logo_width_settings', '150' ).'px'; ?>;
 
}
.headerright{
		margin-top:<?php  echo  get_theme_mod( 'gr_headerright_settings', '30' )."px";?>;  
	}
.dropdown-menu  {
    background-color: <?php  echo  get_theme_mod( 'gr_submenu_setting', '#fff' );?>;
     
}
.dropdown-menu > li > a {
        color:<?php   echo  get_theme_mod( 'gr_menu_sub_color_setting', '#fff' );?>;
}
.navbar-default .navbar-nav > li > a {
    color:<?php echo get_theme_mod( 'gr_menu_color_setting', '#fff' ); ?>;
    font-family:<?php echo $fh6; ?>, sans-serif !important; 
    font-size:<?php echo get_theme_mod( 'gr_font_size_settings', '16' ); ?>px !important; 
    font-weight:<?php echo get_theme_mod( 'gr_font_weight_settings', '400' ); ?> !important;
}
.navbar-default .navbar-nav > .active > a,
.navbar-default .navbar-nav > .active > a:hover,
.navbar-default .navbar-nav > .active > a:focus {
  color:<?php  echo  get_theme_mod( 'gr_menu_active_setting', '#fff' );?>;
}

h1{
    font-family:<?php echo $fh1; ?>, sans-serif !important; 
    font-size:<?php echo get_theme_mod( 'gr_h1_size_settings', '16' ); ?>px !important; 
    font-weight:<?php echo get_theme_mod( 'gr_h1_weight_settings', '400' ); ?> !important;
    color:<?php echo get_theme_mod( 'gr_h1_color_settings', 'black' ); ?>;
}
h2{
    font-family:<?php echo $fh2; ?>, sans-serif !important; 
    font-size:<?php echo get_theme_mod( 'gr_h2_size_settings', '16' ); ?>px !important; 
    font-weight:<?php echo get_theme_mod( 'gr_h2_weight_settings', '400' ); ?> !important;
    color:<?php echo get_theme_mod( 'gr_h2_color_settings', 'black' ); ?>;
}
h3{
    font-family:<?php echo $fh3; ?>, sans-serif !important; 
    font-size:<?php echo get_theme_mod( 'gr_h3_size_settings', '16' ); ?>px !important; 
    font-weight:<?php echo get_theme_mod( 'gr_h3_weight_settings', '400' ); ?> !important;
    color:<?php echo get_theme_mod( 'gr_h3_color_settings', 'black' ); ?>;
}
h4{
    font-family:<?php echo $fh4; ?>, sans-serif !important; 
    font-size:<?php echo get_theme_mod( 'gr_h4_size_settings', '16' ); ?>px !important; 
    font-weight:<?php echo get_theme_mod( 'gr_h4_weight_settings', '400' ); ?> !important;
    color:<?php echo get_theme_mod( 'gr_h4_color_settings', 'black' ); ?>;
}
a {
        color:<?php  echo  get_theme_mod( 'gr_a_color_settings', '#333' );?>;
}
.navbar-default .navbar-toggle .icon-bar {
  background-color: <?php  echo  get_theme_mod( 'gr_toggle_settings', '#fff' );?>;
}

.cart button  { background-color: <?php  echo  get_theme_mod( 'gr_a_color_settings', '#333' )?>!important;}

.top{ 
    background:<?php echo get_theme_mod( 'gr_top_bg_settings', '#000' ); ?>;
    color:<?php echo get_theme_mod( 'gr_top_color_settings', '#fff' ); ?>;
    font-family:<?php echo $fh7; ?>, sans-serif !important; 
    font-size:<?php echo get_theme_mod( 'gr_font_top_size_settings', '16' ); ?>px !important; 
    font-weight:<?php echo get_theme_mod( 'gr_font_top_weight_settings', '400' ); ?> !important;
}


.socialblock svg{
    fill:<?php  echo  get_theme_mod( 'gr_social_color_settings', '#fff' );?>;
	width:<?php  echo  get_theme_mod( 'gr_social_width_height_settings', '21px' );?>px;
	height:<?php  echo  get_theme_mod( 'gr_social_width_height_settings', '21px' );?>px;
}

.footer {
    background-color: <?php  echo  get_theme_mod( 'gr_footer_bg_settings', '#ccc' );?>;
    color: <?php  echo  get_theme_mod( 'gr_footer_txt_settings', '#fff' );?>;
}
.footer li, .footer li a {
    color: <?php  echo  get_theme_mod( 'gr_footer_txt_settings', '#fff' );?>;    
   

}
.subfooter , .left_subfooter , .right_subfooter {
    background-color: <?php  echo  get_theme_mod( 'gr_subfooter_bg_settings', '#333' );?>;
    font-size: <?php  echo  get_theme_mod( 'gr_subfooter_text_size_settings', '10' );?>px;
     
    }
}
 
.cd-top {
  background:<?php  // echo  get_theme_mod( 'gr_a_color_settings', '#333' );?>;
  
}

#headbar , #header {   
  background:<?php  echo  get_theme_mod( 'gr_header_background_settings', '#000' );?>;
   z-index: 999;
 }
 @media (min-width: 601px) {
 .navbar-nav{
     float:<?php  echo  get_theme_mod( 'gr_position_select_settings', 'left' );?>!important;
     
 }
 }
 @media only screen and (max-width: 600px) {
 .navbar-nav{
     float:left;
     
 }
 }








</style>