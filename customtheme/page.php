<?php
get_header()
?>






<div class="container-fluid px-0 py-5">
        <div class="row mx-0 justify-content-center pt-5">
            <div class="col-lg-6">
                <div class="section-title text-center position-relative mb-4">
                    <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2"><?php the_title()?></h6>
                  
                </div>
            </div>
        </div>
        

<div class="about-content"><?php the_content();?></div>






















<?php
get_footer()
?>