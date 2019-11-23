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
                        <?php //the_content(); ?>
                        <?php

      echo '<h2>Próximos Eventos</h2>';
      echo do_shortcode('[events_list]');

      echo '<h2>Eventos Anteriores</h2>';
      echo '<table cellpadding="5" cellspacing="0" width="95%" class="table table-bordered table-striped" id="current-events" >
    <thead>
        <tr>
            <th id="event-time" width="150"> Fecha</th>
            <th id="event-description" width="*">Evento</th>
            <th id="event-description" width="*">Local</th>
        </tr>
    </thead>
    <tbody>';



      $listadoeventos= '[events_list scope="past" limit="1000"] <tr>
              <td>
                #_{d/m/Y} <br/>
                #_EDITEVENTLINK
 
                
                  </td>
                  <td>
       
      <p style="font-weight: bold; font-size: 14px;"></p>
       
                          <a href="#_EVENTPAGEURL" style="text-decoration:underline;">
                             #_NAME
                          </a>
                      </p>
                      
                  </td>
                  <td>
                  #_LOCATIONNAME
                  </td>
              </tr>[/events_list]'; //#_EXCERPT



      echo do_shortcode($listadoeventos);

      echo '</tbody>
</table>';

                         ?>

                    </div>

                    <?php //edit_post_link('Editar este post', '<p>', '</p>'); ?>

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