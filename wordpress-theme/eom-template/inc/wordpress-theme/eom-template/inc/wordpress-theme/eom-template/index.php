<?php get_template_part('front-page');
<?php get_header(); ?>
<main class="container section">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article><?php the_content(); ?></article>
  <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
