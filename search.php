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
        <article id="search">
          <section id="main">
            <div class="container bg-white">
              <div class="row">
                <h1 class="col-md-12">Você pesquisou por: <?php the_search_query(); ?> </h1>
              </div>
              <div class="row h-entry">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  <article id="<?php the_slug(); ?>" class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"  role="button" >
                      <h2> <?php the_title(); ?> </h2>
                      <?php the_excerpt(); ?>
                    </a>
                  </article>
                <?php endwhile; else: ?>
                  <article id="no-results" class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <h2>Sem Resultados</h2>
                    <p>Não foi encontrado nenhum resultado pesquise novamente.</p>

                  </article><!--no-results-->
                  <aside id="" class="col-xs-6 col-sm-6 col-md-6 col-lg-6" role="complementary">
                    <form action="<?php bloginfo('siteurl'); ?>" class="navbar-form navbar-right" role="search">
                      <label for="s" class="screen-reader-text hidden">Search for:</label>
                      <div class="form-group">
                        <input type="text" id="s" name="s" class="form-control" placeholder="Buscar" required >
                      </div>
                      <button id="searchsubmit type="submit" class="btn btn-default">
                      <i class="fa fa-search"></i>
                      </button>
                    </form>
                  </aside>
                <?php endif; ?>
              </div>
            </div>
          </section>
          <?php get_template_part('sections/parceiros');  ?>
        </article>



      <?php get_footer(); ?>