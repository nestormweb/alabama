<?php get_header(); ?>

<section class="articulo" >
  <div class="container">
    <div class="row">
      <div class="col-md-9">

         <h2 clazss=" TITULO_NOTICIAS posttitle  titulnar"><?php post_type_archive_title(); ?></h2>
             
             <!-- Info Blcoks -->

                  <div style="padding-top: 25px;">
                    <form>
                        <div class="input-group">
                        <input type="text" name ="s" class="form-control" value="<?php echo $s; ?>" placeholder="<?php post_type_archive_title(); ?> a buscar" >
                        
                          <span class="input-group-btn">
                            <button class="btn btn-default" value="Search" type="submit">Buscar</button>
                          </span>
                        </div><!-- /input-group -->
                    </form>
                  </div>
                      

                      <?php if(function_exists('wp_paginate')) {
    wp_paginate();
} ?> 

         
        


          <?php

                  if (have_posts()) : while ( have_posts() ) : the_post(); ?>
                   <div class="articulo archive col-md-12 wow slideInLeft">

                    

                    <?php if(get_post_type() == 'post'){ ?>
                      <!--<div class="unit-left">
                            <div class="post-event-meta text-center">
                            <div class="h3 text-bold reveal-inline-block reveal-lg-block"><?php the_time('d');?></div>
                            <p class="reveal-inline-block reveal-lg-block"><?php the_time('M');?></p><span class="text-bold reveal-inline-block reveal-lg-block inset-left-10 inset-lg-left-0"><?php the_time('Y');?></span>
                      </div>-->
                    <?php } ?>
                    
                    
                        <div class="unit-body">
                        <div class="post-event-body text-lg-left">
                          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        </div>
                      </div>

                      <?php the_post_thumbnail( 'thumbnail', array('class' => 'alignleft')  ); ?>
                      <div class="p_noticias">
                       <?php the_excerpt(); ?>
                       </div>
                     
                       <?php //the_content(); ?>
                       
                       <a class="leer" href="<?php the_permalink(); ?>">Leer mas</a>
                       <br class="clear">
                   </div>
                    <?php endwhile; else: ?>
                      <h3>No hay articulos en esta seccion, puede utilizar el buscador del sitio. </h3>
                    <?php endif; ?>
        


          
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