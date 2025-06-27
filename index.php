    <?php require 'f_header.php' ?>
    <!-- Banner start -->

    <!-- Slider Start -->
    <section class="slider py-7">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 col-sm-12 col-12 col-md-5">
            <div class="slider-img position-relative">
              <img src="uploads/about/<?= $about_assoc_abouts['photo']?>" alt="" class="img-fluid w-100" />
            </div>
          </div>

          <div class="col-lg-6 col-12 col-md-7">
            <div class="ml-5 position-relative mt-5 mt-lg-0">
              <h1 class="font-weight-normal text-color text-md">
                <i class="ti-minus mr-2"></i><?= $about_assoc_abouts['title']?>
              </h1>
              <h2 class="mt-3 text-lg mb-3 text-capitalize">
                <?= $about_assoc_abouts['name']?>
              </h2>
              <p class="animated fadeInUp lead mt-4 mb-5 text-white-50 lh-35">
                <?= $about_assoc_abouts['desp']?>
              </p>
              <a href="#about" class="btn btn-solid-border">About Me</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Banner End -->

    <!-- Service start -->
    <section class="section bg-gray" id="service" data-aos="fade-up">
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
          <?php foreach($select_service_res1 as $service){ ?>
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
        <div class="row mt-5">
          <div class="col-lg-12 text-center">
            <a href="service.php" class="btn btn-solid-border">More Services</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Service End -->

    <!-- Portfolio start -->
    <section class="section" id="portfolio" data-aos="fade-up">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="section-title text-center">
              <span
                class="text-color mb-0 text-uppercase letter-spacing text-sm"
                ><i class="ti-minus"></i>works</span
              >
              <h2 class="title">Portfolio</h2>
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row">
          <div class="post_gallery owl-carousel owl-theme">
            <?php foreach($select_portfolio_res as $portfolio){ ?>
            <div class="item">
              <div class="portfolio-item position-relative">
                <img src="uploads/portfolio/<?=$portfolio['photo']?>" alt="" class="img-fluid" />
              </div>
              <div class="text mt-3">
                <h3><?=$portfolio['title']?></h3>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-lg-12 text-center">
            <a href="#about" class="btn btn-solid-border">More Portfolios</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Portfolio End -->



    <?php require 'f_footer.php' ?>