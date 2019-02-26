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