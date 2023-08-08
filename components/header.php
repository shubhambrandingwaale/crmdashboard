<?php include 'mail.php'; ?>
<header>
  <div class="top_header">
    <div class="container">
      <div class="header_design">
        <div class="toggle_logo">
          <a href="index.php"><img src="assets/image/logo.png" alt="logo" /></a>
        </div>
        <div class="menu_design">
          <ul>
            <li><a href="index.php" class="<?php if ($page == "home") {
              echo 'active';
            } ?>">Home</a></li>
            <li><a href="about.php" class="<?php if ($page == "about") {
              echo 'active';
            } ?>">About</a></li>
            <li><a href="products.php" class="<?php if ($page == "products") {
              echo 'active';
            } ?>">Products</a></li>
            <li><a href="clientele.php" class="<?php if ($page == "clientele") {
              echo 'active';
            } ?>">Clientele</a></li>
            <li><a href="contact.php" class="<?php if ($page == "contact") {
              echo 'active';
            } ?>">Contact</a></li>
          </ul>
        </div>
        <div class="btn_design">
          <button type="button" class="theme_btn company_profile_btn">
            <a target="_blank" href="assets/brochures/company-profile.pdf" download>Company profile</a>
          </button>
        </div>
        <div class="toggle_btn">
          <i class="fa-solid fa-bars" id="open_nav"></i>
        </div>
      </div>
    </div>
  </div>
  <div class="mobile_device">
    <div class="toggle_close">
      <i class="fa-solid fa-xmark" id="close_nav"></i>
    </div>
    <div class="mobile_device_logo">
      <a href="index.php"><img src="assets/image/logo.png" alt="mobile-device-logo" /></a>
    </div>
    <div class="mobile_device_menu">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>

        <li><a href="products.php">Products</a></li>
        <!-- <li><a href="#">Projects</a></li> -->
        <li><a href="clientele.php">Clientele</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </div>
  </div>
</header>
<div class="modal fade" id="enquiryform" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Enquiry Form</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="./components/headerform.php">
          <div class="row">
            <div class="col-12">
              <div class="input-container">
                <input name="name" class="input-field" type="text" required />
                <label for="input-field" class="input-label">Name</label>
                <span class="input-highlight"></span>
              </div>
            </div>
            <div class="col-12">
              <div class="input-container">
                <input name="email" class="input-field" type="text" required />
                <label for="input-field" class="input-label">Email</label>
                <span class="input-highlight"></span>
              </div>
            </div>
            <div class="col-12">
              <div class="input-container">
                <input name="number" class="input-field" type="text" required />
                <label for="input-field" class="input-label">Phone Number</label>
                <span class="input-highlight"></span>
              </div>
            </div>
            <div class="col-12">
              <div class="input-container">
                <input name="product" class="input-field" type="text" required />
                <label for="input-field" class="input-label">Product requirement</label>
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
      <div class="modal-footer centerit">
        <button type="button" class="submitbutton" data-bs-dismiss="modal">
          Close
        </button>
      </div>
    </div>
  </div>
</div>