<section id="parceiros">
  <div class="container bg-white">
    <div class="crsl-nav" id="crsl-nav" >
      <a class="previous left" href="#parceiros">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      </a>
      <a class="next right" href="#parceiros">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      </a>
    </div>
    <div class="col-md-offset-1 col-md-10">
      <div class="crsl-items" data-navigation="crsl-nav">
        <div class="crsl-wrap">
          <?php
            $post_type = 'parceiros';
            $Query = new WP_Query(array('post_type' => $post_type, 'post_status' => 'publish', 'posts_per_page' => -1));
            if ($Query->have_posts()) { while ($Query->have_posts()) : $Query->the_post();
              ?>
              <figure class="crsl-item">
                <img src="<?php the_image_src() ?>">
              </figure>
            <?php endwhile; }  wp_reset_query(); ?>

        </div>
      </div>
    </div>

  </div>
</section>