<header> 
 <div class="container">
    <div class="row">    <div class="col-lg-12 no-padding">
        <!-- logo begin --> 
        <div id="logo" class="col-lg-3 col-xs-8 no-padding">
            <a href="<?php  echo home_url(); ?>">
            <img class="img-responsive" src="<?php echo get_theme_mod('gr_logo');?>"   alt="">
            </a>
        </div>
         <!-- logo close -->
		<div class="headerright">		 
			<nav class="navbar navbar-default col-lg-7 no-padding "  >
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
    <div class="searchbar col-lg-2  hidden-xs no-padding">
     <?php if ( is_active_sidebar( 'right_header' ) ) : ?>
        <?php dynamic_sidebar( 'right_header' ); ?>
        <?php endif; ?>
 <?php require get_template_directory() . '/include/socialblock.php'; ?>																				 
        </div>
</div>
 
</header>