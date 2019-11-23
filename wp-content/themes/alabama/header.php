<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>
    <?php
        /*
         * Print the <title> tag based on what is being viewed.
         */
        global $page, $paged;

        wp_title( '|', true, 'right' );

        // Add the blog name.
        bloginfo( 'name' );

        // Add the blog description for the home/front page.
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
            echo " | $site_description";

        ?>
            
        </title>
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/css/Article-List.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/css/Highlight-Phone.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/css/Projects-Horizontal.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/css/Article-Clean.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" />
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" />

 <link href="https://fonts.googleapis.com/css?family=Raleway:400,600&display=swap" rel="stylesheet"> 
 
    <?php wp_head(); ?>

    <style>
        .table-compact{
            font-size: 13px;
        }

        .articulo.galeria{
            padding: 15px;
            display: block;
        }
        .articulo.galeria:hover{
            opacity: 0.85;
        }

        .articulo.galeria h2{
            font-size: 17px;
        }
    </style>
</head>

<body>

    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v4.0&appId=552265765149967&autoLogAppEvents=1"></script>


    <div>
        
        <nav class="navbar navbar-light navbar-cepy navbar-expand-md navigation-clean ">
            <div class="container"><a class="navbar-brand" href="<?php bloginfo('url');?>"><img class="logoprinc wow slideInLeft" src="<?php bloginfo('template_url');?>/logo.png" alt="logo cepy colegio de estadisticos del paraguay"></a>
               <!-- <div class="collapse navbar-collapse"
                    id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="#">First Item</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#">Second Item</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#">Third Item</a></li>
                        <li class="dropdown nav-item"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Dropdown </a>
                            <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                        </li> 'container_class' => 'collapse navbar-collapse wow slideInDown',
                    </ul> </div> -->
                    <?php
                   wp_nav_menu([
                     'menu'            => 'primary',
                     'theme_location'  => 'primary',
                     'container'       => 'div',
                     'container_id'    => 'navcol-1',
                     'container_class' => 'wow slideInDown',
                     'menu_id'         => false,
                     'menu_class'      => 'nav navbar-nav ml-auto',
                     'depth'           => 2,
                     'fallback_cb'     => 'bs4navwalker::fallback',
                     'walker'          => new bs4navwalker()
                   ]);
                   ?>
                
            </div>
        </nav>
    </div>
  



<?php if(!(is_front_page())){  ?>

    <div style="height: 75px;background: url(http://ereerea.com/cepy/wp-content/uploads/2019/07/slide-4-1.jpg) center center; ">

    </div>

      <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
        <div class="container">
          <?php if(function_exists('bcn_display'))
          {
              bcn_display();
          }?>
          </div>
      </div>
<?php } ?>

