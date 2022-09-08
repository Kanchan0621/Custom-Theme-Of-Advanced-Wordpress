
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title();?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <!-- Favicon -->
    <link href="<?php echo get_template_directory_uri();?>/img/favicon.ico" rel="icon">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
   <!-- Custom Css -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/style.css">
<?php wp_head();?>
</head>

<!-- Topbar Start -->
<div class="container-fluid bg-dark">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center text-white">
                    <small><i class="fa fa-phone-alt mr-2"></i><?php the_field('phone_number',5);?></small>
                    <small class="px-3">|</small>
                    <small><i class="fa fa-envelope mr-2"></i><a href="mailto:<?php the_field('email',5);?>"><?php the_field('email',5);?></a></small>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white px-2" href="<?php the_field('facebook',5);?>">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-white px-2" href="<?php the_field('twitter',5);?>">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-white px-2" href="<?php the_field('linkedln',5);?>">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-white px-2" href="<?php the_field('instagram',5);?>">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-white pl-2" href="<?php the_field('youtube',5);?>">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
        <?php  $logoimg=get_header_image();?>
            <a href="<?php echo site_url()?>" class="navbar-brand ml-lg-3">
              
              <img src=" <?php echo $logoimg;?>">
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <?php wp_nav_menu(array('theme_location'=>'primary-menu','menu_class'=>'nav'))?>

        </nav>
    </div>
    <!-- Navbar End -->

     <!-- Header Start -->
     <div class="jumbotron jumbotron-fluid position-relative overlay-bottom" style="margin-bottom: 90px;">
        <div class="container text-center my-5 py-5">
            <h1 class="text-white mt-4 mb-4">Learn For Free</h1>
            <h1 class="text-white display-1 mb-5">Crazy Coder</h1>
            <div class="mx-auto mb-5" style="width: 100%; max-width: 600px;">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-light bg-white text-body px-4 " type="button"
                            aria-haspopup="true" aria-expanded="false">Courses</button>
                    
                    </div>
                  
                    <div class="input-group-append">
                        <button class="btn btn-secondary px-4 px-lg-5"><?php get_search_form();?></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->