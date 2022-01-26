<style>
	body{
		background:<?php  echo  get_theme_mod( 'gr_body_background_settings', '#000' );?>;
		color:<?php   echo  get_theme_mod( 'gr_body_color_setting', '#fff' );?>;
        font-family:<?php  echo  get_theme_mod( 'gr_font_content_select_settings', 'arial' );?>;
        font-size:<?php  echo  get_theme_mod( 'gr_font_content_size_settings', '16' );?>px;
        font-weight:<?php  echo  get_theme_mod( 'gr_font_content_weight_settings', 'normal' );?>;
	}

#logo{
    width:<?php  echo  get_theme_mod( 'gr_logo_width_settings', '150' );?>px;
}
.headerright{
		margin-top:<?php  echo  get_theme_mod( 'gr_headerright_settings', '30' )."px";?>;  
	}
.dropdown-menu {
    background-color: <?php  echo  get_theme_mod( 'gr_submenu_setting', '#fff' );?>;
     
}
.dropdown-menu > li > a {
        color:<?php   echo  get_theme_mod( 'gr_menu_sub_color_setting', '#fff' );?>;
}
.navbar-default .navbar-nav > li > a  {
    color:<?php  echo  get_theme_mod( 'gr_menu_color_setting', '#fff' );?>;
    font-family:<?php  echo  get_theme_mod( 'gr_font_select_settings', 'arial' );?>;
    font-size:<?php  echo  get_theme_mod( 'gr_font_size_settings', '16' );?>px;
    font-weight:<?php  echo  get_theme_mod( 'gr_font_weight_settings', 'normal' );?>;
}
.navbar-default .navbar-nav > .active > a,
.navbar-default .navbar-nav > .active > a:hover,
.navbar-default .navbar-nav > .active > a:focus {
  color:<?php  echo  get_theme_mod( 'gr_menu_active_setting', '#fff' );?>;
}

h1{
    font-family:<?php  echo  get_theme_mod( 'gr_h1_select_settings', 'arial' );?>;
    font-size:<?php  echo  get_theme_mod( 'gr_h1_size_settings', '16' );?>px;
    font-weight:<?php  echo  get_theme_mod( 'gr_h1_weight_settings', 'normal' );?>;
    color:<?php  echo  get_theme_mod( 'gr_h1_color_settings', 'black' );?>;
}
h2{
    font-family:<?php  echo  get_theme_mod( 'gr_h2_select_settings', 'arial' );?>;
    font-size:<?php  echo  get_theme_mod( 'gr_h2_size_settings', '16' );?>px;
    font-weight:<?php  echo  get_theme_mod( 'gr_h2_weight_settings', 'normal' );?>;
    color:<?php  echo  get_theme_mod( 'gr_h2_color_settings', 'black' );?>;
}
h3{
    font-family:<?php  echo  get_theme_mod( 'gr_h3_select_settings', 'arial' );?>;
    font-size:<?php  echo  get_theme_mod( 'gr_h3_size_settings', '16' );?>px;
    font-weight:<?php  echo  get_theme_mod( 'gr_h3_weight_settings', 'normal' );?>;
    color:<?php  echo  get_theme_mod( 'gr_h3_color_settings', 'black' );?>;
}
a {
        color:<?php  echo  get_theme_mod( 'gr_a_color_settings', '#333' );?>;
}
.navbar-default .navbar-toggle .icon-bar {
  background-color: <?php  echo  get_theme_mod( 'gr_toggle_settings', '#fff' );?>;
}

.cart button  { background-color: <?php  echo  get_theme_mod( 'gr_a_color_settings', '#333' )?>!important;}

.top{ 
	 background:<?php  echo  get_theme_mod( 'gr_top_bg_settings', '#000' );?>;
	 color:<?php  echo  get_theme_mod( 'gr_top_color_settings', '#fff' );?>;
}


.socialblock svg{
    fill:<?php  echo  get_theme_mod( 'gr_social_color_settings', '#fff' );?>;
	width:<?php  echo  get_theme_mod( 'gr_social_width_height_settings', '30px' );?>px;
	height:<?php  echo  get_theme_mod( 'gr_social_width_height_settings', '30px' );?>px;
}
.socialblock svg:hover{
    opacity: 0.7;
}


</style>
