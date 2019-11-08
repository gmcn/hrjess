<div class="container-fluid discuss-your-ideas">
  <div class="container">
    <div class="row">
      <div class="col-md-6 matchheight">
        <?php if (is_page('surveying')): ?>
            <h1>get in <br />touch</h1>
          <?php else: ?>
            <h1>discuss your <br />ideas</h1>
        <?php endif; ?>

        <h2>Contact Us To Arrange An Appointment</h2>
        <p>
          Friendly advice with no obligations.
        </p>

        <?php if ( is_front_page() ) {
              // Do nothing
          } else {
              echo '<a href="mailto:info@hrjess.co.uk"><button>Contact Us Now</button></a>';
          } ?>

      </div><!-- /.col-sm-4 matchheight -->


      <?php if ( is_front_page() ) {
            echo '<div class="col-md-2 matchheight">
                    <a href="mailto:info@hrjess.co.uk"><button>Contact Us Now</button></a>
                  </div>';
        } else {
          // Do nothing
        } ?>
    </div><!-- /.row -->
  </div><!-- /.container -->
</div><!-- /.container-fluid dev-toolkit -->
