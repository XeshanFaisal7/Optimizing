<?php include('header.php');?>
 <title>Contact Us</title>
  <!-- ======= Hero Section ======= -->
  <section id="contact-hero" class="d-flex align-items-center" >
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
      <h1><b style="color: #fe7525">Contact</b> Us</h1>
      <p style="color: white">Optimzing Business Solutions, a leading technology and consulting firm. Optimizing Business Solution has established a track record of helping clients achieve tangible, high impact results. We have proven experience and expertise in applying sophisticated analytics to devise solutions to complex issues.</p>
      <a href="#contact" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <span>Contact</span>
          <h2>Contact</h2>
          <p>Feel free to contact anytime 24/7.We are always here for the support.</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-5">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>19th West Street, Apt 84 San Francisco, CA 94103</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>mreynolds@optimizingbusinesssolutions.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+404 518 9870</p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25228.84837886875!2d-122.44705525613081!3d37.775834539617975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085809d33a9d9d3%3A0x1bc69ffc318e659b!2sSan%20Francisco%2C%20CA%2094103%2C%20USA!5e0!3m2!1sen!2sae!4v1649614336985!5m2!1sen!2sae" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
<?php include('footer.php'); ?>