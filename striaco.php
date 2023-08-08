<?php
  $page="products";
  $product = "Striaco";
  $pagetitle = "Striaco"
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
                <img src="assets/image/product-pages/Striaco/1.jpg" alt="" />
                </div>
                <div class="swiper-slide">
                  <img src="assets/image/product-pages/Striaco/2.jpg" alt="" />
                </div>
                <div class="swiper-slide">
                <img src="assets/image/product-pages/Striaco/3.jpg" alt="" />
                </div>
              </div>
              <!-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> -->
            </div>
            <div thumbsSlider="" class="swiper product-icons">
              <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="assets/image/product-pages/Striaco/1.jpg" alt="" />
                </div>
                <div class="swiper-slide">
                  <img src="assets/image/product-pages/Striaco/2.jpg" alt="" />
                </div>
                <div class="swiper-slide">
                <img src="assets/image/product-pages/Striaco/3.jpg" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="product-brief">
            <div class="leftheading">
              <h2><span class="whitespan">Striaco</span> Wooden Groove Acoustic Panel</h2>
            </div>
            <div class="product-bio">
              <p>
                Providing & fixing of 16mm Fibrecrete Striaco in size: 2440 x
                128mm made from HDMR pre laminated Fibre boards of approved
                design & shade of density 850 kg/cuM with linear grooving on
                front side (pitch 16mm or 32mm), 8-10mm perforation at the
                back covered with black acoustic fleece and having tongue &
                groove edges.
              </p>
              <p>
                Fibrecrete Striaco are to be fixed with it’s tongue & groove
                system to G.I. side & centre brackets which will be fixed to
                Aluminium ‘U’ channel of 18mm height, 25mm width having
                flanges of 7mm on both sides. The top surface of the ‘U’
                channel is to be screw fixed to the wall horizontally after
                levelling. The brackets will be twisted & fixed to the flanges
                of the ‘U’ channel.
              </p>

              <table class="entry-table">
                <tbody>
                  <tr>
                    <th>MDF</th>
                    <td>Medium Density Fibre Board [750 kg/cuM]</td>
                  </tr>
                  <tr>
                    <th>HDMR</th>
                    <td>
                      High Density Moisture Resistant Fibre Board [850 kg/cuM]
                    </td>
                  </tr>
                  <tr>
                    <th>Size</th>
                    <td>2440 x 128 x 16mm</td>
                  </tr>
                </tbody>
              </table>
              <div class="product_cta">
                <button data-bs-toggle="modal" data-bs-target="#productpopup" class="submitbutton" type="submit"
                  name="submit">
                  Send Enquiry <i class="fa-solid fa-paper-plane"></i>
                </button>
                <a class="download-brochure" href="./assets/brochures/striaco.pdf" target="_blank"
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
        <div class="tab-content" id="myTabContent">
          <!-- product specification -->
          <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
            tabindex="0">
            <table class="detail-table">
              <tbody>
                <tr>
                  <th>MDF</th>
                  <td>Medium Density Fibre Board [750 kg/cuM]</td>
                </tr>
                <tr>
                  <th>HDMR</th>
                  <td>
                    High Density Moisture Resistant Fibre Board [850 kg/cuM]
                  </td>
                </tr>
                <tr>
                  <th>Size</th>
                  <td>2440 x 128 x 16mm</td>
                </tr>
                <tr>
                  <th>Front side</th>
                  <td>Linear Grooving [16mm pitch; 32mm pitch]</td>
                </tr>
                <tr>
                  <th>Back Side</th>
                  <td>
                    Perforation 8-10mm Back Side covered with Black Acoustic
                    Fleece
                  </td>
                </tr>
                <tr>
                  <th>Long Edge</th>
                  <td>Tongue & Groove system</td>
                </tr>
                <tr>
                  <th>Installation</th>
                  <td>
                    With ‘U’ Aluminium Channel & G.I. side & centre brackets
                  </td>
                </tr>
                <tr>
                  <th>Application</th>
                  <td>Wall Panelling, Partitions, False Ceiling</td>
                </tr>
                <tr>
                  <th>Places of Usage</th>
                  <td>
                    Auditorium, Banquet Halls, Seminar Halls, Concert Halls,
                    Studios, Cinema Theatres, Workspaces etc.
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

          <!-- technical specification -->
          <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
            <table class="detail-table">
              <tbody></tbody>
            </table>
          </div>

          <!-- features -->
          <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
            <ul class="features-list"></ul>
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