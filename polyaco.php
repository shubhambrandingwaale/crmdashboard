<?php
$page = "products";
$product = "Polyaco";
$pagetitle = "Polyaco"
  ?>
<!DOCTYPE html>
<html>

<head>
  <?php include('./components/links.php'); ?>
</head>

<body>
  <?php include('./components/header.php'); ?>

  <section class="product-details">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="product-slider">
            <div class="swiper product-images">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="assets/image/product-pages/polyaco/1.jpg" alt="" />
                </div>
                <div class="swiper-slide">
                  <img src="assets/image/product-pages/polyaco/2.jpg" alt="" />
                </div>
                <div class="swiper-slide">
                  <img src="assets/image/product-pages/polyaco/3.jpg" alt="" />
                </div>
                <div class="swiper-slide">
                  <img src="assets/image/product-pages/polyaco/4.jpg" alt="" />
                </div>
              </div>
              <!-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> -->
            </div>
            <div thumbsSlider="" class="swiper product-icons">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="assets/image/product-pages/polyaco/1.jpg" alt="" />
                </div>
                <div class="swiper-slide">
                  <img src="assets/image/product-pages/polyaco/2.jpg" alt="" />
                </div>
                <div class="swiper-slide">
                  <img src="assets/image/product-pages/polyaco/3.jpg" alt="" />
                </div>
                <div class="swiper-slide">
                  <img src="assets/image/product-pages/polyaco/4.jpg" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="product-brief">
            <div class="leftheading">
              <h2><span class="whitespan">Polyaco</span> Acoustic Board</h2>
            </div>
            <div class="product-bio">
              <p>
                Polyaco Acoustic Board is a cutting-edge sound-absorbing solution designed to enhance acoustic
                performance in various settings. Composed of a high-density polyester fiber, this board effectively
                reduces noise reverberation and echoes, creating a more pleasant and comfortable environment. Its
                innovative construction allows for superior sound absorption across a wide frequency range, making it
                suitable for applications in theaters, auditoriums, recording studios, offices, and residential spaces.
                The Polyaco Acoustic Board is easy to install, durable, and environmentally friendly, as it is made from
                recycled materials. With its sleek and versatile design, it seamlessly integrates into any architectural
                or interior design concept, while significantly improving the overall acoustic experience.
              </p>

              <table class="entry-table">
                <tbody>
                  <tr>
                    <th>Colors</th>
                    <td>36 colour options</td>
                  </tr>
                  <tr>
                    <th>Thickness</th>
                    <td>9mm/ 12mm</td>
                  </tr>
                  <tr>
                    <th>Composition</th>
                    <td>100% Polyester Fibre</td>
                  </tr>
                </tbody>
              </table>
              <div class="product_cta">
                <button data-bs-toggle="modal" data-bs-target="#productpopup" class="submitbutton" type="submit"
                  name="submit">
                  Send Enquiry <i class="fa-solid fa-paper-plane"></i>
                </button>
                <a class="download-brochure" href="./assets/brochures/polyaco.pdf" target="_blank" download>Download
                  E-brochure <i class="fa-solid fa-download"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="product-description">
    <div class="container">
      <div class="tab-area">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
              type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">
              Product Specifications
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane"
              type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">
              Features
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
              type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
              Applications
            </button>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <!-- product specification -->
          <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
            tabindex="0">
            <table class="detail-table">
              <tbody>
                <tr>
                  <th>Size</th>
                  <td>2440 x 1220mm</td>
                </tr>
                <tr>
                  <th>Thickness</th>
                  <td>9mm/ 12mm</td>
                </tr>
                <tr>
                  <th>Density</th>
                  <td>200 kg/cuM</td>
                </tr>
                <tr>
                  <th>Composition</th>
                  <td>100% Polyester Fibre</td>
                </tr>
              </tbody>
            </table>
          </div>

          <!-- features -->
          <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
            <ul class="features-list">
              <li>Acoustical [Sound Absorption]</li>
              <li>Recycled</li>
              <li>VOC free</li>
              <li>Pollutant free</li>
              <li>Formaldehyde free</li>
              <li>Fire Retardant [self-Extinguishing]</li>
              <li>Low water absorption & High Water Resistance</li>
              <li>Easy to Clean</li>
              <li>Easy to cut</li>
              <li>Easy to Install</li>
              <li>Light Weight</li>
              <li>Low Maintenance</li>
              <li>36 Colour Options</li>
            </ul>
          </div>

          <!-- applications -->
          <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
            <ul class="features-list">
              <li>Wall Panelling</li>
              <li>False ceiling</li>
              <li>Hanging Baffles</li>
              <li>Cloud Ceiling</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include('./components/footer.php'); ?>
  <?php include('./components/modal.php'); ?>
  <?php include('./components/scripts.php'); ?>

</body>

</html>