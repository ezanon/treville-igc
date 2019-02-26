<!doctype html>
<html lang="pt-br">
  <head>
      
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- icones -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- IGc -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/igcstyle.css" rel="stylesheet" type="text/css"/>
    
  </head>

<body>
      
<!-- menus auxiliares -->
<div id='menuSuperior' class="container-fluid color3">
    <nav id='menuIdiomas' class="navbar navbar-expand-md">
        <?php
            wp_nav_menu( array(
                    'theme_location'    => 'idiomasMenu',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'idiomasNavbar',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
            ) );
        ?>
    </nav>

    <nav id='menuSocial' class="navbar navbar-expand-md">
        <?php
            wp_nav_menu( array(
                    'theme_location'    => 'socialMenu',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'socialNavbar',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
            ) );
        ?>
    </nav>
</div>
      
<!-- cabecalho -->     
<div id="cabecalhoHome" class="container-fluid">
   
    
    <nav class="navbar container">
        <a class="navbar-brand" href="/">
            <img id="oLogotipo" class="img-fluid mx-auto my-1" src="/wp-content/themes/treville-igc/logo_IGc_colorido.png" alt=""/>
        </a>
        <form role='search' method="get" class="form-inline" action="https://google.com/search">
            <input id="busca" class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Search" name='q'>
            <button id='botaoBusca' class="btn my-2 my-sm-0" type="submit"><i class="material-icons">search</i></button>
            <!--<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
            <input type='hidden' name="sitesearch" value="igc.usp.br">
        </form>           
    </nav>
    
        <nav class="navbar navbar-expand-md color2">
            <div class="mx-auto d-sm-flex d-block flex-sm-nowrap">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
 
            <?php
                wp_nav_menu( array(
                        'theme_location'    => 'mainMenu',
                        'depth'             => 3,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'mainNavbar',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker(),
                ) );
                ?>
            </div>                     
        </nav>
                 
</div>

<!-- banner -->
   
        
            <?php 
                  // banner *start*                  
                  $my_args_banner = array(
                      'post_type' => 'banners',
                      'posts_per_page' => 5
                  );
                  $my_query_banner = new WP_Query($my_args_banner);
                  if ($my_query_banner->have_posts()) {
                  ?>    
                    <div class="container">
                        <div id="bannerRow"> 
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
                                    <?php the_post_thumbnail('bannerImage', array('class' => 'img-fluid d-block mx-auto align-middle')); ?>
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

                    </div></div></div></div>
               
                  <?php
                  }   
                  wp_reset_query(); 
                  ?>          

<!-- banner fim -->

<div class="container">

<!-- avisos -->

<?php                  
    $my_args_avisos = array(
        'post_type' => 'aviso',
        'posts_per_page' => 2
    );
    $my_query_avisos = new WP_Query($my_args_avisos);
    if ($my_query_avisos->have_posts()) : ?>
        <div id="avisosContainer">
        <?php while($my_query_avisos->have_posts()) :?>        
    
            <div class="card text-center">
                <div class="card-body">
                    <?php $my_query_avisos->the_post(); ?>
                    <h5 class="card-title"><?php the_title(); ?></h5>
                    <p class="card-text"><?php the_excerpt(); ?></p>
                </div>
            </div>
            
        <?php endwhile; ?>
            
        </div>

<?php endif; 
wp_reset_query(); ?>
<!-- avisos fim -->

<!-- cards -->
<div id='cardsContainer'>
    <div class="row">  
        <div class="card-columns">
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                    <?php get_template_part('content','card'); ?>
                <?php endwhile; ?>
                <?php endif; 
                wp_reset_query(); ?>
                <?php next_posts_link('Mais antigos'); ?> <?php previous_posts_link('Mais recentes'); ?>
        </div></div>   
    
</div>
<!-- cards fim -->

</div>

<!-- rodape -->
<div class="container-fluid">
     <div id="rodapeRow" class="sticky-top">
        RODAPÉ
    </div>
</div>
<!-- rodape fim -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
</body>

</html>