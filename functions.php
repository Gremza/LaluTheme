<?php
require_once dirname( __FILE__ ) . '/include/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'lalutheme_register_required_plugins' );

/**
 * Register the required plugins for this theme.
 *
 * In this example, we register five plugins:
 * - one included with the TGMPA library
 * - two from an external source, one from an arbitrary source, one from a GitHub repository
 * - two from the .org repo, where one demonstrates the use of the `is_callable` argument
 *
 * The variables passed to the `tgmpa()` function should be:
 * - an array of plugin arrays;
 * - optionally a configuration array.
 * If you are not changing anything in the configuration array, you can remove the array and remove the
 * variable from the function call: `tgmpa( $plugins );`.
 * In that case, the TGMPA default settings will be used.
 *
 * This function is hooked into `tgmpa_register`, which is fired on the WP `init` action on priority 10.
 */
function lalutheme_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		// This is an example of how to include a plugin bundled with a theme.
		array(
			'name'               => 'Slider Revolution', // The plugin name.
			'slug'               => 'revslider', // The plugin slug (typically the folder name).
			'source'             => get_template_directory() . '/plugins/revslider.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),
		array(
			'name'               => 'WPBakery Page Builder', // The plugin name.
			'slug'               => 'js_composer', // The plugin slug (typically the folder name).
			'source'             => get_template_directory() . '/plugins/js_composer.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),
		 
	 
		array(
			'name'      => 'Classic Editor',
			'slug'      => 'classic-editor',
			'required'  => false,
		),

	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'lalutheme',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

		 
	);

	tgmpa( $plugins, $config );
}
 

  

require get_template_directory() . '/update/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
    'https://gremza.com/lalu/info.json',
    __FILE__,
    'lalutheme'
);
 

require get_template_directory() . '/include/wp_bootstrap_navwalker.php';
require get_template_directory() . '/include/costumizer.php';
 function gu_add_image_responsive_class($content){
   global $post;
   $pattern ="/<img(.*?)class=\"(.*?)\"(.*?)>/i";
   $replacement = '<img$1class="$2 img-responsive img-shadow"$3>';
   $content = preg_replace($pattern, $replacement, $content);
   return $content;
}

add_filter('the_content', 'gu_add_image_responsive_class');
   
//widgets
function gu_widgets_init() {

    register_sidebar( array(
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
        'name'          => 'Right Sidebar',
		'id'            => 'right_sidebar',
	) ); 
    register_sidebar( array(
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
        'name'          => 'Top Right',
		'id'            => 'top_right',
	) ); 	
	    register_sidebar( array(
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
        'name'          => 'Top Left',
		'id'            => 'top_left',
	) ); 
	   register_sidebar( array(
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
        'name'          => 'Right Header',
		'id'            => 'right_header',
	) ); 
    register_sidebar( array(
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
        'name'          => 'Footer Menu',
		'id'            => 'footermenu',
	) ); 
	 register_sidebar( array(
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
        'name'          => 'Footer 1  ',
		'id'            => 'footer1',
	) ); 
		 register_sidebar( array(
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
        'name'          => 'Footer 2  ',
		'id'            => 'footer2',
	) ); 
		 register_sidebar( array(
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
        'name'          => 'Footer 3  ',
		'id'            => 'footer3',
	) ); 
    register_sidebar( array(
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
        'name'          => 'Related posts',
		'id'            => 'related',
	) ); 
	  register_sidebar( array(
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
        'name'          => 'Left Sub Footer',
		'id'            => 'left_subfooter',
	) ); 
 	  register_sidebar( array(
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
        'name'          => 'Right Sub Footer',
		'id'            => 'right_subfooter',
	) ); 
 

}
add_action( 'widgets_init', 'gu_widgets_init' );
 //menu
function gu_register_my_menus() {
	register_nav_menus(
	  array(
		'header-menu' => __( 'Header Menu','lalutheme' ),
		'footer-menu' => __( 'Footer Menu','lalutheme' ),
   
	  )
	);
  }
  add_action( 'init', 'gu_register_my_menus' );

//navigation
function gu_posts_nav() {
	if( is_singular() )
		return;
	global $wp_query;
	/** Stop execution if there's only 1 page */
	if( $wp_query->max_num_pages <= 1 )
		return;
	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );
	/**	Add current page to the array */
	if ( $paged >= 1 )
		$links[] = $paged;
	/**	Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}
	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}
	echo '<div class="navigation"><ul>' . "\n";
	/**	Previous Post Link */
	if ( get_previous_posts_link() )
		printf( '<li>%s</li>' . "\n", get_previous_posts_link() );
	/**	Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
		if ( ! in_array( 2, $links ) )
			echo '<li></li>';
	}
/**	Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	/**	Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li></li>' . "\n";

		$class = $paged == $max ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	/**	Next Post Link */
	if ( get_next_posts_link() )
		printf( '<li>%s</li>' . "\n", get_next_posts_link() );

	echo '</ul></div>' . "\n";

}
// video responsive

function gn_alx_embed_html( $html ) {
    return '<div class="video-container">' . $html . '</div>';
}
add_filter( 'embed_oembed_html', 'gn_alx_embed_html', 10, 3 );
add_filter( 'video_embed_html', 'gn_alx_embed_html' );
 


function gu_scripts_with_jquery()
{
  // wp_enqueue_script( 'jquery', get_stylesheet_directory_uri() . /js/jquery.min.js',   true ); 


  wp_enqueue_script( 'jquery',  get_template_directory_uri() .'/js/jquery.min.js'  , array(), '', false );
  wp_enqueue_script( 'bootstrap',  get_template_directory_uri() .'/js/bootstrap.js'  , array(), '', true ); 
  wp_enqueue_script( 'fontawesome',  'https://use.fontawesome.com/674fa29360.js'  , array(), '', true );
  
}
add_action( 'wp_enqueue_scripts', 'gu_scripts_with_jquery' );
  

function new_submenu_class($menu) {    
    $menu = preg_replace('/ class=" dropdown"/','/ class=" " /',$menu);        
    return $menu;      
}

add_filter('wp_nav_menu','new_submenu_class'); 

 
function  custom_nav_menu_link_attributes( $atts, $item, $args ){
	if ( !wp_is_mobile() && $args->has_children  ) {
			  $atts['href'] = ! empty( $item->url ) ? $item->url : '';
	  }
	return $atts;
  }
  add_filter( 'nav_menu_link_attributes', 'custom_nav_menu_link_attributes', 99, 3 );
  
  function func_make_menu_clickable(){
  if ( !wp_is_mobile() ) { ?>
	<script type="text/javascript">
	  jQuery(document).ready(function($){      
		if($(window).width() >= 767){
		  $('li.menu-item a').click(function(){
			window.location = $(this).attr('href');
		  });
		}
	  });
	</script>
	<style type="text/css">
	@media all and (min-width: 767px) {
	.menu-item-has-children:hover > ul {
	display: block;
  }
  }
	</style>
  <?php }
  }
  add_action('wp_footer', 'func_make_menu_clickable', 1);


 //logo in login
 

if (!function_exists('gr_login_logo')) {
    function gr_login_logo()
    {
        $logo_url = wp_get_attachment_url(get_theme_mod('gr_logo'));
        ?>
        <style type="text/css">
            .login h1 a {
                background-image: url(<?php echo get_theme_mod('gr_logo'); ?>)!important;
                background-size: contain;
                margin: auto;
                width: 100%;
            }
        </style>
        <?php
    }
}
add_action('login_head', 'gr_login_logo');



 //single product template
 //
 function gr_single_prod($single_template) {
 global $post;

 if ($post->post_type == 'product') {
      $single_template = dirname( __FILE__ ) . '/woocommerce/single-product.php';
 }
 return $single_template;
}
add_filter( 'single_template', 'gr_single_prod' );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 25 );
 



//************ SHORTCODES */
//SITE URL
add_action( 'init', function() {

	add_shortcode( 'site_url', function( $atts = null, $content = null ) {
		return site_url();
	} );

} );
 
  function copyright() { 
 
	// Things that you want to do. 
	$message = date('Y'). ' All right reserverd © <a href="[site_path]">'. get_bloginfo() .  '</a> '; 
	 
	// Output needs to be return
	return $message;
	} 
	// register shortcode
	add_shortcode('copyright', 'copyright'); 


	function gremza() { 
 
		// Things that you want to do. 
		$message =  ' Design by <a href="https://gremza.com"> Gremza </a> '; 
		 
		// Output needs to be return
		return $message;
		} 
		// register shortcode
		add_shortcode('gremza', 'gremza'); 
	
	
	
	










?>