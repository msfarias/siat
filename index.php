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
      <article id="home">
        <section id="main">
          <div class="container bg-white">
            <div class="col-md-4">
              <?php echo do_shortcode('[contact-form-7 id="4" title="Contato" html_class="use-floating-validation-tip"]'); ?>
            </div>
            <?php /* ?>
            <form id="contato" class="form-horizontal col-md-4 text-left">
              <div class="row">
                <h2 class="col-md-12">
                  <i class="fa fa-envelope"></i> Contato
                </h2>
              </div>
              <div class="row">
                <fieldset class="col-md-6">
                  <div class="form-group ">
                    <label for="nome" class="control-label hidden"> Nome </label>
                    <div class="input-group">
                    <span class="input-group-addon">
                      <i class="fa fa-user"></i>
                    </span>
                      <input id="nome" name="nome" class="form-control" placeholder="Nome" type="text">
                    </div>
                  </div>
                  <!-- Prepended text-->
                  <div class="form-group ">
                    <label for="telefone" class="control-label hidden"> Telefone </label>
                    <div class="input-group">
                    <span class="input-group-addon">
                      <i class="fa fa-phone"></i>
                    </span>
                      <input id="telefone" name="telefone" class="form-control" placeholder="Telefone" type="tel">
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="email" class="control-label hidden"> E-mail </label>
                    <div class="input-group">
                    <span class="input-group-addon">
                      <i class="fa fa-envelope"></i>
                    </span>
                      <input id="email" name="email" class="form-control" placeholder="E-mail" type="text">
                    </div>
                  </div>
                </fieldset>
                <fieldset class="col-md-6">
                  <div class="form-group ">
                    <label for="email" class="control-label hidden"> E-mail </label>
                    <div class="input-group mensagem">
                    <span class="input-group-addon">
                      <i class="fa fa-comment"></i>
                    </span>
                      <textarea id="mensagem" name="mensagem" class="form-control" placeholder="" >Mensagem</textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="hidden" value="contato" name="form-name">
                    <button type="submit" id="enviar" name="enviar" class="btn btn-danger btn-darkred">
                      Enviar
                    </button>
                  </div>
                </fieldset>
              </div>
            </form>
            <?php */ ?>
            <div class="col-md-4"></div>
            <div class="col-md-4">
              <div class="row">
                <h2  class="col-md-6" >Vagas de Trabalho</h2>
                <img class="pull-right" src="<?php echo get_template_directory_uri().'/'; ?>img/vagas.png" alt=""  >
              </div>
              <div class="row">
                <ul class="list-group col-md-12">
                  <?php
                  $index_ = 0;
                  $post_type = 'vagas';
                  $Query = new WP_Query(array('post_type' => $post_type, 'post_status' => 'publish', 'posts_per_page' => -1));
                  if ($Query->have_posts()) { while ($Query->have_posts()) : $Query->the_post();
                    $index_ ++;
                  ?>
                    <li class="list-group-item">
                      <span class="badge"><?php echo $index_; ?></span>
                      <?php the_title() ?>
                    </li>
                  <?php endwhile; }  wp_reset_query(); ?>
                </ul>
              </div>
            </div>
          </div>
        </section>
        <?php get_template_part('sections/parceiros');  ?>
      </article>
      <?php get_footer(); ?>