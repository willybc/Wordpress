<?php get_header(); ?>
  <div class="">
      <img src="http://localhost/portafolio/wp-content/uploads/2017/05/bg_thebetaisover.jpg" alt="" id="calloutHeader">
  </div>
  </div>
  <div class="grid max-width">
    <div class="block grid--item-9" id="containermid">
      <div class="block__title">
        <ul class="indice">
          <li class="blog">BLOG</li>
          <li class="updates">UPDATES</li>
        </ul>
      </div>
      <div class="block__body" id="containermidmid">
        <?php
          $args = array('author'=> "willybc", );
          $filter_posts = new WP_Query($args);

          if($filter_posts -> have_posts()) :
            while($filter_posts -> have_posts()) :
              $filter_posts ->the_post();
              ?>
                <article class="block grid" id="grilla">
                  <h1 class="block__title" id="titulo"><a href="#"> <?php the_title();   ?></a></h1>
                  <p id="fecha"> <b><?php echo get_the_date();  ?> - Dota Team </b></p>
                  <?php
                    if(has_post_thumbnail()){
                       the_post_thumbnail();
                    }

                   ?>
                  <div class="block__body">
                  <p>  <?php the_content(); ?></p>
                <footer>
                  <div class="">
                    <small><?php the_tags(); ?></small>
                  </div>
                  <!-- <div class="">
                      <b><?php the_author_posts_link(); ?></b>
                  </div> -->

                  <!-- <a href="<?php the_permalink(); ?>">Leer Más</a> -->
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
    <?php get_sidebar("hero"); ?>

  </div>
<?php get_footer(); ?>
