<li class="book-card">               
    <div class="book-card__image">
        <?php if(has_post_thumbnail()){ the_post_thumbnail(); } ?>
    </div>
    <div class="book-card__text">
        <p class="book-card__text__titre"><?php the_title(); ?></p>
        <p class="book-card__text__reference">Réf : #<?php the_field('reference_livre'); ?></p>
        <p class="book-card__text__resume">Résumé</p>
        <a class="book-card__text__lien" href="<?php the_permalink(); ?>">En savoir plus</a>
    </div>  
</li>