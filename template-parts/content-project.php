<?php
/**
 * Template part for displaying projects.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Km
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  
  <header 
  <?php if (has_post_thumbnail()) : 
    $thumb_id = get_post_thumbnail_id(); 
    $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
    $thumb_url = $thumb_url_array[0]; ?>
    class="entry-header overlay" style="background-image: url('<?php echo $thumb_url ?>');">
  <?php else : // otherwise just close class attribute quotes: ?>
    class="entry-header">
  <?php endif; // close tag ?>

    <?php
      if ( is_single() ) {
        the_title( '<h2 class="entry-title">', '</h2>' );
      } else {
        the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
      }
    ?>
  </header><!-- .entry-header -->

  <div class="entry-content">
    <?php
      the_content( sprintf(
        /* translators: %s: Name of current post. */
        wp_kses( __( 'See stills %s <span class="meta-nav">&rarr;</span>', 'km' ), array( 'span' => array( 'class' => array() ) ) ),
        the_title( '<span class="screen-reader-text">"', '"</span>', false )
      ) );

      wp_link_pages( array(
        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'km' ),
        'after'  => '</div>',
      ) );
    ?>
  </div><!-- .entry-content -->

  <footer class="entry-footer">
    <?php km_entry_footer(); ?>
  </footer><!-- .entry-footer -->
</article><!-- #post-## -->
