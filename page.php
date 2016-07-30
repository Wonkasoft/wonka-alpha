<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 *@package WordPress
 * @subpackage wonka-alpha
 * @since Alpha 2016
 */

get_header(); ?>
<div id="wa-content"> <!-- Main Content Wrap -->
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div class="slider-wrap">
            <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
                <ul class="orbit-container">
                    <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664; &#xFE0E;</button>
                    <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654; &#xFE0E;</button>
                        <li class="is-active orbit-slide">
                            <img class="orbit-image" src="<?php $wa_slider1_url = get_theme_mod('wa_slider1' ); echo wp_get_attachment_url( $wa_slider1_url ); ?>" alt="Space">
                                <figcaption class="orbit-caption">Space, the final frontier.</figcaption>
                        </li>
                        <li class="orbit-slide">
                            <img class="orbit-image" src="<?php $wa_slider1_url = get_theme_mod('wa_slider1' ); echo wp_get_attachment_url( $wa_slider1_url ); ?>" alt="Space">
                                <figcaption class="orbit-caption">Lets Rocket!</figcaption>
                        </li>
                        <li class="orbit-slide">
                            <img class="orbit-image" src="<?php $wa_slider1_url = get_theme_mod('wa_slider1' ); echo wp_get_attachment_url( $wa_slider1_url ); ?>" alt="Space">
                                <figcaption class="orbit-caption">Encapsulating</figcaption>
		  </li>
		  <li class="orbit-slide">
                            <img class="orbit-image" src="<?php $wa_slider1_url = get_theme_mod('wa_slider1' ); echo wp_get_attachment_url( $wa_slider1_url ); ?>" alt="Space">
                                <figcaption class="orbit-caption">Outta This World</figcaption>
		  </li>
	    </ul>
                  <nav class="orbit-bullets">
                    <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
                    <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
                    <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
                    <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
                  </nav>
	</div>
        </div>
     <?php
// Start the loop.
     while ( have_posts() ) : the_post();

// Include the page content template.
     get_template_part( 'alpha-temeplates/content', 'page' );

// If comments are open or we have at least one comment, load up the comment template.
     if ( comments_open() || get_comments_number() ) {
        comments_template();
    }

// End of the loop.
    endwhile;
    ?>

</main><!-- .site-main -->

<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->
</div> <!-- End Main Content Wrap -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>