<?php
$block_id = $block['id'];
$books_posts = books_forward_posts();

?>


<div class="front-page__livres-a-la-une">
    <h2 class="front-page__livres-a-la-une__entete">Nos livres à la une</h2>
    <div class="front-page__livres-a-la-une__slideshow">
        <?php if($books_posts->have_posts()): ?>
        <ul class="books-forward">
            <?php while($books_posts->have_posts()): $books_posts->the_post(); ?>
            <?php get_template_part('parts/content', 'book');?>
            <?php endwhile; ?>
        </ul>
        <?php else : ?>
            <p>Aucun livre n'est mis en avant pour l'instant.</p>
        <?php endif; ?>
    </div>
    <a class="front-page__livres-a-la-une__lien" href="/book">Tous nos livres</a>
</div>
