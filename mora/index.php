<?php get_header(); ?>
<?php get_sidebar();?>



<div id="content">
  <div class="content_item">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : ?>
      <?php the_post(); ?>
      <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <section class="box info">
    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent link to this one article">
    <?php the_title('<h2>', '</h2>', true); ?>
  </a>
  <div>
    <?php comments_popup_link('No comment', '1 comment', '% Comments', '', 'Comments are disabled.'); ?>
    <?php edit_post_link('Edit',' | ',''); ?>
  </div>
  <?php the_content('<br /><span class="ym-button ym-next">Read more</span>'); ?>
  <div>
    <?php comments_template(); ?>
  </div>
  <p>Written by <b><?php the_author(); ?></b> am <?php the_time('j.F Y'); ?> um <?php the_time('G:i'); ?> clock, filed under <?php the_category(' | '); ?></p>
</section>
</div>
<?php endwhile; ?>
<p>
  <?php previous_post_link('« %link') ?>
  <?php next_post_link('<span style="float:right">%link »</span>') ?>
</p>
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

<?php get_footer(); ?>
