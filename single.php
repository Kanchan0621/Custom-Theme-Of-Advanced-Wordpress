<?php get_header();?>





<div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row mx-0 justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center position-relative mb-5">
                        
                        <h1 class="display-4"><?php the_title();?></h1>
                        <?php $imagepath =wp_get_attachment_image_src(get_post_thumbnail_id(),'medium');?>
                        <img class="img-fluid" src="<?php echo $imagepath[0]?>" alt="">
                        <?php the_content();?>
                      
                        <?php comments_template();?>
                    </div>
                </div>
            </div>
 </div>


























<?php get_footer();?>