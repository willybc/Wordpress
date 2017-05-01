<?php get_header(); ?>

<div class="block max-width">
  <div class="block__title">
    <?php the_author(); ?>
  </div>
  <div class="block__body">
    <?php echo get_avatar(get_the_author_meta('user_email'), apply_filters(
      '', 60)); ?>

      <p>
          <!-- <?php printf ( __('About %s', ''), get_the_author()); ?> -->
          <?php the_author_meta ('description'); ?>
      </p>
  </div>
</div>

<?php get_footer(); ?>
