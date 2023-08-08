<?php
$page = "contact";
$pagetitle = "contact";
?>
<!DOCTYPE html>
<html>

<head>
  <?php include('./components/links.php'); ?>
</head>

<body>
  <?php include('./components/header.php'); ?>
  <section class="contactus">
    <div class="container">
      <div class="row contactrow">
        <div class="col-lg-5">
          <div class="contact-card">
            <div class="sub_heading">
              <div class="products_head">
                <h2 class="white-heading">Reach Us</h2>
              </div>
              <p class="text-white">
                Reach out to us for expert advice and custom acoustic solutions tailored to your needs.
              </p>
            </div>
            <ul class="reachlist">
              <li>
                <i class="fa-solid fa-phone"></i>
                <a href="tel:+91 129 2241381"> +91 129 2241381/ +91 129 4065433-34</a>
              </li>
              <li>
                <i class="fa-solid fa-envelope"></i>
                <a href="mailto:enquiry@fibrecrete.in">enquiry@fibrecrete.in</a>
              </li>
              <li>
                <i class="fa-solid fa-map-pin"></i>
                <a href="#">Plot No. 89, Sector - 6, Faridabad – 121006, Haryana.</a>
              </li>
            </ul>
            <div class="social_links">
              <a href="https://www.facebook.com/fibretexindia?mibextid=LQQJ4d" target="_blank"><i
                  class="fa-brands fa-facebook-f"></i></a>
              <a target="_blank" href="https://www.instagram.com/fibretex.india/"><i
                  class="fa-brands fa-instagram"></i></a>
              <a href="https://www.linkedin.com/company/fibretex-industries-india-/" target="_blank"><i
                  class="fa-brands fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="contactform">
            <div class="sub_heading">
              <div class="motto_head">
                <h2 class="black-heading">Fill the Form</h2>
              </div>
            </div>
            <form method="post" action="contactform.php">
              <div class="row">
                <div class="col-lg-6">
                  <div class="input-container">
                    <input name="name" class="input-field" type="text" required />
                    <label for="input-field" class="input-label">Name</label>
                    <span class="input-highlight"></span>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="input-container">
                    <input name="email" class="input-field" type="email" required />
                    <label for="input-field" class="input-label">Email</label>
                    <span class="input-highlight"></span>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="input-container">
                    <input name="number" class="input-field" type="text" required />
                    <label for="input-field" class="input-label">Phone Number</label>
                    <span class="input-highlight"></span>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="input-container">
                    <input name="product" class="input-field" type="tel" required />
                    <label for="input-field" class="input-label">Product requirement</label>
                    <span class="input-highlight"></span>
                  </div>
                </div>
                <div class="col-12">
                  <div class="input-container">
                    <input name="message" class="input-field" type="text" required />
                    <label for="input-field" class="input-label">Message for Us</label>
                    <span class="input-highlight"></span>
                  </div>
                </div>
                <div class="col-12 centerit">
                  <div class="input-container">
                    <button class="submitbutton" type="submit" name="submit">
                      Send Enquiry <i class="fa-solid fa-paper-plane"></i>
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="map">
    <div class="heading mb-5">
      <div class="spanheading">
        <span class="sec_span">Map</span>
        <img src="assets/image/line.png" class="span_line" />
      </div>
      <h2 class="sec_head">Directions to Reach Us</h2>
    </div>
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3510.981034785574!2d77.31786721507646!3d28.359422982526347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cdc779177e5d3%3A0x75e9232e46f59f5!2sFIBRETEX%20INDIA%20PRIVATE%20LIMITED!5e0!3m2!1sen!2sin!4v1677912803131!5m2!1sen!2sin"
      width="100%" height="450" style="border: 0" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <?php include('./components/footer.php'); ?>
  <?php include('./components/scripts.php'); ?>
</body>

</html>