<?php
get_header(); // Include header.php
get_template_part('parts/slider'); // Include slider.php
?>

<main class="content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article>
            <h1><?php the_title(); ?></h1>
            <div><?php the_content(); ?></div>
        </article>
    <?php endwhile; endif; ?>
</main>

<?php
get_footer(); // Include footer.php
?>
