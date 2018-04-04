<!-- Newsletter Signup Call to Action -->
<section class="page-section signup-form bg-inverse text-white">
  <div class="container text-center">
    <h3 class="m0">Suscribete o Contactanos a nuestro servicio!</h3>
    <hr class="colored">
    <div class="row">
      <div class="col-lg-8 mx-auto">

        <!-- MailChimp Signup Form -->
        <div class="example gc3">

          <!-- Popup with form -->
          <div class="html-code">

            <!-- link that opens popup -->
            <a class="popup-with-form" href="#contact-form">
              <button class="btn btn-primary">Contactanos!</button>
            </a>
            <a class="popup-with-form" href="#subscribe-form">
              <button class="btn btn-primary">Suscribete!</button>
            </a>

            <!-- form itself -->
            <form id="contact-form" class="white-popup-block mfp-hide">
              <div class="form-group">
                <input type="email" name="EMAIL" class="form-control" placeholder="Email address...">
              </div>
              <div class="form-group">
                <textarea class="form-control" id="mce-responses" placeholder="Cuentanos" rows="3"></textarea>
              </div>
              <button type="submit" name="subscribe" id="mc-embedded-subscribe" class="btn btn-tertiary">Enviar</button>
            </form>

          </div>

        </div>

          <!-- Replace the form action in the line below with your MailChimp embed action! Visit the documentation for additional instructions! -->

        <form id="subscribe-form" class="white-popup-block mfp-hide signup-form">
          <div class="input-group input-group-lg">
            <input type="email" name="EMAIL" class="form-control" id="mce-EMAIL" placeholder="Email address...">
            <span class="input-group-btn">
              <button type="submit" name="subscribe" id="mc-embedded-subscribe" class="btn btn-tertiary">Suscrirse</button>
            </span>
          </div>
          <div id="mce-responses">
            <div class="response" id="mce-error-response" style="display:none"></div>
            <div class="response" id="mce-success-response" style="display:none"></div>
          </div>
        </form>
      </div>
        <!-- End MailChimp Signup Form -->
      </div>
    </div>
  </div>
</section>
