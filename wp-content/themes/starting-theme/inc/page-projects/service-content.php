<?php

  $mid_page_content_bg = get_field('mid_page_content_background_colour');
  $mid_page_content_title = get_field('mid_page_content_title');
  $mid_page_content = get_field('mid_page_content');

  $services_copy_heading = get_field('services_copy_heading');
  $services_intro_heading = get_field('services_intro_heading');
  $services_copy_left = get_field('services_copy_left');
  $services_copy_right = get_field('services_copy_right');

 ?>

 <?php if ($mid_page_content_title): ?>
   <div class="container-fluid service-mid" style="background: <?php echo $mid_page_content_bg ?>">
     <div class="container">
       <div class="col-md-6 service-mid__title">
         <p><?php echo $mid_page_content_title ?></p>
       </div>
       <div class="col-md-6 service-mid__content">
         <?php echo $mid_page_content ?>
       </div>
     </div>
   </div>
 <?php endif; ?>

 <?php if ($services_copy_heading): ?>
   <div class="container-fluid service-content">
     <div class="container">

       <div class="row service-content__titlewrapper wow fadeInDown">
         <div class="col-md-6 service-content__title">
           <h3><?php echo $services_copy_heading ?></h3>
         </div>
         <div class="col-md-6 service-content__intro">
           <p><?php echo $services_intro_heading ?></p>
         </div>
       </div>

       <div class="row">
         <div class="col-md-6 wow fadeInLeft">
           <?php echo $services_copy_left ?>
         </div>
         <div class="col-md-6 wow fadeInRight">
           <?php echo $services_copy_right ?>
         </div>
       </div>

     </div>
   </div>
 <?php endif; ?>
