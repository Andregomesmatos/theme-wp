<?php get_header(); ?>
<hr>
<?php
$args = array(
        'post_type' => 'post'
);
$post_list = new WP_Query($args);

while (have_posts()) : if (have_posts()) : the_post(); ?>
                <h1><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h1>

                <p><?php the_excerpt(); ?></p><!--pegando o resumo do wp-->

                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>

                <?php the_content(); ?><!--pegando o conteudo do wp-->

<?php endif;
endwhile; ?>

<?php
get_footer(); ?>