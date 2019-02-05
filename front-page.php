<!doctype html>
<html lang="pt-br">
  <head>
      
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- IGc -->
    <link href="wp-content/themes/treville-igc/css/igcstyle.css" rel="stylesheet" type="text/css"/>
    
  </head>
  <body>
      
<!-- cabecalho -->     
<div id="cabecalhoHome" class="container-fluid">
    <nav class="navbar navbar-expand-md rounded navbar-dark bg-dark" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="/">
                <img id="oLogotipo" class="img-fluid mx-auto my-1" src="/wp-content/themes/treville-igc/igcLogotipoPBFundoTransparente.png" alt=""/>
            </a>
            <?php
            wp_nav_menu( array(
                    'theme_location'    => 'mainMenu',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'bs-example-navbar-collapse-1',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
            ) );
            ?>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
    </nav>
</div>

<!-- banner -->
<div id="bannerRow" class="container-fluid">    
        
            <?php 
                  // banner *start*                  
                  $my_args_banner = array(
                      'post_type' => 'banners',
                      'posts_per_page' => 5
                  );
                  $my_query_banner = new WP_Query($my_args_banner);
                  if ($my_query_banner->have_posts()) {
                  ?>    
                  <div class="row">
                      <div class="col-12">
                          <div id="carouselBanners" class="carousel slide" data-ride="carousel">
                              <div class="carousel-inner">    
                  <?php
                      $contapost = 0;
                      while ($my_query_banner->have_posts()) {
                          $contapost++;
                          $my_query_banner->the_post();  
                          $link = get_post_meta( $post->ID, 'Link', TRUE );
                  ?>        
                            <div class="carousel-item mx-auto <?php if ($contapost == 1) echo 'active'; ?>">
                                <a href="<?php echo $link; ?>">
                                    <?php the_post_thumbnail('bannerImage', array('class' => 'img-fluid d-block mx-auto align-middle rounded')); ?>
                                </a>
                                <div class="carousel-caption d-none d-md-block invisible">
                                    <h5><?php the_title(); ?></h5>
                                    <?php the_excerpt(); ?>
                                </div>
                            </div> 
                  <?php
                        }
                  ?>
                  <a class="carousel-control-prev" href="#carouselBanners" role="button" data-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Previous</span>
                                  </a>
                                  <a class="carousel-control-next" href="#carouselBanners" role="button" data-slide="next">
                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Next</span>
                                  </a>

                              </div>
                          </div>                

                      </div>
                  </div>                
                  <?php
                  }   
                  wp_reset_query(); 
                  ?>          

</div><!-- banner fim -->
    


      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>