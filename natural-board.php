<?php
  $page="products";
?>
<!DOCTYPE html>
<html>

<head>
  <title>Fibretex India</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/responsive.css" />
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
                  <img src="assets/image/product-pages/natural/natural-1.png" />
                </div>
                <div class="swiper-slide">
                  <img src="assets/image/product-pages/natural/natural-2.png" />
                </div>
                <div class="swiper-slide">
                  <img src="assets/image/product-pages/natural/natural-1.png" />
                </div>
                <div class="swiper-slide">
                  <img src="assets/image/product-pages/natural/natural-2.png" />
                </div>
              </div>
              <!-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> -->
            </div>
            <div thumbsSlider="" class="swiper product-icons">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="assets/image/product-pages/natural/natural-1.png" />
                </div>
                <div class="swiper-slide">
                  <img src="assets/image/product-pages/natural/natural-2.png" />
                </div>
                <div class="swiper-slide">
                  <img src="assets/image/product-pages/natural/natural-1.png" />
                </div>
                <div class="swiper-slide">
                  <img src="assets/image/product-pages/natural/natural-2.png" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="product-brief">
            <div class="leftheading">
              <h2>Natural <span class="whitespan"> Panels</span></h2>
            </div>
            <div class="product-bio">
              <p>
                Fibrecrete Natural panels are light weight Multipurpose -
                Thermal, Acoustic & Structural Woodwool Insulation Boards and
                are manufactured in a safe and non-toxic process using one of
                the most common Natural Resource available to the mankind
                since Evolution i.e. Wood.
              </p>

              <table class="entry-table">
                <tbody>
                  <tr>
                    <th>Standard Size</th>
                    <td>
                      2000 x 500mm for ≥ 25mm thickness, 1220 x 610mm for 10mm
                      to 150mm
                    </td>
                  </tr>
                  <tr>
                    <th>Other Sizes</th>
                    <td>
                      1200 x 600mm; 915 x 610mm, 600 x 600mm; 595 x 595mm
                    </td>
                  </tr>
                  <tr>
                    <th>Thickness (in mm)</th>
                    <td>10, 13, 15, 20, 25, 40, 50, 75, 100, 150</td>
                  </tr>
                </tbody>
              </table>
              <div class="product_cta">
                <button data-bs-toggle="modal" data-bs-target="#productpopup" class="submitbutton" type="submit"
                  name="submit">
                  Send Enquiry <i class="fa-solid fa-paper-plane"></i>
                </button>
                <a class="download-brochure" href="./assets/brochures/natural-acoustic-board.pdf" target="_blank" download>Download E-brochure <i
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
          <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
            tabindex="0">
            <table class="detail-table">
              <tbody>
                <tr>
                  <th>Wood Fibre</th>
                  <td>1mm width Pine wood</td>
                </tr>
                <tr>
                  <th>Binder</th>
                  <td>85 grade Magnesite 200 mesh</td>
                </tr>
                <tr>
                  <th>Standard Size</th>
                  <td>
                    2000 x 500mm for ≥ 25mm thickness, 1220 x 610mm for 10mm
                    to 150mm
                  </td>
                </tr>
                <tr>
                  <th>Other Sizes</th>
                  <td>1200 x 600mm; 915 x 610mm, 600 x 600mm; 595 x 595mm</td>
                </tr>
                <tr>
                  <th>Thickness (in mm)</th>
                  <td>10, 13, 15, 20, 25, 40, 50, 75, 100, 150</td>
                </tr>
                <tr>
                  <th>Density in [kg/cuM]</th>
                  <td>400 to 800</td>
                </tr>
                <tr>
                  <th>Edge</th>
                  <td>Square, Bevel</td>
                </tr>
                <tr>
                  <th>Standard Range</th>
                  <td>unpainted, "Natural Color of panel is Off white'</td>
                </tr>
                <tr>
                  <th>Premium Range</th>
                  <td>Spray painted with any color</td>
                </tr>
                <tr>
                  <th>Conforms to</th>
                  <td>15 3308; EN13168; B5 1105; DIN 1101</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
            <table class="detail-table">
              <tbody>
                <tr>
                  <th>Fire</th>
                  <td>tested by CBRI Roorkee, Uttrakhand.</td>
                </tr>
                <tr>
                  <th>Ignitability Test</th>
                  <td>P' as per BS 476 Part 5</td>
                </tr>
                <tr>
                  <th>Ignitability Test</th>
                  <td>P' as per BS 476 Part 5</td>
                </tr>
                <tr>
                  <th>Fire Propagation Index</th>
                  <td>
                    4.11 as per BS 476 Part 6 •Surface Spread of Flame-Class 1
                    as per B5 476 Part 7
                  </td>
                </tr>
                <tr>
                  <th>Non-combustibility</th>
                  <td>Non-combustibility-Mass Loss 52.27% as per ISO 1182</td>
                </tr>
                <tr>
                  <th>Thermal Conductivity</th>
                  <td>
                    Thermal Conductivity, k=0.065 W/mK Weathering Test: Tested
                    by SIIR, Delhi. 'NO delamination, and Damage observed
                    after the Test as per IS 9307.
                  </td>
                </tr>
                <tr>
                  <th>Sound</th>
                  <td>
                    As per 15 8225-1987 equivalent to 150 354-1985 and ASTM
                    423 90 a tested by NPL, Delhi & Prasar Bharti, Aw Delhi.
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
            <ul class="features-list">
              <li>
                Fibrecrete Natural panels are light weight Multipurpose -
                Thermal, Acoustic & Structural Woodwool Insulation Boards and
                are manufactured in a safe and non-toxic process using one of
                the most common Natural Resource available to the mankind
                since Evolution i.e. Wood. Long Pine Wood Fibres i.e. Woodwool
                [excelsior] is mineralized with Magnesite and an inorganic
                Salt, lald into dyes and Hydraulically compressed into Panels.
              </li>
              <li>
                Uniform Fibre distribution give these Panel a Unique porous
                structure which makes it breathable and a Unique brous
                textured finish which aesthetically is very Natural.
                Fibrecrete Panels are not brittle & doesn't get affected by
                fungus, termites or insects.
              </li>
              <li>
                Fibrecrete panels are Eco friendly and contains no toxic
                binders, resins, asbestos or formaldehyde and are naturally
                degradable in a landfill.
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://unpkg.com/@popperjs/core@2"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="assets/js/main.js"></script>
</body>

</html>