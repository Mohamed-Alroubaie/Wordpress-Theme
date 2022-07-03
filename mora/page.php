<?php get_header(); ?>

<div id="content">
  <div class="content_item">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : ?>
      <?php the_post(); ?>
      <?php the_title('<h2>', '</h2>', true); ?>
      <?php the_content(); ?>
      <?php endwhile; ?>
      <?php else : ?>
        <h2>Nichts gefunden</h2>
        <p>Sorry, aber du suchst gerade nach etwas, was hier nicht ist.</p>
        <?php endif; ?>                        
  <!--close button_small-->
</div>
<!--close content_container-->
</div>
<!--close content_item-->
</div>
<!--close content-->
</div>
<!--close site_content-->
<!-- bis hei Content -->


<?php get_footer(); ?>