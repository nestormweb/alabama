<?php get_header(); ?>
    <div class="article-clean">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                     <?php 
                $slugprinc = get_queried_object()->post_name;
                          if (have_posts()) :
                           ?>
                     <?php
                          //$ent['post_type']='post';
                          //$ent['posts_per_page']=3;
                          //query_posts($ent); 
                   while (have_posts()) : the_post(); ?>
                    <div class="intro">
                        <h1 class="text-center textitucurso"> <?php the_title(); ?></h1>
                        


                        <ul class="tags list-inline" >
  
                         <?php
                        $anio = get_field('anio');  
                         if(isset($anio) and $anio != "") { ?>
                       
                       <li style="color:rgba(6,64,133,1)"> 
                        <strong>Año:</strong>
                        <?php
                        
                        echo $anio ;

                        ?>
                      </li>
                         <?php } ?>


             <?php $estadocurso = tax2links2(get_the_id(),'estadocurso'); ?>
                         <?php if(isset($estadocurso) and $estadocurso != "") { ?>
              <li style="color:rgba(6,64,133,1)"> <i class="glyphicon glyphicon-tags"></i> <strong>Estado Curso:</strong> <?php echo $estadocurso ?></li>
             <?php }?>


             <?php $modalidadcurso = tax2links2(get_the_id(),'modalidadcurso'); ?>
                         <?php if(isset($modalidadcurso) and $modalidadcurso != "") { ?>
              <li style="color:rgba(6,64,133,1)"> <i class="glyphicon glyphicon-tags"></i> <strong>Modalidad:</strong> <?php echo $modalidadcurso ?></li>
             <?php }?>
                       
                        <?php $tipocursos = tax2links2(get_the_id(),'tipocursos'); ?>
                         <?php if(isset($tipocursos) and $tipocursos != "") { ?>
              <li style="color:rgba(6,64,133,1)"> <i class="glyphicon glyphicon-tags"></i> <strong>Tipo: </strong><?php echo $tipocursos ?></li>
             <?php }?>
                       </ul>

                    <div class="text">
                        <?php the_content(); ?>
                    </div>

                    <?php edit_post_link('Editar este post', '<p>', '</p>'); ?>

                    <?php endwhile; ?>
                      
           
                      <!-- End Info Blcoks -->
                      <?php else: ?>      
                       <?php endif; 
                       //$args = null;
                       //wp_reset_query();
                      ?>


                       <?php 
                            $ent['post_type']='galerias';
                            $ent['cursos']= $slugprinc;
                            $titulo = "Galeria de Fotos";
                            ?>
                            <?php
                              query_posts($ent); 
                              if (have_posts()) :
                              ?>
                              <h2><?php echo $titulo; ?></h2>

                               
                                <?php
                                     while (have_posts()) : the_post(); ?>
                                         <!--<a href="<?php the_permalink(); ?>">
                                          <i class="glyphicon glyphicon-calendar"></i>
                                          <?php the_title(); ?></a>-->
                                          <a href="<?php the_permalink(); ?>">Enlace a Galería</a>
                                          <?php the_content(); ?> 
                                    <?php endwhile; ?>
                                        <!-- End Info Blcoks -->
                              <?php else: ?>      
                               <?php endif; 
                               //$args = null;
                               wp_reset_query();
                              ?>

                </div>
                
</div>
                 <div class="col-md-4">
        

                <?php get_sidebar(); ?>
             
              </div>
              
            
        </div>
    </div>
<?php get_footer(); ?>