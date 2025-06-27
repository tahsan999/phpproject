    <?php require 'f_header.php' ?>
     <!-- Contact start -->
    <section class="section mt-5" id="contact" data-aos="fade-up">
      <div class="container mt-5">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="section-title text-center">
              <span
                class="text-color mb-0 text-uppercase letter-spacing text-sm"
              >
                <i class="ti-minus mr-2"></i>Contact</span
              >
              <h1 class="title">Get in Touch</h1>
            </div>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-8">
            <form
              class="contact__form form-row contact-form"
              method="post"
              action="/php/message/message_post.php"
            >
              <div class="row">
                <div class="col-12">
                  
                </div>
              </div>
              <div class="form-group col-lg-6 mb-5">
                <input
                  type="text"
                  id="name"
                  name="name"
                  class="form-control bg-transparent"
                  placeholder="Your Name"
                />
              </div>
              <div class="form-group col-lg-6 mb-5">
                <input
                  type="text"
                  name="email"
                  id="email"
                  class="form-control bg-transparent"
                  placeholder="Your Email"
                />
              </div>
              <div class="form-group col-lg-12 mb-5">
                <input
                  type="text"
                  name="subject"
                  id="subject"
                  class="form-control bg-transparent"
                  placeholder="Your Subject"
                />
              </div>

              <div class="form-group col-lg-12 mb-5">
                <textarea
                  id="message"
                  name="message"
                  cols="30"
                  rows="6"
                  class="form-control bg-transparent"
                  placeholder="Your Message"
                ></textarea>

                <div class="text-center">
                  <input
                    class="btn btn-main text-white mt-5"
                    id="submit"
                    name="submit"
                    type="submit"
                    class="btn btn-hero"
                    value="Send Message"
                  />
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact End -->
    <?php require 'f_footer.php' ?>

    <?php if(isset($_SESSION['message'])){ ?>
      <script>
        Swal.fire({
            position: "bottom-end",
            icon: "success",
            title: "<?=$_SESSION['message']?>",
            showConfirmButton: false,
            timer: 1500
        });
      </script>
    <?php } unset($_SESSION['message'])?>