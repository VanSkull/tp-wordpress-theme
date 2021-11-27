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
    <div class="container single-book">
        <div class="single-book__presentation">
            <div class="single-book__presentation__image">
                <img src="https://cdn-icons-png.flaticon.com/512/4478/4478876.png" alt="Photo_du_livre" />
            </div>
            <div class="single-book_presentation__text">
                <h3 class="single-book__titre"><?php the_title(); ?></h3>
                <p class="single-book__reference">Réf : #0254E</p>
                <p class="single-book__genres"><?php the_terms( $post->ID, 'book-genre', '<b>Genre(s) :</b> ', ' / ', '' ); ?></p>
                <p class="single-book__ages"><?php the_terms( $post->ID, 'book-age', '<b>Âge(s) :</b> ', ' / ', '' ); ?></p>
                <p class="single-book__resume">Le résumé du livre</p>
            </div>
        </div>

        <div class="single-book__description">
            <h4 class="single-book__description--entete">Contenu détaillé du livre</h4>
            <p class="single-book__description--contenu"><?php the_content(); ?></p>            
        </div>

        <div class="single-book__relations">
            <h4 class="single-book__relations--entete">Livres en relation</h4>
            <div class="single-book__relations--contenu">
                
                <!-- <?php //if ( have_posts() ) : ?>
                    <ul>
                    <?php //while ( have_posts() ) : the_post(); ?>
                        <?php //get_template_part('parts/content', 'book');?>
                    <?php //endwhile; ?>
                    </ul>
                <?php //else : ?>
                    <p>Auncun livre disponible. Désolé.</p>
                <?php //endif; ?> -->

                <div class="relations--contenu__card">
                    <div class="book-card__image">
                        <img src="https://cdn-icons-png.flaticon.com/512/4478/4478876.png" alt="Photo_du_livre" />
                    </div>
                    <div class="book-card__text">
                        <p class="book-card__text__titre">Titre</p>
                        <p class="book-card__text__resume">Résumé</p>
                        <a class="book-card__text__lien" href="#">En savoir plus</a>
                    </div>
                </div>
                <div class="relations--contenu__card">
                    <div class="book-card__image">
                        <img src="https://cdn-icons-png.flaticon.com/512/4478/4478876.png" alt="Photo_du_livre" />
                    </div>
                    <div class="book-card__text">
                        <p class="book-card__text__titre">Titre</p>
                        <p class="book-card__text__resume">Résumé</p>
                        <a class="book-card__text__lien" href="#">En savoir plus</a>
                    </div>
                </div>

            </div>   
        </div>


    </div> <!--  container -->
</div> <!-- main-content -->

<?php
get_footer();