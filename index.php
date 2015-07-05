<?php get_header(); ?>


    <section class="row">
        
        <!--BEGIN SIDEBAR AREA-->
		<div class="four columns">

            <div class="the_sidebar_one">
            
			<?php get_sidebar(); ?>
        
        </div>
        <!--END SIDEBAR AREA-->
    
    <section class="row">
    	<div class="eight columns">
            
            <div id="right_blog_content">

    		<!-- BEGIN LOOP -->
            	<?php 
            	if ( have_posts() ) {
                	while ( have_posts() ) {
                    	the_post(); ?>

                    	<div class="post-thumbnail-container">
                    		<?php 
                    			if(has_post_thumbnail() ) {
                    				the_post_thumbnail('large');
                    			} ?>
                    		</div>
                
                    <h4><?php the_title(); ?></h4>
                        
                    <h6><time datetime="<?php the_time('Y-m-d')?>"><?php the_time('F jS, Y') ?></time></h6>
                    
                  <div id="the_excerpt_styling">  
                <?php the_excerpt(); ?>
                    	<div class="clear"></div>
                	<?php } // end while
            	} // end if
            	?>
                    </div>
			<!-- END LOOP -->
            </div> <!--ENDS RIGHT_BLOG_CONTENT-->
    	</div>
    </section>

<?php get_footer(); ?>
