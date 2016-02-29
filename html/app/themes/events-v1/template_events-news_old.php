<?php 
/*
Template Name: Events News OLD
*/
?>
<?php get_header(); ?>
        
        <div id="main" role="main"><!-- START MAIN -->
		<?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" class="eventPage">
                <?php get_sidebar(); ?>
                <div id="post" class="prefix_1 grid_14 suffix_1 clearfix news">
                    <div class="grid_alpha grid_8 suffix_1">
                    <?php include ('feedbar.php'); ?>
                    </div>
                    <div class="grid_4 suffix_1 grid_omega"><?php the_content(''); ?></div>
                </div>
            </article>
        <?php endwhile; ?>      
        <?php endif; ?>     
        </div><!-- END MAIN -->        
        
<?php get_footer(); ?>