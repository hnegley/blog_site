<?php get_header(); ?>


    <section class="row">
        <div class="four columns">
            
            <img id="skinny_left" src="images/me.jpg" width="190" height="273" alt=""/> 

            </div>
    
    <section class="row">
    	<div class="eight columns">
            
            <div id="right_blog_content">

    		<!-- BEGIN LOOP -->
            	<?php 
            	if ( have_posts() ) {
                	while ( have_posts() ) {
                    	the_post(); ?>

                    	<h3><?php the_title(); ?></h3>
                    	<div class="post-thumbnail-container">
                    		<?php 
                    			if(has_post_thumbnail() ) {
                    				the_post_thumbnail('thumbnail');
                    			} ?>
                    		</div>
                    	<?php the_excerpt(); ?>
                    	<div class="clear"></div>
                	<?php } // end while
            	} // end if
            	?>

			<!-- END LOOP -->
            </div> <!--ENDS RIGHT_BLOG_CONTENT-->
    	</div>
    </section>

<?php get_footer(); ?>
