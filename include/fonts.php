<?php
// Google Fonts Configuration
function get_google_fonts_list() {
    return array(
        'Roboto' => 'Roboto:wght@100;300;400;500;700;900',
        'Open Sans' => 'Open+Sans:wght@300;400;500;600;700;800',
        'Lato' => 'Lato:wght@100;300;400;700;900',
        'Montserrat' => 'Montserrat:wght@100;200;300;400;500;600;700;800;900',
        'Oswald' => 'Oswald:wght@200;300;400;500;600;700',
        'Source Sans Pro' => 'Source+Sans+Pro:wght@200;300;400;600;700;900',
        'Raleway' => 'Raleway:wght@100;200;300;400;500;600;700;800;900',
        'Poppins' => 'Poppins:wght@100;200;300;400;500;600;700;800;900',
        'PT Sans' => 'PT+Sans:wght@400;700',
        'Nunito' => 'Nunito:wght@200;300;400;500;600;700;800;900',
        'Ubuntu' => 'Ubuntu:wght@300;400;500;700',
        'Playfair Display' => 'Playfair+Display:wght@400;500;600;700;800;900',
        'Merriweather' => 'Merriweather:wght@300;400;700;900',
        'Inter' => 'Inter:wght@100;200;300;400;500;600;700;800;900',
        'Noto Sans' => 'Noto+Sans:wght@100;200;300;400;500;600;700;800;900',
        'Rubik' => 'Rubik:wght@300;400;500;600;700;800;900',
        'Work Sans' => 'Work+Sans:wght@100;200;300;400;500;600;700;800;900',
        'Fira Sans' => 'Fira+Sans:wght@100;200;300;400;500;600;700;800;900',
        'Crimson Text' => 'Crimson+Text:wght@400;600;700',
        'Libre Baskerville' => 'Libre+Baskerville:wght@400;700',
        'Droid Sans' => 'Droid+Sans:wght@400;700',
        'PT Serif' => 'PT+Serif:wght@400;700',
        'Titillium Web' => 'Titillium+Web:wght@200;300;400;600;700;900',
        'Muli' => 'Muli:wght@200;300;400;500;600;700;800;900',
        'Oxygen' => 'Oxygen:wght@300;400;700',
        'Lora' => 'Lora:wght@400;500;600;700',
        'Slabo 27px' => 'Slabo+27px',
        'Arimo' => 'Arimo:wght@400;500;600;700',
        'Hind' => 'Hind:wght@300;400;500;600;700',
        'Roboto Slab' => 'Roboto+Slab:wght@100;200;300;400;500;600;700;800;900',
        'Francois One' => 'Francois+One',
        'Mukta' => 'Mukta:wght@200;300;400;500;600;700;800',
        'Archivo' => 'Archivo:wght@100;200;300;400;500;600;700;800;900',
        'Anton' => 'Anton',
        'Vollkorn' => 'Vollkorn:wght@400;500;600;700;800;900',
        'Exo' => 'Exo:wght@100;200;300;400;500;600;700;800;900',
        'Josefin Sans' => 'Josefin+Sans:wght@100;200;300;400;500;600;700',
        'Cabin' => 'Cabin:wght@400;500;600;700',
        'Fjalla One' => 'Fjalla+One',
        'Libre Franklin' => 'Libre+Franklin:wght@100;200;300;400;500;600;700;800;900',
        'Cormorant Garamond' => 'Cormorant+Garamond:wght@300;400;500;600;700',
        'Karla' => 'Karla:wght@200;300;400;500;600;700;800',
        'Quicksand' => 'Quicksand:wght@300;400;500;600;700',
        'Bitter' => 'Bitter:wght@100;200;300;400;500;600;700;800;900',
        'Inconsolata' => 'Inconsolata:wght@200;300;400;500;600;700;800;900',
        'Dosis' => 'Dosis:wght@200;300;400;500;600;700;800',
        'BenchNine' => 'BenchNine:wght@300;400;700',
        'Abril Fatface' => 'Abril+Fatface',
        'Pacifico' => 'Pacifico',
        'Lobster' => 'Lobster',
        'Dancing Script' => 'Dancing+Script:wght@400;500;600;700',
        'Comfortaa' => 'Comfortaa:wght@300;400;500;600;700',
        'Shadows Into Light' => 'Shadows+Into+Light'
    );
}

function get_google_font_weights() {
    return array(
        '100' => 'Thin (100)',
        '200' => 'Extra Light (200)',
        '300' => 'Light (300)',
        '400' => 'Regular (400)',
        '500' => 'Medium (500)',
        '600' => 'Semi Bold (600)',
        '700' => 'Bold (700)',
        '800' => 'Extra Bold (800)',
        '900' => 'Black (900)'
    );
}

// Get font selections from customizer
$fontih1 = get_theme_mod( 'gr_h1_select_settings', 'Roboto' );
$fontih2 = get_theme_mod( 'gr_h2_select_settings', 'Roboto' );
$fontih3 = get_theme_mod( 'gr_h3_select_settings', 'Roboto' );
$fontih4 = get_theme_mod( 'gr_h4_select_settings', 'Roboto' );
$fontihcontent = get_theme_mod( 'gr_font_content_select_settings', 'Roboto' );
$fontimenu = get_theme_mod( 'gr_font_select_settings', 'Roboto' );
$fonttop = get_theme_mod( 'gr_font_top_select_settings', 'Roboto' );

// Set font family variables for use in styles
$fh1 = $fontih1;
$fh2 = $fontih2;
$fh3 = $fontih3;
$fh4 = $fontih4;
$fh5 = $fontihcontent;
$fh6 = $fontimenu;
$fh7 = $fonttop;

// Generate Google Fonts URLs
$google_fonts_list = get_google_fonts_list();
$fonts_to_load = array();

// Collect unique fonts
$used_fonts = array($fontih1, $fontih2, $fontih3, $fontih4, $fontihcontent, $fontimenu, $fonttop);
$unique_fonts = array_unique($used_fonts);

foreach ($unique_fonts as $font) {
    if (isset($google_fonts_list[$font])) {
        $fonts_to_load[] = $google_fonts_list[$font];
    }
}
?>