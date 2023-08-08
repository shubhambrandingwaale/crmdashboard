<?php
  $page="products";
  $product = "Natural";
  $pagetitle = "Natural"
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
                  <img src="assets/image/product-pages/natural/1.jpg" />
                </div>
                <div class="swiper-slide">
                  <img src="assets/image/product-pages/natural/2.jpg" />
                </div>
                <div class="swiper-slide">
                  <img src="assets/image/product-pages/natural/3.jpg" />
                </div>
                <div class="swiper-slide">
                  <img src="assets/image/product-pages/natural/4.jpg" />
                </div>
              </div>
              <!-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> -->
            </div>
            <div thumbsSlider="" class="swiper product-icons">
              <div class="swiper-wrapper">
              <div class="swiper-slide">
                  <img src="assets/image/product-pages/natural/FBI01_1.jpg" />
                </div>
                <div class="swiper-slide">
                  <img src="assets/image/product-pages/natural/FBI02_1.jpg" />
                </div>
                <div class="swiper-slide">
                  <img src="assets/image/product-pages/natural/FBI03_2.jpg" />
                </div>
                <div class="swiper-slide">
                  <img src="assets/image/product-pages/natural/FBI04_1.jpg" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="product-brief">
            <div class="leftheading">
              <h2>
               <span class="whitespan">Natural</span> Wood Wool Board
              </h2>
            </div>
            <div class="product-bio">
              <!-- about -->
              <p>
                Fibrecrete Fine Natural panels are Multipurpose – Acoustical,
                Thermal & Structural Woodwool Insulation Boards, manufactured
                using Two of the most common Natural Resource available to the
                mankind since Evolution i.e. ‘Wood & Water’.
              </p>
              <p>
                Long Pine Wood Fibres i.e. Woodwool [excelsior] is mineralized
                with Magnesite and an inorganic Salt dissolved in Water, are
                laid into dyes and Hydraulically compressed into Panels.
              </p>
              <p>
                Uniform Fibre distribution give these Panel a Unique porous
                structure which makes it breathable and a Unique fibrous
                textured finish which aesthetically is very ‘Natural’.
              </p>

              <table class="entry-table">
                <tbody>
                  <tr>
                    <th>Material</th>
                    <td>Magnesite Binded Pine Wood Fibres</td>
                  </tr>
                  <tr>
                    <th>Category</th>
                    <td>Fine [1mm fibre width]</td>
                  </tr>
                  <tr>
                    <th>Type</th>
                    <td>Natural [Long Pine Wood Fibres]</td>
                  </tr>
                </tbody>
              </table>
              <div class="product_cta">
                <button data-bs-toggle="modal" data-bs-target="#productpopup" class="submitbutton" type="submit"
                  name="submit">
                  Send Enquiry <i class="fa-solid fa-paper-plane"></i>
                </button>
                <a class="download-brochure" href="./assets/brochures/natural.pdf" target="_blank" download>Download E-brochure <i
                      class="fa-solid fa-download"></i></a>
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
                  <td>Magnesite Binded Pine Wood Fibres</td>
                </tr>
                <tr>
                  <th>Category</th>
                  <td>Fine [1mm fibre width]</td>
                </tr>
                <tr>
                  <th>Type</th>
                  <td>Natural [Long Pine Wood Fibres]</td>
                </tr>
                <tr>
                  <th>Standard Size</th>
                  <td>
                    1200 x 600mm; 600 x 600mm - [10mm – 150mm] : 1195 x 595mm;
                    595 x 595mm - [10mm – 150mm] : 2000 x 500mm - [25mm –
                    150mm]
                  </td>
                </tr>
              </tbody>
            </table>
            <!-- <table class="flatTable">
                <thead>
                  <tr>
                    <th>Application</th>
                    <th>Installation</th>
                    <th>Size</th>
                    <th>Thickness</th>
                    <th>Edge</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>False Ceiling</td>

                    <td>
                      Lay – in Grid System made of T24 Powder coated G.I. Tee &
                      Angle, suspended from the Roof
                    </td>
                    <td>595 x 595mm; 1195 x 595mm</td>
                    <td>15mm, 20mm, 25mm</td>
                    <td>Square/ Rectangular</td>
                  </tr>
                  <tr>
                    <td>Wall Paneling</td>
                    <td>‘H’ Spline System</td>
                    <td>1220 x 610mm</td>
                    <td>20mm, 25mm</td>
                    <td>Kerf</td>
                  </tr>
                </tbody>
              </table> -->
          </div>

          <!-- technical details -->
          <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
            <table class="detail-table">
              <tbody>
                <tr>
                  <th>Fire</th>
                  <td>Tested by CBRI Roorkee, Uttarakhand.</td>
                </tr>
                <tr>
                  <th>Ignitability Test</th>
                  <td>‘P’ as per BS 476 Part 5</td>
                </tr>
                <tr>
                  <th>Fire Propagation Index</th>
                  <td>I = 4.11 as per BS 476 Part 6</td>
                </tr>
                <tr>
                  <th>Surface Spread of Flame</th>
                  <td>Class 1 as per BS 476 Part 7</td>
                </tr>
                <tr>
                  <th>Non-combustibility</th>
                  <td>Mass Loss 52.27% as per ISO 1182</td>
                </tr>
                <tr>
                  <th>Thermal Conductivity</th>
                  <td>k= 0.065 W/mK</td>
                </tr>
                <tr>
                  <th>Weathering Test</th>
                  <td>
                    Tested by SIIR, Delhi. ‘NO delamination and Damage
                    observed after the Test as per IS 9307’.
                  </td>
                </tr>
                <tr>
                  <th>Sound</th>
                  <td>
                    As per IS 8225 – 1987 equivalent to ISO 354 – 1985 and
                    ASTM 423 90a tested by NPL, Delhi & Prasar Bharti, New
                    Delhi.
                  </td>
                </tr>
                <tr>
                  <th>Application</th>
                  <td>False Ceiling, Wall Paneling, Partitions.</td>
                </tr>
              </tbody>
            </table>
          </div>

          <!-- features -->
          <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
            <ul class="features-list">
              <li>Acoustical Insulation</li>
              <li>Thermal Insulation</li>
              <li>Moisture Resistant</li>
              <li>Fire Resistant</li>
              <li>Environment Friendly</li>
              <li>Functional</li>
              <li>Multipurpose</li>
              <li>Target Sector</li>
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