    <?php require 'f_header.php' ?>

    <!-- Slider Start -->
    <section class="slider py-7">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-5 col-sm-12 col-12 col-md-5">
              <div class="slider-img position-relative">
                <img src="images/about/9.jpg" alt="" class="img-fluid w-100" />
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
              </div>
            </div>
          </div>
        </div>
      </section>
    <!-- Banner End -->

      <section class="section bg-gray aos-init aos-animate" id="skillbar" data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <span class="text-color mb-0 text-uppercase letter-spacing text-sm"><i class="ti-minus mr-2"></i>Skills Set</span>
                        <h2 class="title">Expertise</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach($select_skill_res as $skill){ ?>
                <div class="col-lg-6 col-md-6">
                    <div class="skill-bar mb-4 mb-lg-0">
                        <div class="mb-4 text-right"><h4 class="font-weight-normal"><?=$skill['skill']?></h4></div>
                        <div class="progress">
                            <div class="progress-bar" data-percent="<?=$skill['percentage']?>" style="transition: width 3s; width: 95%;">
                                <span class="percent-text"><span class="count"><?=$skill['percentage']?></span><span>%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <?php require 'f_footer.php' ?>