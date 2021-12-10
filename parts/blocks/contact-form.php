<?php 
$block_id = $block['id'];
$bgPhoto = get_field('banner_image', $block_id);
$titre = get_field('banner_titre', $block_id);
$description = get_field('banner_description', $block_id);

?>

<div class="front-page__contact">
    <h2 class="front-page__contact__entete">Contactez-nous</h2>
    <div class="front-page__contact__formulaire">
        <p>Formulaire</p>
    </div>
</div>