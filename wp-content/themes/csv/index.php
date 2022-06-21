<?php get_header(); ?>

<h1><?php bloginfo('name'); ?></h1>
<h2><?php bloginfo('description'); ?></h2>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <h3><?php the_title(); ?></h3>

    <div><?php the_content(); ?></div>
  <?php endwhile; ?>
<?php endif; ?>