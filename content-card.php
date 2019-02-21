<div class="card col-md-3 col-sm-6 col-12" style="width: 18rem;">
    <?php the_post_thumbnail('post-thumbnail', array('class'=>'card-img-top img-fluid')); ?>
    <div class="card-body">
        <h5 class="card-title"><?php the_title(); ?></h5>
        <!--<p class="card-text"><?php the_excerpt(); ?></p>-->
        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Clique aqui</a>
    </div>
</div>