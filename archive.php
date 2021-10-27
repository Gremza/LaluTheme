<?php
get_header(); ?> 
<div class="container">
<h1 class="titullfaqe"> <?php single_cat_title( ); ?></h1>  

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>    
    <div class="imazhet col-lg-2 col-md-2 col-sm-2 col-xs-12">
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail', array( 'class'	=> "img-responsive")); ?></a>
    </div> 
    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
    <h2 class="titull">  <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a> </h2>
    </div> 
    
<?php endwhile; else: ?>
<p><?php _e('Sorry, this page does not exist.','gremza_university'); ?></p>
<?php endif; ?>  
        
</div>        
<?php get_footer(); ?>