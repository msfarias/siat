  <?php get_header() ?>

      <header id="header" role="banner">
        <div class="container bg-white">
          <div id="slides" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <?php
                $index = 0;
                $post_type = 'slides';
                $Query = new WP_Query(array('post_type' => $post_type, 'post_status' => 'publish', 'orderby'=>'menu_order','order'=>'ASC', 'posts_per_page' => -1));
                if ($Query->have_posts()) { while ($Query->have_posts()) : $Query->the_post();
                $index++;
              ?>
                <li data-target="#slides" data-slide-to="<?php echo $index; ?>" class="<?php if ($index == 1 ) echo 'active' ?>" ></li>

              <?php endwhile; }  wp_reset_query(); ?>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <?php
                $index = 0;
                $post_type = 'slides';
                $Query = new WP_Query(array('post_type' => $post_type, 'post_status' => 'publish', 'orderby'=>'menu_order','order'=>'ASC', 'posts_per_page' => -1));
                if ($Query->have_posts()) { while ($Query->have_posts()) : $Query->the_post();
                $index++;
              ?>
                <div class="item <?php if ($index == 1 ) echo 'active' ?>">
                  <img src="<?php the_image_src() ?>" alt="<?php the_title(); ?>">

                  
                </div>
              <?php endwhile; }  wp_reset_query(); ?>

            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#slides" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#slides" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </header>
      <?php global $post; if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article id="<?php the_slug() ?>">
          <section id="main">
            <div class="container bg-white">
              <div class="row">
                <h2 class="col-md-12">
                  <?php the_title() ?>
                </h2>
              </div>
              <div class="row h-entry">
                <?php if (has_post_thumbnail()){ ?>
                  <div class="col-md-7 ">
                    <h2 class="p-name"><?php the_title() ?></h2>
                    <div class="entry  e-content">
                      <?php the_content(); ?>
                    </div>
                  </div>
                  <figure class="u-photo figure col-md-4" role="complementary">
                    <img src="<?php the_image_src(); ?>" alt="Mandesfiha" class="img-responsive">
                  </figure>
                <?php } else { ?>
                  <div class="col-md-12">
                    <h2 class="p-name"><?php the_title() ?></h2>
                    <div class="entry  e-content">
                      <?php the_content(); ?>
                    </div>
                  </div>
                <?php } ?>
              </div>
            </div>
          </section>
          <?php get_template_part('sections/parceiros');  ?>
        </article>
      <?php endwhile; endif; wp_reset_query(); ?>



      <?php get_footer(); ?>