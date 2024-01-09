<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>
    <div class="background-header">

 <div class="header-content">
    <div class="container">
        <div class="row align-items-start">
          <div class="col">
            <h2>Meet Your Favorite 
                <span class="color-light-green">Doctors</span> Online.</h2>
                <p>With HealthPal app, you can easily and quickly 
                    access the medical specialties and hospital services you need on all days of the week.</p>
                  <button class="download-button">Download App</button>
                </div>
          <div class="col">
            <img class="animate__animated animate__bounceInRight" src="http://health-pal.local/wp-content/uploads/2023/11/Home-screen.png" alt="phone-img" width="380px">
          </div>
        </div>
      </div>
 </div>

</div>





<div class="features-section">
    <div class="container">
        <h2>Features</h2>
        <div class="card-group">
            <div class="hvr-float card shadow-lg">
              <img src="http://health-pal.local/wp-content/uploads/2023/11/Group-12.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Easy Use</h5>
                <p class="card-text">Using this application is very simple for all people at any ages.</p>
              </div>
            </div>
            <div class="hvr-float card shadow-lg">
              <img src="http://health-pal.local/wp-content/uploads/2023/11/Group-11.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">24/7 Support</h5>
                <p class="card-text">Access to support services on all days of the week at all hours.</p>
              </div>
            </div>
            <div class="hvr-float card shadow-lg">
              <img src="http://health-pal.local/wp-content/uploads/2023/11/Group-10.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Quick Access</h5>
                <p class="card-text">Quick access to the doctors and medical services you want.</p>
              </div>
            </div>
          </div>
    </div>
</div>




<div class="section-three">
    <div class="container text-center">
        <div class="row align-items-start">
          <div class="col">
            <img src="http://health-pal.local/wp-content/uploads/2023/11/hospitals.png" alt="img" width="280px">
          </div>
          <div class="col">
            <h2>Quick access to the services you need</h2>
            <p>Easily find the doctors and medical centers you need, on the map.</p>
          </div>
        </div>
      </div>
</div>







<div class="access-section">
    <div class="container">
        <div class="row align-items-start">
          <div class="col">
            <h2>Access to specialist doctors</h2>
            <p>You have easy access to various medical specialties and doctors.</p>
          </div>
          <div class="col">
            <img src="http://health-pal.local/wp-content/uploads/2023/11/Find-doctors-screen.png" alt="phone-img" width="280px">
          </div>
        </div>
      </div>
</div>



<div class="section-four">
<div class="container">
    <div class="row align-items-start">
      <div class="col">
        <img src="http://health-pal.local/wp-content/uploads/2023/11/hospitals-screen-02.png" alt="phone-img" width="280px">
      </div>
      <div class="col">
        <h2>About</h2>
        <p>Our platform connects you with qualified doctors who can provide medical consultations from the convenience of your own home. With our user-friendly interface, you can book appointments, chat with doctors via video call, and even receive e-prescriptions.</p>
         <a href="#">Read More</a>
    </div>
    </div>
  </div>
</div>

<div class="extra-features">
    <div class="container text-center">
        <div class="row align-items-start">
          <div class="col">
            <h2>300+</h2>
            <h4>Medical Centers</h4>
          </div>
          <div class="col">
            <h2>200+</h2>
            <h4>Professional Doctors</h4>
          </div>
          <div class="col">
            <h2>3k+</h2>
            <h4>Customers</h4>
          </div>
        </div>
      </div>
</div>
<div class="content-book">
<h2>Easily Book Your Appointment</h2>
</div>
<div class="book-appointment">
    <div class="container">
      <div class="row align-items-start">
        <div class="col">
          <img src="http://health-pal.local/wp-content/uploads/2023/11/Find-doctors-screen.png" alt="logo" width="250px">
        </div>
        <div class="col">
          <img src="http://health-pal.local/wp-content/uploads/2023/11/Doctor-Select-Time-screen-011.png" alt="logo" width="280px">
        </div>
        <div class="col">
          <img src="http://health-pal.local/wp-content/uploads/2023/11/Doctor-Select-Time-screen-012.png" alt="logo" width="250px">
        </div>
      </div>
    </div>
</div>





<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>






<?php
get_footer();
