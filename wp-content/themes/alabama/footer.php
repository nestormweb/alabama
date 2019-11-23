     <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-4 item text">
                        
                  <?php 
                      $qu['post_type']="bloques";
                      $qu['name']='pie';
                      query_posts($qu); 
                      while (have_posts()) : the_post(); 
                      ?>
                      <h3><?php the_title(); ?></h3>
                          <?php the_content();
                          //do_shortcode(get_the_content());
                          //echo apply_filters('the_content', get_the_content()); ?>
                      
                          <?php edit_post_link('<i class="fa fa-edit"></i> Editar este post', '<div>', '</div>'); ?>
                        
                        
                     
                  <?php 
                  endwhile; 
                  wp_reset_query(); 
                  ?>

                    </div>
                    <div class="col-md-4 item text">
                        
                  <?php 
                      $qu['post_type']="bloques";
                      $qu['name']='piemedio';
                      query_posts($qu); 
                      while (have_posts()) : the_post(); 
                      ?>
                      <h3><?php the_title(); ?></h3>
                          <?php the_content();
                          //do_shortcode(get_the_content());
                          //echo apply_filters('the_content', get_the_content()); ?>
                      
                          <?php edit_post_link('<i class="fa fa-edit"></i> Editar este post', '<div>', '</div>'); ?>
                        
                        
                     
                  <?php 
                  endwhile; 
                  wp_reset_query(); 
                  ?>

                    </div>
                    
                    	<?php if( 1==2 ){ ?>
                       <div class="fb-page" data-href="https://www.facebook.com/Colegio-de-Estad%C3%ADsticos-del-Paraguay-102434953228022/" data-tabs="timeline" data-width="500" data-height="350" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Colegio-de-Estad%C3%ADsticos-del-Paraguay-102434953228022/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Colegio-de-Estad%C3%ADsticos-del-Paraguay-102434953228022/">Colegio de Estadísticos del Paraguay</a></blockquote></div>
                   <?php } ?>

                    <div class="col-md-4 item text">
                        
                  <?php 
                      $qu['post_type']="bloques";
                      $qu['name']='piederecha';
                      query_posts($qu); 
                      while (have_posts()) : the_post(); 
                      ?>
                      <h3><?php the_title(); ?></h3>
                          <?php the_content();
                          //do_shortcode(get_the_content());
                          //echo apply_filters('the_content', get_the_content()); ?>
                      
                          <?php edit_post_link('<i class="fa fa-edit"></i> Editar este post', '<div>', '</div>'); ?>
                        
                        
                     
                  <?php 
                  endwhile; 
                  wp_reset_query(); 
                  ?>

                  
                    </div>
                    <!--<div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>-->
                </div>
                <p class="copyright">Pie de Pagina para alabama</p>
            </div>
        </footer>
    </div>
    <?php wp_footer(); ?>
    <script src="<?php bloginfo('template_url');?>/assets/js/jquery.min.js"></script>

    <script src="<?php bloginfo('template_url');?>/assets/bootstrap/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

    <script>
              new WOW().init();
              </script>

    <script  type="text/javascript">
        //new WOW().init();
        jQuery.noConflict();
        jQuery(document).ready(function(){
            var winHt = jQuery(window).height();
            console.log(winHt);

            if(winHt < 900){
                
                
                jQuery( window ).scroll(function() {
              
                var winWd = jQuery(window).width();
                  //var mht = jQuery('#presentacion').height();
                  var mht = 12;
                  var scrPos = jQuery(window).scrollTop();
                  if( scrPos > mht ){
                    
                    
                    jQuery('.navbar-cepy').addClass('fixed-top');
                    jQuery('body').addClass('bodypad');
                    jQuery('.logoprinc').addClass('logochiquito');
                  
                  }else{
                    jQuery('.navbar-cepy').removeClass('fixed-top');
                    jQuery('body').removeClass('bodypad');
                    jQuery('.logoprinc').removeClass('logochiquito');
                   
                  }
                 });
              }


            
              // DataTable
              var table = jQuery('#cursostable').DataTable( {
                "ordering": false,
        "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        }
    } );
           
              

              
              jQuery('.inpcurso').val(jQuery('.textitucurso').text());
        jQuery('.inpcurso').attr('readonly', true);
        });

    </script>
</body>

</html>