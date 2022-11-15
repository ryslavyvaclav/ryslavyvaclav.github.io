<?php
/**
 * The Template for displaying all single posts.
 *
 * @package SAAS Software Technology
 */
get_header(); ?>

<?php do_action( 'saas_software_technology_single_post_header' ); ?>

<main id="main" role="main" class="middle-align">
	<div class="container space-top">
		<?php
        $saas_software_technology_single_post_sidebar = get_theme_mod( 'saas_software_technology_single_post_sidebar','Right Sidebar');
        if($saas_software_technology_single_post_sidebar == 'Left Sidebar'){ ?>
            <div class="row">
				<div class="col-lg-4 col-md-4"><?php get_sidebar();?></div>
				<div class="col-lg-8 col-md-8" class="content-ma">
					<?php while ( have_posts() ) : the_post(); 
						get_template_part( 'template-parts/single-post');
					endwhile; // end of the loop. ?>
	       		</div>
	       	</div>
	    <?php }else if($saas_software_technology_single_post_sidebar == 'Right Sidebar'){ ?>
	    	<div class="row">
		       	<div class="col-lg-8 col-md-8" class="content-ma">
					<?php while ( have_posts() ) : the_post(); 
						get_template_part( 'template-parts/single-post');
					endwhile; // end of the loop. ?>
		       	</div>
				<div class="col-lg-4 col-md-4"><?php get_sidebar();?></div>
			</div>
		<?php }else if($saas_software_technology_single_post_sidebar == 'One Column'){ ?>
			<div class="content-ma">
				<?php while ( have_posts() ) : the_post(); 
					get_template_part( 'template-parts/single-post');
				endwhile; // end of the loop. ?>
	       	</div>
	    <?php }else {?>
			<div class="row">
		       	<div class="col-lg-8 col-md-8" class="content-ma">
					<?php while ( have_posts() ) : the_post(); 
						get_template_part( 'template-parts/single-post');
					endwhile; // end of the loop. ?>
		       	</div>
				<div class="col-lg-4 col-md-4"><?php get_sidebar();?></div>
			</div>
        <?php } ?>
        <div class="clearfix"></div>
    </div>
</main>

<?php do_action( 'saas_software_technology_single_post_footer' ); ?>

<?php get_footer(); ?>