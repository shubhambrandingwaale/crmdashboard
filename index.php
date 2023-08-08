<?php
    if (isset($_POST["submit"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["number"];
        $product = $_POST["product"];
    
        $to = "shubham.brandingwaale@gmail.com";
        $subject = "Contact Enquiry";
        $message = "Name :" . $name . "\n";
        $message .= "Email :" . $email . "\n";
        $message .= "Phone :" . $phone . "\n";
        $message .= "Product :" . $product . "\n";
        $header = "From: " . $email;
    
        if (empty($name) || empty($email) || empty($phone) || empty($product)) {
            header("location:thankyou.php");
        } else {
            if (mail($to, $subject, $message, $header)) {
                echo 'success';
            } else {
                echo 'error';
            }
        }
    }
?>
<?php
$page = "home";
$pagetitle = "Fibretex India"
  ?>
<!DOCTYPE html>
<html>

<head>
  <?php include('./components/links.php'); ?>
</head>

<body>
  <!-- header section -->
  <?php include('./components/header.php'); ?>

  <!-- hero section -->
  <section class="hero herobg p-0">
    <div class="container-fluid">
      <div class="row py-4 px-2">
        <div class="col-lg-8">
          <div class="swiper hero-slider">
            <!-- <div class="parallax-bg " " data-swiper-parallax=" -23%"></div> -->
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="./assets/image/banner1.jpg" alt="" class="heropics">
              </div>
              <div class="swiper-slide">
                <img src="./assets/image/banner2.jpg" alt="" class="heropics">
              </div>
              <div class="swiper-slide">
                <img src="./assets/image/banner3.jpg" alt="" class="heropics">
              </div>
              <div class="swiper-slide">
                <img src="./assets/image/banner4.jpg" alt="" class="heropics">
              </div>
            </div>
            <div class="hero-swiper-pagination"></div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="hero-form-container h-100">
            <form method="post">
              <h2 class="form-heading">Enquire now</h2>
              <!-- full name -->
              <div class="input-group">
                <input required="" type="text" name="name" autocomplete="off" class="my-input">
                <label class="user-label">Full Name</label>
              </div>
              <!-- email -->
              <div class="input-group">
                <input required="" type="email" name="email" autocomplete="off" class="my-input">
                <label class="user-label">Email</label>
              </div>
              <!-- phone -->
              <div class="input-group">
                <input required="" type="tel" name="number" autocomplete="off" class="my-input">
                <label class="user-label">Phone number</label>
              </div>
              <!-- company -->
              <div class="input-group">
                <textarea required type="text" name="product" autocomplete="off" class="my-input" rows="7"></textarea>
                <label class="user-label">Product Requirement</label>
              </div>

              <button type="submit" name="submit" class="formbtn">Send Enquiry</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- form -->

  </section>

  <!-- acoustics section -->
  <section class="section acoustics">
    <div class="container">
      <div class="row d-flex align-items-center justify-content-center h-100">
        <div class="col-lg-5">
          <div class="acoustics_image">
            <img src="assets/image/about-home.jpg" alt="" />
          </div>
        </div>
        <div class="col-lg-7">
          <div class="acoustice_content">
            <div class="sub_heading">
              <div class="acoustice_span">
                <span class="sec_span_title">Brief</span>
              </div>
              <img src="assets/image/line.png" style="max-width: 100px" class="span_line" />
              <div class="acoustice_head">
                <h2 class="sec_head_title">Why choose <span class="whitespan"> Fibretex? </span></h2>
              </div>
            </div>
            <div class="acoustice-para">
              <p>
                A proper insulation reduces the heat in a room, makes air
                conditioning more effective in hot Summer days, thus reduces
                electricity cost. Improves Acoustic quality & Sound Clarity by
                deadening unwanted sound and making other sounds clear.
              </p>
            </div>
            <div class="acoustice_list">
              <ul>
                <li>
                  <p>Sound Absorption</p>
                </li>
                <li>
                  <p>Sound Isolation</p>
                </li>
                <li>
                  <p>6 way Hydraulic compression</p>
                </li>
                <li>
                  <p>Highly Fire Resistant</p>
                </li>
              </ul>
            </div>
            <div class="btn_design"></div>
            <a href="about.php" class="theme_btn1">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- sectors we serve -->
  <section class="section service">
    <div class="container-fluid">
      <div class="centerheading">
        <h2>Sectors we <span class="whitespan"> Serve</span></h2>
      </div>
      <div class="row mt-5">
        <div class="col-6 col-md-6 col-lg-2 my-3">
          <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" class="service_box">
            <div class="service_icon">
              <i class="fa-solid fa-graduation-cap"></i>
            </div>
            <div class="service_head">
              <h5>Education</h5>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-6 col-lg-2 my-3">
          <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" class="service_box">
            <div class="service_icon">
              <i class="fa-solid fa-tv"></i>
            </div>
            <div class="service_head">
              <h5>Entertainment</h5>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-6 col-lg-2 my-3">
          <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" class="service_box">
            <div class="service_icon">
              <i class="fa-solid fa-briefcase-medical"></i>
            </div>
            <div class="service_head">
              <h5>Hospitality</h5>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-6 col-lg-2 my-3">
          <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" class="service_box">
            <div class="service_icon">
              <i class="fa-solid fa-hand-holding-medical"></i>
            </div>
            <div class="service_head">
              <h5>Healthcare</h5>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-6 col-lg-2 my-3">
          <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" class="service_box">
            <div class="service_icon">
              <i class="fa-solid fa-umbrella-beach"></i>
            </div>
            <div class="service_head">
              <h5>Recreational</h5>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-6 col-lg-2 my-3">
          <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" class="service_box">
            <div class="service_icon">
              <i class="fa-solid fa-industry"></i>
            </div>
            <div class="service_head">
              <h5>Industrial</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- our mission -->
  <section class="section motto">
    <div class="container">
      <div class="d-flex align-items-start">
        <div class="row d-flex align-items-center justify-content-center h-100">
          <div class="motto_content">
            <div class="centerheading our-vision">
              <h2>Empowering <span class="whitespan"> Innovation</span></h2>
            </div>
            <!-- <div class="motto_para">
                            <p>Efficiently unleash cross-media informative without cross-media value.
                                Quickly maximize timely deliverables for real-time schemas.
                            </p>
                        </div> -->
          </div>
          <div class="col-lg-4">
            <div class="motto_content_box">
              <div class="nav flex-column nav-pills me-3 motto_btn" id="v-pills-tab" role="tablist"
                aria-orientation="vertical">
                <button data-aos="fade-right" class="nav-link" id="v-pills-home-tab" data-bs-toggle="pill"
                  data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                  aria-selected="true">
                  Vision <i class="fa-solid fa-bullseye"></i>
                </button>
                <button data-aos="fade-right" class="nav-link active" id="v-pills-profile-tab" data-bs-toggle="pill"
                  data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
                  aria-selected="false">
                  Mission <i class="fa-solid fa-eye"></i>
                </button>
                <button data-aos="fade-right" class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                  data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages"
                  aria-selected="false">
                  Goals <i class="fa-solid fa-trophy"></i>
                </button>
                <button data-aos="fade-right" class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                  data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings"
                  aria-selected="false">
                  Core Values <i class="fa-solid fa-timeline"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="row centerit">
              <div class="col-lg-8">
                <div class="tab-content" id="v-pills-tabContent">
                  <div class="tab-pane fade" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <div class="motto_rightside">
                      <div class="motto_icon">
                        <i class="fa-solid fa-bullseye"></i>
                      </div>
                      <div class="motto_head">
                        <h4>Vision</h4>
                      </div>
                      <div class="motto_para">
                        <p>
                          To be a leading company providing sustainable
                          acoustical solutions, admired for its brand,
                          technology & results for creating an effective
                          environment.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel"
                    aria-labelledby="v-pills-profile-tab">
                    <div class="motto_rightside">
                      <div class="motto_icon">
                        <i class="fa-solid fa-eye"></i>
                      </div>
                      <div class="motto_head">
                        <h4>Mission</h4>
                      </div>
                      <div class="motto_para">
                        <p>
                          To become preferred brand among Architects, Acoustic
                          Consultants & Customers for their acoustical needs
                          with excellence in innovations, technology,
                          operations, customer support & building long term
                          client relation.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                    aria-labelledby="v-pills-messages-tab">
                    <div class="motto_rightside">
                      <div class="motto_icon">
                        <i class="fa-solid fa-trophy"></i>
                      </div>
                      <div class="motto_head">
                        <h4>Goals</h4>
                      </div>
                      <div class="motto_para">
                        <p>
                          Innovating new effective products with aesthetic
                          appeal. Providing acoustical solutions in Government
                          & Private Projects. Enhancing PAN India presence,
                          Global Presence Strengthening operational teams.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                    aria-labelledby="v-pills-settings-tab">
                    <div class="motto_rightside">
                      <div class="motto_icon">
                        <i class="fa-solid fa-timeline"></i>
                      </div>
                      <div class="motto_head">
                        <h4>Core Values</h4>
                      </div>
                      <div class="motto_para">
                        <p>
                          Positive Attitude, Innovation, Development, Quality,
                          Traditions, Teamwork, Building Relations,
                          Accountability.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- statistics section -->
  <section class="satisfication">
    <div class="container">
      <div class="centerwhiteheading">
        <h2>Quantified <span class="redspan"> Success </span></h2>

        <p class="mt-5">
          With Hard work &amp; Dedication to serve best for our clients
          Since 1970, we have Earned Great Brands as Clientele.
        </p>
        <p>
          Hence We are Still Working to Make ourself Best Accoustics Proivder
          in India.
        </p>
      </div>
      <div class="row mt-5 d-flex align-items-center justify-content-center h-100">
        <div class="col-6 col-lg-3 col-md-4 my-3">
          <div class="satisfication_box">
            <div class="satisfication_icon">
              <i class="fa-solid fa-user"></i>
            </div>
            <div class="satisfication_para">
              <p>Employers</p>
            </div>
            <div class="satisfication_head">
              <h3>20 +</h3>
            </div>
          </div>
        </div>
        <div class="col-6 col-lg-3 col-md-4 my-3">
          <div class="satisfication_box">
            <div class="satisfication_icon">
              <i class="fa-solid fa-building"></i>
            </div>
            <div class="satisfication_para">
              <p>Ongoing Projects</p>
            </div>
            <div class="satisfication_head">
              <h3>07 +</h3>
            </div>
          </div>
        </div>
        <div class="col-6 col-lg-3 col-md-4 my-3">
          <div class="satisfication_box">
            <div class="satisfication_icon">
              <i class="fa-solid fa-face-smile"></i>
            </div>
            <div class="satisfication_para">
              <p>Happy Clients</p>
            </div>
            <div class="satisfication_head">
              <h3>1000 +</h3>
            </div>
          </div>
        </div>
        <div class="col-6 col-lg-3 col-md-4 my-3">
          <div class="satisfication_box">
            <div class="satisfication_icon">
              <i class="fa-solid fa-crown"></i>
            </div>
            <div class="satisfication_para">
              <p>Year Experience</p>
            </div>
            <div class="satisfication_head">
              <h3>52 +</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- our products -->
  <section class="products">
    <div class="container-fluid">
      <div class="row d-flex align-items-center justify-content-center h-100">
        <div class="col-lg-4">
          <div class="products_content_box">
            <div class="sub_heading">
              <div class="product_span">
                <span class="sec_span_title">Products</span>
              </div>
              <img src="assets/image/line.png" style="max-width: 100px" class="span_line" />
              <div class="products_head">
                <h2 class="sec_head_title">
                  Innovation Unleashed: Discover Our Product
                </h2>
              </div>
            </div>
            <div class="btn_design">
              <a href="products.php" class="theme_btn1">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="product_slider">
            <!-- prime -->
            <div>
              <div class="product_box">
                <div class="product_image">
                  <img data-aos="flip-up" data-aos-delay="500" src="assets/image/product-pages/prime/FBI01_4.jpg"
                    alt="" />
                </div>
                <div class="products_content">
                  <div class="product_head">
                    <h5>Prime</h5>
                  </div>
                  <div class="product_para">
                    <p>
                      Acoustic Tile
                    </p>
                  </div>
                  <div class="design_btn">
                    <a href="prime.php" class="theme_btn_2">View More <i class="fa-solid fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- FAB -->
            <div>
              <div class="product_box">
                <div class="product_image">
                  <img data-aos="flip-up" data-aos-delay="700" src="assets/image/product-pages/Fab/1.jpg" alt="" />
                </div>
                <div class="products_content">
                  <div class="product_head">
                    <h5>FAB</h5>
                  </div>
                  <div class="product_para">
                    <p>
                      Fabric Acoustic Board
                    </p>
                  </div>
                  <div class="design_btn">
                    <a href="fab.php" class="theme_btn_2">View More <i class="fa-solid fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Fabrico -->
            <div>
              <div class="product_box">
                <div class="product_image">
                  <img data-aos="flip-up" data-aos-delay="1000" src="assets/image/product-pages/Fabrico/1.jpg" alt="" />
                </div>
                <div class="products_content">
                  <div class="product_head">
                    <h5>Fabrico</h5>
                  </div>
                  <div class="product_para">
                    <p>
                      Acoustic Panel
                    </p>
                  </div>
                  <div class="design_btn">
                    <a href="fabrico.php" class="theme_btn_2">View More <i class="fa-solid fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- effusio wool -->
            <div>
              <div class="product_box">
                <div class="product_image">
                  <img src="assets/image/product-pages/Effusio/1.jpg" alt="" />
                </div>
                <div class="products_content">
                  <div class="product_head">
                    <h5>Effusio wool</h5>
                  </div>
                  <div class="product_para">
                    <p>
                      Sound Absorption Wool
                    </p>
                  </div>
                  <div class="design_btn">
                    <a href="effusio-wool.php" class="theme_btn_2">View More <i class="fa-solid fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Natural -->
            <div>
              <div class="product_box">
                <div class="product_image">
                  <img src="assets/image/product-pages/natural/1.jpg" alt="" />
                </div>
                <div class="products_content">
                  <div class="product_head">
                    <h5>Natural</h5>
                  </div>
                  <div class="product_para">
                    <p>
                      Wood Wool Board
                    </p>
                  </div>
                  <div class="design_btn">
                    <a href="natural.php" class="theme_btn_2">View More <i class="fa-solid fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- microfibre -->
            <div>
              <div class="product_box">
                <div class="product_image">
                  <img src="assets/image/product-pages/microfibre/FBI01_3.jpg" alt="" />
                </div>
                <div class="products_content">
                  <div class="product_head">
                    <h5>Microfibre</h5>
                  </div>
                  <div class="product_para">
                    <p>
                      Fibre Board
                    </p>
                  </div>
                  <div class="design_btn">
                    <a href="microfibre.php" class="theme_btn_2">View More <i class="fa-solid fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <!-- striaco -->
            <div>
              <div class="product_box">
                <div class="product_image">
                  <img src="assets/image/product-pages/Striaco/1.jpg" alt="" />
                </div>
                <div class="products_content">
                  <div class="product_head">
                    <h5>Striaco</h5>
                  </div>
                  <div class="product_para">
                    <p>
                      Wooden Groove Acoustic Panel
                    </p>
                  </div>
                  <div class="design_btn">
                    <a href="striaco.php" class="theme_btn_2">View More <i class="fa-solid fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- swathe -->
            <div>
              <div class="product_box">
                <div class="product_image">
                  <img src="assets/image/product-pages/Swathe/1.jpg" alt="" />
                </div>
                <div class="products_content">
                  <div class="product_head">
                    <h5>Swathe</h5>
                  </div>
                  <div class="product_para">
                    <p>
                      Fabric Acoustic Panel
                    </p>
                  </div>
                  <div class="design_btn">
                    <a href="swathe.php" class="theme_btn_2">View More <i class="fa-solid fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- polyaco -->
            <div>
              <div class="product_box">
                <div class="product_image">
                  <img src="assets/image/product-pages/polyaco/1.jpg" alt="" />
                </div>
                <div class="products_content">
                  <div class="product_head">
                    <h5>Polyaco</h5>
                  </div>
                  <div class="product_para">
                    <p>
                      Acoustic Board
                    </p>
                  </div>
                  <div class="design_btn">
                    <a href="polyaco.php" class="theme_btn_2">View More <i class="fa-solid fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- features section -->
  <section class="section feature">
    <div class="container">
      <div class="heading">
        <span class="sec_span">Features</span>
        <img src="assets/image/line.png" style="max-width: 100px" class="span_line" />
        <h2 class="sec_head">Features of Acoustics</h2>
      </div>
      <div class="row mt-5 centerit">
        <div class="col-lg-4 gap-vertical">
          <div class="feature-card">
            <div class="feature_box_service">
              <img src="assets/image/icons/space.png" alt="" />
              <h4>Huge Space</h4>
            </div>
            <div class="feature_para">
              <p>
                Auditoriums, Multiplex & Cinema, Restaurants & Hotels, Lobby
                Areas, Multi-Purpose Halls, Pubs & Lounge
              </p>
            </div>
          </div>
          <div class="feature-card">
            <div class="feature_box_service">
              <img src="assets/image/icons/customized.png" alt="" />
              <h4>Customized Offering</h4>
            </div>
            <div class="feature_para">
              <p>
                We also offer a customized planned interior with your
                requirement.
              </p>
            </div>
          </div>
          <div class="feature-card">
            <div class="feature_box_service">
              <img src="assets/image/icons/industry.png" alt="" />
              <h4>Industrial Works</h4>
            </div>
            <div class="feature_para">
              <p>
                Industrial Areas, Road noise barriers. Building Facades .Noise
                barriers are generally seen to be an effective .
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="feature_image">
            <img data-aos="zoom-in-up" src="assets/image/feature-acoustic.jpg" alt="" />
          </div>
        </div>
        <div class="col-lg-4 gap-vertical mt-4">
          <div class="feature-card">
            <div class="feature_box_service">
              <img src="assets/image/icons/studios.png" alt="" />
              <h4>Studios</h4>
            </div>
            <div class="feature_para">
              <p>
                Dance and Music Studio, Broadcast Stations, TV stations, FM &
                Radio Stations, Recording Studio, Mixing Room, Jam Room, Home
                Theatre
              </p>
            </div>
          </div>
          <div class="feature-card">
            <div class="feature_box_service">
              <img src="assets/image/icons/educational.png" alt="" />
              <h4>Educational Institutions</h4>
            </div>
            <div class="feature_para">
              <p>
                Auditoriums, Indoor Sports, Mass Media Room, Training Room,
                Audio Video Room, Classroom
              </p>
            </div>
          </div>
          <div class="feature-card">
            <div class="feature_box_service">
              <img src="assets/image/icons/commercial.png" alt="" />
              <h4>Commerical Office</h4>
            </div>
            <div class="feature_para">
              <p>
                Reception Area, Assembly Area, Commercial Spaces, Call
                Centres, acoustic office partitions, Classrooms, Hospitals,
                Conference Room.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- clientele section -->
  <section class="section clientele">
    <div class="container">
      <div class="row d-flex align-items-center justify-content-center h-100">
        <div class="col-lg-4">
          <div class="clientele_content">
            <div class="sub_heading">
              <div class="clientele_span">
                <span class="sec_span_title">Clientele</span>
              </div>
              <img src="assets/image/line.png" style="max-width: 100px" class="span_line" />
              <div class="clientele_head">
                <h2 class="sec_head_title">Our Trusted Clients Over World</h2>
              </div>
            </div>
            <div class="clientele_para">
              <p>
                We have 200+ Brands as our Proud Clients over the World and
                Still We are Adding more.
              </p>
            </div>
            <div class="btn_design">
              <a href="clientele.php" class="theme_btn1"> Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-lg-3 col-md-3 col-4">
              <div class="clientele_image my-3">
                <img src="assets/image/clientele/client-12.jpg" alt="" />
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-4">
              <div class="clientele_image my-3">
                <img src="assets/image/clientele/client-13.jpg" alt="" />
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-4">
              <div class="clientele_image my-3">
                <img src="assets/image/clientele/client-14.jpg" alt="" />
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-4">
              <div class="clientele_image my-3">
                <img src="assets/image/clientele/client-15.jpg" alt="" />
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-4">
              <div class="clientele_image my-3">
                <img src="assets/image/clientele/client-16.jpg" alt="" />
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-4">
              <div class="clientele_image my-3">
                <img src="assets/image/clientele/client-17.jpg" alt="" />
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-4">
              <div class="clientele_image my-3">
                <img src="assets/image/clientele/client-18.jpg" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- pleasure section -->
  <section class="section pleasure">
    <div class="container">
      <div class="pleasure_section">
        <div class="row d-flex align-items-end justify-content-center h-100">
          <div class="col-lg-8">
            <div class="pleasure_content">
              <div class="pleasure-head">
                <h2 class="sec_head_title">
                  Precision Crafted Wall Panels: Quality Solutions for Every Space.
                </h2>
              </div>
              <div class="pleasure_para">
                <p>
                  Reach out to us for expert advice and custom acoustic solutions tailored to your needs. </p>
              </div>
              <div class="pleasure_btn">
                <a href="contact.php" class="theme_btn1">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="pleasure_image">
              <img src="assets/image/cta-pic.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include('./components/footer.php'); ?>
  <?php include('./components/scripts.php'); ?>
</body>

</html>