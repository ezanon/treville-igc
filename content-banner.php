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

                          $titulo = get_field('titulo');
                          $resumo = get_field('resumo');
                          $link = get_field('link');
                          $imagem = get_field('imagem');

                  ?>        
                            <div class="carousel-item mx-auto <?php if ($contapost == 1) echo 'active'; ?>">
                                <a href="<?php echo $link; ?>">
                                    <img src='<?php echo $imagem; ?>' class="img-fluid d-block mx-auto align-middle" />
                                </a>
                                <div class="carousel-caption d-none d-md-block">
                                    <h5><?php echo $titulo; ?></h5>
                                    <?php echo $resumo; ?>
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