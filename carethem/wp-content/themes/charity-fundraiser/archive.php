<?php
/**
 * The template for displaying Archive pages.
 * @package Charity Fundraiser
 */
get_header(); ?>

<main id="maincontent" role="main">
    <?php
        $charity_fundraiser_left_right = get_theme_mod( 'charity_fundraiser_layout','Right Sidebar');
        if($charity_fundraiser_left_right == 'Right Sidebar'){ ?>
            <div id="blog_post">
                <div class="innerlightbox">
                    <div class="container">  
                        <div class="row">      
                            <div class="col-lg-9 col-md-8">
                                <?php
                                    the_archive_title( '<h1 class="page-title">', '</h1>' );
                                    the_archive_description( '<div class="taxonomy-description">', '</div>' );
                                ?>
                                <?php if ( have_posts() ) :
                                    /* Start the Loop */
                                    while ( have_posts() ) : the_post();
                                        get_template_part( 'template-parts/content' , get_post_format());
                                    endwhile;
                                      else :
                                        get_template_part( 'no-results' ); 
                                    endif; 
                                ?>
                                <div class="navigation">
                                    <?php
                                        // Previous/next page navigation.
                                        the_posts_pagination( array(
                                            'prev_text'          => __( 'Previous page', 'charity-fundraiser' ),
                                            'next_text'          => __( 'Next page', 'charity-fundraiser' ),
                                            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'charity-fundraiser' ) . ' </span>',
                                        ) );
                                    ?>
                                    <div class="clearfix"></div>
                                </div>
                            </div>      
                            <div class="col-lg-3 col-md-4"><?php get_sidebar();?></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        <?php }else if($charity_fundraiser_left_right == 'Left Sidebar'){ ?>
            <div id="blog_post">
                <div class="innerlightbox">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-4"><?php get_sidebar();?></div>
                            <div class="col-lg-9 col-md-8"> 
                                <?php
                                    the_archive_title( '<h1 class="page-title">', '</h1>' );
                                    the_archive_description( '<div class="taxonomy-description">', '</div>' );
                                ?>               
                                <?php if ( have_posts() ) :
                                    /* Start the Loop */
                                    while ( have_posts() ) : the_post();
                                        get_template_part( 'template-parts/content', get_post_format() );
                                    endwhile;
                                      else :
                                        get_template_part( 'no-results' ); 
                                    endif; 
                                ?>
                                <div class="navigation">
                                    <?php
                                        // Previous/next page navigation.
                                        the_posts_pagination( array(
                                            'prev_text'          => __( 'Previous page', 'charity-fundraiser' ),
                                            'next_text'          => __( 'Next page', 'charity-fundraiser' ),
                                            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'charity-fundraiser' ) . ' </span>',
                                        ) );
                                    ?>
                                    <div class="clearfix"></div>
                                </div>
                            </div>  
                        </div>                  
                    </div>
                </div>
            </div>
        <?php }else if($charity_fundraiser_left_right == 'One Column'){ ?>
            <div id="blog_post">
                <div class="innerlightbox">
                    <div class="container">
                        <?php
                            the_archive_title( '<h1 class="page-title">', '</h1>' );
                            the_archive_description( '<div class="taxonomy-description">', '</div>' );
                        ?>
                        <?php if ( have_posts() ) :
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content', get_post_format() );
                            endwhile;
                              else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                        <div class="navigation">
                            <?php
                                // Previous/next page navigation.
                                the_posts_pagination( array(
                                    'prev_text'          => __( 'Previous page', 'charity-fundraiser' ),
                                    'next_text'          => __( 'Next page', 'charity-fundraiser' ),
                                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'charity-fundraiser' ) . ' </span>',
                                ) );
                            ?>
                            <div class="clearfix"></div>
                        </div>                    
                    </div>
                </div>
            </div>
        <?php }else if($charity_fundraiser_left_right == 'Three Columns'){ ?>
            <div id="blog_post">
                <div class="innerlightbox">
                    <div class="container">
                        <div class="row">
                            <div id="sidebar" class="col-lg-3 col-md-4"><?php dynamic_sidebar('sidebar-1');?></div>
                            <div class="col-lg-6 col-md-4">
                                <?php
                                    the_archive_title( '<h1 class="page-title">', '</h1>' );
                                    the_archive_description( '<div class="taxonomy-description">', '</div>' );
                                ?>
                                <?php if ( have_posts() ) :
                                    /* Start the Loop */
                                    while ( have_posts() ) : the_post();
                                        get_template_part( 'template-parts/content', get_post_format() );
                                    endwhile;
                                      else :
                                        get_template_part( 'no-results' ); 
                                    endif; 
                                ?>
                                <div class="navigation">
                                    <?php
                                        // Previous/next page navigation.
                                        the_posts_pagination( array(
                                            'prev_text'          => __( 'Previous page', 'charity-fundraiser' ),
                                            'next_text'          => __( 'Next page', 'charity-fundraiser' ),
                                            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'charity-fundraiser' ) . ' </span>',
                                        ) );
                                    ?>
                                    <div class="clearfix"></div>
                                </div>
                            </div> 
                            <div id="sidebar" class="col-lg-3 col-md-4"><?php dynamic_sidebar('sidebar-2');?></div> 
                        </div>              
                    </div>
                </div>
            </div>
        <?php }else if($charity_fundraiser_left_right == 'Four Columns'){ ?>
            <div id="blog_post">
                <div class="innerlightbox">
                    <div class="container">
                        <div class="row">
                            <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-1');?></div>
                            <div class="col-lg-3 col-md-3">
                                <?php
                                    the_archive_title( '<h1 class="page-title">', '</h1>' );
                                    the_archive_description( '<div class="taxonomy-description">', '</div>' );
                                ?>
                                <?php if ( have_posts() ) :
                                    /* Start the Loop */
                                    while ( have_posts() ) : the_post();
                                        get_template_part( 'template-parts/content', get_post_format() );
                                    endwhile;
                                      else :
                                        get_template_part( 'no-results' ); 
                                    endif; 
                                ?>
                                <div class="navigation">
                                    <?php
                                        // Previous/next page navigation.
                                        the_posts_pagination( array(
                                            'prev_text'          => __( 'Previous page', 'charity-fundraiser' ),
                                            'next_text'          => __( 'Next page', 'charity-fundraiser' ),
                                            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'charity-fundraiser' ) . ' </span>',
                                        ) );
                                    ?>
                                    <div class="clearfix"></div>
                                </div>
                            </div> 
                            <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-2');?></div>
                            <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-3');?></div>
                        </div>
                    </div>
                </div>
            </div>
        <?php }else if($charity_fundraiser_left_right == 'Grid Layout'){ ?>
            <div id="blog_post">
                <div class="innerlightbox">
                    <div class="container"> 
                        <div class="row">       
                            <div class="col-lg-9 col-md-8">
                                <?php
                                    the_archive_title( '<h1 class="page-title">', '</h1>' );
                                    the_archive_description( '<div class="taxonomy-description">', '</div>' );
                                ?>
                                <div class="row">
                                    <?php if ( have_posts() ) :
                                        /* Start the Loop */
                                        while ( have_posts() ) : the_post();
                                            get_template_part( 'template-parts/grid-layout', get_post_format() );
                                        endwhile;
                                          else :
                                            get_template_part( 'no-results' );
                                        endif; 
                                    ?>
                                </div>
                                <div class="navigation">
                                    <?php
                                        // Previous/next page navigation.
                                        the_posts_pagination( array(
                                            'prev_text'          => __( 'Previous page', 'charity-fundraiser' ),
                                            'next_text'          => __( 'Next page', 'charity-fundraiser' ),
                                            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'charity-fundraiser' ) . ' </span>',
                                        ) );
                                    ?>
                                    <div class="clearfix"></div>
                                </div>
                            </div>      
                            <div class="col-lg-3 col-md-4"><?php get_sidebar();?></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        <?php }else{?>
            <div id="blog_post">
                <div class="innerlightbox">
                    <div class="container">  
                        <div class="row">      
                            <div class="col-lg-9 col-md-8">
                                <?php
                                    the_archive_title( '<h1 class="page-title">', '</h1>' );
                                    the_archive_description( '<div class="taxonomy-description">', '</div>' );
                                ?>
                                <?php if ( have_posts() ) :
                                    /* Start the Loop */
                                    while ( have_posts() ) : the_post();
                                        get_template_part( 'template-parts/content' , get_post_format());
                                    endwhile;
                                      else :
                                        get_template_part( 'no-results' ); 
                                    endif; 
                                ?>
                                <div class="navigation">
                                    <?php
                                        // Previous/next page navigation.
                                        the_posts_pagination( array(
                                            'prev_text'          => __( 'Previous page', 'charity-fundraiser' ),
                                            'next_text'          => __( 'Next page', 'charity-fundraiser' ),
                                            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'charity-fundraiser' ) . ' </span>',
                                        ) );
                                    ?>
                                    <div class="clearfix"></div>
                                </div>
                            </div>      
                            <div class="col-lg-3 col-md-4"><?php get_sidebar();?></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
    <?php } ?>
</main>

<?php get_footer(); ?>