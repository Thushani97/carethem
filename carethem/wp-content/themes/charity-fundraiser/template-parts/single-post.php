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
<article>
	<h1><?php esc_html(the_title()); ?></h1>
	<?php if( get_theme_mod( 'charity_fundraiser_single_post_date',true) != '' || get_theme_mod( 'charity_fundraiser_single_post_author',true) != '' || get_theme_mod( 'charity_fundraiser_single_post_comment_no',true) != '') { ?>
	    <div class="post-info">
	      <?php if( get_theme_mod( 'charity_fundraiser_single_post_date',true) != '') { ?>
	        <i class="fa fa-calendar" aria-hidden="true"></i><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><span class="entry-date"><?php echo esc_html( get_the_date() ); ?></span><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a>
	      <?php }?>
	      <?php if( get_theme_mod( 'charity_fundraiser_single_post_author',true) != '') { ?>
	        <i class="fa fa-user" aria-hidden="true"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><span class="entry-author"> <?php esc_html(the_author()); ?></span><span class="screen-reader-text"><?php esc_html(the_author()); ?></span></a>
	      <?php }?>
	      <?php if( get_theme_mod( 'charity_fundraiser_single_post_comment_no',true) != '') { ?>
	        <i class="fa fa-comments" aria-hidden="true"></i><span class="entry-comments"> <?php comments_number( __('0 Comments','charity-fundraiser'), __('0 Comments','charity-fundraiser'), __('% Comments','charity-fundraiser') ); ?></span> 
	      <?php }?>
	    </div>
	<?php }?>
	<?php if( get_theme_mod( 'charity_fundraiser_single_post_image',true) != '') { ?>
		<?php if(has_post_thumbnail()) { ?>
			<hr>
			<div class="feature-box">	
				<?php the_post_thumbnail(); ?>
			</div>
			<hr>					
		<?php } ?>
	<?php }?>
	<div class="entry-content"><?php the_content();?></div>

	<?php 
	wp_link_pages( array(
		'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'charity-fundraiser' ) . '</span>',
		'after'       => '</div>',
		'link_before' => '<span>',
		'link_after'  => '</span>',
		'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'charity-fundraiser' ) . ' </span>%',
		'separator'   => '<span class="screen-reader-text">, </span>',
	) );
		
	if ( is_singular( 'attachment' ) ) {
		// Parent post navigation.
		the_post_navigation( array(
			'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'charity-fundraiser' ),
		) );
	} elseif ( is_singular( 'post' ) ) {
		if( get_theme_mod( 'charity_fundraiser_single_post_nav',true) != '') {
			// Previous/next post navigation.
			the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . esc_html(get_theme_mod('charity_fundraiser_single_post_next_nav_text',__('Next','charity-fundraiser' )) )  . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Next post:', 'charity-fundraiser' ) . '</span> ' .
					'',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . esc_html(get_theme_mod('charity_fundraiser_single_post_prev_nav_text',__('Previous','charity-fundraiser' )) ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Previous post:', 'charity-fundraiser' ) . '</span> ' .
					'',
			) );
		}
	}

	echo '<div class="clearfix"></div>'; ?>

	<?php if( get_theme_mod( 'charity_fundraiser_metafields_tags',true) != '') { ?>
		<div class="tags">
			<?php
	        if( $tags = get_the_tags() ) {
	          foreach( $tags as $content_tag ) {
	            $sep = ( $content_tag === end( $tags ) ) ? '' : ' ';
	            echo '<a href="' . esc_url(get_term_link( $content_tag, $content_tag->taxonomy )) . '"><i class="fas fa-tag"></i>' . esc_html($content_tag->name) . '</a>' . esc_html($sep);
	            }
	        } ?>
		</div> 
	<?php }?>

	<?php
	if( get_theme_mod( 'charity_fundraiser_single_post_comment',true) != '') {
		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}
	}?> 
</article>

<?php if (get_theme_mod('charity_fundraiser_related_posts',true) != '') {
	get_template_part( 'template-parts/related-post' );
}