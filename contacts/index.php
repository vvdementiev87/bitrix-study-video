<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>
    <section class="google-map p-0">
      <div id="map" style="height: 480px;"></div>
      <script src="<?= SITE_TEMPLATE_PATH; ?>/js/google-map.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
      <!-- CLICK HERE (https://developers.google.com/maps/documentation/embed/get-api-key) TO  LERAN MORE ABOUT GOOGLE MAPS API KEY -->
    </section><!-- /.GoogleMap -->

    <!-- ==========================
        contact layout 1
    =========================== -->
    <section class="contact-layout1 pb-100">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-4">
            <div class="contact-panel__info bg-gray mb-30">
              <div class="contact-panel__block">
                <h5 class="contact-panel__block__title">Our Location</h5>
                <ul class="contact-panel__block__list list-unstyled">
                  <li>2307 Beverley Rd Brooklyn, New York 11226 United States.</li>
                </ul>
              </div><!-- /.contact-panel__info__block -->
              <div class="contact-panel__block">
                <h5 class="contact-panel__block__title">Quick Contact</h5>
                <ul class="contact-panel__block__list list-unstyled">
                  <li><a href="mailto:Amarou@7oroof.com"></a>Email: Amarou@7oroof.com</li>
                  <li><a href="tel:01061245741"></a>Call Us: (002) 01061245741</li>
                </ul>
              </div><!-- /.contact-panel__info__block -->
              <div class="contact-panel__block">
                <h5 class="contact-panel__block__title">Opening Hours</h5>
                <ul class="contact-panel__block__list list-unstyled">
                  <li>Monday - Friday</li>
                  <li>09:00 AM - 06:00 PM</li>
                </ul>
              </div><!-- /.contact-panel__info__block -->
              <a href="contacs.html" class="btn btn__primary btn__block">
                <i class="icon-arrow-right"></i><span>Request A Quote</span>
              </a>
            </div>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-7 offset-lg-1">
            <form method="post" action="<?= SITE_TEMPLATE_PATH; ?>/php/contact.php" id="contactForm" class="contact-panel__form mb-30">
              <div class="row">
                <div class="col-sm-12">
                  <h4 class="contact-panel__title">Get In Touch</h4>
                  <p class="contact-panel__desc mb-40">Complete control over products allows us to ensure our
                    customers receive the best quality prices and service. We take great pride in everything that we
                    do in our factory.</p>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Name" id="contact-name" name="contact-name"
                      required>
                  </div>
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" id="contact-email" name="contact-email"
                      required>
                  </div>
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Phone" id="contact-Phone" name="contact-phone"
                      required>
                  </div>
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Website" id="contact-subject"
                      name="contact-subject" required>
                  </div>
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group">
                    <textarea class="form-control" placeholder="Additional Details!" id="contact-messgae"
                      name="contact-messgae" required></textarea>
                  </div>
                </div><!-- /.col-lg-12 -->
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <button type="submit" class="btn btn__secondary btn__lg">
                    <i class="icon-arrow-right"></i><span>Submit Request</span>
                  </button>
                  <div class="contact-result"></div>
                </div><!-- /.col-lg-12 -->
              </div><!-- /.row -->
            </form>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.contact layout 1 -->

	<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>