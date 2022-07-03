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
        <h2>Nothing found</h2>
        <p>Sorry, but you are looking for something that is not here.</p>
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

<?php get_template_part('sidebar-single'); ?>
<?php get_footer(); ?>