<?php
/*Template Name: Contact */
get_header();
?>


 <!-- Contact Start -->
 <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <div class="bg-light d-flex flex-column justify-content-center px-5" style="height: 450px;">
                        <div class="d-flex align-items-center mb-5">
                            <div class="btn-icon bg-primary mr-4">
                                <i class="fa fa-2x fa-map-marker-alt text-white"></i>
                            </div>
                            <div class="mt-n1">
                                <h4>Our Location</h4>
                                <p class="m-0"><?php the_field('location_',14);?></p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-5">
                            <div class="btn-icon bg-secondary mr-4">
                                <i class="fa fa-2x fa-phone-alt text-white"></i>
                            </div>
                            <div class="mt-n1">
                                <h4>Call Us</h4>
                                <p class="m-0"><?php the_field('phone_number_1',14);?></p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="btn-icon bg-warning mr-4">
                                <i class="fa fa-2x fa-envelope text-white"></i>
                            </div>
                            <div class="mt-n1">
                                <h4>Email Us</h4>
                                <p class="m-0"><a href="mailto:<?php the_field('email',14);?>"><?php the_field('email',14);?></a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                   
                   
                        
                        <?php comments_template();?>
                    
                    
            
            </div>
        </div>
</div>
</div>
</div>
    <!-- Contact End -->
           <!---Map Start-->
<div class="text-center">
                      <h1 style="color:#343130;">Find Us On Map</h1>
                               <div class="map">
                               <div class="mapouter"><div class="gmap_canvas"><iframe src="<?php the_field('map_link',14);?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                                     </div>
</div>
  <!---Map End-->
<?php get_footer();?>
























