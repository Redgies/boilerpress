<?php get_header(); ?>

<main>
    <?php if (have_rows('components')) :
        while (have_rows('components')) : the_row();
            get_template_part('components/' . get_row_layout());
        endwhile;
    else : ?>
        <div class="container">
            <?php the_content(); ?>
        </div>
    <?php endif; ?>
</main>

<?php get_footer(); ?>