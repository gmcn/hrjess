<?php

//social
$acf_facebook = get_field( 'acf_facebook' );
$acf_twitter = get_field( 'acf_twitter' );
$acf_pinterest = get_field( 'acf_pinterest' );
$acf_linked_in = get_field( 'acf_linked_in' );

$address = get_field('address');
$address_local_numbers = get_field('address_local_numbers');
$address_email = get_field('address_email');

 ?>

<div class="container content-wrapper">

  <div class="row">

    <div class="col-md-4 wow fadeInLeft">

      <div class="contact-content">
        <?php the_content(); ?>
      </div>

      <div class="part-contact-addr">

        <div class="part-contact-addr_address">
          <?php echo $address ?>
        </div>

        <div class="part-contact-addr_numbers">
          <strong>Local Numbers</strong>
          <?php echo $address_local_numbers ?>

          <?php if($address_email) :  ?>
            <strong>Email:</strong><br />
            <a href="mailto:<?php echo $address_email; ?>">
              <?php echo $address_email; ?>
            </a>
          <?php endif; ?>

        </div>

      </div>

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
