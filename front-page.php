<!doctype html>
<html lang="pt-br">
  <head>
      
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <?php wp_head(); ?>
    
  </head>
  <body>
      <div class="container">
          <div id="mainRow" class="row p-1">
              <div class="col-sm-4">                  
                  <img id="logotipo" class="img-fluid mx-auto my-3" src="/wp-content/themes/treville-igc/igcLogotipoPBFundoTransparente.png" alt=""/>
              </div>
              <div class="col-sm">
                  
                  <?php 
                  // banner *start*                  
                  $my_args_banner = array(
                      'post_type' => 'banners',
                      'posts_per_page' => 5
                  );
                  $my_query_banner = new WP_Query($my_args_banner);
                  if ($my_query_banner->have_posts()) {
                  ?>    
                  <div id="bannerRow" class="row">
                      <div class="col-12 mb-5">
                          <div id="carouselBanners" class="carousel slide" data-ride="carousel">
                              <div class="carousel-inner">    
                  <?php
                      $contapost = 0;
                      while ($my_query_banner->have_posts()) {
                          $contapost++;
                          $my_query_banner->the_post();  
                  ?>        
                            <div class="carousel-item <?php if ($contapost == 1) echo 'active'; ?>">
                                <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid d-block rounded')); ?>
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="invisible"><?php the_title(); ?></h5>
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
                  //banner *end* 
                  ?>                                                  
                  
                  <div class="row align-items-start">
                      <div class="col-12 col-sm-8">
                          <div class="card">
                              <div class="card-body">
                                  <h5 class="card-title">Special title treatment</h5>
                                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                  <a href="#" class="btn btn-primary">Go somewhere</a>
                              </div>
                          </div>
                      </div>
                      <div class="col-sm">
                          <div class="card">
                              <div class="card-body">
                                  <h5 class="card-title">Special title treatment</h5>
                                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                  <a href="#" class="btn btn-primary">Go somewhere</a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="row align-items-start">
                      <div class="col-sm">
                          <div class="card">
                              <div class="card-body">
                                  <h5 class="card-title">Special title treatment</h5>
                                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                  <a href="#" class="btn btn-primary">Go somewhere</a>
                              </div>
                          </div>
                      </div>
                      <div class="col-sm"><div class="card">
                              <div class="card-body">
                                  <h5 class="card-title">Special title treatment</h5>
                                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                  <a href="#" class="btn btn-primary">Go somewhere</a>
                              </div>
                          </div>
                      </div>
                      <div class="col-sm">
                          <div class="card">
                              <div class="card-body">
                                  <h5 class="card-title">Special title treatment</h5>
                                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                  <a href="#" class="btn btn-primary">Go somewhere</a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="row align-items-start">
                      <div class="col-sm-4">
                      <div class="card">
                              <div class="card-body">
                                  <h5 class="card-title">Special title treatment</h5>
                                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                  <a href="#" class="btn btn-primary">Go somewhere</a>
                              </div>
                          </div>
                      </div>
                      <div class="col-sm">
                      <div class="card">
                              <div class="card-body">
                                  <h5 class="card-title">Special title treatment</h5>
                                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                  <a href="#" class="btn btn-primary">Go somewhere</a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="row align-items-start">
                      <div class="col-sm">
                      <div class="card">
                              <div class="card-body">
                                  <h5 class="card-title">Special title treatment</h5>
                                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                  <a href="#" class="btn btn-primary">Go somewhere</a>
                              </div>
                          </div>
                      </div>
                      <div class="col-sm">
                      <div class="card">
                              <div class="card-body">
                                  <h5 class="card-title">Special title treatment</h5>
                                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                  <a href="#" class="btn btn-primary">Go somewhere</a>
                              </div>
                          </div>
                      </div>
                      <div class="col-sm">
                      <div class="card">
                              <div class="card-body">
                                  <h5 class="card-title">Special title treatment</h5>
                                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                  <a href="#" class="btn btn-primary">Go somewhere</a>
                              </div>
                          </div>
                      </div>
                      <div class="col-sm">
                      <div class="card">
                              <div class="card-body">
                                  <h5 class="card-title">Special title treatment</h5>
                                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                  <a href="#" class="btn btn-primary">Go somewhere</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>