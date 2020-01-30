<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container">

            <?php if ( have_posts() ) {
                while ( have_posts() ) {
            
                    the_post(); ?>
            
                    <h2><?php the_title(); ?></h2>
            
                    <?php the_content(); ?>
            
                <?php }
            }?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>