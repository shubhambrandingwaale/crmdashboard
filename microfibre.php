<?php
  $page="products";
  $product = "Microfibre";
  $pagetitle = "Microfibre"
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
                  <img src="assets/image/product-pages/microfibre/FBI01_3.jpg" />
                </div>
                <div class="swiper-slide">
                  <img src="assets/image/product-pages/microfibre/FBI02_2.jpg" />
                </div>
                <div class="swiper-slide">
                  <img src="assets/image/product-pages/microfibre/FBI03_3.jpg" />
                </div>
                <div class="swiper-slide">
                  <img src="assets/image/product-pages/microfibre/FBI04_2.jpg" />
                </div>
              </div>
              <!-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> -->
            </div>
            <div thumbsSlider="" class="swiper product-icons">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="assets/image/product-pages/microfibre/FBI01_3.jpg" />
                </div>
                <div class="swiper-slide">
                <img src="assets/image/product-pages/microfibre/FBI02_2.jpg" />
                </div>
                <div class="swiper-slide">
                <img src="assets/image/product-pages/microfibre/FBI03_3.jpg" />
                </div>
                <div class="swiper-slide">
                <img src="assets/image/product-pages/microfibre/FBI04_2.jpg" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="product-brief">
            <div class="leftheading">
              <h2> <span class="whitespan"> Microfibre </span> Fibre Board</h2>
            </div>
            <div class="product-bio">
              <!-- about -->
              <p>
                Providing & Fixing Suspended ceiling with Magnesite binded
                15mm thick Fibrecrete ‘Microfibre’ Acoustic Tiles made of Pine
                wood slivers in size: 1200 x 600mm weighing 9 kg/Sqm. in
                choice color having a NRC of 0.45. The tiles will be screw
                fixed to GI Frame work comprising of Ceiling Section,
                Intermediate Channel, Perimeter, L Angle fastened & hanged
                suitably from the ceiling with dash fasteners, L cleats,
                Adjuster Clips & Wire. Perimeter Channel is to be screw fixed
                to the wall, support for the intermediate channel is to be
                taken at every 1200mm, Ceiling Section is to be fixed to the
                intermediate channel at 600mm c/c. The entire framework should
                be in perfect line & level.
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
                <a class="download-brochure" href="./assets/brochures/microfibre-tile.pdf" target="_blank" download>Download E-brochure <i
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
                  <td>Magnesite binded Pine wood fibre Slivers.</td>
                </tr>
                <tr>
                  <th>Color</th>
                  <td>
                    Raw – Off white + 36 Color options. [Also available in
                    custom colors]
                  </td>
                </tr>
                <tr>
                  <th>Weight</th>
                  <td>
                    15mm – 9 kg/Sqm.; 20mm – 12 kg/Sqm.; 25mm – 15 kg/Sqm.
                  </td>
                </tr>
                <tr>
                  <th>Edge</th>
                  <td>Square, Chamfer, Tegular, Kerf</td>
                </tr>
                <tr>
                  <th>Purpose</th>
                  <td>Acoustic & Thermal Insulation</td>
                </tr>
                <tr>
                  <th>NRC</th>
                  <td>
                    0.80 [as per IS: 8225 – 1987 equivalent to ISO 354 -1985 &
                    ASTM 423 – 90a]
                  </td>
                </tr>
                <tr>
                  <th>Application</th>
                  <td>False Ceiling, Wall Paneling, Partitions</td>
                </tr>
                <tr>
                  <th>Easy to</th>
                  <td>Cut with circular saw or hand saw at site</td>
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
                  <th>Fire Tests</th>
                  <td>Tested by CBRI Roorkee, Uttarakhand.</td>
                </tr>
                <tr>
                  <th>Ignitability</th>
                  <td>BS 476 part 5 - ‘P’ not easily ignitable</td>
                </tr>
                <tr>
                  <th>Fire Propagation</th>
                  <td>BS 476 part 6 – Index ‘I’ = 4.11</td>
                </tr>
                <tr>
                  <th>Surface Spread of Flame</th>
                  <td>BS 476 Part 7 – Class 1</td>
                </tr>
                <tr>
                  <th>Non Combustibility</th>
                  <td>ISO 1182 – Avg. mass loss = 52.27%</td>
                </tr>
                <tr>
                  <th>Weathering Test</th>
                  <td>
                    Tested by SIIR, Delhi. ‘NO delamination and Damage
                    observed after the Test as per IS 9307’. Conforms to : IS
                    3308
                  </td>
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