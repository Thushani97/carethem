<?php
/**
 * The template part for displaying post
 * @package Charity Fundraiser
 * @subpackage charity_fundraiser
 * @since 1.0
 */
?>
<?php 
  $archive_year  = get_the_time('Y'); 
  $archive_month = get_the_time('m'); 
  $archive_day   = get_the_time('d'); 
?> 
<article class="blog-sec animated fadeInDown">
  <div class="mainimage">
    <?php 
      if(has_post_thumbnail()) { 
        the_post_thumbnail(); 
      }
    ?>
  </div>
  <h2><a href="<?php echo esc_url(get_permalink() ); ?>"><?php esc_html(the_title()); ?><span class="screen-reader-text"><?php esc_html(the_title()); ?></span></a></h2>
  <?php if( get_theme_mod( 'charity_fundraiser_metafields_date',true) != '' || get_theme_mod( 'charity_fundraiser_metafields_author',true) != '' || get_theme_mod( 'charity_fundraiser_metafields_comment',true) != '') { ?>
    <div class="post-info">
      <?php if( get_theme_mod( 'charity_fundraiser_metafields_date',true) != '') { ?>
        <i class="fa fa-calendar" aria-hidden="true"></i><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><span class="entry-date"><?php echo esc_html( get_the_date() ); ?></span><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a>
      <?php }?>
      <?php if( get_theme_mod( 'charity_fundraiser_metafields_author',true) != '') { ?>
        <i class="fa fa-user" aria-hidden="true"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><span class="entry-author"> <?php esc_html(the_author()); ?></span><span class="screen-reader-text"><?php esc_html(the_author()); ?></span></a>
      <?php }?>
      <?php if( get_theme_mod( 'charity_fundraiser_metafields_comment',true) != '') { ?>
        <i class="fa fa-comments" aria-hidden="true"></i><span class="entry-comments"> <?php comments_number( __('0 Comments','charity-fundraiser'), __('0 Comments','charity-fundraiser'), __('% Comments','charity-fundraiser') ); ?></span>
      <?php }?>
    </div>
  <?php }?>
  <?php if(get_theme_mod('charity_fundraiser_blog_post_content') == 'Full Content'){ ?>
    <?php the_content(); ?>
  <?php }
  if(get_theme_mod('charity_fundraiser_blog_post_content', 'Excerpt Content') == 'Excerpt Content'){ ?>
    <?php if(get_the_excerpt()) { ?>
      <div class="entry-content"><p><?php $excerpt = get_the_excerpt(); echo esc_html( charity_fundraiser_string_limit_words( $excerpt, esc_attr(get_theme_mod('charity_fundraiser_post_excerpt_number','20')))); ?> <?php echo esc_html( get_theme_mod('charity_fundraiser_button_excerpt_suffix','...') ); ?></p></div>
    <?php }?>
  <?php }?>
  <?php if ( get_theme_mod('charity_fundraiser_blog_button_text','Read Full') != '' ) {?>
    <div class="blogbtn">
      <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small hvr-sweep-to-right" ><?php echo esc_html( get_theme_mod('charity_fundraiser_blog_button_text',__('Read Full', 'charity-fundraiser')) ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('charity_fundraiser_blog_button_text',__('Read Full', 'charity-fundraiser')) ); ?></span></a>
    </div>
  <?php }?>
</article>