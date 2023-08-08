<?php
$page = "products";
$product = "Effusio-wool";
$pagetitle = "Effusio-wool"
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
                  <img src="assets/image/product-pages/Effusio/1.jpg" />
                </div>
                <div class="swiper-slide">
                  <img src="assets/image/product-pages/Effusio/2.jpg" />
                </div>
                <div class="swiper-slide">
                  <img src="assets/image/product-pages/Effusio/3.jpg" />
                </div>
              </div>
              <!-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> -->
            </div>
            <div thumbsSlider="" class="swiper product-icons">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="assets/image/product-pages/Effusio/1.jpg" />
                </div>
                <div class="swiper-slide">
                  <img src="assets/image/product-pages/Effusio/2.jpg" />
                </div>
                <div class="swiper-slide">
                  <img src="assets/image/product-pages/Effusio/3.jpg" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="product-brief">
            <div class="leftheading">
              <h2><span class="whitespan">Effusio Wool </span>Sound Absorption Wool</h2>
            </div>
            <div class="product-bio">
              <p>
                Effusio Wool is a high-quality sound absorption wool that effectively reduces noise and reverberations
                in various environments. Made from premium sheep's wool, it offers exceptional acoustic performance
                while maintaining a natural and sustainable composition. Effusio Wool is designed to absorb sound waves
                across a broad frequency range, making it suitable for applications in offices, conference rooms,
                studios, auditoriums, and homes. Its dense and porous structure allows it to trap and dissipate sound
                energy, resulting in improved clarity and reduced echo. With its environmentally friendly attributes and
                superior sound absorption capabilities, Effusio Wool provides an ideal solution for creating quieter and
                more comfortable spaces.
              </p>

              <table class="entry-table">
                <tbody>
                  <tr>
                    <th>Material</th>
                    <td>Soft Fibre</td>
                  </tr>
                  <tr>
                    <th>Color</th>
                    <td>White</td>
                  </tr>
                  <tr>
                    <th>Application</th>
                    <td>Ceiling, walls, partitions, underflooring</td>
                  </tr>
                </tbody>
              </table>
              <div class="product_cta">
                <button data-bs-toggle="modal" data-bs-target="#productpopup" class="submitbutton" type="submit"
                  name="submit">
                  Send Enquiry <i class="fa-solid fa-paper-plane"></i>
                </button>
                <a class="download-brochure" href="./assets/brochures/effusio-wool.pdf" target="_blank"
                  download>Download E-brochure <i class="fa-solid fa-download"></i></a>
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
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
              type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
              Technical Specification
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane"
              type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">
              Features
            </button>
          </li>
        </ul>

        <!-- product specification -->
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
            tabindex="0">
            <table class="detail-table">
              <tbody>
                <tr>
                  <th>Material</th>
                  <td>Soft Fibre</td>
                </tr>
                <tr>
                  <th>Color</th>
                  <td>White</td>
                </tr>
                <tr>
                  <th>Application</th>
                  <td>ceiling, walls, partitions, underflooring</td>
                </tr>
                <tr>
                  <th>NRC</th>
                  <td>0.50 to 0.80</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
            <table class="detail-table">
              <tbody></tbody>
            </table>
          </div>
          <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
            <ul class="features-list">
              <li>Sound Insulation</li>
              <li>Thermal Insulation</li>
              <li>Fire Retardant</li>
              <li>Easy to cut</li>
              <li>Easy to Install</li>
              <li>Light Weight</li>
              <li>Non hazardous</li>
              <li>Skin Friendly [easy to work]</li>
              <li>Durable</li>
              <li>Eco friendly</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- footer section -->
  <?php include('./components/footer.php'); ?>
  <?php include('./components/modal.php'); ?>
  <?php include('./components/scripts.php'); ?>

</body>

</html>