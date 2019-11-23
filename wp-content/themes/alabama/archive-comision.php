<?php get_header(); ?>
<section class="articulo" >
  <div class="container">
    <div class="row">
      <div class="col-md-12">

         <h2 class=" TITULO_NOTICIAS posttitle  titulnar"><?php post_type_archive_title(); ?></h2>
             
             <!-- Info Blcoks -->

        <?php 
            
            $qu23['pagename']='el-colegio/consejo-directivo';
            query_posts($qu23); 
            while (have_posts()) : the_post(); 


            ?>


             <div align="center" class="organi" >
                       <?php the_content();?>

                       

                       
                       </div>

          <?php 
          endwhile; 
          wp_reset_query(); 
          ?>
                      

                   

         
        <div class="articulo  col-md-12 wow slideInLeft">
           <div class="container">
                      <div class='row'>


          <?php

           $args = null;
           $args=$wp_query->query_vars;
          
           $args['posts_per_page'] = 15;
           $args['orderby']= 'created';
           $args['order']="asc";
       


//var_dump($args);

             query_posts($args);

             ?>
             <?php
              if(function_exists('wp_paginate')) {
                wp_paginate();
            } ?> 
<?php

                  if (have_posts()) : while ( have_posts() ) : the_post(); ?>
                   
                   

                    

                    <?php if(get_post_type() == 'post'){ ?>
                      <!--<div class="unit-left">
                            <div class="post-event-meta text-center">
                            <div class="h3 text-bold reveal-inline-block reveal-lg-block"><?php the_time('d');?></div>
                            <p class="reveal-inline-block reveal-lg-block"><?php the_time('M');?></p><span class="text-bold reveal-inline-block reveal-lg-block inset-left-10 inset-lg-left-0"><?php the_time('Y');?></span>
                      </div>-->
                    <?php } ?>
                    
                    <div class="col-md-3">
                        <div class="miembro">
                        
                          <h2 class="titulo"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        
                     
<div align="center">
                      <?php the_post_thumbnail( 'thumbnail', array('class' => 'aligncenter')  ); ?>

                      <?php
                        $nombre = get_field('nombre');  
                         if(isset($nombre) and $nombre != "") { 
                        echo  '<h3>'.$nombre.'</h3>';
                         } ?>

 <?php
                        $codigo = get_field('codigo');  
                         if(isset($codigo) and $codigo != "") { 
                        echo '<h4>'.$codigo.'</h4>';
                         } ?>

                    </div>

                      <div class="texto">
                       <?php the_excerpt(); ?>

                       

                       
                       </div>

                     
                      </div>
                     

                       <?php //the_content(); ?>

                     </div>
                       
                      
                     
                  
                    <?php endwhile; else: ?>
                      <h3>No hay articulos en esta seccion, puede utilizar el buscador del sitio. </h3>
                    <?php endif; ?>


                     </div>
        


          
           <?php if(function_exists('wp_paginate')) {
    wp_paginate();
} ?> 


        </div>

        </div>

        </div>
        
      </div>
    </div>
  </div>
</section>



<?php get_footer(); ?>