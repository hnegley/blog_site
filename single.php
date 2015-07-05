<?php get_header(); ?>

	<section class="row">
		<div class="twelve columns">
			
            <div class="content">
                
			<!-- BEGIN SINGLE PHP -->
            
            		<?php if (have_posts()) :
                		/* OUR DATA CONTEXT IS DEFINED  */              
                		while (have_posts()) : the_post(); ?> 
                    
                    <div class="post-thumbnail">
                        <div id="thumbnail_space">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                    <h2><?php the_title(); ?></h2>
                        
                    
                <?php the_content();

                	endwhile;
            	endif; ?>
                    
			<!-- END SINGLE PHP -->
                </div>
                </div>
			
        </div>
    </section>

<?php get_footer(); ?>