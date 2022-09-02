<?php 
    //Include scripts
    require_once __DIR__ . '/../../includes/processor/index-processor.php';

    //Get Company details from database
    $company = get_company_info($conn);
    $company_link = get_company_links($conn);

    //set links for each social media
    $facebook = "";
    $youtube = "";
    $instagram = "";

    foreach($company_link as $link) {
      switch($link['link_name']) {
        case 'facebook':
          $facebook = $link['link'];
        case 'youtube':
          $youtube = $link['link'];
        case 'instagram':
          $instagram = $link['link'];
        default: break;
      }
    }
?>
<footer class="text-center text-lg-start text-white" style="background-color: #08B5B6">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-3 font-weight-bold">
              <?php echo $company['company_name']; ?>
            </h6>
            <p><?php echo $company['company_mission']; ?></p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-3 font-weight-bold">Partner of</h6>
            <p class="text-white"> Rainbow Vacuum Cleaner - Philippines</p>
            <p class="text-white"> Thermostar Dry Steam System - Philippines</p>
            <p class="text-white"> Doulos Cleaning Services</p>
          </div>

          <!-- Grid column -->
          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-3 font-weight-bold">Contact</h6>
            <p><i class="bi bi-house-fill mr-3"></i> <?php echo $company['address']; ?></p>
            <p><i class="bi bi-envelope-fill mr-3"></i> <?php echo $company['email']; ?></p>
            <p><i class="bi bi-phone-fill mr-3"></i> <?php echo $company['phone_no']; ?></p>
            <p><i class="bi bi-telephone-fill mr-3"></i> <?php echo $company['tel_no']; ?></p>
          </div>

          <!-- Grid column -->
          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-3 font-weight-bold">Follow us</h6>

            <!-- Facebook -->
            <a
              class="btn btn-primary btn-circle btn-md"
              style="background-color: #3b5998"
              href="<?php echo $facebook; ?>"
              target="_blank" 
              rel="noopener"
              role="button">
              <i class="bi bi-facebook"></i>
            </a>

            <!-- Youtube -->
            <a
              class="btn btn-primary btn-circle btn-md"
              style="background-color: #dd4b39"
              href="<?php echo $youtube; ?>"
              target="_blank" 
              rel="noopener"
              role="button"><i class="bi bi-youtube"></i>
            </a>

            <!-- Instagram -->
            <a
              class="btn btn-primary btn-circle btn-md"
              style="background-color: #E4405F"
              href="<?php echo $instagram; ?>"
              target="_blank" 
              rel="noopener"
              role="button">
              <i class="bi bi-instagram"></i>
            </a>
          </div>
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3 mt-3" style="background-color: #02ABAB">
      © 2020 <?php echo $company['company_name']; ?> - All Rights Reserved
    </div>
    <!-- Copyright -->
  </footer>