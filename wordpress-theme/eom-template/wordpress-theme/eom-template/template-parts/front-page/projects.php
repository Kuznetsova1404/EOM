<?php
$years = get_terms([
    'taxonomy'   => 'project_year',
    'hide_empty' => true,
    'orderby'    => 'name',
    'order'      => 'DESC',
]);
$query = new WP_Query([
    'post_type'      => 'projects',
    'posts_per_page' => -1,
]);
?>
<section class="section" id="projects">
  <div class="container">
    <h2>ОПЫТ</h2>
    <div class="year-filter" data-project-filter>
      <?php if (!is_wp_error($years)) : foreach ($years as $i => $year) : ?>
        <button type="button" class="year-filter__btn <?php echo $i === 0 ? 'is-active' : ''; ?>" data-year="<?php echo esc_attr($year->slug); ?>"><?php echo esc_html($year->name); ?></button>
      <?php endforeach; endif; ?>
    </div>
    <div class="cards cards--4" id="projects-grid">
      <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
        $terms = wp_get_post_terms(get_the_ID(), 'project_year', ['fields' => 'slugs']);
      ?>
        <article class="card" data-years="<?php echo esc_attr(implode(',', $terms)); ?>">
          <?php if (has_post_thumbnail()) : the_post_thumbnail('large'); endif; ?>
          <div class="card__overlay"></div>
          <div class="card__content"><h3><?php the_title(); ?></h3></div>
        </article>
      <?php endwhile; wp_reset_postdata(); endif; ?>
    </div>
  </div>
</section>
