<?php
/**
 * Template Name: Page with Right Sidebar
**/
get_header(); ?>

<?php do_action('charity_fundraiser_page_right_header'); ?>

<div class="container">
    <main id="maincontent" role="main" class="main-wrap-box">
        <div class="row">
    		<div class="col-lg-9 col-sm-9" id="wrapper">
    			<?php while ( have_posts() ) : the_post(); ?>
                    <h1><?php esc_html(the_title()); ?></h1>
                    <?php the_post_thumbnail(); ?>
                    <?php the_content(); ?>

                    <?php wp_link_pages( array(
                        'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'charity-fundraiser' ) . '</span>',
                        'after'       => '</div>',
                        'link_before' => '<span class="page-number">',
                        'link_after'  => '</span>',
                        'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'charity-fundraiser' ) . ' </span>%',
                        'separator'   => '<span class="screen-reader-text">, </span>',
                    ) ); 

                        //If comments are open or we have at least one comment, load up the comment template
                	    if ( comments_open() || '0' != get_comments_number() )
                        	comments_template();
                    ?>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
            <div id="sidebar" class="col-lg-3 col-sm-3">
    			<?php dynamic_sidebar('sidebar-2'); ?>
    		</div>
            <div class="clearfix"></div> 
        </div>   
    </main>
</div>

<?php do_action('charity_fundraiser_page_right_footer'); ?>

<?php get_footer(); ?>