<?php require 'f_header.php' ?>
<!-- Service start -->
    <section class="section bg-gray mt-5" id="service" data-aos="fade-up">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="section-title text-center">
              <span
                class="text-color mb-0 text-uppercase letter-spacing text-sm"
                ><i class="ti-minus mr-2"></i>What i do</span
              >
              <h2 class="title">Services</h2>
            </div>
          </div>
        </div>

        <div class="row no-gutters">
          <?php foreach($select_service_res as $service){ ?>
          <div class="col-lg-4 col-md-6">
            <div class="card p-5 rounded-0">
              <h3 class="my-4 text-capitalize"><?=$service['title']?></h3>
              <p>
                <?=$service['desp']?>
              </p>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </section>
    <!-- Service End -->
<?php require 'f_footer.php' ?>