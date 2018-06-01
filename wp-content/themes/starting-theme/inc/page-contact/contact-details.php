<?php

//social
$acf_facebook = get_field( 'acf_facebook' );
$acf_twitter = get_field( 'acf_twitter' );
$acf_pinterest = get_field( 'acf_pinterest' );
$acf_linked_in = get_field( 'acf_linked_in' );

 ?>

<div class="container content-wrapper">

  <div class="row">

    <div class="col-md-4 wow fadeInLeft">

      <div class="contact-content">
        <?php the_content(); ?>
      </div>


      <?php if( have_rows('address_details') ): ?>

         <div class="row">

           <?php while( have_rows('address_details') ): the_row();

             //address
             $acf_address_name = get_sub_field( 'acf_address_name' );
             $acf_address_line_1 = get_sub_field( 'acf_address_line_1' );
             $acf_address_line_2 = get_sub_field( 'acf_address_line_2' );
             $acf_address_line_3 = get_sub_field( 'acf_address_line_3' );
             $acf_address_line_4 = get_sub_field( 'acf_address_line_4' );
             $acf_post_code 		= get_sub_field( 'acf_post_code' );

             //contact numbers
             $acf_main_tel_no = get_sub_field( 'acf_main_tel_no' );
             $acf_mobile_no = get_sub_field( 'acf_mobile_no' );
             $acf_fax_no = get_sub_field( 'acf_fax_no' );
             $acf_pr_email_addr= get_sub_field( 'acf_pr_email_addr' );

             ?>

             <div class="col-md-6 col-lg-4 part-contact-addr">

               <?php

                 if(
                   $acf_address_name != "" ||
                   $acf_address_line_1 != "" ||
                   $acf_address_line_2 != "" ||
                   $acf_address_line_3 != "" ||
                   $acf_address_line_4 != "" ||
                   $acf_post_code != ""
                 ):

               ?>

               <div class="contact-addr">
                 <span>
                 <?php if($acf_address_name != ""):  ?>
                   <strong><?php echo $acf_address_name; ?></strong><br>
                 <?php endif; ?>
                 <?php if($acf_address_line_1 != ""):  ?>
                   <?php echo $acf_address_line_1; ?><br>
                 <?php endif; ?>
                 <?php if($acf_address_line_2 != ""):  ?>
                   <?php echo $acf_address_line_2; ?><br>
                 <?php endif; ?>
                 <?php if($acf_address_line_3 != ""):  ?>
                   <?php echo $acf_address_line_3; ?><br>
                 <?php endif; ?>
                 <?php if($acf_post_code != ""):  ?>
                   <?php echo $acf_post_code; ?><br>
                 <?php endif; ?>
                 </span>

                 <br  />

               </div><!-- .contact-addr -->
             <?php endif; ?>

               <?php if($acf_main_tel_no != ""):  ?>
               <strong>Phone:</strong><br  /><span><?php echo $acf_main_tel_no ?></span><br  /><br  />
               <?php endif; ?>

               <?php if($acf_pr_email_addr != ""):  ?>
                 <strong>Email:</strong><br  /><span><a href="mailto:<?php echo $acf_pr_email_addr ?>"><?php echo $acf_pr_email_addr ?></a></span><br  />
               <?php endif; ?>

             <?php if($acf_email_addr != ""):  ?>
               <a href="mailto:<?php echo $acf_email_addr; ?>">
                 <?php echo $acf_email_addr; ?>
               </a>
             <?php endif; ?>

             </div>

           <?php endwhile; ?>

         </div>

       <?php endif; ?>

       <div class="social">
         <?php if($acf_facebook != ""):  ?>
         <a href="<?php echo $acf_facebook ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook-social.jpg" alt="Follow HR Jess on Facebook" /></a>
       <?php endif; ?>
         <?php if($acf_linked_in != ""):  ?>
         <a href="<?php echo $acf_linked_in ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin-social.jpg" alt="Follow HR Jess on Linkedin" /></a>
         <?php endif; ?>
         <?php if($acf_twitter != ""):  ?>
         <a href="<?php echo $acf_twitter ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter-social.jpg" alt="Follow HR Jess on Twitter" /></a>
         <?php endif; ?>
         <?php if($acf_pinterest != ""):  ?>
         <a href="<?php echo $acf_pinterest ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/pinterest-social.jpg" alt="Follow HR Jess on Pinterest" /></a>
         <?php endif; ?>

       </div>

    </div> <!-- /.col-md-4 wow fadeInLeft -->
