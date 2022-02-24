<?php
$fontih1=get_theme_mod( 'gr_h1_select_settings', 'Sans Source' );
$fontih2=get_theme_mod( 'gr_h2_select_settings', 'Sans Source' );
$fontih3=get_theme_mod( 'gr_h3_select_settings', 'Sans Source' );
switch ($fontih1) { 
  case "Anton":
    $fh1= "Anton";
    break;
  case "Raleway":
   $fh1=  "Raleway";
    break;
  case "Mukta":
    $fh1=  "Mukta";
    break;
  case "Monda":
    $fh1=  "Monda";
    break;
  case "Mukta":
    $fh1=  "Mukta";
    break;
  case "Staatliches":
    $fh1=  "Staatliches";
    break;
  case "Kalam":
    $fh1=  "Kalam";
    break;
  case "Merienda":
    $fh1=  "Merienda";
    break;
  case "Roboto":
    echo "Roboto";
    break;
  case "Bebas+Neue&display=swap":
    $fh1=  "Bebas Neue";
    break;
  case "Montserrat:wght@100&display=swap":
    $fh1=  "Montserrat";
    break;
  case "Cinzel+Decorative&display=swap":
    $fh1=  "Cinzel Decorative";
    break;
  default:
    $fh1=  "Kalam";
} 


switch ($fontih2) { 
    case "Anton":
        $fh2= "Anton";
        break;
      case "Raleway":
       $fh2=  "Raleway";
        break;
      case "Mukta":
        $fh2=  "Mukta";
        break;
      case "Monda":
        $fh2=  "Monda";
        break;
      case "Mukta":
        $fh2=  "Mukta";
        break;
      case "Staatliches":
        $fh2=  "Staatliches";
        break;
      case "Kalam":
        $fh2=  "Kalam";
        break;
      case "Merienda":
        $fh2=  "Merienda";
        break;
      case "Roboto":
        echo "Roboto";
        break;
      case "Bebas+Neue&display=swap":
        $fh2=  "Bebas Neue";
        break;
      case "Montserrat:wght@100&display=swap":
        $fh2=  "Montserrat";
        break;
      case "Cinzel+Decorative&display=swap":
        $fh2=  "Cinzel Decorative";
        break;
      default:
        $fh2=  "Kalam";
}

switch ($fontih3) { 
    case "Anton":
        $fh3= "Anton";
        break;
      case "Raleway":
       $fh3=  "Raleway";
        break;
      case "Mukta":
        $fh3=  "Mukta";
        break;
      case "Monda":
        $fh3=  "Monda";
        break;
      case "Mukta":
        $fh3=  "Mukta";
        break;
      case "Staatliches":
        $fh3=  "Staatliches";
        break;
      case "Kalam":
        $fh3=  "Kalam";
        break;
      case "Merienda":
        $fh3=  "Merienda";
        break;
      case "Roboto":
        echo "Roboto";
        break;
      case "Bebas+Neue&display=swap":
        $fh3=  "Bebas Neue";
        break;
      case "Montserrat:wght@100&display=swap":
        $fh3=  "Montserrat";
        break;
      case "Cinzel+Decorative&display=swap":
        $fh3=  "Cinzel Decorative";
        break;
      default:
        $fh3=  "Kalam";
}
  














?>
<style>
	body{
		background:<?php  echo  get_theme_mod( 'gr_body_background_settings', '#000' );?>;
		color:<?php   echo  get_theme_mod( 'gr_body_color_setting', '#fff' );?>;
        font-family:<?php  echo  get_theme_mod( 'gr_font_content_select_settings', 'Sans Source' );?>;
        font-size:<?php  echo  get_theme_mod( 'gr_font_content_size_settings', '16' );?>px;
        font-weight:<?php  echo  get_theme_mod( 'gr_font_content_weight_settings', 'normal' );?>;
	}
    
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
.navbar-default .navbar-nav > li > a  {
    color:<?php  echo  get_theme_mod( 'gr_menu_color_setting', '#fff' );?>;
    font-family:<?php  echo  get_theme_mod( 'gr_font_select_settings', 'Sans Source' );?>;
    font-size:<?php  echo  get_theme_mod( 'gr_font_size_settings', '16' );?>px;
    font-weight:<?php  echo  get_theme_mod( 'gr_font_weight_settings', 'normal' );?>;
}
.navbar-default .navbar-nav > .active > a,
.navbar-default .navbar-nav > .active > a:hover,
.navbar-default .navbar-nav > .active > a:focus {
  color:<?php  echo  get_theme_mod( 'gr_menu_active_setting', '#fff' );?>;
}

h1{
       font-family:<?php  echo $fh1?>!important; 
    font-size:<?php  echo  get_theme_mod( 'gr_h1_size_settings', '16' );?>px !important; 
    font-weight:<?php  echo  get_theme_mod( 'gr_h1_weight_settings', 'normal' );?>;
    color:<?php  echo  get_theme_mod( 'gr_h1_color_settings', 'black' );?>;
}
h2{
      font-family:<?php  echo $fh2;?>!important; 
    font-size:<?php  echo  get_theme_mod( 'gr_h2_size_settings', '16' );?>px !important; 
    font-weight:<?php  echo  get_theme_mod( 'gr_h2_weight_settings', 'normal' );?>;
    color:<?php  echo  get_theme_mod( 'gr_h2_color_settings', 'black' );?>;
}
h3{
       font-family:<?php  echo $fh3;?>!important; 
    font-size:<?php  echo  get_theme_mod( 'gr_h3_size_settings', '16' );?>px !important; 
    font-weight:<?php  echo  get_theme_mod( 'gr_h3_weight_settings', 'normal' );?>;
    color:<?php  echo  get_theme_mod( 'gr_h3_color_settings', 'black' );?>;
}
h4{
       font-family:<?php  echo $fh3;?>!important; 
    font-size:<?php  echo  get_theme_mod( 'gr_h3_size_settings', '16' );?>px !important; 
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
    font-family:<?php echo  get_theme_mod( 'gr_font_top_select_settings', 'Sans Source' );?> ;  
    font-size:<?php  echo  get_theme_mod( 'gr_font_top_size_settings', '16' );?>px !important; 
    font-weight:<?php  echo  get_theme_mod( 'gr_font_top_weight_settings', 'normal' );?>;
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
.subfooter {
    background-color: <?php  echo  get_theme_mod( 'gr_subfooter_bg_settings', '#333' );?>;
}

</style>

