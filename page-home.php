<?php get_header(); ?>

<!-- Section Slide Home -->
<div class="container">
    <div class="row">
        <div class="col-12 col-md-9">
            <?php if (have_rows('galeria_slide_home')) : ?>
                <?php while (have_rows('galeria_slide_home')) : the_row(); ?>
                    <?php
                    $imagem = get_sub_field("imagem");
                    $titulo = get_sub_field("texto_slide");
                    $link = get_sub_field("link");
                    ?>
                    <img src="<?= $imagem; ?>" alt="" class="img-fluid">
                    <a href="<?= $link; ?>">
                        <p><?= $titulo; ?></p>
                    </a>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <div class="col-12 col-md-3">
            <h3>A Câmara mais perto de você</h3>
            <?php $rows = get_field('links_home_Camara_'); ?>
            <?php if ($rows) : ?>
                <?php foreach ($rows as $row) : ?>
                    <a href="<?= $row['link_do_texto']; ?>">
                        <h2><?= $row['titulo']; ?></h2>
                        <p><?= $row['texto']; ?></p>
                    </a>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- Section Slide Home -->

<!-- Section Content 1 -->

<!-- Section Content 1 / -->

<?php get_footer(); ?>
