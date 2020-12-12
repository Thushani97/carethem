<?php
/**
 * The Header for our theme.
 * @package Charity Fundraiser
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
  } else {
    do_action( 'wp_body_open' );
  }?>

  <?php if(get_theme_mod('charity_fundraiser_preloader',true)){ ?>
    <?php if(get_theme_mod( 'charity_fundraiser_preloader_type','Square') == 'Square'){ ?>
      <div id="overlayer"></div>
      <span class="tg-loader">
        <span class="tg-loader-inner"></span>
      </span>
    <?php }else if(get_theme_mod( 'charity_fundraiser_preloader_type') == 'Circle') {?>    
      <div class="preloader">
        <div class="preloader-container">
          <span class="animated-preloader"></span>
        </div>
      </div>
    <?php }?>
  <?php }?>

  <header role="banner">
    <a class="screen-reader-text skip-link" href="#maincontent"><?php esc_html_e( 'Skip to content', 'charity-fundraiser' ); ?><span class="screen-reader-text"><?php esc_html_e('Skip to Content','charity-fundraiser'); ?></span></a>
    <div class="toggle-menu responsive-menu">
      <button onclick="charity_fundraiser_resMenu_open()" role="tab"><i class="fas fa-bars"></i><?php esc_html_e('Menu','charity-fundraiser'); ?><span class="screen-reader-text"><?php esc_html_e('Menu','charity-fundraiser'); ?></span></button>
    </div>
    <div id="sidelong-menu" class="nav side-nav">
      <nav id="primary-site-navigation" class="nav-menu" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'charity-fundraiser' ); ?>">
        <?php 
          wp_nav_menu( array( 
            'theme_location' => 'primary',
            'container_class' => 'main-menu-navigation clearfix' ,
            'menu_class' => 'clearfix',
            'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
            'fallback_cb' => 'wp_page_menu',
          ) ); 
        ?>
        <a href="javascript:void(0)" class="closebtn responsive-menu" onclick="charity_fundraiser_resMenu_close()"><?php esc_html_e('Close Menu','charity-fundraiser'); ?><i class="fas fa-times-circle"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','charity-fundraiser'); ?></span></a>
      </nav>
    </div>
    <div class="top-bar">
      <div class="top-header">
        <div class="container">
          <div class="row">
            <div class="logo col-lg-3 col-md-3">
              <?php if ( has_custom_logo() ) : ?>
                <div class="site-logo"><?php the_custom_logo(); ?></div>
              <?php endif; ?>
              <?php $blog_info = get_bloginfo( 'name' ); ?>
              <?php if ( ! empty( $blog_info ) ) : ?>
                <?php if ( is_front_page() && is_home() ) : ?>
                  <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <?php else : ?>
                  <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                <?php endif; ?>
              <?php endif; ?>
              <?php
              $description = get_bloginfo( 'description', 'display' );
              if ( $description || is_customize_preview() ) :
                ?>
                <p class="site-description">
                  <?php echo esc_html($description); ?>
                </p>
              <?php endif; ?>
            </div>
            <div class="col-lg-3 col-md-3">
              <div class="contact-details">
                <div class="row">
                  <?php if ( get_theme_mod('charity_fundraiser_email_text','') != "" ) {?>
                    <div class="col-lg-2 col-md-2 p-0 conatct-font">
                      <i class="fas fa-envelope"></i>
                    </div>
                    <div class="col-lg-8 col-md-8">
                      <?php if ( get_theme_mod('charity_fundraiser_email_text','') != "" ) {?>
                        <p class="bold-font"><?php echo esc_html( get_theme_mod('charity_fundraiser_email_text','') ); ?></p>
                      <?php }?>
                      <?php if ( get_theme_mod('charity_fundraiser_email','') != "" ) {?>
                        <a href="mailto:<?php echo esc_url( get_theme_mod('charity_fundraiser_email','') ); ?>"><p><?php echo esc_html( get_theme_mod('charity_fundraiser_email','') ); ?></p><span class="screen-reader-text"><?php esc_html_e('Email', 'charity-fundraiser') ?></span></a>
                      <?php }?>
                    </div>
                  <?php }?>
                </div>
              </div>
            </div>          
            <div class="col-lg-3 col-md-3">
              <div class="contact-details">
                <div class="row">
                  <?php if ( get_theme_mod('charity_fundraiser_call_text','') != "" ) {?>
                    <div class="col-lg-2 col-md-2 p-0 conatct-font">
                      <i class="fas fa-phone"></i>
                    </div>
                    <div class="col-lg-8 col-md-8">
                      <?php if ( get_theme_mod('charity_fundraiser_call_text','') != "" ) {?>
                        <p class="bold-font"><?php echo esc_html( get_theme_mod('charity_fundraiser_call_text','' )); ?></p>
                      <?php }?>
                      <?php if ( get_theme_mod('charity_fundraiser_call_number','') != "" ) {?>
                        <a href="tel:<?php echo esc_url( get_theme_mod('charity_fundraiser_call_number','') ); ?>"><p><?php echo esc_html( get_theme_mod('charity_fundraiser_call_number','' )); ?></p><span class="screen-reader-text"><?php esc_html_e('Phone Number', 'charity-fundraiser') ?></span></a>
                      <?php }?>
                    </div>
                  <?php }?>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3">
              <div class="social-media">
                <?php if( get_theme_mod( 'charity_fundraiser_facebook' ) != '') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'charity_fundraiser_facebook','' ) ); ?>"><i class="fab fa-facebook-f"></i><span class="screen-reader-text"><?php esc_html_e('Facebook','charity-fundraiser'); ?></span></a>
                <?php } ?>
                <?php if( get_theme_mod( 'charity_fundraiser_twitter' ) != '') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'charity_fundraiser_twitter','' ) ); ?>"><i class="fab fa-twitter"></i><span class="screen-reader-text"><?php esc_html_e('Twitter','charity-fundraiser'); ?></span></a>
                <?php } ?>
                <?php if( get_theme_mod( 'charity_fundraiser_pintrest' ) != '') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'charity_fundraiser_pintrest','' ) ); ?>"><i class="fab fa-pinterest-p"></i><span class="screen-reader-text"><?php esc_html_e('Pinterest','charity-fundraiser'); ?></span></a>
                <?php } ?>
                <?php if( get_theme_mod( 'charity_fundraiser_insta' ) != '') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'charity_fundraiser_insta','' ) ); ?>"><i class="fab fa-instagram"></i><span class="screen-reader-text"><?php esc_html_e('Instagram','charity-fundraiser'); ?></span></a>
                <?php } ?>
                <?php if( get_theme_mod( 'charity_fundraiser_linkdin' ) != '') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'charity_fundraiser_linkdin','' ) ); ?>"><i class="fab fa-linkedin-in"></i><span class="screen-reader-text"><?php esc_html_e('Linkedin','charity-fundraiser'); ?></span></a>
                <?php } ?>
                <?php if( get_theme_mod( 'charity_fundraiser_youtube' ) != '') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'charity_fundraiser_youtube','' ) ); ?>"><i class="fab fa-youtube"></i><span class="screen-reader-text"><?php esc_html_e('Youtube','charity-fundraiser'); ?></span></a>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>   
      </div> 
      <div id="header">
        <div class="container">
          <div class="menu-sec <?php if( get_theme_mod( 'charity_fundraiser_sticky_header') != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>">
            <div class="row m-0">
              <div class="menubox <?php if( get_theme_mod( 'charity_fundraiser_donate_link') != '') { ?> col-lg-9 col-md-1"<?php } else { ?>col-lg-11 col-md-1 <?php } ?>">
                <div id="sidelong-menu" class="nav side-nav">
                  <nav id="primary-site-navigation" class="nav-menu" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'charity-fundraiser' ); ?>">
                    <?php 
                      wp_nav_menu( array( 
                        'theme_location' => 'primary',
                        'container_class' => 'main-menu-navigation clearfix' ,
                        'menu_class' => 'clearfix',
                        'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                        'fallback_cb' => 'wp_page_menu',
                      ) ); 
                    ?>
                  </nav>
                </div>
              </div>
              <?php if(get_theme_mod('charity_fundraiser_show_search',true) ){ ?>
                <div class="search-box <?php if( get_theme_mod( 'charity_fundraiser_donate_link') != '') { ?> col-lg-1 col-md-5"<?php } else { ?>col-lg-1 col-md-11 <?php } ?>">
                  <div class="wrap"><?php get_search_form(); ?></div>
                </div>
              <?php }?>
              <?php if ( get_theme_mod('charity_fundraiser_donate_text','') != "" ) {?>
                <div class="donate-link <?php if( get_theme_mod( 'charity_fundraiser_show_search') != '') { ?> col-lg-2 col-md-6"<?php } else { ?>col-lg-3 col-md-12 <?php } ?>"> 
                  <a href="<?php echo esc_url( get_theme_mod('charity_fundraiser_donate_link','') ); ?>"><i class="fas fa-heart"></i><?php echo esc_html( get_theme_mod('charity_fundraiser_donate_text','') ); ?><span class="screen-reader-text"><?php esc_html_e('Donate Button','charity-fundraiser'); ?></span></a>
                </div>
              <?php }?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>