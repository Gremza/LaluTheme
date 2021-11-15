<?php
require get_template_directory() . '/update/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
    'https://gremza.com/lalu/info.json',
    __FILE__,
    'gremza22'
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
		'header-menu' => __( 'Header Menu','gremza22' ),
		'footer-menu' => __( 'Footer Menu','gremza22' ),
   
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