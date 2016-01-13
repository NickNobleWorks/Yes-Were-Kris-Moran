<?php
/**
 * The template for displaying the projects list.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Km
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

    <?php 
    $loop = new WP_Query( array( 'post_type' => 'project' ) );
    while ( $loop->have_posts() ) : $loop->the_post();

      get_template_part( 'template-parts/content', 'project' );

    endwhile; wp_reset_query(); 
    ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_footer();
