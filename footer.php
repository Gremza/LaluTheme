<div class="footer">
    <div class="container">
    <div class="col-lg-3 col-xm-12">
    <?php dynamic_sidebar( 'footer1' ); ?>
    </div>
       <div class="col-lg-3 col-xm-12">
    <?php dynamic_sidebar( 'footer2' ); ?>
    </div>
       <div class="col-lg-3 col-xm-12">
    <?php dynamic_sidebar( 'footer3' ); ?>
    </div>
    <div class="col-lg-3 col-xm-12">
    <?php dynamic_sidebar( 'footer4' ); ?>
    </div>
    </div>
</div>
<div class="subfooter">
	<div class="container">
    <div class="col-lg-6 col-xm-6 left_subfooter">
		<?php dynamic_sidebar( 'left_subfooter' ); ?>
	</div>
	<div class="col-lg-6 col-xm-6 right_subfooter">
		<?php dynamic_sidebar( 'right_subfooter' ); ?>
	</div>
    </div>	
</div>

<?php wp_footer(); ?>
</body>
</html>