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
    <div class="container front-page">

        <?php the_content(); ?>

        <!-- <div class="front-page__presentation">
            <div class="front-page__presentation_banner">
                <h1>Bibliothèque de Lens</h1>
            </div>
            <div class="front-page__presentation_text">
                <p>Présentation de la bibliothèque</p>
            </div>
            
        </div>

        <div class="front-page__livres-a-la-une">
            <h2 class="front-page__livres-a-la-une__entete">Nos livres à la une</h2>
            <div class="front-page__livres-a-la-une__slideshow">
                <p>Slideshow</p>
            </div>
            <a class="front-page__livres-a-la-une__lien" href="/book">Tous nos livres</a>
        </div>
        
        <div class="front-page__contact">
            <h2 class="front-page__contact__entete">Contactez-nous</h2>
            <div class="front-page__contact__formulaire">
                <p>Formulaire</p>
            </div>
        </div> -->

    </div> <!--  container -->
</div> <!-- main-content -->

<?php
get_footer();