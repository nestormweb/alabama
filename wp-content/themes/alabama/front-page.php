<?php get_header(); ?>
<?php echo do_shortcode("[image-carousel]"); ?>
<div class="containe" style="max-width: 1280px; margin-right: auto; margin-left: auto;">



</div>
</div>


<div class="highlight-phone">
    <div class="container">
        <div class="row">
            <?php 
              $bloq['post_type']="bloques";
              //$qu['name']='descripcion';
              query_posts($bloq); 
              while (have_posts()) : the_post(); 
              ?>

            <div class="col-md-7">
                <div class="intro wow slideInLeft">

                    <h2><?php the_title(); ?></h2>
                    <?php the_content();?>
                    <a class="btn btn-primary" role="button"
                        href="<?php bloginfo('url');?>/index.php/el-colegio/">Nosotros</a>

                </div>
            </div>
            <div class="col-sm-5">


                <?php the_post_thumbnail( 'full', array('class' => 'img-fluid')  ); ?>

            </div>
        </div>
        <h3></h3>


        <?php edit_post_link('<i class="fa fa-edit"></i> Editar este post', '<div>', '</div>'); ?>



        <?php 
	          endwhile; 
	          wp_reset_query(); 
	          ?>



    </div>
</div>
</div>
<div class="bloques">
    <h2> Suscribite para recibir las mejores promociones</h2>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">.[contact-form-7 id="22" title="suscripcion"]</div>
            <div class="col-sm-8">.col-md-6</div>

        </div>

    </div>
</div>

<div class="iconbloques"> </div>
<div class="highlight-phone">
    <div class="container">
        <div class="row">
            <?php 
              $bloq['post_type']="promociones";
              //$qu['name']='descripcion';
              query_posts($bloq); 
              while (have_posts()) : the_post(); 
              ?>

            <div class="col-md-7">
                <div class="intro wow slideInLeft">

                    <h2><?php the_title(); ?></h2>
                    <?php the_content();?>
                    <a class="btn btn-primary" role="button"
                        href="<?php bloginfo('url');?>/index.php/el-colegio/">Promociones</a>

                </div>
            </div>
            <div class="col-sm-5">


                <?php the_post_thumbnail( 'full', array('class' => 'img-fluid')  ); ?>

            </div>
        </div>
        <h3></h3>


        <?php edit_post_link('<i class="fa fa-edit"></i> Editar este post', '<div>', '</div>'); ?>



        <?php 
	          endwhile; 
	          wp_reset_query(); 
	          ?>



    </div>

</div>
</div>

<div class="bloquemarca">
    <div class="highlight-phone">
        <div class="container">
            <div class="row">
                <?php 
              $bloq['post_type']="marcas";
              //$qu['name']='descripcion';
              query_posts($bloq); 
              while (have_posts()) : the_post(); 
              ?>

                <div class="col-md-7">
                    <div class="intro wow slideInLeft">

                        <h2><?php the_title(); ?></h2>
                        <?php the_content();?>
                        <a class="btn btn-primary" role="button"
                            href="<?php bloginfo('url');?>/index.php/el-colegio/">Marcas</a>

                    </div>
                </div>
                <div class="col-sm-5">


                    <?php the_post_thumbnail( 'full', array('class' => 'img-fluid')  ); ?>

                </div>
            </div>
            <h3></h3>


            <?php edit_post_link('<i class="fa fa-edit"></i> Editar este post', '<div>', '</div>'); ?>



            <?php 
	          endwhile; 
	          wp_reset_query(); 
	          ?>



        </div>
    </div>
</div>
<div class="bloquecontactos"> Línea gratuita: 0800 11 75 87. Desde tigo: (*plus) *7587.</div> 
<?php get_footer(); ?>