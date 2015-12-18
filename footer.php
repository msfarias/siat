
      <nav id="navbar-footer" class="navbar navbar-transparent" role="navigation">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-footer">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-footer pull-right">
           <!-- <ul class="nav navbar-nav navbar-left">

              <li class="active"><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
            </ul>-->
            <?php
              wp_nav_menu(
                array(
                  'theme_location'  => 'footer-menu',
                  'depth'           => 2,
                  'menu'            => '',
                  'container'       => false,
                  'container_class' => '',
                  'container_id'    => '',
                  'menu_class'      => 'nav navbar-nav navbar-left',
                  'fallback_cb'     => '',
                  'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                  //Process nav menu using our custom nav walker
                  'walker' => new wp_bootstrap_navwalker()
                ));
            ?>

            <ul class="nav navbar-nav navbar-left">
              <li>
                <a href="#">
                  <i class="fa fa-envelope-square"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-rss-square"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-facebook-square"></i>
                </a>
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div>

      </nav>


        <section id="copy">
          <div class="container">
            <div class="row">
              <div class="text-center">
                <div itemtype="http://schema.org/Organization" itemscope="" class="list-unstyled list-inline">
                  <a style="width:12%; display:inline-block;" href="http://www.agenciawfuture.com.br" target="_blank" title="Agência Wfuture - Marketing Digital -  Criação de Sites" itemprop="url">
                    <img src="http://www.agenciawfuture.com.br/img/logo.wfuture.branca.png" alt="Agência Wfuture - Marketing Digital -  Criação de Sites" itemprop="brand" class="img-responsive" style="width:100%;" xlink:href="http://www.agenciawfuture.com.br/img/logo.wfuture.branca.svg">
                    <span style="display:none;" itemprop="name">Agência Wfuture - Marketing Digital -  Criação de Sites</span>
                  </a>
               </div>
              </div>
            </div>
          </div>
        </section>

        </div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri().'/'; ?>js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="<?php echo get_template_directory_uri().'/'; ?>js/vendor/bootstrap-sass/assets/javascripts/bootstrap.min.js"></script>
        <script src="<?php echo get_template_directory_uri().'/'; ?>js/vendor/ResponsiveCarousel/responsiveCarousel.min.js"></script>
        <script src="<?php echo get_template_directory_uri().'/'; ?>js/plugins.js"></script>
        <script src="<?php echo get_template_directory_uri().'/'; ?>js/main.js"></script>
        <?php wp_footer(); ?>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
