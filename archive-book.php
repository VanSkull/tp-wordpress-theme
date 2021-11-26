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
    
    <?php
        if ( have_posts() ) {

            // Load posts loop
            while ( have_posts() ) {
                the_post();
                the_title();
                the_content();
            }

        }
    ?>

    </div> <!--  container -->
</div> <!-- main-content -->

<?php
get_footer();