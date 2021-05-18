<template>
      <section id="contact" class="contact">
      <div class="container letra ">
           <div class="section-title" data-aos="fade-up">
          <h2>Contactanos</h2>
          <p >Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
               <div class="row no-gutters justify-content-center" data-aos="fade-up">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Dirección:</h4>
                <p>Padre Kreusser entre Independencia y Honorio Gonzalez</p>
              </div>

              <div class="email mt-4">
                 <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>armvpropiedades@gmail.com</p>
              </div>

              <div class="phone mt-4">
                <i class="bi bi-phone"></i>
                <h4>Telefono:</h4>
                <p>071205623</p>
              </div>

            </div>

          </div>

          <div class="col-lg-5 d-flex align-items-stretch">
            <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3544.2107377208854!2d-55.86248158494593!3d-27.33787938294639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2spy!4v1621299126922!5m2!1ses-419!2spy" frameborder="0" allowfullscreen></iframe>
          </div>

        </div>

        <div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-10">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Escribe tu nombre" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Escribe tu Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Mensaje" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar mensaje</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>
</template>
<script>
export default {
  name:'AboutUs'
}
</script>
