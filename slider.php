<section class="slider">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="slide">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('full'); ?>
            <?php endif; ?>
            <h2><?php the_title(); ?></h2>
        </div>
    <?php endwhile; endif; ?>
</section>
