<?php get_header();?>




<div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row mx-0 justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center position-relative mb-5">
                        
                        <h1 class="display-4">Our Posts</h1>
                    </div>
                </div>
            </div>
 </div>
<?php while(have_posts()){
    the_post();
    $imagepath =wp_get_attachment_image_src(get_post_thumbnail_id(),'medium');

?>
   <div class="row">
                <div class="col-lg-4 col-md-6 pb-4">
                    <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="">
                        <img class="img-fluid" src="<?php echo $imagepath[0]?>" alt="">
                        <p><?php the_excerpt(); ?></p>
                        <p><?php echo get_the_date();?></p>
                       
                        <div class="courses-text">
                            <h4 class="text-center text-white px-3"><?php the_title()?></h4>
                            <div class="border-top w-100 mt-3">
                                <div class="d-flex justify-content-between p-4">
                                    <span class="text-white"><i class="fa fa-user mr-2"></i></span>
                                    <span class="text-white"><i class="fa fa-star mr-2"></i>
                                        <small>(250)</small></span>
                                </div>
                            </div>
                        </div>
                    </a>
                   <a href="<?php the_permalink();?>"> <input type="button" value="Read More" name= ""></a>
                </div>

     <?php }?>
     <?php wp_pagenavi()?>

</div>