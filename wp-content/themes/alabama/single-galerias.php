<?php get_header(); ?>
    <div class="article-clean">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                     <?php 
               
                          if (have_posts()) :
                           ?>
                     <?php
                          //$ent['post_type']='post';
                          //$ent['posts_per_page']=3;
                          //query_posts($ent); 
                   while (have_posts()) : the_post(); ?>
                    <div class="intro">
                        <h1 class="text-center"> <?php the_title(); ?></h1>

                      </div>
                        <div class="text-center">
                         <?php the_post_thumbnail( 'large', array('class' => 'img-fluid')  ); ?>
                          <?php
                         $taxo=wp_get_post_terms(get_the_id(),'cursos');
                  
                         if(sizeof($taxo)>0){
                          $vt=$taxo[0];
                          ?>

                           <h4 style="padding-top: 15px;">Curso Relacionado:<a href="<?php bloginfo('url'); echo '/'. $vt->slug ?>"> <?php echo $vt->name ?></a></h4>
                           <?php
                          
                         }
                         
                          ?>
                        
                       </div>
                    <div class="text">
                        <?php the_content(); ?>

                        <?php echo do_shortcode('[ssba-buttons]'); ?>
                    </div>

                    <?php edit_post_link('Editar este post', '<p>', '</p>'); ?>

                    <?php endwhile; ?>
                      
           
                      <!-- End Info Blcoks -->
                      <?php else: ?>      
                       <?php endif; 
                       //$args = null;
                       //wp_reset_query();
                      ?>
                </div>

                 <div class="col-md-3">
        

                <?php get_sidebar(); ?>
             
              </div>
              
            </div>
        </div>
    </div>
<?php get_footer(); ?>