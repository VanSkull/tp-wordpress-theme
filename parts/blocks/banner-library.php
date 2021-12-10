<?php 
$block_id = $block['id'];
$bgPhoto = get_field('banner_image', $block_id);
$titre = get_field('banner_titre', $block_id);
$description = get_field('banner_description', $block_id);

?>

<div class="banner-library" style="background-image: url('<?php if(!empty($bgPhoto)){ echo $bgPhoto['url']; } ?> ');">
    <h1 class="banner-library__titre"><?php echo $titre; ?></h1>
    <p class="banner-library__description"><?php echo $description; ?></p>
    <a class="banner-library__lien" href="/a-propos">En savoir plus</a>
</div>