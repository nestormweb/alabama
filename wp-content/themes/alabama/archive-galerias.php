<?php get_header(); ?>
<section class="articulo">
  <div class="container">
    <div class="row">
      <div class="col-md-9">

        <h2 class=" TITULO_NOTICIAS posttitle  titulnar"><?php post_type_archive_title(); ?></h2>

        <!-- Info Blcoks -->

        <div style="padding-top: 25px;">
          <form>
            <div class="input-group">
              <input type="text" name="s" class="form-control" value="<?php echo $s; ?>"
                placeholder="<?php post_type_archive_title(); ?> a buscar">

              <span class="input-group-btn">
                <button class="btn btn-default" value="Search" type="submit">Buscar</button>
              </span>
            </div><!-- /input-group -->
          </form>
        </div>


        <?php

           $args = null;
           $args=$wp_query->query_vars;
          
           $args['posts_per_page'] = 7;
       


//var_dump($args);

             query_posts($args);

             ?>
        <?php
              if(function_exists('wp_paginate')) {
                wp_paginate();
            } ?>


        <div class="container-fluid">

          <div class="row">

            <?php

                  if (have_posts()) : while ( have_posts() ) : the_post(); ?>
            <div class="col-md-6">
              <a href="<?php the_permalink(); ?>" class="articulo archive galeria wow slideInLeft">
                <?php the_post_thumbnail( 'thumbnail', array('class' => 'alignleft')  ); ?>
                <h2><?php the_title(); ?></h2>
                <span class="fecha"><?php the_time('d M Y');?></span>
                <?php //echo do_shortcode('[ssba-buttons]'); ?>

                <div class="p_noticias">
                  <?php the_excerpt(); ?>

                </div>

                <span class="leer btn btn-sm btn-primary btn-cepy" style="float: left;">Ver Galería</span>



              </a>
            </div>
            <?php endwhile; else: ?>
            <h3>No hay articulos en esta seccion, puede utilizar el buscador del sitio. </h3>
            <?php endif; ?>





          </div>
        </div>
        <?php if(function_exists('wp_paginate')) {
    wp_paginate();
} ?>
      </div>
      <div class="col-md-3">
        <div id="sidebar">

          <?php get_sidebar(); ?>




        </div>
      </div>
    </div>
  </div>
  </div>
</section>



<?php get_footer(); ?>