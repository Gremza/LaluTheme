<?php get_header(); ?>  
    <div class="container">
        <div class="row">
		
	     
            <div class="col-md-8  ">
                <div class="row">
              	<div id="doc"   data-title="<?php the_title() ;?> " class="col-lg-10   "><h1><?php the_title(); ?></h1> 	<div> <?php the_category();?></div>  </div> 
                  </div>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                  <div id="source-html">
	            <?php the_content();  ?> 
	             </div>
                <?php endwhile; else: ?>
	            <p><?php _e('Sorry, this page does not exist.','gremza22'); ?></p>
            	<?php endif; ?>
	         
	         
	        </div>
			<div class="col-md-4">
				<?php dynamic_sidebar( 'right_sidebar' ); ?> 
			</div>	
	    </div>	
	</div>
<?php get_footer(); ?>