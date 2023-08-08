<?php
  $page="products";
  $product = "Fab";
  $pagetitle = "Fab"
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
                  <img src="assets/image/product-pages/Fab/1.jpg" />
                </div>
                <div class="swiper-slide">
                  <img src="assets/image/product-pages/Fab/2.jpg" />
                </div>
                <div class="swiper-slide">
                <img src="assets/image/product-pages/Fab/3.jpg" />
                </div>
                <div class="swiper-slide">
                <img src="assets/image/product-pages/Fab/4.jpg" />
                </div>
              </div>
              <!-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> -->
            </div>
            <div thumbsSlider="" class="swiper product-icons">
              <div class="swiper-wrapper">
              <div class="swiper-slide">
                  <img src="assets/image/product-pages/Fab/1.jpg" />
                </div>
                <div class="swiper-slide">
                  <img src="assets/image/product-pages/Fab/2.jpg" />
                </div>
                <div class="swiper-slide">
                <img src="assets/image/product-pages/Fab/3.jpg" />
                </div>
                <div class="swiper-slide">
                <img src="assets/image/product-pages/Fab/4.jpg" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="product-brief">
            <div class="leftheading">
              <h2><span class="whitespan">FAB</span> Fabric Acoustic Board</h2>
            </div>
            <div class="product-bio">
              <p>
                Providing & fixing Magnesite Binded Fibrecrete Acoustic Panels
                made of Pine Wood Fibre 25mm thick 1220mm x 610mm FAB Kerf
                Edge, inserted in PVC channel ‘H’ Spline. ‘H’ Spline to be
                Screw fixed @ 200mm vertically/ horizontally @ 610mm c/c on GI
                metal frame of 50 x 50mm comprising of Floor & Stud Channel
                making a grid of 610 x 610mm c/c. The frame is to be made in
                proper line after leveling. The panels will be backed with
                50mm Effusio wool 500 GSM inserted inside the grid of 610 x
                610mm which in total will comprise of minimum NRC 0.95 as per
                IS: 8225/ ISO: 354/ ASTM: 423 – 90 a. Acoustic Panel base
                material should meet the Stringent Fire test requirement
                having Class ‘P’ rating for Ignitability test as per BS 476
                part 5; Fire Propagation index, I = 4.11 [lower the better] as
                per BS 476 part 6 and Class ‘1’ rating as per BS 476 part 7
                for Surface Spread of Flame test. Class ‘P’ and Class ‘1’ are
                the highest rating. All joints of the tiles must in perfect
                line and level.
              </p>

              <table class="entry-table">
                <tbody>
                  <tr>
                    <th>Material</th>
                    <td>Magnesite Binded Pine Wood Fibres</td>
                  </tr>
                  <tr>
                    <th>Size [in mm]</th>
                    <td>1220 x 610</td>
                  </tr>
                  <tr>
                    <th>Application</th>
                    <td>Wall Paneling, partitions</td>
                  </tr>
                </tbody>
              </table>
              <div class="product_cta">
                <button data-bs-toggle="modal" data-bs-target="#productpopup" class="submitbutton" type="submit"
                  name="submit">
                  Send Enquiry <i class="fa-solid fa-paper-plane"></i>
                </button>
                <a class="download-brochure" href="./assets/brochures/fab.pdf" target="_blank" download>Download E-brochure <i
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
        <div class="tab-content" id="myTabContent">
          <!-- product specification -->
          <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
            tabindex="0">
            <table class="detail-table">
              <tbody>
                <tr>
                  <th>Material</th>
                  <td>Magnesite Binded Pine Wood Fibres</td>
                </tr>
                <tr>
                  <th>Surface Finish</th>
                  <td>Acoustical Fabric</td>
                </tr>
                <tr>
                  <th>Size[in mm]</th>
                  <td>1220 x 610</td>
                </tr>
                <tr>
                  <th>Thickness</th>
                  <td>20mm, 25mm</td>
                </tr>
                <tr>
                  <th>Density</th>
                  <td>400 kg/cuM</td>
                </tr>
                <tr>
                  <th>Edge</th>
                  <td>Kerf</td>
                </tr>
                <tr>
                  <th>Purpose</th>
                  <td>Acoustic & Thermal Insulation</td>
                </tr>
                <tr>
                  <th>NRC</th>
                  <td>
                    0.95 [as per IS: 8225 – 1987 equivalent to ISO 354 -1985 &
                    ASTM 423 – 90a]
                  </td>
                </tr>
                <tr>
                  <th>Easy to</th>
                  <td>Cut with circular saw or hand saw at site</td>
                </tr>
                <tr>
                  <th>Application</th>
                  <td>Wall Paneling, partitions</td>
                </tr>
                <tr>
                  <th>Installation</th>
                  <td>‘H’ Spline System</td>
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

          <!-- technical specification -->
          <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
            <table class="detail-table">
              <tbody>
                <tr>
                  <th>Physical Strength</th>
                  <td>Regular in Structure, Durable, Stable.</td>
                </tr>
                <tr>
                  <th>Suitability</th>
                  <td>
                    Environment Friendly; Ineffective to Fungus, Termites &
                    Insects, suitable for Sound Biological construction.
                  </td>
                </tr>
                <tr>
                  <th>Fire Tests</th>
                  <td>tested by CBRI Roorkee, Uttrakhand</td>
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
                  <td>– ISO 1182 – Avg. mass loss = 52.27%</td>
                </tr>
                <tr>
                  <th>Thermal Conductivity</th>
                  <td>k= 0.065 W/mK</td>
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