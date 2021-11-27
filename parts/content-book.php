<li class="book-card">               
    <div class="book-card__image">
        <img src="https://cdn-icons-png.flaticon.com/512/4478/4478876.png" alt="Photo_du_livre" />
        <?php //if(has_post_thumbnail()){ the_post_thumbnail('event-image'); } ?>
    </div>
    <div class="book-card__text">
        <p class="book-card__text__titre"><?php the_title(); ?></p>
        <p class="book-card__text__resume">Résumé</p>
        <a class="book-card__text__lien" href="<?php the_permalink(); ?>">En savoir plus</a>
    </div>  
</li>