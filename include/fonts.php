<?php
$fontih1=get_theme_mod( 'gr_h1_select_settings', 'Sans Source' );
$fontih2=get_theme_mod( 'gr_h2_select_settings', 'Sans Source' );
$fontih3=get_theme_mod( 'gr_h3_select_settings', 'Sans Source' );
$fontih4=get_theme_mod( 'gr_h4_select_settings', 'Sans Source' );
$fontihcontent=get_theme_mod( 'gr_font_content_select_settings', 'Sans Source' );
$fontimenu=get_theme_mod( 'gr_font_select_settings', 'Sans Source' );


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

switch ($fontih4) { 
  case "Anton":
      $fh4= "Anton";
      break;
    case "Raleway":
     $fh4=  "Raleway";
      break;
    case "Mukta":
      $fh4=  "Mukta";
      break;
    case "Monda":
      $fh4=  "Monda";
      break;
    case "Mukta":
      $fh4=  "Mukta";
      break;
    case "Staatliches":
      $fh4=  "Staatliches";
      break;
    case "Kalam":
      $fh4=  "Kalam";
      break;
    case "Merienda":
      $fh4=  "Merienda";
      break;
    case "Roboto":
      echo "Roboto";
      break;
    case "Bebas+Neue&display=swap":
      $fh4=  "Bebas Neue";
      break;
    case "Montserrat:wght@100&display=swap":
      $fh4=  "Montserrat";
      break;
    case "Cinzel+Decorative&display=swap":
      $fh4=  "Cinzel Decorative";
      break;
    default:
      $fh4=  "Kalam";
}
  
switch ($fontihcontent)  { 
    case 'Anton':  
        $fh5= "Anton";
         $fontchoice =FALSE;
        break;
      case "Raleway":
       $fh5=  "Raleway";
        break;
      case "Mukta":
        $fh5=  "Mukta";
        break;
      case "Monda":
        $fh5=  "Monda";
        break;
      case "Mukta":
        $fh5=  "Mukta";
        break;
      case "Staatliches":
        $fh5=  "Staatliches";
        break;
      case "Kalam":
        $fh5=  "Kalam";
        break;
      case "Merienda":
        $fh5=  "Merienda";
        break;
      case "Roboto":
        echo "Roboto";
        break;
      case "Bebas+Neue&display=swap":
        $fh5=  "Bebas Neue";
        break;
      case "Montserrat:wght@100&display=swap":
        $fh5=  "Montserrat";
        break;
      case "Cinzel+Decorative&display=swap":
        $fh5=  "Cinzel Decorative";
        break;
	case 'corporates':
            $fh5=  "corporates";
           $fontchoice =TRUE;
            break;  
      default:
        $fh5=  "Kalam";
  }
     
switch ($fontimenu) { 
    case "Anton":
        $fh6= "Anton";
        break;
      case "Raleway":
       $fh6=  "Raleway";
        break;
      case "Mukta":
        $fh6=  "Mukta";
        break;
      case "Monda":
        $fh6=  "Monda";
        break;
      case "Mukta":
        $fh6=  "Mukta";
        break;
      case "Staatliches":
        $fh6=  "Staatliches";
        break;
      case "Kalam":
        $fh6=  "Kalam";
        break;
      case "Merienda":
        $fh6=  "Merienda";
        break;
      case "Roboto":
        echo "Roboto";
        break;
      case "Bebas+Neue&display=swap":
        $fh6=  "Bebas Neue";
        break;
      case "Montserrat:wght@100&display=swap":
        $fh6=  "Montserrat";
        break;
      case "Cinzel+Decorative&display=swap":
        $fh6=  "Cinzel Decorative";
        break;
      default:
        $fh6=  "Kalam";
  }
    













?>