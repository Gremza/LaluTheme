<header><!-- header right -->
<div class="top ">
	<div class="container ">
		<div class=" top-left col-xs-6 no-padding"> 	<?php dynamic_sidebar( 'top_left' ); ?> 	 </div>
		<div class="top-right  col-xs-6 no-padding"> <?php require get_template_directory() . '/include/socialblock.php'; ?>		<?php dynamic_sidebar( 'top_right' ); ?>  </div>
	</div>
</div>  
 <div class="container">
    <div class="row">    <div class="col-xl-12 col-lg-12 col-xs-12 col-md-12 col-sm-12 no-padding">
        <!-- logo begin --> 
        <div id="logo" class="col-xl-3 col-lg-3  col-md-3  col-sm-3 col-xs-8 no-padding">
            <a href="<?php  echo home_url(); ?>">
            <img class="img-responsive" src="<?php echo get_theme_mod('gr_logo');?>"   alt="">
            </a>
        </div>
         <!-- logo close -->
		<div class="headerright col-xl-6 col-lg-6 col-sm-6 col-md-7 ">		 
			<nav class="navbar navbar-default  no-padding "  >
				<div class="container-fluid no-padding"> 
				<div class="navbar-header">
					  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span> 
					  </button>
					</div> <?php
							wp_nav_menu( array(
								'menu'              => 'header-menu',
								'theme_location'    => 'header-menu',
								'depth'             => 2,
								'container'         => 'div',
								'container_class'   => 'collapse navbar-collapse',
								'container_id'      => 'bs-example-navbar-collapse-1',
								'menu_class'        => 'nav navbar-nav',
								'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
								'walker'            => new wp_bootstrap_navwalker())
							);
						?>
				</div>
			</nav>
		</div>
    <div class="searchbar headerright col-lg-2  col-md-2 hidden-xs no-padding">
     <?php if ( is_active_sidebar( 'right_header' ) ) : ?>
        <?php dynamic_sidebar( 'right_header' ); ?>
        <?php endif; ?>
 																				 
        </div>
</div>
 
</header>