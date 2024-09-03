<div class="col-lg-4 col-md-6 col-sm-12 d-flex">
    <div class="card flex-fill">
        <div class="card-header">
            <?php 
                $cat = get_the_category();
                echo $cat[0]->name;
            ?>
        </div>
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('post-thumbnail', array('class'=>'card-img-top img-fluid')); ?>
        </a>
        <div class="card-body">
            <h5 class="card-title"><?php the_title(); ?></h5>
            <!--<p class="card-text"><?php the_excerpt(); ?></p>-->

        </div>
        <div class="card-footer text-muted text-right">
            <a href="<?php the_permalink(); ?>">Saiba mais...</a> 
        </div>
    </div>
</div>
