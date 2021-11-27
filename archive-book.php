<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>

<div class="main-content">
    <div class="container archive-book">
    <h2>Archive book</h2>
    
    <div class="archive-book__listing">
        <h3>Tous nos livres ici :</h3>
        <div class="archive-book__listing__all">
            <p>Tous les livres du slideshow en forme de carte</p>
            <?php if ( have_posts() ) : ?>
                <ul>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part('parts/content', 'book');?>
                <?php endwhile; ?>
                </ul>
            <?php else : ?>
                <p>Auncun livre disponible. Désolé.</p>
            <?php endif; ?>
        </div>
    </div>

    </div> <!--  container -->
</div> <!-- main-content -->

<?php
get_footer();