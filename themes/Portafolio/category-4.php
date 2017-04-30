<?php get_header(); ?>
<h1>
  <h1 class="page-heading max-width">Categoria Especial: Ilustraciones (ID = 5)</h1>
  <div class="grid max-width">
    <div class="block grid--item-12">
      <div class="block__body grid">
        <?php

          if( have_posts()) :
            while( have_posts()) :
              the_post();
              ?>
                <article class="block grid--item-4">
                  <h2 class="block__title"> <?php the_title();   ?></h2>
                  <div class="block__body">
                  <p>  <?php the_excerpt(); ?></p>
                <footer>
                  <div class="">
                    <small><?php the_tags(); ?></small>
                  </div>
                  <div class="">
                    <b><?php the_author(); ?></b>
                  </div>

                  <a href="<?php the_permalink(); ?>">Leer Más</a>
                </footer>
                </article>
              <?php
            endwhile;
            else:
         ?>
         <h4>Huy, no encontramos entradas</h4>
         <?php
       endif;
       wp_reset_postdata();
       ?>

      </div>
    </div>
  </div>

<?php get_footer(); ?>

</h1>
