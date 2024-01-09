<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>



		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">
<!-- Footer -->
<footer class="text-center text-lg-start text-white">


  <!-- Section: Links  -->
  <section class="footer-links">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact Us
          </h6>
          <p>
            We are honored to receive your comments and suggestions. Please feel free to contact us :
          </p>
          <i class="fa-brands socials fa-apple" style="color: #88B7A4;"></i>
          <i class="fa-brands socials fa-google" style="color: #88B7A4;"></i>
          <i class="fa-brands socials fa-linkedin-in" style="color: #88B7A4;"></i>
          <i class="fa-brands socials fa-twitter" style="color: #88B7A4;"></i>
          <i class="fa-brands socials fa-facebook" style="color: #88B7A4;"></i>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="form-content col-md-5 col-lg-5 col-xl-5 mx-auto mb-5">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name:</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email:</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Message:</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <div class="mb-3">
           <button>Submit</button>
          </div>
        </div>
        <!-- Grid column -->


        <!-- Grid column -->

        <!-- Grid column -->

        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->


</footer>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!-- col -->

		</div><!-- .row -->



<?php // Closing div#page from header.php. ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>

