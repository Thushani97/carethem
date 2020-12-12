<?php
/**
 * The Template for displaying all single posts.
 * @package Charity Fundraiser
 */
get_header(); ?>

<div class="container">
    <main id="maincontent" role="main" class="main-wrap-box">
    	<?php
	    $charity_fundraiser_left_right = get_theme_mod( 'charity_fundraiser_single_post_layout','Right Sidebar');
	    if($charity_fundraiser_left_right == 'Right Sidebar'){ ?>
		    <div class="row">
				<div class="col-lg-9 col-md-8" id="wrapper">
					<div class="feature-box">
			            <div class="bradcrumbs">
			                <?php charity_fundraiser_the_breadcrumb(); ?>
			            </div>
					</div>
					<?php while ( have_posts() ) : the_post(); 
						get_template_part( 'template-parts/single-post');
		            endwhile; // end of the loop.
		            wp_reset_postdata();?>
		       	</div>
				<div class="col-lg-3 col-md-4"><?php get_sidebar();?></div>
			</div>
		<?php }else if($charity_fundraiser_left_right == 'Left Sidebar'){ ?>
			<div class="row">
				<div class="col-lg-3 col-md-4"><?php get_sidebar();?></div>
				<div class="col-lg-9 col-md-8" id="wrapper">
					<div class="feature-box">
			            <div class="bradcrumbs">
			                <?php charity_fundraiser_the_breadcrumb(); ?>
			            </div>
					</div>
					<?php while ( have_posts() ) : the_post(); 
						get_template_part( 'template-parts/single-post');
		            endwhile; // end of the loop.
		            wp_reset_postdata();?>
		       	</div>	     
		    </div>  	
		<?php }else if($charity_fundraiser_left_right == 'One Column'){ ?>
			<div id="wrapper">
				<div class="feature-box">
		            <div class="bradcrumbs">
		                <?php charity_fundraiser_the_breadcrumb(); ?>
		            </div>
				</div>
				<?php while ( have_posts() ) : the_post(); 
					get_template_part( 'template-parts/single-post');
	            endwhile; // end of the loop.
	            wp_reset_postdata();?>
	       	</div>
	    <?php }?>
        <div class="clearfix"></div>
    </main>
</div>

<?php get_footer(); ?>