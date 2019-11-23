<?php get_header(); ?>







<section class="articulo" >
  <div class="container">
    <div class="row">
      <div class="col-md-9">

         <h2 class=" TITULO_NOTICIAS posttitle  titulnar"><?php post_type_archive_title(); ?></h2>
             
             <!-- Info Blcoks -->
<?php if(1==2){ ?> 
                  <div >
                    <form>
                        <div class="input-group">
                        <input type="text" name ="s" class="form-control" value="<?php echo $s; ?>" placeholder="<?php post_type_archive_title(); ?> a buscar" >
                        
                          <span class="input-group-btn">
                            <button class="btn btn-default" value="Search" type="submit">Buscar</button>
                          </span>
                        </div>
                    </form>
                  </div>
                      

                      <?php if(function_exists('wp_paginate')) {
    wp_paginate();
} ?> 
<?php  } ?>
         
        

<table class="table table-bordered table-sm table-striped table-compact" id="cursostable" style="margin-top: 25px;">
  <thead class="thead-dark">
      <th>Nombre</th>
      <th>Lugar</th>
      <!--<th>Fechas</th>-->
      <th>Año</th>
      <th>Estado</th>
      <th>Modalidad</th>
      <th>Tipo</th>
      <th></th>
  </thead>
  <tbody>
          <?php
          $args = null;
           $args=$wp_query->query_vars;
          
           $args['meta_key'] = 'fechainicio';
           $args['orderby'] = 'meta_value';
           $args['order'] =  'DESC';  


//var_dump($args);

             query_posts($args);

//             $wp_query = new WP_Query($args);

                  if (have_posts()) : while ( have_posts() ) : the_post(); ?>
                   <tr>
                    
                    
                    


             
                       
                       

                       <td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
                       <td> <?php $lugar = tax2links2(get_the_id(),'lugar'); ?>
                         <?php if(isset($lugar) and $lugar != "") { ?>
               <?php echo $lugar ?>
             <?php }?></td>
                      <!-- <td><?php // the_excerpt(); ?></td>-->
                       <td> 

                        <?php
                        $anio = get_field('anio');  
                         if(isset($anio) and $anio != "") { 
                        echo $anio;
                         } ?>

                       </td>
                       <td> <?php $estadocurso = tax2links2(get_the_id(),'estadocurso'); ?>
                         <?php if(isset($estadocurso) and $estadocurso != "") { ?>
               <?php echo $estadocurso ?>
             <?php }?></td>
                       <td><?php $modalidadcurso = tax2links2(get_the_id(),'modalidadcurso'); ?>
                         <?php if(isset($modalidadcurso) and $modalidadcurso != "") { ?>
              <?php echo $modalidadcurso ?>
             <?php }?></td>
                       <td> <?php $tipocursos = tax2links2(get_the_id(),'tipocursos'); ?>
                         <?php if(isset($tipocursos) and $tipocursos != "") { ?>
               <?php echo $tipocursos ?>  
             <?php }?></td>
                  
                  <td><a href="<?php the_permalink(); ?>"><i class="ion-android-add-circle"></i></a></td>
                   </tr>
                    <?php endwhile; else: ?>
                      
                    <?php endif; ?>
        
</tbody>


</table>

          
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