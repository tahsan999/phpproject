    <?php require 'f_header.php' ?>
     <!-- Portfolio start -->
    <section class="section mt-5" id="portfolio" data-aos="fade-up">
      <div class="container mt-5">
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

      <div class="container">
        <div class="row">
          <?php foreach($select_portfolio_res as $portfolio){ ?>
            <div class="col-lg-4 mb-4">
                <div class="item">
                    <div class="portfolio-item position-relative">
                      <img src="uploads/portfolio/<?=$portfolio['photo']?>" alt="" class="img-fluid" />
                    </div>
                    <div class="text mt-3">
                        <h4 class="mb-1 text-capitalize"><?=$portfolio['title']?></h4>
                    </div>
                </div>
            </div>
            <?php } ?>
          </div>
      </div>
    </section>
    <!-- Portfolio End -->

    <?php require 'f_footer.php' ?>