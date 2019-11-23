<?php get_header(); ?>
    <div class="article-clean">
        <div class="container">
            <div class="row">

            	<?php if(tienefamilia()){ ?>
      <div class="col-md-3">
        <?php get_sidebar('izquierda'); ?>
      </div>
    <?php } ?>

    <?php if(tienefamilia()){ ?>
      <div class="col-md-6">
    <?php } else { ?> 
      <div class="col-md-9">
    <?php } ?>
                
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
                </div>

<?php if(tienefamilia()){ ?>
      
      <div class="col-md-3">
        

                <?php get_sidebar(); ?>
             
              </div>

    <?php } else { ?> 
                <div class="col-md-3">
        

		            <?php get_sidebar(); ?>
		         
		          </div>
		          <?php } ?>

            </div>
        </div>
    </div>
<?php get_footer(); ?>