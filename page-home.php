<?php get_header(); ?>

<?php
$imagens = get_field('galeria_de_slide');

//var_dump($imagens);
?>

<!--Slide-->
<?php if (isset($imagens)) : ?>
    <ul>
        <?php foreach ($imagens as $image) : ?>
            <li><img src="<?= $image; ?>" alt=""></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<!--Condeudo 1-->

<?php get_footer(); ?>