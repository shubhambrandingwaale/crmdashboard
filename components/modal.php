<div class="modal fade" id="productpopup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">
          Product Enquiry Form
        </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post">
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
                <input name="email" class="input-field" type="email" required />
                <label for="input-field" class="input-label">Email</label>
                <span class="input-highlight"></span>
              </div>
            </div>
            <div class="col-12">
              <div class="input-container">
                <input name="number" class="input-field" type="tel" required />
                <label for="input-field" class="input-label">Phone Number</label>
                <span class="input-highlight"></span>
              </div>
            </div>
            <div class="col-12">
              <div class="input-container">
                <input readonly name="product" value="<?php echo $product; ?>" class="input-field disabled-input"
                  type="text" />
                <label for="input-field" class="input-label"></label>
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