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
    <nav id='menuIdiomas' class="navbar navbar-expand">
        <div class="mx-auto d-sm-flex d-block flex-sm-nowrap">
        <?php
            wp_nav_menu( array(
                    'theme_location'    => 'idiomasMenu',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'idiomasNavbar',
                    'menu_class'        => 'nav navbar-nav op8',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
            ) );
        ?>
        </div>
    </nav>

    <nav id='menuSocial' class="navbar navbar-expand">
        <div class="mx-auto d-sm-flex d-block flex-sm-nowrap">
        <?php
            wp_nav_menu( array(
                    'theme_location'    => 'socialMenu',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'socialNavbar',
                    'menu_class'        => 'nav navbar-nav op8',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
            ) );
        ?>
        </div>
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
    
    <nav class="navbar navbar-expand-lg color2">
        <div class="mx-auto d-sm-flex d-block flex-sm-nowrap">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <i class="material-icons op8">menu</i>
        </button>

        <?php
            wp_nav_menu( array(
                    'theme_location'    => 'mainMenu',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'mainNavbar',
                    'menu_class'        => 'nav navbar-nav mr-auto',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
            ) );
            ?>
        </div>                     
    </nav>
                 
</div>

<!-- banner -->
<?php 
get_template_part('content','banner'); 
?>             
<!-- banner fim -->


<div class="container">

<!-- avisos -->
<?php 
get_template_part('content','aviso'); 
?>   
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
     <div id="rodapeRow" class="sticky-top">
         <div class="row justify-content-center ml-0 mr-0">
             <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3 mt-1">
                <?php
                 wp_nav_menu(array(
                     'theme_location' => 'uteisMenu',
                     'depth' => 3,
                     'container' => 'div',
                     'container_class' => 'rounded',
                     'container_id' => 'uteisMenu',
                     'menu_class' => 'nav navbar-nav',
                     'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                     'walker' => new WP_Bootstrap_Navwalker(),
                 ));
                 ?>  
             </div>
             <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3 mt-1">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'visiteMenu',
                    'depth' => 3,
                    'container' => 'div',
                    'container_class' => 'rounded',
                    'container_id' => 'visiteMenu',
                    'menu_class' => 'nav navbar-nav',
                    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                    'walker' => new WP_Bootstrap_Navwalker(),
                ));
                ?> 
             </div>
         </div>
         <div id="rodapeCreditos" class="text-center">
             Direitos Reservados © 1999-<?php echo date('Y');?> 
             Instituto de Geociências - Universidade de São Paulo 
             :: <a href='/creditos' class="op6">Créditos</a>
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